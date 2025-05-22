
@include('include.header')

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Courses</h1>
              <p class="mb-0">Our LMS offers courses for all levels with practical projects for real skill growth. Expert-created and regularly updated to keep up with industry trends.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Courses</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item p-4 border rounded shadow-sm w-100">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category fw-bold text-white">Web Development</p>
                  <p class="price text-success fw-semibold">$169</p>
                </div>

                <h3><a href="course-details.html">Website Design</a></h3>
                <p class="description text-muted">Learn to design responsive and interactive websites using modern tools and best practices.</p>

                <div class="trainer d-flex justify-content-between align-items-center mt-4">
                  <div class="trainer-profile d-flex align-items-center">
                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                    <a href="" class="trainer-link">Antonio</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="course-item p-4 border rounded shadow-sm w-100">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category fw-bold text-white">Marketing</p>
                  <p class="price text-success fw-semibold">$250</p>
                </div>

                <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                <p class="description text-muted">Master SEO techniques to boost website traffic and improve search rankings effectively.</p>

                <div class="trainer d-flex justify-content-between align-items-center mt-4">
                  <div class="trainer-profile d-flex align-items-center">
                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                    <a href="" class="trainer-link">Lana</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="course-item p-4 border rounded shadow-sm w-100">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category fw-bold text-white">Content</p>
                  <p class="price text-success fw-semibold">$180</p>
                </div>

                <h3><a href="course-details.html">Copywriting</a></h3>
                <p class="description text-muted">Develop persuasive writing skills to create compelling content that converts.</p>

                <div class="trainer d-flex justify-content-between align-items-center mt-4">
                  <div class="trainer-profile d-flex align-items-center">
                    <i class="bi bi-person-circle fs-4 me-2 text-dark"></i>
                    <a href="" class="trainer-link">Brandon</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item -->

        </div>
      </div>
    </section><!-- /Courses Section -->


  
@include('include.footer')