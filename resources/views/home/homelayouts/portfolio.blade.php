   <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Explore a selection of our recent projects, including web development, branding, business solutions, and digital services delivered for startups, online businesses, and growing brands.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All Projects</li>
            <li data-filter=".filter-web" class="">Web Development</li>
            <li data-filter=".filter-branding" class="">Branding</li>
            <li data-filter=".filter-business" class="">Business Services</li>
            <li data-filter=".filter-amazon">Amazon Solutions</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300" style="position: relative; height: 1040.4px;">

<!-- Project 1 Corporate Business Website -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/Web_Development.png') }}" alt="Corporate business website" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.png') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('webDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Web Development</span>
                  </div>

                  <h3>Corporate Business Website</h3>

                  <p>
                    Responsive and SEO-optimized website developed for a growing business to improve online visibility and customer engagement.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">Bootstrap</span>
                    <span class="tech-badge">MySQL</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 2 Logo &amp; Brand Identity -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/LogoDesign.png') }}" alt="Brand identity design" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/LogoDesign.png') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('logoDesignDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Branding</span>
                  </div>

                  <h3>Logo &amp; Brand Identity</h3>

                  <p>
                    Complete branding package including logo design, business identity assets, and digital marketing visuals.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Illustrator</span>
                    <span class="tech-badge">Photoshop</span>
                    <span class="tech-badge">Branding</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 3 UK LTD Business Support -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-business">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/uk_ltd.webp') }}" alt="UK business setup services" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/uk_ltd.webp') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('businessDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Business Services</span>
                  </div>

                  <h3>UK LTD Business Support</h3>

                  <p>
                    Assisted entrepreneurs with UK LTD company setup, documentation guidance, and business support services.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Company Setup</span>
                    <span class="tech-badge">KYC</span>
                    <span class="tech-badge">Consulting</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 4 Amazon Seller Account Solutions -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-amazon" style="position: absolute; left: 0px; top: 0px;">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/aws_services.png') }}" alt="Amazon account solutions" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/aws_services.png') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('amazonDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Amazon Services</span>
                  </div>

                  <h3>Amazon Seller Account Solutions</h3>

                  <p>
                    Supported clients with Amazon seller account creation, operational setup, and verification processes.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Amazon</span>
                    <span class="tech-badge">Operations</span>
                    <span class="tech-badge">Verification</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 5 UK Business Bank Account Setup -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-business" style="position: absolute; left: 439.987px; top: 0px;">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/ltd company formation.jpg') }}" alt="UK business setup services" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/ltd company formation.jpg') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('businessDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Business Services</span>
                  </div>

                  <h3>UK Business Bank Account Setup</h3>

                  <p>
                    Create UK business bank accounts with guidance on documentation and compliance requirements.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Bank Account Setup</span>
                    <span class="tech-badge">KYC</span>
                    <span class="tech-badge">Documentation</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 6 Company Update &amp; Modification Services -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-business" style="position: absolute; left: 879.974px; top: 0px;">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/Incorporation-of-Company.jpg') }}" alt="Modification Services" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/Incorporation-of-Company.jpg') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('businessDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">BUSINESS SERVICES</span>
                  </div>

                  <h3>Company Update &amp; Modification Services</h3>

                  <p>
                    Complete support for updating company details including name change, business address, and director or ownership information with full compliance.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">Admin Panel</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 7 Modern E-Commerce Store -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-web" style="position: absolute; left: 439.987px; top: 0px;">
              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/Web_Development.png') }}" alt="Web Development Services" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/Web_Development.png') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('webDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">E-Commerce</span>
                  </div>

                  <h3>Modern E-Commerce Store</h3>

                  <p>
                    Custom eCommerce platform designed for online businesses with secure checkout, responsive design, and optimized user experience.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">React</span>
                    <span class="tech-badge">MYSQL</span>
                  </div>

                </div>

              </div>

            </div>



<!-- Project 8 Amazon Account Creation -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-amazon" style="position: absolute; left: 439.987px; top: 0px;">

              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/aws.png') }}" alt="Amazon account solutions" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/aws.png') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('amazonDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Amazon Services</span>
                  </div>

                  <h3>Amazon Account Creation</h3>

                  <p>
                    Provide service to create ready to go Amazon Seller Account UK based on LTD
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">Account Creation</span>
                    <span class="tech-badge">Deposite Method</span>
                    <span class="tech-badge">Professional LOA</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 9 Amazon Store Operations -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-amazon" style="position: absolute; left: 879.974px; top: 0px;">

              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/aws_services.png') }}" alt="Amazon account solutions" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/aws_services.png') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('amazonDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Amazon Services</span>
                  </div>

                  <h3>Amazon Store Operations</h3>

                  <p>
                    End-to-end marketplace management covering product listings, fulfillment (FBA/FBM), inventory control, and performance optimization.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">FBA/FBM</span>
                    <span class="tech-badge">Listing Optimization</span>
                    <span class="tech-badge">Inventory Management</span>
                  </div>

                </div>

              </div>
            </div>



<!-- Project 10 KYC Verification Services -->
            <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-amazon" style="position: absolute; left: 0px; top: 520.2px;">

              <div class="portfolio-wrapper">

                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/kyc.jpg') }}" alt="Amazon account solutions" class="img-fluid" loading="lazy">

                  <div class="portfolio-hover">
                    <div class="portfolio-actions">

                      {{-- <a href="{{ asset('frontend/assets/img/portfolio/kyc.jpg') }}" class="glightbox action-btn preview-btn" title="Preview Project"> --}}
                        {{-- <i class="bi bi-eye"></i> --}}
                      </a>

                      <a href="{{ route('amazonDetails') }}" class="action-btn details-btn" title="View Details">
                        <i class="bi bi-arrow-up-right"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="portfolio-content">

                  <div class="portfolio-meta">
                    <span class="project-type">Amazon Services</span>
                  </div>

                  <h3>KYC Verification Services</h3>

                  <p>
                    Provide complete Know Your Customer (KYC) solutions for secure identity verification and compliance requirements.
                  </p>

                  <div class="portfolio-tech">
                    <span class="tech-badge">ID Verification</span>
                    <span class="tech-badge">Address Proof</span>
                    <span class="tech-badge">Charge / Deposite Methods</span>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="portfolio-cta text-center" data-aos="fade-up" data-aos-delay="400">

          <h4>Ready to Build Something Exceptional?</h4>

          <p>
            Partner with Vuxera to create digital solutions that support business growth and long-term success.
          </p>

          <div class="cta-buttons">
            <a href="#contact" class="btn btn-primary">Start a Project</a>
            <a href="#services" class="btn btn-outline">Explore Services</a>
          </div>

        </div>

      </div>

    </section>
