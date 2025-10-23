<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
     <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('images/inaklug.png') }}" alt="Logo" width="50" height="50">
            Inaklug
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav nav-underline mx-8 mb-2 mb-lg-0 menu-nav">
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('tentangkami') ? 'active' : '' }}" href="{{ url('/tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('layanankami') ? 'active' : '' }}" href="{{ url('/layanankami') }}">Layanan Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ url('/artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('hubungikami') ? 'active' : '' }}" href="{{ url('/hubungikami') }}">Hubungi Kami</a>
                </li>
            </ul>

            <div class="d-flex align-items-center right-side">
              <form class="search-form d-flex align-items-center" role="search">
                  <i class="bi bi-search search-icon"></i>
                <input class="form-control" type="search" placeholder="Ketik pencarian" aria-label="search">
              </form>
              <button class="btn-daftar">DAFTAR ONLINE</button>
            </div>
          </div>
        </div>
      </nav>