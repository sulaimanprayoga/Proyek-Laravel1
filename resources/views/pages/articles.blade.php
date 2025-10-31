@extends('layouts.app')
@section('title', 'Artikel')

@section('content')
  {{-- ===== HERO 4 ===== --}}
  <section class="hero4" style="background-image: url('{{ asset('images/pexels-photo-3184296.jpeg') }}')">
    <div class="hero4__overlay"></div>
    <div class="hero4__inner">
      <div class="hero4__meta">
        <p class="hero4__category">TIPS</p>
        <h1 class="hero4__title">
          Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
        </h1>
      </div>
    </div>
  </section>

{{-- ===== Section Gambar Berdampingan ===== --}}
<section class="article-subgrid">
  <div class="subgrid-wrap">
    {{-- Kartu pertama --}}
    <a class="subcard" href="#">
      <div class="subcard__image">
        <img src="{{ asset('images/korona.png') }}" alt="Artikel 1">
      </div>
      <p class="subcard__title">
        Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
      </p>
    </a>

    {{-- Kartu kedua --}}
    <a class="subcard" href="#">
      <div class="subcard__image">
        <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
      </div>
      <p class="subcard__title">
        Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
      </p>
    </a>
  </div>
</section>

{{-- ===== Artikel Terbaru (list kecil) ===== --}}
<section class="newarticles-list">
  <div class="newarticles-wrap">

    <h3 class="newarticles-heading">ARTIKEL TERBARU</h3>

@foreach (range(1, 5) as $i)
<a href="#" class="newarticles-item">
  <div class="newarticles-thumb">
    <img src="{{ asset('images/artikel' . $i . '.jpg') }}" alt="Artikel {{ $i }}">
  </div>
  <div class="newarticles-meta">
    <h4 class="newarticles-title">
      Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
    </h4>
    <div class="newarticles-date">Selasa, 18 Feb 2020 | 02:01 WIB</div>
  </div>
</a>
@endforeach


    {{-- pagination dummy --}}
    <ul class="newarticles-pager">
      <li><button class="pager-arrow">‹</button></li>
      <li><button class="is-active">1</button></li>
      <li><button>2</button></li>
      <li><button>3</button></li>
      <li><button>4</button></li>
      <li><button>5</button></li>
      <li><button class="pager-arrow">›</button></li>
    </ul>

  </div>
</section>

@endsection