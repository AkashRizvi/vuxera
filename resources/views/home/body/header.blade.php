<header id="header" class="header d-flex align-items-center sticky-top">

    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">


    <!-- Logo Image -->
            <img src="{{ asset('frontend/assets/img/Vuxera_Logo.png') }}" alt="Vuxera Logo">
    <!-- Logo Text -->
            {{-- <h1 class="sitename">Vuxera</h1> --}}

        </a>

        <!-- Navigation -->
        <nav id="navmenu" class="navmenu">

            <ul>

                <li>
                    <a href="{{ url('/#hero') }}" class="active">Home</a>
                </li>

                <li>
                    <a href="{{ url('/#about') }}">About</a>
                </li>

                <li>
                    <a href="{{ url('/#services') }}">Services</a>
                </li>

                <li>
                    <a href="{{ url('/#portfolio') }}">Portfolio</a>
                </li>

                <li>
                    <a href="{{ url('/#pricing') }}">Pricing</a>
                </li>

                <li>
                    <a href="{{ url('/#why-us') }}">Why Choose Us</a>
                </li>

                <!-- Services Dropdown -->
                <li class="dropdown">

                    <a href="#">
                        <span>Solutions</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>

                    <ul>

                        <li>
                            <a href="{{ url('/#services') }}">Web Development</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}">UK Business Setup</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}">Business Bank Account Setup</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}">Amazon Account Services</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}">Amazon Operations</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}">KYC Verification Services</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}">IT Consulting</a>
                        </li>

                        <li>
                            <a href="{{ url('/#services') }}"> Logo Design & Branding</a>
                        </li>

                    </ul>

                </li>

                <li>
                    <a href="{{ url('/#contact') }}">Contact </a>
                </li>

            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

        </nav>

        <!-- CTA Button -->
        <a class="btn-getstarted" href="{{ url('/#contact') }}">
            Free Consultation
        </a>

    </div>

</header>
