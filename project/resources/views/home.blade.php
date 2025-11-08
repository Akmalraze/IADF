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
          <section class="py-5 text-center text-white position-relative" 
                  style="background: url('{{ asset('gambar/coding-banner.jpg') }}') center/cover no-repeat;">

              <!-- Dark overlay for opacity -->
              <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.3);"></div>

              <div class="container position-relative">
                  <h1 class="display-5 fw-bold">Welcome to Our Team Portfolio</h1>
                  <p class="lead mt-3">
                      <b>We are a group of passionate students working together to build innovative and creative web applications using Laravel and Bootstrap.</b>
                  </p>
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

<<<<<<< HEAD
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

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} Our Team Portfolio | Built with ❤️ using Laravel & Bootstrap</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
              </div>
          </div>


          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      </body>
    </html>

</x-master>

>>>>>>> acc4855ae6e12a5aabcf2e37ec059832a32336ae
