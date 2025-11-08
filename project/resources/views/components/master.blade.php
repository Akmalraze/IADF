<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navigation (added border-bottom) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 border-bottom">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">IADF</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <!-- Footer (added border-top) -->
    <footer class="bg-white py-4 mt-auto border-top">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">&copy; {{ date('Y') }} My Application</div></div>
                <div class="col-auto">
                    <a class="small" href="{{ route('home') }}">Home</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="{{ route('about') }}">About</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </footer>

<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>
=======
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} My Application</p>
            {{-- Add your JavaScript links here --}}
        </footer>
    </body>
    </html>
>>>>>>> acc4855ae6e12a5aabcf2e37ec059832a32336ae
