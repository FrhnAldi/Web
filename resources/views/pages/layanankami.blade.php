@extends('layouts.app')

@section('title', 'Inaklug | Layanan Kami')

@section('content')

<section class="layanankami-section">
  <div class="overlay-layanan"></div>
  <div class="layanankami-content">
    <h2>LAYANAN KAMI</h2>
  </div>
</section>

<section class="layanan-kami-section py-5">
  <div class="container text-center">
    <h2>Layanan Kami</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-0 justify-content-center">

      <div class="col">
        <div class="custom-card-kami">
          <img src="{{ asset('images/bachelor.png') }}" class="card-img" alt="Program 1">
          <div class="gradient-overlay-kami"></div>
          <div class="left-line-kami"></div>
          <div class="card-content-kami">
            <h5 class="card-title-kami">Studi S1 - Bachelor</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card-kami">
          <img src="{{ asset('images/master.png') }}" class="card-img" alt="Program 2">
          <div class="gradient-overlay-kami"></div>
          <div class="left-line-kami"></div>
          <div class="card-content-kami">
            <h5 class="card-title-kami">Studi S2 - Master</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card-kami">
          <img src="{{ asset('images/phd.jpg') }}" class="card-img" alt="Program 3">
          <div class="gradient-overlay-kami"></div>
          <div class="left-line-kami"></div>
          <div class="card-content-kami">
            <h5 class="card-title-kami">Studi S3 - Ph.D</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card-kami">
          <img src="{{ asset('images/basing.png') }}" class="card-img" alt="Program 1">
          <div class="gradient-overlay-kami"></div>
          <div class="left-line-kami"></div>
          <div class="card-content-kami">
            <h5 class="card-title-kami">Kursus Bahasa Asing</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card-kami">
          <img src="{{ asset('images/studytour.png') }}" class="card-img" alt="Program 2">
          <div class="gradient-overlay-kami"></div>
          <div class="left-line-kami"></div>
          <div class="card-content-kami">
            <h5 class="card-title-kami">Study Tour</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="custom-card-kami">
          <img src="{{ asset('images/ausbildung.jpg') }}" class="card-img" alt="Program 3">
          <div class="gradient-overlay-kami"></div>
          <div class="left-line-kami"></div>
          <div class="card-content-kami">
            <h5 class="card-title-kami">Ausbildung</h5>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="mx-auto mb-5" style="width: 82%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="lkami-section py-5 text-center">
  <div class="container">
    <h2 class="fw-semibold mb-3">Hubungi Kami</h2>
    <h5 class="mb-2">Kantor Pusat</h5>
    <p class="text-muted mb-1">
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
    </p>
    <p class="text-muted mb-4">Phone: 085286754052</p>

    <div class="lkami-buttons">
      <a href="#" class="btn-lokasi-lkami">LOKASI KAMI</a>
      <a href="hubungikami" class="btn-pesan-lkami">KIRIM PESAN</a>
    </div>
  </div>
</section>
@endsection