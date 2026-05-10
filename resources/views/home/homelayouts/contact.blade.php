  <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <h2>Contact Us</h2>
        <p>Have a project, business idea, or digital service requirement? Get in touch with Vuxera for professional support, consultation, and scalable digital solutions.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">

            <div class="contact-form-card">

              <div class="form-header">

                <div class="header-icon">
                  <i class="bi bi-chat-dots-fill"></i>
                </div>

                <h3>Let's Start a Conversation</h3>

                <p>
                  Whether you need web development, branding, Amazon solutions, or UK business support, our team is ready to assist you professionally and efficiently.
                </p>

              </div>

              <form action="{{ route('contact.send') }}" method="post" class="php-email-form">
              @csrf

                <div class="row">

                  <div class="col-md-6 mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                  </div>

                </div>

                <div class="mb-3">
                  <input type="tel" class="form-control" name="phone" placeholder="Your Phone ( Optional )">
                </div>

                <div class="mb-3">
                  <input type="text" class="form-control" name="subject" placeholder="What's this about?" required="">
                </div>

                <div class="mb-4">
                  <textarea class="form-control" name="message" rows="4" placeholder="Tell us more about your project..." required=""></textarea>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                {{-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent successfully. Thank you!
                  </div>
                </div> --}}

                <button type="submit" class="submit-btn">
                  <span>Send Message</span>
                  <i class="bi bi-send-fill"></i>
                </button>

              </form>

            </div>

          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">

            <div class="contact-info-area">

              <div class="info-header">

                <h3>Let’s Build Your Digital Success</h3>

                <p>
                  We provide online digital and business support services for startups, entrepreneurs, and growing companies across the UK and worldwide.
                </p>

              </div>

              <div class="contact-methods">

                <!-- Email -->
                <div class="method-card" data-aos="zoom-in" data-aos-delay="250">

                  <div class="card-icon">
                    <i class="bi bi-envelope-at"></i>
                  </div>

                  <div class="card-content">
                    <h5>Email Us</h5>
                    <p>info@vuxera.com</p>
                    <span class="response-time">Response within 24 hours</span>
                  </div>

                </div>

                <!-- WhatsApp -->
                <div class="method-card" data-aos="zoom-in" data-aos-delay="300">

                  <div class="card-icon">
                    <i class="bi bi-whatsapp"></i>
                  </div>

                  <div class="card-content">
                    <h5>WhatsApp Support</h5>
                    <p>+44 7392 736333</p>
                    <span class="response-time">Available for online assistance</span>
                  </div>

                </div>

                <!-- Location -->
                <div class="method-card" data-aos="zoom-in" data-aos-delay="350">

                  <div class="card-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>

                  <div class="card-content">
                    <h5>Business Location</h5>
                    <p>The Pavement Popes Lane, London, United Kingdom</p>
                    <span class="response-time">Serving clients online worldwide</span>
                  </div>

                </div>

              </div>

              <div class="additional-info" data-aos="fade-up" data-aos-delay="400">

                <div class="info-stats">

                  <div class="stat-item">
                    <div class="stat-number">24h</div>
                    <div class="stat-label">Average Response</div>
                  </div>

                  <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Projects Supported</div>
                  </div>

                  <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Client Satisfaction</div>
                  </div>

                </div>

                <div class="social-connect">

                  <h6>Connect With Us</h6>

                  <div class="social-links">
                    <a href="#" class="social-link">
                      <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#" class="social-link">
                      <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" class="social-link">
                      <i class="bi bi-facebook"></i>
                    </a>

                    <a href="https://wa.me/447123456789?text=Hello%20Vuxera%2C%20I%20need%20information" class="social-link" target="_blank">
                      <i class="bi bi-whatsapp"></i>
                    </a>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>
