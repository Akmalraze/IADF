<x-master>
  <!DOCTYPE html>
    <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Our Team Portfolio - Home</title>
          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      </head>
      <body class="bg-light">

          <!-- Hero Section -->
          <section class="py-5 text-center bg-primary text-white">
              <div class="container">
                  <h1 class="display-5 fw-bold">Welcome to Our Team Portfolio</h1>
                  <p class="lead mt-3">
                      We are a group of passionate students working together to build innovative and creative web applications using Laravel and Bootstrap.
                  </p>
                  <a href="{{ url('/about') }}" class="btn btn-light btn-lg mt-3">Meet Our Team</a>
              </div>
          </section>

          <!-- Team Introduction -->
          <div class="container my-5">
              <h2 class="text-center mb-4 fw-bold text-dark">Meet the Team</h2>
              <div class="row g-4">

                  <!-- Member 1 -->
                  <div class="col-md-3">
                      <div class="card h-100 shadow-sm border-0">
                          <img src="{{ asset('gambar/anas.jpg') }}" alt="Anas" class="card-img-top rounded-circle mx-auto mt-4" style="width:150px;height:200px;">
                          <div class="card-body text-center">
                              <h5 class="card-title fw-bold">MUHAMMAD ANAS BIN NASHARUDIN	</h5>
                              <p class="text-muted mb-2">Project Leader</p>
                              <p class="card-text small">Responsible for overall coordination, project setup, and integration.</p>
                          </div>
                      </div>
                  </div>

                  <!-- Member 2 -->
                  <div class="col-md-3">
                      <div class="card h-100 shadow-sm border-0">
                          <img src="{{ asset('gambar/badzli.jpg') }}" alt="badzli" class="card-img-top rounded-circle mx-auto mt-4" style="width:150px;height:200px;" alt="Member 2">
                          <div class="card-body text-center">
                              <h5 class="card-title fw-bold">AHMAD IKHWAN BADZLI BIN ABRIZA</h5>
                              <p class="text-muted mb-2">Frontend Developer</p>
                              <p class="card-text small">In charge of user interface design and implementing responsive layouts.</p>
                          </div>
                      </div>
                  </div>

                  <!-- Member 3 -->
                  <div class="col-md-3">
                      <div class="card h-100 shadow-sm border-0">
                          <img src="{{ asset('gambar/harith.jpeg') }}" alt="harith" class="card-img-top rounded-circle mx-auto mt-4" style="width:150px;height:200px;" alt="Member 3">
                          <div class="card-body text-center">
                              <h5 class="card-title fw-bold">MUHAMMAD HARITH BIN ZULHAIRI</h5>
                              <p class="text-muted mb-2">Backend Developer</p>
                              <p class="card-text small">Handles routing, controllers, and Laravel Blade integrations.</p>
                          </div>
                      </div>
                  </div>

                  <!-- Member 4 -->
                  <div class="col-md-3">
                      <div class="card h-100 shadow-sm border-0">
                          <img src="{{ asset('gambar/akmal.jpg') }}" alt="akmal" class="card-img-top rounded-circle mx-auto mt-4" style="width:150px;height:200px;" alt="Member 4">
                          <div class="card-body text-center">
                              <h5 class="card-title fw-bold">MUHAMMAD AKMAL BIN MOHAMED RAZELAN		</h5>
                              <p class="text-muted mb-2">UI/UX Designer</p>
                              <p class="card-text small">Focuses on aesthetic design, color themes, and overall user experience.</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>


          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      </body>
    </html>

</x-master>

