import './bootstrap';
// toggle menu mobile
const navToggle = document.querySelector('.nav-toggle');
if (navToggle) {
  // tampilkan tombol hanya saat CSS mobile aktif (opsional)
  const showToggle = () => {
    navToggle.style.display = window.matchMedia('(max-width: 980px)').matches ? 'block' : 'none';
  };
  showToggle(); window.addEventListener('resize', showToggle);

  navToggle.addEventListener('click', () => {
    const nav = document.getElementById('primary-nav');
    nav.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', nav.classList.contains('open'));
  });
}