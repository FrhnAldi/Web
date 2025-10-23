<!-- FARHAN ALDI NUGRAHA -->
<!-- 41523010186 -->

@extends('layouts.app')

@section('title', 'Inaklug | Home')

@section('content')
<section class="hero-section">
  <div class="overlay">
    <div class="hero-content">
      <h2>INGIN KULIAH DAN BERKARIR <br> DI LUAR NEGERI?</h2>
      <a href="#" class="btn-hero">SELENGKAPNYA<i class="fas fa-chevron-down ms-2"></i></a>
    </div>
  </div>
</section>

<section class="tentang-section py-4">
  <div class="container text-center">
    <h2>TENTANG KAMI</h2>
    <p class="tentang-text mx-auto">
        INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
    </p>
  </div>
</section>

<hr class="mx-auto mb-5" style="width: 82%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="layanan-section py-5">
  <div class="container text-center">
    <h2>Layanan Kami</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

      <div class="col">
        <div class="custom-card">
          <img src="{{ asset('images/bachelor.jpg') }}" class="card-img" alt="Program 1">
          <div class="gradient-overlay"></div>
          <div class="left-line"></div>
          <div class="card-content">
            <h5 class="card-title">Studi S1 - Bachelor</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card">
          <img src="{{ asset('images/master.png') }}" class="card-img" alt="Program 2">
          <div class="gradient-overlay"></div>
          <div class="left-line"></div>
          <div class="card-content">
            <h5 class="card-title">Studi S2 - Master</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card">
          <img src="{{ asset('images/phd.jpg') }}" class="card-img" alt="Program 3">
          <div class="gradient-overlay"></div>
          <div class="left-line"></div>
          <div class="card-content">
            <h5 class="card-title">Studi S3 - Ph.D</h5>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="custom-card">
          <img src="{{ asset('images/basing.png') }}" class="card-img" alt="Program 1">
          <div class="gradient-overlay"></div>
          <div class="left-line"></div>
          <div class="card-content">
            <h5 class="card-title">Kursus Bahasa Asing</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card">
          <img src="{{ asset('images/studytour.png') }}" class="card-img" alt="Program 2">
          <div class="gradient-overlay"></div>
          <div class="left-line"></div>
          <div class="card-content">
            <h5 class="card-title">Study Tour</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card">
          <img src="{{ asset('images/ausbildung.jpg') }}" class="card-img" alt="Program 3">
          <div class="gradient-overlay"></div>
          <div class="left-line"></div>
          <div class="card-content">
            <h5 class="card-title">Ausbildung</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mitra-section py-5">
  <div class="container text-center">
    <h2 class="mb-4">Mitra Kami</h2>
    <div class="mitra-grid">
      <div class="mitra-card">
        <img src="{{ asset('images/aviation.jpg') }}" alt="Mitra 1">
      </div>
      <div class="mitra-card">
        <img src="{{ asset('images/andrews.jpeg') }}" alt="Mitra 2">
      </div>
      <div class="mitra-card">
        <img src="{{ asset('images/htw.png') }}" alt="Mitra 3">
      </div>
      <div class="mitra-card">
        <img src="{{ asset('images/studygroup.png') }}" alt="Mitra 4">
      </div>
    </div>
  </div>
</section>

<section class="konseling-section my-5">
  <div class="konseling-box">
    <div class="konseling-text">
      <h2>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h2>
      <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
    </div>
    <a href="#konsultasi" class="konseling-btn">
      MULAI KONSULTASI
      <i class="fas fa-chevron-down ms-2"></i>
    </a>
  </div>
</section>

<section class="artikel-section py-5">
  <div class="container text-center">
    <h2>Artikel Terbaru</h2>

    <div class="artikel-grid">
      <div class="artikel-card">
        <img src="{{ asset('images/studijerman.png') }}" alt="Artikel 1">
        <p>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
      </div>
      <div class="artikel-card">
        <img src="{{ asset('images/korona.png') }}" alt="Artikel 2">
        <p>Uni Eropa Menghadapi Virus Korona</p>
      </div>
      <div class="artikel-card">
        <img src="{{ asset('images/bahasajerman.png') }}" alt="Artikel 3">
        <p>Belajar Bahasa Jerman Bersama Goethe Institut</p>
      </div>
      <div class="artikel-card">
        <img src="{{ asset('images/gatescambride.png') }}" alt="Artikel 4">
        <p>Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
      </div>
    </div>

    <button class="btn-artikel">LAINNYA</button>
  </div>
</section>

<hr class="mx-auto mb-5" style="width: 82%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="hubungi-section py-5 text-center">
  <div class="container">
    <h2 class="fw-semibold mb-3">Hubungi Kami</h2>
    <h5 class="fw-normal mb-2">Kantor Pusat</h5>
    <p class="text-muted mb-1">
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
    </p>
    <p class="text-muted mb-4">Phone: 085286754052</p>

    <div class="hubungi-buttons">
      <a href="#" class="btn-lokasi">LOKASI KAMI</a>
      <a href="#" class="btn-pesan">KIRIM PESAN</a>
    </div>
  </div>
</section>
@endsection