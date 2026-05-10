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
            <li class="breadcrumb-item active current">Logo Design Services Detail</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Logo Design &amp; Brand Identity Services</h1>
        <p>Build a strong and memorable brand identity with professional logo design and branding solutions tailored for startups, businesses, eCommerce brands, and digital companies.</p>
      </div>


    </div><!-- End Page Title -->

    <!-- Service Details 4 Section -->
    <section id="service-details-4" class="service-details-4 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- Service Overview -->
          <div class="col-lg-8">
            <div class="service-content">

              <h2>Logo Design &amp; Brand Identity Services</h2>

              <p class="lead">
                Build a strong and memorable brand identity with professional logo design and branding solutions tailored for startups, businesses, eCommerce brands, and digital companies.
              </p>

              <div class="service-image" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('frontend/assets/img/portfolio/LogoDesign.png') }}" alt="Logo Design" class="img-fluid rounded">
              </div>

              <p>
                At Vuxera, we create modern, clean, and business-focused logo designs that help brands stand out in competitive markets. From professional company logos to complete branding kits, we provide creative solutions designed to enhance trust, recognition, and brand consistency across digital and print platforms.
              </p>

              <!-- Service Features -->
              <div class="service-features" data-aos="fade-up" data-aos-delay="300">
                <h4>What's Included</h4>

                <div class="row gy-3">

                  <div class="col-md-6">
                    <div class="feature-item">
                      <i class="bi bi-palette-fill flex-shrink-0"></i>
                      <div>
                        <h5>Custom Logo Design</h5>
                        <p>Professional logo concepts designed specifically for your business identity and industry.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="feature-item">
                      <i class="bi bi-vector-pen flex-shrink-0"></i>
                      <div>
                        <h5>Brand Identity Design</h5>
                        <p>Complete branding solutions including colors, typography, and visual consistency.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="feature-item">
                      <i class="bi bi-file-earmark-image flex-shrink-0"></i>
                      <div>
                        <h5>Social Media Branding</h5>
                        <p>Custom banners, profile images, and branded assets for social media platforms.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="feature-item">
                      <i class="bi bi-badge-ad flex-shrink-0"></i>
                      <div>
                        <h5>Business Marketing Materials</h5>
                        <p>Business cards, letterheads, flyers, and professional promotional designs.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Process Steps -->
              <div class="service-process" data-aos="fade-up" data-aos-delay="400">
                <h4>Our Design Process</h4>

                <div class="process-steps">

                  <div class="step-item">
                    <div class="step-number">01</div>
                    <div class="step-content">
                      <h5>Brand Discovery</h5>
                      <p>We understand your business goals, audience, industry, and design preferences.</p>
                    </div>
                  </div>

                  <div class="step-item">
                    <div class="step-number">02</div>
                    <div class="step-content">
                      <h5>Concept Creation</h5>
                      <p>Multiple professional logo concepts are created based on your business identity.</p>
                    </div>
                  </div>

                  <div class="step-item">
                    <div class="step-number">03</div>
                    <div class="step-content">
                      <h5>Revisions &amp; Refinement</h5>
                      <p>Selected designs are improved and refined according to your feedback and requirements.</p>
                    </div>
                  </div>

                  <div class="step-item">
                    <div class="step-number">04</div>
                    <div class="step-content">
                      <h5>Final Delivery</h5>
                      <p>Receive high-quality logo and branding files ready for websites, social media, and printing.</p>
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
              <div class="service-info">
                <h4>Service Details</h4>

                <ul class="service-facts">
                  <li>
                    <span class="fact-label">Delivery Time:</span>
                    <span class="fact-value">2 - 7 Days</span>
                  </li>

                  <li>
                    <span class="fact-label">Design Revisions:</span>
                    <span class="fact-value">Available</span>
                  </li>

                  <li>
                    <span class="fact-label">File Formats:</span>
                    <span class="fact-value">PNG, SVG, PDF, AI</span>
                  </li>

                  <li>
                    <span class="fact-label">Support:</span>
                    <span class="fact-value">Online Assistance</span>
                  </li>
                </ul>
              </div>

              <!-- Testimonial -->
              <div class="service-testimonial">
                <div class="testimonial-content">
                  <p>
                    "Vuxera delivered a modern and professional brand identity for our business. The logo design perfectly matched our vision and helped improve our online presence."
                  </p>

                  <div class="testimonial-author">
                    <img src="{{ asset('frontend/assets/img/person/logo.jpeg') }}" alt="Client Review" class="author-image">

                    <div class="author-info">
                      <h5>Business Client</h5>
                      <span>Startup Founder</span>
                    </div>
                  </div>
                </div>
              </div>

            <!-- Contact Form -->

                @include('home.partials.contactSidebar')

            <!-- / Contact Form -->

            </div>
          </div>
          <!-- End Sidebar -->

        </div>

      </div>

    </section><!-- /Service Details 4 Section -->

  </main>

 @endsection
