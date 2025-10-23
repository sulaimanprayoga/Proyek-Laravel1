<header class="site-header" role="banner">
  <div class="topbar">
    <div class="container">

      {{-- Brand / Logo --}}
      <a class="brand" href="{{ route('home') }}" aria-label="Klug Home">
        {{-- Pakai logo svg/png jika ada. Hilangkan <img> jika hanya teks. --}}
        <img src="{{ asset('images/inaklug.png') }}" alt="" onerror="this.style.display='none'">
        <span>Inaklug</span>
      </a>

      {{-- Toggle (muncul di mobile) --}}
      <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Buka menu">
        &#9776;
      </button>


      {{-- Navigation --}}
      <nav id="primary-nav" class="nav" role="navigation">
        <ul>
          <li><a href="{{ route('home') }}"        class="{{ request()->routeIs('home')     ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}"       class="{{ request()->routeIs('about')    ? 'active' : '' }}">Tentang Kami</a></li>
          <li><a href="{{ route('services') }}"    class="{{ request()->routeIs('services') ? 'active' : '' }}">Layanan Kami</a></li>
          <li><a href="{{ route('articles') }}"    class="{{ request()->routeIs('articles') ? 'active' : '' }}">Artikel</a></li>
          <li><a href="{{ route('contact') }}"     class="{{ request()->routeIs('contact')  ? 'active' : '' }}">Hubungi Kami</a></li>
        </ul>
      </nav>

      {{-- Search --}}
      <form class="search" action="{{ route('search') }}" method="get" role="search">
        <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path fill="currentColor"
            d="M15.5 14h-.79l-.28-.27A6.5 6.5 0 1 0 9.5 16a6.47 6.47 0 0 0 4.23-1.57l.27.28v.79l4.25 4.25 1.49-1.49L15.5 14zM9.5 14A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/>
        </svg>
        <input type="text" name="q" placeholder="Ketik pencarian" value="{{ request('q') }}">
      </form>

      {{-- CTA --}}
      <a href="#" class="cta">DAFTAR ON-LINE</a>

    </div>
  </div>
</header>
