// Modern Radio Agakiza Website JavaScript
(function () {
  'use strict';

  // Enhanced query helpers
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

  // Smooth scroll behavior for anchor links
  function initSmoothScroll() {
    $$('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  // Enhanced header effects
  function initHeaderEffects() {
    const header = $('.header');
    if (!header) return;

    // Add scroll effect to header
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', () => {
      const currentScrollY = window.scrollY;
      
      if (currentScrollY > 100) {
        header.style.backdropFilter = 'blur(20px)';
        header.style.background = 'rgba(15, 23, 42, 0.95)';
      } else {
        header.style.backdropFilter = 'blur(10px)';
        header.style.background = '';
      }
      
      lastScrollY = currentScrollY;
    });

    // Remove border from first top navigation link
    const headerTopLinks = $$('.header-top-right a');
    if (headerTopLinks.length > 0) {
      headerTopLinks[0].style.borderLeft = 'none';
    }
  }

  // Enhanced sidebar functionality
  function initSidebar() {
    const bar = $('#bar');
    const closeBtn = $('#close');
    const sidebarLinks = $('.sidebarLinks');
    const sidebarWrapper = $('#sidebarWrapper');

    function showSidebar() {
      if (bar) {
        bar.classList.remove('showBar');
        bar.classList.add('hiddenBar');
      }
      if (closeBtn) {
        closeBtn.classList.add('showBar');
        closeBtn.classList.remove('hiddenBar');
      }
      if (sidebarLinks) {
        sidebarLinks.style.display = 'block';
        // Add animation
        setTimeout(() => {
          sidebarLinks.style.opacity = '1';
          sidebarLinks.style.transform = 'translateX(0)';
        }, 10);
      }
    }

    function hideSidebar() {
      if (sidebarLinks) {
        sidebarLinks.style.opacity = '0';
        sidebarLinks.style.transform = 'translateX(100%)';
        setTimeout(() => {
          sidebarLinks.style.display = 'none';
        }, 300);
      }
      if (closeBtn) {
        closeBtn.classList.remove('showBar');
        closeBtn.classList.add('hiddenBar');
      }
      if (bar) {
        bar.classList.add('showBar');
        bar.classList.remove('hiddenBar');
      }
    }

    // Initialize sidebar styles
    if (sidebarLinks) {
      sidebarLinks.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
      sidebarLinks.style.transform = 'translateX(100%)';
      sidebarLinks.style.opacity = '0';
    }

    if (bar) bar.addEventListener('click', showSidebar);
    if (closeBtn) closeBtn.addEventListener('click', hideSidebar);

    // Close sidebar when clicking outside
    document.addEventListener('click', (e) => {
      if (sidebarLinks && sidebarLinks.style.display === 'block') {
        if (!sidebarWrapper?.contains(e.target)) {
          hideSidebar();
        }
      }
    });
  }

  // Enhanced date formatting
  function initDates() {
    const dateSpan = $('#currentDate');
    if (dateSpan) {
      const now = new Date();
      const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric',
        timeZone: 'Africa/Bujumbura'
      };
      const formatter = new Intl.DateTimeFormatter('fr-FR', options);
      dateSpan.textContent = ' ' + formatter.format(now);
    }

    const footerYear = $('#currentDateF');
    if (footerYear) {
      footerYear.textContent = new Date().getFullYear();
    }
  }

  // Enhanced audio player with visual feedback
  function initAudioPlayer() {
    const audio = $('#liveAudio');
    const playIcon = $('.bi-play-circle');
    const pauseIcon = $('.bi-pause-circle');
    const volUp = $('.bi-volume-up');
    const volMute = $('.bi-volume-mute');
    const playRadioContainer = $('#playradio');

    // Stream configuration
    const STREAM_URL = window.STREAM_URL || '';
    if (audio && STREAM_URL) {
      audio.src = STREAM_URL;
      audio.preload = 'none';
    }

    // Add loading state
    function setLoadingState(isLoading) {
      if (playRadioContainer) {
        if (isLoading) {
          playRadioContainer.style.opacity = '0.7';
          playRadioContainer.style.pointerEvents = 'none';
        } else {
          playRadioContainer.style.opacity = '1';
          playRadioContainer.style.pointerEvents = 'auto';
        }
      }
    }

    function play() {
      if (!audio || !audio.src) return;
      
      setLoadingState(true);
      
      audio.play().then(() => {
        if (playIcon) playIcon.style.display = 'none';
        if (pauseIcon) pauseIcon.style.display = 'inline-block';
        setLoadingState(false);
        
        // Add visual feedback
        if (playRadioContainer) {
          playRadioContainer.classList.add('playing');
        }
      }).catch((error) => {
        console.warn('Audio play failed:', error);
        setLoadingState(false);
      });
    }

    function pause() {
      if (!audio) return;
      
      audio.pause();
      if (pauseIcon) pauseIcon.style.display = 'none';
      if (playIcon) playIcon.style.display = 'inline-block';
      
      // Remove visual feedback
      if (playRadioContainer) {
        playRadioContainer.classList.remove('playing');
      }
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

    // Audio event listeners for better UX
    if (audio) {
      audio.addEventListener('loadstart', () => setLoadingState(true));
      audio.addEventListener('canplay', () => setLoadingState(false));
      audio.addEventListener('error', () => {
        setLoadingState(false);
        console.error('Audio loading error');
      });
    }
  }

  // Intersection Observer for animations
  function initScrollAnimations() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
        }
      });
    }, observerOptions);

    // Observe article cards
    $$('.article-card').forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(30px)';
      card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      observer.observe(card);
    });

    // Observe schedule items
    $$('.show').forEach(show => {
      show.style.opacity = '0';
      show.style.transform = 'translateX(-30px)';
      show.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      observer.observe(show);
    });
  }

  // Add CSS for animations
  function addAnimationStyles() {
    const style = document.createElement('style');
    style.textContent = `
      .animate-in {
        opacity: 1 !important;
        transform: translate(0) !important;
      }
      
      #playradio.playing {
        animation: playingPulse 2s infinite;
      }
      
      @keyframes playingPulse {
        0%, 100% { box-shadow: var(--shadow-lg); }
        50% { box-shadow: 0 0 30px rgba(16, 185, 129, 0.4); }
      }
      
      .article-card:nth-child(2) { transition-delay: 0.1s; }
      .article-card:nth-child(3) { transition-delay: 0.2s; }
      .show:nth-child(2) { transition-delay: 0.1s; }
      .show:nth-child(3) { transition-delay: 0.2s; }
    `;
    document.head.appendChild(style);
  }

  // Performance optimization: debounce scroll events
  function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }

  // Initialize everything when DOM is ready
  function init() {
    initHeaderEffects();
    initSidebar();
    initDates();
    initAudioPlayer();
    initSmoothScroll();
    initScrollAnimations();
    addAnimationStyles();
  }

  // Start when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();