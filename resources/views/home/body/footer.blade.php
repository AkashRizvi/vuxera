 <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">

      <div class="row gy-4">

        <!-- About -->
        <div class="col-lg-4 col-md-6 footer-about">

          <a href="index.html" class="logo d-flex align-items-center">
           <!-- Logo Image -->
            <img src="{{ asset('frontend/assets/img/Vuxera_Logo.png') }}" alt="Vuxera Logo">
              <!-- Logo Text -->
            {{-- <span class="sitename">Vuxera</span> --}}
          </a>

          <div class="footer-contact pt-3">

            <p>The Pavement Popes Lane</p>
            <p>London, United Kingdom</p>

            <p class="mt-3">
              <strong>WhatsApp:</strong>
              <span>+44 7392 736333</span>
            </p>

            <p>
              <strong>Email:</strong>
              <span>info@vuxera.com</span>
            </p>

          </div>

          <div class="social-links d-flex mt-4">

            <a href="#">
              <i class="bi bi-linkedin"></i>
            </a>

            <a href="#">
              <i class="bi bi-instagram"></i>
            </a>

            <a href="#">
              <i class="bi bi-facebook"></i>
            </a>

            <a href="https://wa.me/447123456789?text=Hello%20Vuxera%2C%20I%20need%20information" class="social-link" target="_blank">
              <i class="bi bi-whatsapp"></i>
            </a>

          </div>

        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-3 footer-links">

          <h4>Quick Links</h4>

          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

        </div>

        <!-- Services -->
        <div class="col-lg-3 col-md-3 footer-links">

          <h4>Our Services</h4>

          <ul>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">UK Business Setup</a></li>
            <li><a href="#">Amazon Account Services</a></li>
            <li><a href="#">IT Consulting</a></li>
            <li><a href="#">Logo Design &amp; Branding</a></li>
          </ul>

        </div>

        <!-- Business Support -->
        <div class="col-lg-3 col-md-3 footer-links">

          <h4>Business Support</h4>

          <ul>
            <li><a href="#">Business Bank Account Setup</a></li>
            <li><a href="#">Company Creation Modification Services</a></li>
            <li><a href="#">KYC Verification Support</a></li>
            <li><a href="#">Amazon Operations</a></li>
            <li><a href="#">Professional Websites</a></li>
            <li><a href="#">Digital Solutions </a></li>
          </ul>

        </div>

      </div>

    </div>

    <div class="container copyright text-center mt-4">

      <p>
        © <span>Copyright</span>
        {{-- <strong class="px-1 sitename">Vuxera</strong> --}}
         <!-- Logo Image -->
            <img src="{{ asset('frontend/assets/img/Vuxera_copywrite.png') }}" alt="Vuxera Logo" style="height: 10px; vertical-align: top;">
        <span>All Rights Reserved</span>
      </p>

    </div>

  </footer>
