@php
use App\Models\Address;
$offices = Address::get();
@endphp 
<style>
    .navbar-brand-footer img {
    max-height: 281px; /* Max height for the logo */
    width: auto;      /* Maintain aspect ratio */
    height: auto;
    padding-bottom: 93px;
}
</style>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <!-- ✅ Replace 'Our Offices' with LOGO -->
            <div class="col-lg-3 col-md-6">
                <!--<img src="YOUR_LOGO_PATH_HERE" alt="Company Logo" class="img-fluid mb-3">-->
                <a href="/" class="navbar-brand-footer ms-4 ms-lg-0 d-flex align-items-center" style="gap: 100px;">
            <img src="{{ asset('web/img/avpal.png') }}" alt="AVPA Logo">
            <!--<h6 class="display-5 text-primary m-0">A V P A & CO</h6>-->
        </a>
                <!-- Optional: yaha tagline dal sakte ho -->
                {{-- <p>Providing Trusted Financial Solutions</p> --}}
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Services</h4>
                <a class="btn btn-link" href="/audit-&-assurance">Audit & Assurance</a>
                <a class="btn btn-link" href="/taxation">Taxation Service</a>
                <a class="btn btn-link" href="/business-setup">Business Setup & Compliance</a>
                <a class="btn btn-link" href="/accounting-outsourcing">Accounting & Outsourcing</a>
                <a class="btn btn-link" href="advisory-consulting">Advisory & Consultancy</a>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="">Our Team</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="/term-condition">Terms & Condition</a>
                <a class="btn btn-link" href="/privacy-policy">Privacy Policy</a>
            </div>

            <!-- ✅ Replace Newsletter with Our Offices Accordion -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Offices</h4>

                <div class="office-container">
                    @foreach($offices as $index => $office)
                        <div class="office {{ $index === 0 ? 'open' : '' }}">
                            <div class="office-header" onclick="toggleOffice(this)">
                                {{ $office->name }}
                                <span class="toggle-btn">{{ $index === 0 ? '-' : '+' }}</span>
                            </div>
                            <div class="office-details {{ $index === 0 ? 'open' : '' }}">
                                {!! $office->address !!}<br>
                                <strong>Ph. No.:</strong> +91-{{ $office->phone }}<br>
                                <a href="mailto:{{ $office->email }}">{{ $office->email }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">AVPA & CO</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Developed By <a class="border-bottom" href="https://nextvisionwebsolution.com/">Next Vision Web Solution</a>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Accordion CSS (same as before) -->
<style>
.office-container { background: transparent; }
.office { background: #fff; color: #000; margin-bottom: 10px; border-radius: 5px; overflow: hidden; }
.office-header { padding: 10px 15px; display: flex; align-items: center; justify-content: space-between; cursor: pointer; font-weight: bold; font-size: 14px; }
.toggle-btn { background: #f37e28; color: #fff; border-radius: 50%; width: 22px; height: 22px; text-align: center; line-height: 22px; font-size: 14px; font-weight: bold; flex-shrink: 0; }
.office-details { max-height: 0; overflow: hidden; transition: max-height 0.4s ease; padding: 0 12px; background: #f7f7f7; font-size: 13px; line-height: 1.5; }
.office-details.open { padding: 12px; max-height: 500px; }
.office-details a { color: #007bff; text-decoration: none; }
.office.open .office-details { display: block; }
.office.open .toggle-btn { background: #59ba4d; }
</style>

<!-- ✅ Accordion Script (same as before) -->
<script>
function toggleOffice(element) {
    const office = element.parentElement;
    const details = office.querySelector(".office-details");
    const btn = element.querySelector(".toggle-btn");

    if (details.classList.contains("open")) {
        details.classList.remove("open");
        btn.textContent = "+";
        btn.style.background = "#f37e28";
    } else {
        details.classList.add("open");
        btn.textContent = "-";
        btn.style.background = "#59ba4d";
    }
}
</script>
