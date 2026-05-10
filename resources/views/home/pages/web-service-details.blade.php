@extends('home.home_master')
@section('home')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title position-relative">

      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active current">Service Details</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Web Development Services</h1>
        <p>Professional web development solutions tailored for startups, businesses, and growing brands. We build modern, responsive, and scalable websites designed for performance and business growth.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- Service Overview -->
          <div class="col-lg-8">
            <div class="service-content">

              <h2>Professional Web Development Solutions</h2>

              <p class="lead">
                We create modern, responsive, and business-focused websites designed to strengthen your online presence, improve customer engagement, and support long-term growth.
              </p>

              <div class="service-image" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('frontend/assets/img/portfolio/Web_Development.png') }}" alt="Web Development Services" class="img-fluid rounded">
              </div>

              <p>
                From business websites to custom web applications and eCommerce platforms, our development solutions are built with performance, scalability, and user experience in mind. We help startups and businesses establish a professional digital presence with secure and optimized technologies.
              </p>

              <!-- Service Features -->
              <div class="service-features" data-aos="fade-up" data-aos-delay="300">
                <h4>What's Included</h4>
                <div class="row gy-3">
                  <div class="col-md-6">

                    <div class="feature-item">

                      <i class="bi bi-laptop flex-shrink-0"></i>

                      <div>
                        <h5>Business Website Development</h5>

                        <p>
                          Professional corporate and business websites tailored to your brand identity.
                        </p>
                      </div>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="feature-item">

                      <i class="bi bi-phone flex-shrink-0"></i>

                      <div>
                        <h5>Responsive Design</h5>

                        <p>
                          Fully mobile-friendly layouts optimized for all screen sizes and devices.
                        </p>
                      </div>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="feature-item">

                      <i class="bi bi-cart-check flex-shrink-0"></i>

                      <div>
                        <h5>E-Commerce Solutions</h5>

                        <p>
                          Secure online store development with payment gateway integration and product management.
                        </p>
                      </div>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="feature-item">

                      <i class="bi bi-speedometer2 flex-shrink-0"></i>

                      <div>
                        <h5>SEO &amp; Performance Optimization</h5>

                        <p>
                          Optimized website structure, loading speed, and search engine visibility.
                        </p>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <!-- Process -->
              <div class="service-process" data-aos="fade-up" data-aos-delay="400">

                <h4>Our Development Process</h4>

                <div class="process-steps">

                  <div class="step-item">

                    <div class="step-number">01</div>

                    <div class="step-content">

                      <h5>Requirement Analysis</h5>

                      <p>
                        Understanding your business goals, target audience, and technical requirements.
                      </p>

                    </div>

                  </div>

                  <div class="step-item">

                    <div class="step-number">02</div>

                    <div class="step-content">

                      <h5>Design &amp; Planning</h5>

                      <p>
                        Creating modern layouts, user-focused interfaces, and project architecture.
                      </p>

                    </div>

                  </div>

                  <div class="step-item">

                    <div class="step-number">03</div>

                    <div class="step-content">

                      <h5>Development &amp; Testing</h5>

                      <p>
                        Building secure, responsive, and optimized websites with quality testing.
                      </p>

                    </div>

                  </div>

                  <div class="step-item">

                    <div class="step-number">04</div>

                    <div class="step-content">

                      <h5>Deployment &amp; Support</h5>

                      <p>
                        Launching your website on hosting platforms with ongoing technical assistance.
                      </p>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div><!-- End Service Content -->

          <!-- Sidebar -->
          <div class="col-lg-4">
            <div class="sidebar" data-aos="fade-up" data-aos-delay="200">

              <!-- Service Quick Facts -->
              <!-- Service Info -->
              <div class="service-info">

                <h4>Service Details</h4>

                <ul class="service-facts">

                  <li>
                    <span class="fact-label">Project Type:</span>
                    <span class="fact-value">Custom Web Development</span>
                  </li>

                  <li>
                    <span class="fact-label">Delivery:</span>
                    <span class="fact-value">Fast &amp; Professional</span>
                  </li>

                  <li>
                    <span class="fact-label">Platforms:</span>
                    <span class="fact-value">Web &amp; E-Commerce</span>
                  </li>

                  <li>
                    <span class="fact-label">Support:</span>
                    <span class="fact-value">Online Assistance</span>
                  </li>

                </ul>

              </div>

              <!-- Highlight Box -->
              <div class="service-testimonial">

                <div class="testimonial-content">

                  <p>
                    We focus on creating scalable, modern, and business-oriented web solutions that help companies establish a strong digital presence.
                  </p>

                  <div class="testimonial-author">

                    <img src="{{ asset('frontend/assets/img/person/logo.jpeg') }}" alt="Vuxera" class="author-image">

                    <div class="author-info">
                      <h5>Vuxera</h5>
                      <span>Digital Solutions Provider</span>
                    </div>

                  </div>

                </div>

              </div>

            <!-- Contact Form -->

                @include('home.partials.contactSidebar')

            <!-- / Contact Form -->

            </div>

          </div>

        </div>

      </div>
      <!-- End Sidebar -->

    </section><!-- /Service Details Section -->

  </main>

@endsection
