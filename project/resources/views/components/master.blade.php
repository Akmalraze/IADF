<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnasDev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('gambar/Logo-anas.png') }}" type="image/x-icon">

    <style>
        /* ===== HEADER STYLE ===== */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        .navbar-brand img {
            height: 65px;
            transition: transform 0.3s ease;
        }
        .navbar-brand:hover img {
            transform: scale(1.1);
        }
        .nav-link {
            color: #333 !important;
            margin: 0 8px;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #0d6efd !important;
        }
        .navbar-toggler {
            border: none;
        }

        /* ===== FOOTER STYLE ===== */
        footer {
            background: linear-gradient(to right, #5792ecff, #6610f2);
            color: white;
        }
        footer a {
            color: #f8f9fa;
            text-decoration: none;
        }
        footer a:hover {
            color: #ffd700;
        }
        .footer-divider {
            border-top: 1px solid rgba(255,255,255,0.25);
            margin: 15px 0;
        }
        .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        /* Smooth hover effect */
        .dropdown-item:hover {
        background-color: #0d6efd;
        color: white;
        border-radius: 6px;
        transition: all 0.2s ease-in-out;
        }

        /* Fade animation (if not using animate.css) */
        @keyframes fadeInDropdown {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-menu {
        animation: fadeInDropdown 0.25s ease-in-out;
        }

    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- ===== Navigation Bar ===== -->
    <nav class="navbar navbar-expand-lg py-2 sticky-top">
        <div class="container px-4">
            <!-- Logo -->
            <a class="navbar-brand d-inline-block" href="{{ route('home') }}">
                <img src="{{ asset('gambar/Logo-anas.png') }}" alt="logo">
            </a>

            <!-- Mobile toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Links -->
           <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3 animate__animated animate__fadeIn" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item py-2 px-3" href="{{ route('aboutAnas') }}">MUHAMMAD ANAS</a></li>
                        <li><a class="dropdown-item py-2 px-3" href="{{ route('aboutBadzli') }}">AHMAD IKHWAN</a></li>
                        <li><a class="dropdown-item py-2 px-3" href="{{ route('aboutHarith') }}">MUHAMMAD HARITH</a></li>
                        <li><a class="dropdown-item py-2 px-3" href="{{ route('aboutAkmal') }}">MUHAMMAD AKMAL</a></li>
                    </ul>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- ===== Page Content ===== -->
    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <!-- ===== Modern Footer ===== -->
    <footer class="mt-auto pt-4 pb-3">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h5 class="fw-bold">AnasDev Team</h5>
                    <p class="small">
                        Passionate developers building creative and professional web projects using Laravel & Bootstrap.
                    </p>
                </div>
            </div>

            <div class="footer-divider"></div>

            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <a class="small" href="{{ route('home') }}">Home</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="">About</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="{{ route('contact') }}">Contact</a>
                    <div class="small mt-2">&copy; {{ date('Y') }} AnasDev. All rights reserved.</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
