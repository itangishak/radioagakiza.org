// Main site JS: header tweaks, sidebar toggle, audio player, dates
(function () {
  // Safe query helpers
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

  // Header: remove left border on first top link
  const headerTopLinks = $$('.header-top-right a');
  if (headerTopLinks.length > 0) {
    headerTopLinks[0].style.border = 'none';
  }

  // Sidebar toggle (mobile)
  const bar = $('#bar');
  const closeBtn = $('#close');
  const sidebarLinks = $$('.sidebarLinks');
  
  function showSidebar() {
    if (bar) {
      bar.classList.remove('showBar');
      bar.classList.add('hiddenBar');
    }
    if (closeBtn) {
      closeBtn.classList.add('showBar');
      closeBtn.classList.remove('hiddenBar');
    }
    sidebarLinks.forEach((el) => (el.style.display = 'block'));
  }
  
  function hideSidebar() {
    if (closeBtn) {
      closeBtn.classList.remove('showBar');
      closeBtn.classList.add('hiddenBar');
    }
    if (bar) {
      bar.classList.add('showBar');
      bar.classList.remove('hiddenBar');
    }
    sidebarLinks.forEach((el) => (el.style.display = 'none'));
  }
  
  if (bar) bar.addEventListener('click', showSidebar);
  if (closeBtn) closeBtn.addEventListener('click', hideSidebar);

  // Dates
  const dateSpan = $('#currentDate');
  if (dateSpan) {
    const now = new Date();
    const fmt = new Intl.DateTimeFormatter('fr-FR', { 
      weekday: 'long', 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric',
      timeZone: 'Africa/Bujumbura'
    });
    dateSpan.textContent = ' ' + fmt.format(now);
  }
  
  const footerYear = $('#currentDateF');
  if (footerYear) footerYear.textContent = new Date().getFullYear();

  // Audio player logic with multiple stream fallbacks
  const audio = $('#liveAudio');
  const playIcon = $('.bi-play-circle');
  const pauseIcon = $('.bi-pause-circle');
  const volUp = $('.bi-volume-up');
  const volMute = $('.bi-volume-mute');

  // Stream URLs with fallbacks
  const STREAM_URLS = window.STREAM_URLS || [
    "https://cast6.asurahosting.com/proxy/radioaga/stream",
    "https://cast6.asurahosting.com:8000/radioaga",
    "http://cast6.asurahosting.com/proxy/radioaga/stream"
  ];
  
  let currentStreamIndex = window.CURRENT_STREAM_INDEX || 0;
  let isPlaying = false;
  let playAttempts = 0;
  const maxPlayAttempts = 3;

  function setAudioSource() {
    if (audio && STREAM_URLS[currentStreamIndex]) {
      audio.src = STREAM_URLS[currentStreamIndex];
      console.log('Set audio source to:', audio.src);
    }
  }

  function tryNextStream() {
    currentStreamIndex = (currentStreamIndex + 1) % STREAM_URLS.length;
    setAudioSource();
    console.log('Trying next stream:', STREAM_URLS[currentStreamIndex]);
  }

  function showPlayButton() {
    if (playIcon) playIcon.style.display = 'inline-block';
    if (pauseIcon) pauseIcon.style.display = 'none';
    isPlaying = false;
  }

  function showPauseButton() {
    if (playIcon) playIcon.style.display = 'none';
    if (pauseIcon) pauseIcon.style.display = 'inline-block';
    isPlaying = true;
  }

  function play() {
    if (!audio) {
      console.error('Audio element not found');
      alert('Audio player not available');
      return;
    }

    if (playAttempts >= maxPlayAttempts) {
      alert('Unable to connect to radio stream. Please try again later.');
      playAttempts = 0;
      return;
    }

    if (!audio.src) {
      setAudioSource();
    }
    
    console.log('Attempting to play audio from:', audio.src);
    playAttempts++;
    
    // Reset audio element
    audio.load();
    
    const playPromise = audio.play();
    
    if (playPromise !== undefined) {
      playPromise.then(() => {
        console.log('Audio started playing successfully');
        showPauseButton();
        playAttempts = 0; // Reset attempts on success
      }).catch((error) => {
        console.error('Audio play failed:', error);
        
        if (playAttempts < maxPlayAttempts) {
          console.log('Trying next stream...');
          tryNextStream();
          setTimeout(() => play(), 1000); // Try again after 1 second
        } else {
          alert('Unable to play radio stream. Please check your internet connection or try again later.');
          showPlayButton();
          playAttempts = 0;
        }
      });
    }
  }
  
  function pause() {
    if (!audio) return;
    
    audio.pause();
    console.log('Audio paused');
    showPlayButton();
    playAttempts = 0;
  }

  function toggleMute() {
    if (!audio) return;
    
    audio.muted = !audio.muted;
    
    if (audio.muted) {
      if (volUp) volUp.style.display = 'none';
      if (volMute) volMute.style.display = 'inline-block';
      console.log('Audio muted');
    } else {
      if (volMute) volMute.style.display = 'none';
      if (volUp) volUp.style.display = 'inline-block';
      console.log('Audio unmuted');
    }
  }

  // Event listeners
  if (playIcon) playIcon.addEventListener('click', play);
  if (pauseIcon) pauseIcon.addEventListener('click', pause);
  if (volUp) volUp.addEventListener('click', toggleMute);
  if (volMute) volMute.addEventListener('click', toggleMute);

  // Audio event listeners for better handling
  if (audio) {
    audio.addEventListener('loadstart', () => {
      console.log('Audio loading started');
    });
    
    audio.addEventListener('canplay', () => {
      console.log('Audio can start playing');
    });
    
    audio.addEventListener('playing', () => {
      console.log('Audio is playing');
      showPauseButton();
    });
    
    audio.addEventListener('pause', () => {
      console.log('Audio paused');
      showPlayButton();
    });
    
    audio.addEventListener('ended', () => {
      console.log('Audio ended');
      showPlayButton();
    });
    
    audio.addEventListener('error', (e) => {
      console.error('Audio error:', e.target.error);
      if (isPlaying || playAttempts > 0) {
        console.log('Audio error occurred, trying next stream...');
        tryNextStream();
        if (playAttempts < maxPlayAttempts) {
          setTimeout(() => play(), 1000);
        } else {
          showPlayButton();
          playAttempts = 0;
        }
      }
    });

    audio.addEventListener('stalled', () => {
      console.log('Audio stalled');
    });

    audio.addEventListener('waiting', () => {
      console.log('Audio waiting for data');
    });
  }

  // Initialize audio source and volume controls
  setAudioSource();
  if (volMute) volMute.style.display = 'none';
  if (volUp) volUp.style.display = 'inline-block';

  // Make functions available globally for debugging
  window.radioPlayer = {
    play: play,
    pause: pause,
    toggleMute: toggleMute,
    tryNextStream: tryNextStream,
    getCurrentStream: () => STREAM_URLS[currentStreamIndex]
  };
  
})();

// Global test stream function (outside IIFE)
window.testStream = function() {
  const $ = (sel) => document.querySelector(sel);
  const statusEl = $('#stream-status');
  
  if (statusEl) statusEl.textContent = 'Testing...';
  
  const STREAM_URLS = window.STREAM_URLS || [
    "https://cast6.asurahosting.com/proxy/radioaga/stream",
    "https://cast6.asurahosting.com:8000/radioaga",
    "http://cast6.asurahosting.com/proxy/radioaga/stream"
  ];
  
  const currentIndex = window.CURRENT_STREAM_INDEX || 0;
  const testAudio = new Audio();
  testAudio.src = STREAM_URLS[currentIndex];
  
  console.log('Testing stream:', testAudio.src);
  
  testAudio.addEventListener('canplay', () => {
    if (statusEl) statusEl.textContent = 'Stream OK ✓';
    console.log('Stream test successful');
  });
  
  testAudio.addEventListener('error', (e) => {
    if (statusEl) statusEl.textContent = 'Stream Error ✗';
    console.error('Stream test failed:', e);
  });
  
  testAudio.addEventListener('loadstart', () => {
    console.log('Stream test: loading started');
  });
  
  testAudio.load();
};

// Auto-test stream on page load
document.addEventListener('DOMContentLoaded', () => {
  setTimeout(() => {
    if (window.testStream) {
      window.testStream();
    }
  }, 2000);
});