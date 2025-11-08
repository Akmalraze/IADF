<x-master>
    <div class="container py-5">

        <!-- Header: Profile -->
        <div class="row align-items-center mb-5">
            <!-- Profile Image -->
            <div class="col-md-3 text-center mb-4 mb-md-0">
                <img src="{{ asset('gambar/anas.jpg') }}"
                     alt="Anas Profile Photo"
                     class="rounded-circle shadow-sm img-fluid border border-3 border-primary"
                     style="width: 180px; height: 180px; object-fit: cover;">
            </div>

            <!-- Profile Info -->
            <div class="col-md-9">
                <h1 class="fw-bold text-dark mb-1">MUHAMMAD ANAS BIN NASHARUDIN</h1>
                <h4 class="text-primary fw-semibold mb-3">Project Leader</h4>
                <p class="text-secondary">
                    Hello! I'm <strong>Anas</strong>, a passionate developer who loves crafting clean,
                    responsive, and scalable web applications. With experience in
                    <strong>Laravel</strong>, <strong>PHP</strong>, and modern frontend technologies like
                    <strong>JavaScript</strong> and <strong>Bootstrap</strong>, I enjoy transforming complex ideas
                    into simple and efficient digital solutions. I believe in writing clean code,
                    continuous learning, and building great user experiences.
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

                <div class="col-md-6">
                    <h6 class="mb-2 text-secondary">JavaScript / Vue.js</h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%;" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h6 class="mb-2 text-secondary">Laravel / PHP</h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>

                <div class="col-md-6">
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
            <h2 class="fw-bold text-dark mb-4">Hobbies & Interests</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-controller text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Gaming</h5>
                            <p class="card-text text-muted">
                                Enjoy playing competitive and story-driven games that sharpen focus
                                and improve problem-solving skills.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-book text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Reading</h5>
                            <p class="card-text text-muted">
                                Passionate about reading tech blogs, design books, and developer documentation
                                to keep up with trends.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-camera text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Photography</h5>
                            <p class="card-text text-muted">
                                Love capturing moments and exploring creative visual composition
                                through lenses and light.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-master>
