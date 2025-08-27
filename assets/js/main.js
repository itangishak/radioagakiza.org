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

  // Audio player logic
  const audio = $('#liveAudio');
  const playIcon = $('.bi-play-circle');
  const pauseIcon = $('.bi-pause-circle');
  const volUp = $('.bi-volume-up');
  const volMute = $('.bi-volume-mute');

  // Config: set your stream URL here or via window.STREAM_URL
  const STREAM_URL = window.STREAM_URL || 'https://cast6.asurahosting.com/proxy/radioaga/stream';
  
  if (audio && STREAM_URL) {
    audio.src = STREAM_URL;
    audio.crossOrigin = 'anonymous';
  }

  function play() {
    if (!audio) {
      console.error('Audio element not found');
      return;
    }
    if (!audio.src) {
      console.error('No stream URL configured');
      return;
    }
    
    console.log('Attempting to play audio from:', audio.src);
    
    audio.play().then(() => {
      console.log('Audio started playing');
      if (playIcon) playIcon.style.display = 'none';
      if (pauseIcon) pauseIcon.style.display = 'inline-block';
    }).catch((error) => {
      console.error('Audio play failed:', error);
      alert('Unable to play radio stream. Please check your internet connection.');
    });
  }
  
  function pause() {
    if (!audio) return;
    
    audio.pause();
    console.log('Audio paused');
    if (pauseIcon) pauseIcon.style.display = 'none';
    if (playIcon) playIcon.style.display = 'inline-block';
  }

  function toggleMute() {
    if (!audio) return;
    
    audio.muted = !audio.muted;
    
    if (audio.muted) {
      if (volUp) volUp.style.display = 'none';
      if (volMute) volMute.style.display = 'inline-block';
    } else {
      if (volMute) volMute.style.display = 'none';
      if (volUp) volUp.style.display = 'inline-block';
    }
  }

  // Event listeners
  if (playIcon) playIcon.addEventListener('click', play);
  if (pauseIcon) pauseIcon.addEventListener('click', pause);
  if (volUp) volUp.addEventListener('click', toggleMute);
  if (volMute) volMute.addEventListener('click', toggleMute);

  // Audio event listeners for debugging
  if (audio) {
    audio.addEventListener('loadstart', () => console.log('Audio loading started'));
    audio.addEventListener('canplay', () => console.log('Audio can start playing'));
    audio.addEventListener('playing', () => console.log('Audio is playing'));
    audio.addEventListener('pause', () => console.log('Audio paused'));
    audio.addEventListener('error', (e) => console.error('Audio error:', e));
  }

  // Initialize volume controls visibility
  if (volMute) volMute.style.display = 'none';
  if (volUp) volUp.style.display = 'inline-block';
  
})();