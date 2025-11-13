<x-master>
    <div class="container py-5">

        <!-- Header: Profile -->
        <div class="row align-items-center mb-5">
            <!-- Profile Image -->
           <div class="col-md-3 text-center mb-4 mb-md-0">
                <div style="width: 180px; height: 180px; border-radius: 50%; overflow: hidden; margin: 0 auto; border: 3px solid #0d6efd;">
                    <img src="{{ asset('gambar/akmal.jpg') }}"
                        alt="Akmal Profile Photo"
                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                </div>
            </div>

            <!-- Profile Info -->
            <div class="col-md-9">
                <h1 class="fw-bold text-dark mb-1">MUHAMMAD AKMAL BIN MOHAMED RAZELAN</h1>
                <h4 class="text-primary fw-semibold mb-3">UI/UX Designer</h4>
                <p class="text-secondary">
                    Hi, I’m Muhammad Akmal Bin Mohamed Razelan, a Final Year Software Engineering student at Universiti Malaysia Pahang. 
                    My expertise spans system development, web development, and mobile app creation. 
                    I am passionate about using technology to not only solve problems but also enhance the experiences of users and businesses.
                </p>
            </div>
        </div>

        <hr class="my-5">

        <!-- Skills Section -->
        <section class="mb-5">
            <h2 class="fw-bold text-dark mb-4">Technical Skills</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <h6 class="mb-2 text-secondary">HTML & CSS</h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <h6 class="mb-2 text-secondary">JavaScript </h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%;" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <h6 class="mb-2 text-secondary">Laravel / PHP</h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <h6 class="mb-2 text-secondary">Database (MySQL)</h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5">

        <!-- Hobbies Section -->
        <section class="mb-5">
            <h2 class="fw-bold text-dark mb-4">Experience & Skill</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center hover-card">
                            <div class="mb-3">
                                <i class="bi bi-controller text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Web Development</h5>
                            <p class="card-text text-muted">
                                Hands-on experience with the Laravel framework, 
                                building dynamic websites and applications that are both functional and user-friendly.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center hover-card">
                            <div class="mb-3">
                                <i class="bi bi-book text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Mobile Development</h5>
                            <p class="card-text text-muted">
                                Experience with the Flutter framework, building dynamic mobile application with the integration of Database using Firebase.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center hover-card">
                            <div class="mb-3">
                                <i class="bi bi-camera text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title fw-semibold">ERP Systems</h5>
                            <p class="card-text text-muted">
                                Hands-on experience with SAP S/4HANA in academic projects, 
                                including navigation, configuration, and execution of business processes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-master>
