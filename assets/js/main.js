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
    if (bar) bar.classList.remove('showBar');
    if (bar) bar.classList.add('hiddenBar');
    if (closeBtn) closeBtn.classList.add('showBar');
    if (closeBtn) closeBtn.classList.remove('hiddenBar');
    sidebarLinks.forEach((el) => (el.style.display = 'block'));
  }
  function hideSidebar() {
    if (closeBtn) closeBtn.classList.remove('showBar');
    if (closeBtn) closeBtn.classList.add('hiddenBar');
    if (bar) bar.classList.add('showBar');
    if (bar) bar.classList.remove('hiddenBar');
    sidebarLinks.forEach((el) => (el.style.display = 'none'));
  }
  if (bar) bar.addEventListener('click', showSidebar);
  if (closeBtn) closeBtn.addEventListener('click', hideSidebar);

  // Dates
  const dateSpan = $('#currentDate');
  if (dateSpan) {
    const now = new Date();
    const fmt = new Intl.DateTimeFormat('fr-FR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
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
  const STREAM_URL = window.STREAM_URL || '';
  if (audio && STREAM_URL) {
    audio.src = STREAM_URL;
  }

  function play() {
    if (!audio) return;
    if (!audio.src) return; // no stream configured
    audio.play().then(() => {
      if (playIcon) playIcon.style.display = 'none';
      if (pauseIcon) pauseIcon.style.display = 'inline-block';
    }).catch(console.warn);
  }
  function pause() {
    if (!audio) return;
    audio.pause();
    if (pauseIcon) pauseIcon.style.display = 'none';
    if (playIcon) playIcon.style.display = 'inline-block';
  }

  if (playIcon) playIcon.addEventListener('click', play);
  if (pauseIcon) pauseIcon.addEventListener('click', pause);

  if (volMute) volMute.addEventListener('click', () => { if (audio) audio.muted = true; });
  if (volUp) volUp.addEventListener('click', () => { if (audio) audio.muted = false; });
})();
