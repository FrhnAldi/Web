
@extends('layouts.app')

@section('title', 'Inaklug | Hubungi Kami')

@section('content')

<section class="hukami-section">
  <div class="overlay-hukami"></div>
  <div class="hukami-content">
    <h2>HUBUNGI KAMI</h2>
  </div>
</section>

<section class="contact-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11 col-xl-10">
        <h3 class="mb-4 fw-semibold text-uppercase">Kirim Pesan</h3>

        <form id="contactForm" action="{{ route('contact.send') }}" method="POST" onsubmit="return validateRecaptcha()">
          @csrf

          <div class="row g-3">
            <div class="col-md-6">
              <label for="nama" class="form-label small">Nama*</label>
              <input type="text" class="form-control form-control-sm" id="nama" name="nama" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label small">Email*</label>
              <input type="email" class="form-control form-control-sm" id="email" name="email" required>
            </div>
            <div class="col-md-6">
              <label for="perusahaan" class="form-label small">Perusahaan/Organisasi</label>
              <input type="text" class="form-control form-control-sm" id="perusahaan" name="perusahaan">
            </div>
            <div class="col-md-6">
              <label for="telepon" class="form-label small">Telepon</label>
              <input type="text" class="form-control form-control-sm" id="telepon" name="telepon">
            </div>
            <div class="col-12">
              <label for="pesan" class="form-label small">Isi Pesan*</label>
              <textarea class="form-control form-control-sm" id="pesan" name="pesan" placeholder="Isi Pesan*" rows="4" required></textarea>
            </div>
          </div>

          <hr class="custom-hr" style="margin-top: 2.5rem; margin-bottom: 4rem;">

          <div class="button-wrapper d-flex justify-content-start align-items-center">
            <div class="g-recaptcha" data-sitekey="{{ config(key: 'services.recaptcha.site_key') }}"></div>
            <button type="submit" class="btn-send">KIRIM PESAN</button>
          </div>

          <div id="recaptcha-error" class="text-danger small mt-2" style="display:none;">
            Silakan centang "I'm not a robot" terlebih dahulu
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<hr class="mx-auto mb-5 mt-5" style="width: 78%; height: 1px; background-color: #8a8b8bff; border: none;">

<section class="lokasi-section py-2">
  <div class="container">
    <h3 class="lokasi-title mb-5">LOKASI KAMI</h3>

    <div class="kantor-item mb-4">
      <h4 class="kantor-subtitle mb-3">Kantor Pusat</h4>
      <p class="kantor-text mb-1">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
      <p class="kantor-text mb-1">Phone: (6285) 286754052 - Fax : (6285) 286754052</p>
      <p class="kantor-text mb-0">Hotline: +6285286754052 / +6285286754052</p>
    </div>

    <div class="kantor-item">
      <h4 class="kantor-subtitle mb-3">Kantor Cabang</h4>
      <p class="kantor-text mb-1">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
      <p class="kantor-text mb-1">Phone: (6285) 286754052 - Fax : (6285) 286754052</p>
      <p class="kantor-text mb-0">Hotline: +6285286754052 / +6285286754052</p>
    </div>
  </div>
</section>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
function validateRecaptcha() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('recaptcha-error').style.display = 'block';
        return false;
    }
    document.getElementById('recaptcha-error').style.display = 'none';
    return true;
}
</script>


@endsection