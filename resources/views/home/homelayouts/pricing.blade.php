<section id="pricing" class="pricing-8 section">
<!-- Pricing Tabs -->
<div class="pricing-tabs text-center mb-5">

    <button class="pricing-tab active" onclick="showPricing('business')">
        Business Services
    </button>

    <button class="pricing-tab" onclick="showPricing('web')">
        Web Development
    </button>

</div>

{{-- Pricing Details Starts --}}

     @include('home.homelayouts.pricing_business')

     @include('home.homelayouts.pricing_web')


</section>
<script>

function showPricing(type) {

    const business = document.getElementById('business-pricing');
    const web = document.getElementById('web-pricing');

    const tabs = document.querySelectorAll('.pricing-tab');

    tabs.forEach(tab => tab.classList.remove('active'));

    if(type === 'business') {

        business.style.display = 'block';
        web.style.display = 'none';

        tabs[0].classList.add('active');

    } else {

        business.style.display = 'none';
        web.style.display = 'block';

        tabs[1].classList.add('active');

    }
}

</script>
