@extends('home.home_master')
@section('home')

<main class="main">

  <!-- Page Title -->
  <div class="page-title">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/"><i class="bi bi-house"></i> Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="/services">Services</a>
          </li>
          <li class="breadcrumb-item active current">
            IT Services &amp; Consultation
          </li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h1>IT Services &amp; Consultation</h1>
      <p>
        Professional IT consulting and technical support services to help
        businesses optimize infrastructure, improve security, streamline
        operations, and implement reliable technology solutions.
      </p>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Service Details 3 Section -->
  <section id="service-details-3" class="service-details-3 section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <!-- Service Overview -->
        <div class="col-lg-8">
          <div class="service-content">

            <h2>Complete IT Solutions for Modern Businesses</h2>

            <p class="lead">
              We provide expert IT consultation, infrastructure planning,
              troubleshooting, security implementation, and cloud solutions
              tailored to startups, entrepreneurs, and growing businesses.
            </p>

            <div class="service-image" data-aos="fade-up" data-aos-delay="200">
              <img
                src="{{ asset('frontend/assets/img/portfolio/it_consultation.jpeg') }}" alt="IT Services and Consultation" class="img-fluid rounded">
            </div>

            <p>
              Whether you need help setting up office systems, securing your
              network, migrating to the cloud, or solving technical issues,
              our IT services are designed to keep your business running
              efficiently and securely.
            </p>

            <!-- Service Features -->
            <div class="service-features" data-aos="fade-up" data-aos-delay="300">
              <h4>What's Included</h4>

              <div class="row gy-3">

                <div class="col-md-6">
                  <div class="feature-item">
                    <i class="bi bi-hdd-network flex-shrink-0"></i>
                    <div>
                      <h5>Infrastructure Setup</h5>
                      <p>
                        Installation and configuration of servers, workstations,
                        printers, and office networks.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="feature-item">
                    <i class="bi bi-shield-lock flex-shrink-0"></i>
                    <div>
                      <h5>Cybersecurity Solutions</h5>
                      <p>
                        Firewall configuration, antivirus deployment, and
                        security best practices implementation.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="feature-item">
                    <i class="bi bi-cloud-arrow-up flex-shrink-0"></i>
                    <div>
                      <h5>Cloud Migration</h5>
                      <p>
                        Migration to cloud platforms such as Google Workspace,
                        Microsoft 365, and cloud storage systems.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="feature-item">
                    <i class="bi bi-tools flex-shrink-0"></i>
                    <div>
                      <h5>Technical Troubleshooting</h5>
                      <p>
                        Fast diagnosis and resolution of hardware, software,
                        and connectivity issues.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="feature-item">
                    <i class="bi bi-database-check flex-shrink-0"></i>
                    <div>
                      <h5>Backup &amp; Recovery</h5>
                      <p>
                        Automated backup strategies and disaster recovery
                        planning to protect critical business data.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="feature-item">
                    <i class="bi bi-headset flex-shrink-0"></i>
                    <div>
                      <h5>Remote IT Support</h5>
                      <p>
                        Ongoing online support and consultation for day-to-day
                        technical assistance.
                      </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Process -->
            <div class="service-process" data-aos="fade-up" data-aos-delay="400">

              <h4>Our Process</h4>

              <div class="process-steps">

                <div class="step-item">
                  <div class="step-number">01</div>
                  <div class="step-content">
                    <h5>Assessment &amp; Consultation</h5>
                    <p>
                      We analyze your existing systems and identify technology
                      challenges and opportunities.
                    </p>
                  </div>
                </div>

                <div class="step-item">
                  <div class="step-number">02</div>
                  <div class="step-content">
                    <h5>Solution Planning</h5>
                    <p>
                      We design practical IT solutions aligned with your
                      business objectives and budget.
                    </p>
                  </div>
                </div>

                <div class="step-item">
                  <div class="step-number">03</div>
                  <div class="step-content">
                    <h5>Implementation</h5>
                    <p>
                      Deployment and configuration of infrastructure, security,
                      and cloud systems.
                    </p>
                  </div>
                </div>

                <div class="step-item">
                  <div class="step-number">04</div>
                  <div class="step-content">
                    <h5>Support &amp; Optimization</h5>
                    <p>
                      Continuous monitoring, maintenance, and technical support
                      to ensure peak performance.
                    </p>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <!-- End Service Content -->

        <!-- Sidebar -->
        <div class="col-lg-4">
          <div class="sidebar" data-aos="fade-up" data-aos-delay="200">

            <!-- Service Quick Facts -->
            <div class="service-info">
              <h4>Service Details</h4>

              <ul class="service-facts">

                <li>
                  <span class="fact-label">Delivery:</span>
                  <span class="fact-value">Remote &amp; Online</span>
                </li>

                <li>
                  <span class="fact-label">Consultation:</span>
                  <span class="fact-value">One-Time or Ongoing</span>
                </li>

                <li>
                  <span class="fact-label">Support:</span>
                  <span class="fact-value">Business Hours</span>
                </li>

                <li>
                  <span class="fact-label">Coverage:</span>
                  <span class="fact-value">Worldwide</span>
                </li>

              </ul>
            </div>

            <!-- Highlight Box -->
            <div class="service-testimonial">
              <div class="testimonial-content">
                <p>
                  We provide reliable IT expertise to help businesses reduce
                  downtime, improve security, and scale with confidence.
                </p>

                <div class="testimonial-author">
                  <img
                    src="{{ asset('frontend/assets/img/person/logo.jpeg') }}"
                    alt="Vuxera"
                    class="author-image">

                  <div class="author-info">
                    <h5>Vuxera</h5>
                    <span>IT Services &amp; Consultation</span>
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

  </section>
  <!-- /Service Details 3 Section -->

</main>

@endsection
