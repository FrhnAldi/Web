@extends('layouts.app')

@section('title', 'Inaklug | Artikel')

@section('content')

<section class="hero-section-artikelkami">
  <div class="overlay-artikelkami"></div>
    <div class="hero-content-artikelkami">
      <h6>TIPS</h6>
      <p>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri <br> dengan Beasiswa</p>
  </div>
</section>

<section class="bottom-cards">
  <div class="container text-center">
    <div class="row justify-content-center flex-wrap">

      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10 mb-4">
        <div class="card custom-card-artikelkami">
          <img src="images/korona.png" class="card-img-top" alt="Universitas 1">
          <div class="card-body">
            <p class="card-text">
              Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
            </p>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10 mb-4">
        <div class="card custom-card-artikelkami">
          <img src="images/htw2.png" class="card-img-top" alt="Universitas 2">
          <div class="card-body">
            <p class="card-text">
              Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="mx-auto mb-2" style="width: 56%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="partners-section py-5" >
  <div class="container" style="max-width: 750px; width: 100%; padding: 0 15px;">
    <h4 class="fw-bold mb-4">Mitra Kami</h4>

    <div class="news-list" style="max-width: 750px; width: 100%;">
      <div class="news-item mb-3">
        <img src="images/artikel1.jpg" alt="Mitra 3" class="news-img" style="width: 200px; height: 100px;">
        <div class="news-content">
          <h6 class="fw-semibold mb-1">
            Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
          </h6>
          <small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
        </div>
      </div>

      <div class="news-item mb-3">
        <img src="images/artikel2.jpg" alt="Mitra 2" class="news-img" style="width: 200px; height: 120px;">
        <div class="news-content">
          <h6 class="fw-semibold mb-1">
            Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
          </h6>
          <small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
        </div>
      </div>

      <div class="news-item mb-3">
        <img src="images/artikel3.jpg" alt="Mitra 3" class="news-img" style="width: 200px; height: 100px;">
        <div class="news-content">
          <h6 class="fw-semibold mb-1">
            Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
          </h6>
          <small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
        </div>
      </div>

      <div class="news-item mb-3">
        <img src="images/artikel4.jpg" alt="Mitra 4" class="news-img" style="width: 200px; height: 120px;">
        <div class="news-content">
          <h6 class="fw-semibold mb-1">
            Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
          </h6>
          <small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
        </div>
      </div>

      <div class="news-item mb-3">
        <img src="images/nurse2.jpg" alt="Mitra 5" class="news-img" style="width: 200px; height: 120px;">
        <div class="news-content">
          <h6 class="fw-semibold mb-1">
            Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
          </h6>
          <small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
        </div>
      </div>
    </div>

    <nav class="d-flex justify-content-center mt-4">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">←</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">→</a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<hr class="mx-auto mb-5" style="width: 82%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="artkami-section py-5 text-center">
  <div class="container">
    <h2 class="fw-semibold mb-3">Hubungi Kami</h2>
    <h5 class="mb-2">Kantor Pusat</h5>
    <p class="text-muted mb-1">
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
    </p>
    <p class="text-muted mb-4">Phone: 085286754052</p>

    <div class="artkami-buttons">
      <a href="#" class="btn-lokasi-artkami">LOKASI KAMI</a>
      <a href="hubungikami" class="btn-pesan-artkami">KIRIM PESAN</a>
    </div>
  </div>
</section>
@endsection