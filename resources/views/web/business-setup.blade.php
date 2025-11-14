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
<div class="container-fluid page-header-business mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Business Setup</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Business Setup</li>
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
                In today’s dynamic regulatory environment, staying compliant is a challenge for every business. Our team ensures timely adherence to all statutory requirements under the Companies Act, Income Tax Act, GST laws, and other applicable regulations. We manage corporate filings, ROC compliance, secretarial records, and regulatory reporting so that your business operates seamlessly without the risk of penalties or legal hurdles.
            </p>

            <!-- <h3 class="mt-4">Why Choose This Service?</h3> -->
            <p>
                We help businesses lay a strong foundation with proper structuring and regulatory compliance. Our team provides guidance from incorporation to ongoing governance.
            </p>

            <ul class="custom-list mb-4">
                <li><strong>Company Incorporation (Pvt Ltd, LLP, Partnership, OPC)</strong> – End-to-end incorporation services tailored to your business structure and growth vision.</li>
                <li><strong>Start-up Advisory & Registrations</strong> – Guidance on entity selection, registrations, intellectual property, tax benefits, and start-up India recognition.</li>
                <li><strong>ROC Filings & Secretarial Compliances</strong> – Preparation and filing of annual returns, resolutions, and secretarial records in compliance with the Companies Act.</li>
                <li><strong>FEMA & RBI Compliances</strong> – Advisory and filing support for cross-border transactions, foreign investments, and regulatory approvals.</li>
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