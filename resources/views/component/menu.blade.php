<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Icons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Font Poppins */
            font-weight: 500;
        }

        .navbar .form-inline {
            display: flex;
            align-items: center;
        }

        /* Menyesuaikan lebar search box */
        .navbar .form-control {
            width: 200px; /* Sesuaikan lebar search box */
            margin-right: 10px; /* Memberikan jarak antara input dan tombol */
        }

        /* Style tombol Sign Up, Sign In dan Logout */
        .navbar .btn-outline-light {
            border: 2px solid #fff; /* Border putih */
            color: #fff; /* Warna teks putih */
            background-color: transparent; /* Latar belakang transparan */
            padding: 6px 15px; /* Padding lebih besar untuk tombol persegi */
            border-radius: 5px; /* Sudut membulat */
            font-size: 15px; /* Ukuran font tombol */
            font-weight: 600; /* Tebalkan teks tombol */
            display: flex;
            align-items: center; /* Vertikal center teks dan ikon */
            justify-content: center; /* Horizontal center teks dan ikon */
            gap: 8px; /* Jarak antara ikon dan teks */
            transition: all 0.3s ease; /* Transisi halus */
            height: 40px; /* Set height agar tombol seragam */
        }

        /* Efek hover untuk tombol Sign Up, Sign In, dan Logout */
        .navbar .btn-outline-light:hover {
            background-color: #fff; /* Ubah latar belakang menjadi putih */
            color: #dc3545; /* Ubah warna teks menjadi merah */
            transform: scale(1.1); /* Membesarkan tombol sedikit */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan untuk efek kedalaman */
        }

        /* Efek saat tombol aktif */
        .navbar .btn-outline-light:active {
            transform: scale(1); /* Kembalikan ukuran tombol */
            box-shadow: none; /* Hilangkan bayangan saat tombol diklik */
        }

        /* Menambahkan sedikit space antara tombol Sign In dan Sign Up */
        .navbar .btn-outline-light.mx-2 {
            margin-right: 15px;
        }

        /* Tambahkan animasi ikon */
        .navbar .btn-outline-light i {
            font-size: 18px; /* Ukuran ikon */
            transition: transform 0.3s ease; /* Animasi saat ikon bergerak */
        }

        /* Efek hover untuk ikon */
        .navbar .btn-outline-light:hover i {
            transform: translateX(4px); /* Geser ikon ke kanan saat hover */
        }

        /* Navbar styling */
        .navbar-light .navbar-nav .nav-link {
            color: #fff; /* Warna teks navbar menjadi putih */
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #dc3545; /* Ubah warna teks navbar saat hover */
        }

        /* Menghilangkan filter pada logo, agar tidak berubah warna */
        .navbar-light .navbar-brand img {
            filter: none; /* Hapus filter warna putih pada logo */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('letterfbg.png') }}" alt="Logo" height="100" width="100"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Data Users</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center">
                <!-- Form Search Bar -->
                <form class="form-inline" action="{{ route('search') }}" method="GET">
                    <input class="form-control" type="search" name="query" placeholder="Search" aria-label="Search">
                </form>

                @if (!Auth::check())
                    <!-- Sign Up Button with Icon -->
                    <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">
                        <i class="fas fa-user-plus"></i> Sign Up
                    </a>
                    <!-- Sign In Button with Icon -->
                    <a href="{{ route('signin') }}" class="btn btn-outline-light">
                        <i class="fas fa-sign-in-alt"></i> Sign In
                    </a>
                @else
                    <!-- Logout Button with Icon -->
                    <a href="{{ route('logout') }}" class="btn btn-outline-light">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                @endif
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
