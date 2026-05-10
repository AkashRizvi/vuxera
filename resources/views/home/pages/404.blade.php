@extends('home.home_master')
@section('home')



  <main class="main">

    <!-- Error 404 Section -->
    <section id="error-404" class="error-404 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">

            <div class="error-number" data-aos="zoom-in" data-aos-delay="200">
              404
            </div>

            <h1 class="error-title" data-aos="fade-up" data-aos-delay="300">
              Page Not Found
            </h1>

            <p class="error-description" data-aos="fade-up" data-aos-delay="400">
              Sorry, the page you are looking for does not exist or may have been moved. Explore our services including web development, UK business setup, Amazon solutions, and branding services.
            </p>

            <div class="error-actions" data-aos="fade-up" data-aos-delay="500">
              <a href="/" class="btn-primary">
                <i class="bi bi-house"></i>
                Back to Home
              </a>
              <a href="/contact.html" class="btn-secondary">
                <i class="bi bi-envelope"></i>
                Contact Us
              </a>
            </div>

          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-lg-10">

            <div class="helpful-links" data-aos="fade-up" data-aos-delay="600">
              <h3>You might be looking for:</h3>

              <div class="links-grid">

                <a href="/about.html" class="link-item">
                  <i class="bi bi-info-circle"></i>
                  <span>About Us</span>
                </a>

                <a href="/services.html" class="link-item">
                  <i class="bi bi-grid-3x3-gap"></i>
                  <span>Our Services</span>
                </a>

                <a href="/service-web-development.html" class="link-item">
                  <i class="bi bi-code-slash"></i>
                  <span>Web Development</span>
                </a>

                <a href="/service-uk-business-setup.html" class="link-item">
                  <i class="bi bi-building"></i>
                  <span>UK Business Setup</span>
                </a>

                <a href="/service-amazon-services.html" class="link-item">
                  <i class="bi bi-box-seam"></i>
                  <span>Amazon Services</span>
                </a>

                <a href="/service-logo-design.html" class="link-item">
                  <i class="bi bi-palette"></i>
                  <span>Logo Design</span>
                </a>

                <a href="/privacy-policy.html" class="link-item">
                  <i class="bi bi-shield-check"></i>
                  <span>Privacy Policy</span>
                </a>

                <a href="/terms.html" class="link-item">
                  <i class="bi bi-file-earmark-text"></i>
                  <span>Terms &amp; Conditions</span>
                </a>

                <a href="/contact.html" class="link-item">
                  <i class="bi bi-telephone"></i>
                  <span>Contact</span>
                </a>

              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Error 404 Section -->

  </main>

 @endsection
