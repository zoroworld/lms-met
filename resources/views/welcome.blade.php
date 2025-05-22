@include('include.header')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('assets/img/lmsBanner.jpg') }}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="hero-content">
          <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
          <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="courses" class="btn-get-started">Get Started</a>
          </div>
         </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Our LMS?</h3>
              <p>
                Our Learning Management System is built to empower educators and learners through innovative tools, engaging content, and seamless access. Whether you're managing a classroom or learning remotely, our platform offers everything you need to succeed and grow.
              </p>
              <div class="text-center">
                <a href="#features" class="more-btn"><span>Explore Features</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h4>Track Progress</h4>
                  <p>Monitor learner performance, course completion, and engagement with real-time analytics.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-laptop"></i>
                  <h4>Interactive Learning</h4>
                  <p>Offer quizzes, multimedia lessons, and interactive modules to keep learners engaged and active.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-cloud-arrow-down"></i>
                  <h4>Accessible Anywhere</h4>
                  <p>Our cloud-based LMS ensures access from any device, anytime — ideal for flexible learning paths.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->


    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-laptop" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Online Courses</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-person-video3" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Live Classes</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-journal-text" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Assignments</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-patch-check" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Certifications</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-bar-chart-line" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Progress Tracking</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-people" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Student Community</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-ui-checks" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Quizzes & Exams</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-video" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Video Lessons</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-wallet2" style="color: #b2904f;"></i>
              <h3><a href="" class="stretched-link">Affordable Pricing</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-chat-dots" style="color: #b20969;"></i>
              <h3><a href="" class="stretched-link">Doubt Clearing</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-cloud-arrow-down" style="color: #ff5828;"></i>
              <h3><a href="" class="stretched-link">Downloadable Resources</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-phone" style="color: #29cc61;"></i>
              <h3><a href="" class="stretched-link">Mobile Friendly</a></h3>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /Features Section -->


    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Courses</h2>
        <p>Popular Courses</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">

          <!-- Course Item 1 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item no-image">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Web Development</p>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.html">Website Design</a></h3>
                <p class="description">Learn to create stunning websites using HTML, CSS, JavaScript, and modern design tools.</p>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile">
                    <strong>Trainer:</strong> Antonio
                  </div>
                  <div class="trainer-rank">
                    👥 50 &nbsp;&nbsp; ❤️ 65
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Course Item 2 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="course-item no-image">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Marketing</p>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                <p class="description">Master SEO strategies and tools to improve search engine rankings and visibility.</p>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile">
                    <strong>Trainer:</strong> Lana
                  </div>
                  <div class="trainer-rank">
                    👥 35 &nbsp;&nbsp; ❤️ 42
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Course Item 3 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="course-item no-image">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Content</p>
                  <p class="price">$180</p>
                </div>

                <h3><a href="course-details.html">Copywriting</a></h3>
                <p class="description">Develop persuasive writing skills for websites, ads, and social media campaigns.</p>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile">
                    <strong>Trainer:</strong> Brandon
                  </div>
                  <div class="trainer-rank">
                    👥 20 &nbsp;&nbsp; ❤️ 85
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>



    <!-- Trainers Index Section -->
  <section id="trainers-index" class="section trainers-index">
    <div class="container">

      <div class="section-title">
        <h2>Our Trainers</h2>
        <p>Meet Our Expert Instructors</p>
      </div>

      <div class="row">

        <!-- Trainer 1 -->
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-content">
              <h4>Walter White</h4>
              <span>Senior Web Developer</span>
              <p>
                Walter brings over 10 years of experience in full-stack web development. He specializes in JavaScript frameworks and responsive design.
              </p>
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Trainer 1 -->

        <!-- Trainer 2 -->
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-content">
              <h4>Sarah Jhinson</h4>
              <span>Digital Marketing Expert</span>
              <p>
                Sarah is a certified digital marketer with a passion for strategy, content, and brand storytelling. She has helped hundreds of businesses grow online.
              </p>
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Trainer 2 -->

        <!-- Trainer 3 -->
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-content">
              <h4>William Anderson</h4>
              <span>Content Strategist</span>
              <p>
                William specializes in content planning, SEO optimization, and storytelling. He crafts impactful learning experiences through content.
              </p>
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Trainer 3 -->

      </div>
    </div>
  </section><!-- /Trainers Index Section -->



@include('include.footer')