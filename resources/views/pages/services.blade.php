@extends('layouts.app')
@section('title', 'Layanan Kami')

@section('content')
  {{-- ===== Hero: Layanan Kami (.hero3) ===== --}}
  <section class="hero3" style="background-image:url('{{ asset('images/gatescambride.png') }}')">
    <div class="hero3__overlay"></div>
    <div class="hero3__inner">
      <h1 class="hero3__title">LAYANAN KAMI</h1>
    </div>
  </section>

  {{-- ===== Layanan Kami ===== --}}
<section class="services">
    <br></br>
  <div class="services-wrap">
    <h2>LAYANAN KAMI</h2>
    <div class="services-grid">
      {{-- 1 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/bachelor.png') }}')">
        <span class="service-title">Studi S1 - Bachelor</span>
      </a>

      {{-- 2 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/master.png') }}')">
        <span class="service-title">Studi S2 - Master</span>
      </a>

      {{-- 3 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/phd.jpg') }}')">
        <span class="service-title">Studi S3 - Ph.D</span>
      </a>

      {{-- 4 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/kursus.png') }}')">
        <span class="service-title">Kursus Bahasa Asing</span>
      </a>

      {{-- 5 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/studytour.png') }}')">
        <span class="service-title">Study Tour</span>
      </a>

      {{-- 6 --}}
      <a href="#" class="service-card" style="--bg:url('{{ asset('images/ausbildung.jpg') }}')">
        <span class="service-title">Ausbildung</span>
      </a>
    </div>
  </div>
</section>
@endsection