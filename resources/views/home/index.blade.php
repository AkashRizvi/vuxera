  @extends('home.home_master')
    @section('home')

  <main class="main">

    <!-- Hero 6 Section -->
        @include('home.homelayouts.hero')
    <!-- About Section -->
        @include('home.homelayouts.about')
    <!-- /About Section -->

    <!-- Services Section -->
        @include('home.homelayouts.services')
    <!-- /Services Section -->

    <!-- Portfolio Section -->
        @include('home.homelayouts.portfolio')
    <!-- /Portfolio Section -->

    <!-- Why Us Section -->
        @include('home.homelayouts.why-us')
    <!-- /Why Us Section -->

    <!-- Pricing 8 Section -->
        @include('home.homelayouts.pricing')
    <!-- /Pricing 8 Section -->

    <!-- Pricing 8 Section -->
        @include('home.homelayouts.pricing_web')
    <!-- /Pricing 8 Section -->

    <!-- Contact Section -->
        @include('home.homelayouts.contact')
    <!-- /Contact Section -->

  </main>


@endsection
