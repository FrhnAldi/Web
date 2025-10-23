@extends('layouts.app')

@section('title', 'Inaklug | Tentang Kami')

@section('content')

<section class="tentangkami-section">
  <div class="overlay-tentang"></div>
  <div class="tentangkami-content">
    <h2>TENTANG KAMI</h2>
  </div>
</section>

<section class="profil-visi-misi-section">
  <div class="container-profil">
    <h2>Profil</h2>
    <p class="profil-text">
      Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda <br>Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
    </p>
  </div>

  <div class="container-visi-misi">
    <div class="visi">
      <img src="images/visi.png" alt="Visi">
      <h3>Visi</h3>
      <p>
        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
      </p>
    </div>
    <div class="misi">
      <img src="images/misi.png" alt="Misi">
      <h3>Misi</h3>
      <p>
        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
      </p>
    </div>
  </div>

  <div class="btn-wrapper">
    <a href="#" class="btn-layanan">Layanan Kami</a>
  </div>
</section>

<hr class="mx-auto mb-5" style="width: 82%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="hubungi-tentang-section py-5 text-center">
  <div class="container">
    <h2 class="fw-semibold mb-3">Hubungi Kami</h2>
    <h5 class="mb-2">Kantor Pusat</h5>
    <p class="text-muted mb-1">
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
    </p>
    <p class="text-muted mb-4">Phone: 085286754052</p>

    <div class="hubungi-tentang-buttons">
      <a href="#" class="btn-lokasi-tentang">LOKASI KAMI</a>
      <a href="#" class="btn-pesan-tentang">KIRIM PESAN</a>
    </div>
  </div>
</section>
@endsection