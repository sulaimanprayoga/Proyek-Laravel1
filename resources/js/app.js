import './bootstrap';
// toggle menu mobile
document.addEventListener('DOMContentLoaded', function () {
  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('primary-nav');

  if (!navToggle || !nav) return;

  // Tampilkan tombol hanya di ukuran <= 1024px
  const showToggle = () => {
    if (window.matchMedia('(max-width: 1024px)').matches) {
      navToggle.style.display = 'block';
    } else {
      navToggle.style.display = 'none';
      nav.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
    }
  };

  showToggle();
  window.addEventListener('resize', showToggle);

  navToggle.addEventListener('click', () => {
    nav.classList.toggle('open');
    const expanded = nav.classList.contains('open');
    navToggle.setAttribute('aria-expanded', expanded);
  });
});
