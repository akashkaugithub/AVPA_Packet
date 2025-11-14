@extends('web.layouts.app')
@section('content')


<style>
.content p {
    line-height: 1.8;
    margin-bottom: 1rem;
}

.content h3 {
    margin-top: 2rem;
    font-weight: 600;
}

.custom-list {
    list-style-type: disc;
    /* simple bullet (•) */
    padding-left: 20px;
    /* thoda space bullets ke liye */
}

.custom-list li {
    margin-bottom: 10px;
    line-height: 1.6;
}
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header-advisor mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Advisory consulting</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Advisory consulting</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Detail Page Start -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Title -->
        <!-- <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Trusted Services</h1>
            <p class="text-muted">Posted on Sep 8, 2025 · By Admin</p>
        </div> -->

        <!-- Featured Image -->
        <div class="mb-4 text-center">
            <!-- <img src="https://via.placeholder.com/900x400" alt="Detail Image" class="img-fluid rounded shadow"> -->
        </div>

        <!-- Content -->
        <div class="content text-start">
            <p>
                Our advisory solutions are designed to help businesses achieve financial clarity, operational efficiency, and long-term success.
            </p>

            <!-- <h3 class="mt-4">Why Choose This Service?</h3>
            <p>
                Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                stet lorem sit clita duo justo magna dolore erat amet.
            </p> -->

            <ul class="custom-list mb-4">
                <li><strong>Valuation & Due Diligence</strong> – Independent business valuation, financial modelling, and due diligence for mergers, acquisitions, and investments.</li>
                <li><strong>Business Restructuring</strong> – Advisory on organizational restructuring, mergers, demergers, and succession planning for efficient operations and tax optimization.</li>
                <li><strong>Financial Planning & Investment Advisory</strong> – Tailored strategies for wealth creation, retirement planning, and investment management with a focus on long-term financial security.</li>
            </ul>

            <!-- <h3 class="mt-4">Conclusion</h3>
            <p>
                Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet.
            </p> -->
        </div>

        <!-- CTA -->
        <!-- <div class="text-center mt-5">
            <a href="#" class="btn btn-primary btn-lg px-5 py-3">Contact Us</a>
        </div> -->
    </div>
</div>
<!-- Detail Page End -->
@endsection