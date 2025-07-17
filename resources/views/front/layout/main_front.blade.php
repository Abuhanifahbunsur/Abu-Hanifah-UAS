<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>RS ABU HANIFAH</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  @stack('styles')

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    .carousel img {
      height: 450px;
      object-fit: cover;
      border-radius: 8px;
    }

    footer {
      background-color: #f8f9fa;
      border-top: 1px solid #dee2e6;
    }

    /* 🌟 Navbar warna elegan */
    .navbar-elegant {
      background-color: #2C3E50; /* biru navy */
    }

    .navbar-elegant .navbar-brand,
    .navbar-elegant .nav-link,
    .navbar-elegant .dropdown-item {
      color: #ffffff !important;
    }

    .navbar-elegant .nav-link:hover,
    .navbar-elegant .dropdown-item:hover {
      color: #5DADE2 !important; /* aksen biru lembut */
    }

    .navbar-elegant .dropdown-menu {
      background-color: #34495E; /* sedikit lebih terang */
    }

    .navbar-toggler {
      border-color: rgba(255, 255, 255, 0.5);
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
  </style>
</head>
<body>

<!-- 🌐 Navbar -->
<nav class="navbar navbar-expand-lg navbar-elegant sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">RS ABU HANIFAH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home.index') }}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Tentang RS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="{{ route('sambutan_direktur') }}">Sambutan Direktur RS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

@stack('scripts')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
