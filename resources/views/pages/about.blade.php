@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
  {{-- Hero2 Section --}}
  <section class="hero2" style="background-image:url('{{ asset('images/studytour.png') }}')">
    <div class="inner">
      <h1>TENTANG KAMI</h1>
    </div>
  </section>

  {{-- PROFIL Section --}}
  <section class="profil">
    <div class="container-profil">
      <h2>PROFIL</h2>
      <p>
        Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional
        yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para
        anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju di dunia.
      </p>
    </div>
  </section>

  {{-- ===== Visi & Misi ===== --}}
<section class="vision-mission">
  <div class="vm-wrap">
    {{-- Visi --}}
    <article class="vm-item">
      <img class="vm-img" src="{{ asset('images/visi.png') }}" alt="Visi Inaklug">
      <h3 class="vm-title">VISI</h3>
      <p class="vm-text">
        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional
        untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia
        masa depan yang tangguh, mandiri, dan profesional.
      </p>
    </article>

    {{-- Misi --}}
    <article class="vm-item">
      <img class="vm-img" src="{{ asset('images/misi.png') }}" alt="Misi Inaklug">
      <h3 class="vm-title">MISI</h3>
      <p class="vm-text">
        Memfasilitasi siswa Indonesia untuk mengeyam pendidikan di berbagai perguruan tinggi di lebih dari
        25 negara maju di dunia dengan layanan yang profesional.
      </p>
      <p class="vm-text">
        Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari berbagai
        aspek, baik aspek sosial, budaya, maupun pendidikan.
      </p>
    </article>
  </div>
</section>

{{-- ===== Tombol Layanan Kami ===== --}}
<div class="vm-btn-wrap">
  <a href="{{ route('services') }}" class="vmbtn-gradient-outline">
    LAYANAN KAMI
  </a>
</div>
@endsection