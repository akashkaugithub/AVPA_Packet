@php
use App\Models\Address;
$offices=Address::get();
@endphp
<style>
/* Hover se dropdown open hoga */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    /* gap remove */
}

.top-social a {
    display: inline-flex;
    /* ek hi line mein */
    align-items: center;
    justify-content: center;
    vertical-align: middle;
    /* proper center */
}

/* Desktop hover ke liye */
@media (min-width: 992px) {
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
}


/* Offices dropdown styling */
.offices-dropdown {
    width: 300px;
    max-height: 400px;
    overflow-y: auto;
    padding: 10px;
}

/* Accordion styling */
.office {
    background: #fff;
    color: #000;
    margin-bottom: 10px;
    border-radius: 5px;
    overflow: hidden;
}

.office-header {
    padding: 10px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    font-weight: bold;
    font-size: 14px;
    background: #f1f1f1;
}

.toggle-btn {
    background: #f26722;
    color: #fff;
    border-radius: 50%;
    width: 22px;
    height: 22px;
    text-align: center;
    line-height: 22px;
    font-size: 14px;
    font-weight: bold;
}

.office-details {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
    padding: 0 12px;
    background: #f7f7f7;
    font-size: 13px;
    line-height: 1.5;
}

.office-details.open {
    padding: 12px;
    max-height: 500px;
}

.office-details a {
    color: #007bff;
    text-decoration: none;
}

.whatsapp-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25d366; /* WhatsApp green */
    padding: 15px;
    border-radius: 50%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    color: white;
    z-index: 9999;
    transition: all 0.3s ease;
}

.whatsapp-icon:hover {
    background-color: #128c7e; /* Darker green on hover */
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
}

/* Optional: If you want to make the icon a little larger */
.whatsapp-icon i {
    font-size: 40px;
}
nav.navbar {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
    height: 80px !important;  /* Increase navbar height slightly to accommodate larger logo */
    display: flex;
    align-items: center;  /* Center the content vertically */
    position: relative;   /* Ensure dropdown is visible on top */
    z-index: 1000;        /* Make sure the navbar is on top of other elements */
}

/* Logo styling to ensure it fits within the navbar height */
.navbar-brand img {
    max-height: 170px;  /* Set a larger max height for the logo */
    width: auto;       /* Maintain aspect ratio */
}

/* Prevent the logo from affecting the navbar's height */
.navbar-brand {
    padding: 0 !important;
    margin: 0 !important;
    display: flex;
    align-items: center;
    gap: 10px;
    height: 100%;  /* Ensures the navbar height remains fixed */
}

/* 👇 Fix 1: Dropdown position correct karne ke liye */
.nav-item.dropdown .dropdown-menu.offices-dropdown {
    right: 0 !important;  /* Right aligned with button */
    left: auto !important;
    margin-top: 5px !important; /* Thoda spacing niche */
}

/* 👇 Fix 2: Dropdown ke andar click par close na ho */
.dropdown-menu.offices-dropdown {
    pointer-events: auto;
}

/* 👇 Bootstrap ka default close behavior disable karne ke liye */
.dropdown-menu.offices-dropdown.show {
    display: block;
}

/* 👇 Dropdown background fix */
.dropdown-menu.offices-dropdown {
    background: #ffffff !important;  /* White solid background */
    border: 1px solid #ddd !important;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15); /* Soft shadow */
    border-radius: 8px;
    backdrop-filter: none !important; /* Remove blur transparency if any */
    z-index: 9999;
}
</style>
<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn page-header" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
    <!-- 🔹 Social Icons Now on Left -->
    <div class="col-lg-6 px-5 text-start top-social">
        <a class="btn btn-light btn-sm-square rounded-circle ms-2" href="#"><small
                class="fab fa-facebook-f text-primary"></small></a>
        <a class="btn btn-light btn-sm-square rounded-circle ms-2" href="#"><small
                class="fa-brands fa-x-twitter text-primary"></small></a>
        <a class="btn btn-light btn-sm-square rounded-circle ms-2" href="#"><small
                class="fab fa-linkedin-in text-primary"></small></a>
        <a class="btn btn-light btn-sm-square rounded-circle ms-2" href="#"><small
                class="fab fa-instagram text-primary"></small></a>
    </div>

    <!-- 🔹 Our Offices Button Now on Right -->
    <div class="col-lg-6 px-5 text-end">
        <div class="nav-item dropdown">
            <button class="btn btn-outline-primary btn-sm px-3 py-1 dropdown-toggle" id="officesDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Our Offices
            </button>
            <div class="dropdown-menu offices-dropdown" aria-labelledby="officesDropdown">
                <!-- Accordion Start -->
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
                <!-- Accordion End -->
            </div>
        </div>
    </div>
</div>


    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center" style="gap: 100px;">
            <img src="{{ asset('web/img/avpal.png') }}" alt="AVPA Logo">
            <!--<h6 class="display-5 text-primary m-0">A V P A & CO</h6>-->
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="/about-us" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About</a>
        <div class="nav-item dropdown">
            <a href="/our-services" class="nav-link dropdown-toggle {{ Request::is('our-services*') ? 'active' : '' }}" id="servicesDropdown">
                Services
            </a>
            <div class="dropdown-menu border-light m-0" aria-labelledby="servicesDropdown">
                <a href="/audit-&-assurance" class="dropdown-item {{ Request::is('audit-&-assurance') ? 'active' : '' }}">Audit & Assurance</a>
                <a href="/taxation" class="dropdown-item {{ Request::is('taxation') ? 'active' : '' }}">Taxation Services</a>
                <a href="/business-setup" class="dropdown-item {{ Request::is('business-setup') ? 'active' : '' }}">Business Setup & Compliance</a>
                <a href="/accounting-outsourcing" class="dropdown-item {{ Request::is('accounting-outsourcing') ? 'active' : '' }}">Accounting & Outsourcing</a>
                <a href="/advisory-consulting" class="dropdown-item {{ Request::is('advisory-consulting') ? 'active' : '' }}">Advisory & Consultancy</a>
            </div>
        </div>

        <a href="/our-team" class="nav-item nav-link {{ Request::is('our-team') ? 'active' : '' }}">Our Team</a>
        <a href="/quick-links" class="nav-item nav-link {{ Request::is('quick-links') ? 'active' : '' }}">Quick Link</a>
        <a href="/industries" class="nav-item nav-link {{ Request::is('industries') ? 'active' : '' }}">Industries</a>
        <a href="/news-room" class="nav-item nav-link {{ Request::is('news-room') ? 'active' : '' }}">News</a>
        <a href="/contact-us" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact</a>
    </div>

    <div class="d-flex align-items-center ms-3">
        <!-- WhatsApp Button -->
        <a href="javascript:void(0)" class="whatsapp-icon" data-bs-toggle="modal" data-bs-target="#whatsappModal">
            <i class="fab fa-whatsapp fa-3x"></i>
        </a>
    </div>
</div>

    </nav>
</div>
<!-- Navbar End -->


<!-- WhatsApp Modal -->
<!-- WhatsApp Modal -->
<div class="modal fade" id="whatsappModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Choose Office to Chat on WhatsApp</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    @foreach($offices as $office)
                    @if(!empty($office->phone))
                    <a href="https://wa.me/91{{ $office->phone }}?text=Hello%20{{ urlencode($office->name) }}%20Office"
                        target="_blank" class="list-group-item list-group-item-action">
                        {{ $office->name }}
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



<script>
// ✅ Prevent dropdown from closing when clicking inside
document.addEventListener("click", function (e) {
    const dropdown = document.querySelector(".dropdown-menu.offices-dropdown");
    if (dropdown && dropdown.contains(e.target)) {
        e.stopPropagation();
    }
});

// ✅ Correct dropdown toggle + open position
document.addEventListener("DOMContentLoaded", function() {
    const officesDropdown = document.getElementById("officesDropdown");
    const dropdownMenu = document.querySelector(".offices-dropdown");

    officesDropdown.addEventListener("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        dropdownMenu.classList.toggle("show");
    });

    document.addEventListener("click", function(e) {
        if (!officesDropdown.contains(e.target)) {
            dropdownMenu.classList.remove("show");
        }
    });
});

// ✅ Accordion fix (open one at a time)
function toggleOffice(element) {
    const currentDetails = element.nextElementSibling;
    const allDetails = document.querySelectorAll(".office-details");
    const allBtns = document.querySelectorAll(".toggle-btn");

    allDetails.forEach(detail => {
        if (detail !== currentDetails) detail.classList.remove("open");
    });
    allBtns.forEach(btn => (btn.textContent = "+", btn.style.background = "#f26722"));

    const btn = element.querySelector(".toggle-btn");
    if (currentDetails.classList.contains("open")) {
        currentDetails.classList.remove("open");
        btn.textContent = "+";
        btn.style.background = "#f26722";
    } else {
        currentDetails.classList.add("open");
        btn.textContent = "-";
        btn.style.background = "#d9534f";
    }
}
</script>