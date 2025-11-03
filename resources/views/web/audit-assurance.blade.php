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
<div class="container-fluid page-header-audit mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Audit Assurance</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Audit Assurance</li>
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
                An audit is more than a statutory requirement—it is a tool for building credibility and strengthening trust. Our audit methodology emphasizes independence, transparency, and attention to detail. We conduct statutory audits, internal audits, tax audits, and special purpose reviews that provide stakeholders with confidence, uncover process improvements, and mitigate risks.
            </p>

            <!-- <h3 class="mt-4">Why Choose This Service?</h3> -->
            <p>
                Our Audit & Assurance services go beyond statutory requirements to provide valuable insights into your organization’s operations and controls. We focus on transparency, risk management, and value addition.
            </p>

            <ul class="custom-list mb-4">
                <li><strong>Statutory Audit</strong>  – Independent examination of financial statements in compliance with the Companies Act and applicable laws, ensuring true and fair representation of financial position.</li>
                <li><strong>Tax Audit</strong> – Comprehensive review of accounts under Section 44AB of the Income Tax Act, ensuring compliance with reporting obligations and identification of tax planning opportunities.</li>
                <li><strong>Internal & Management Audit</strong> – In-depth evaluation of internal controls, processes, and governance systems to enhance efficiency, minimize risks, and strengthen decision-making.</li>
                <li><strong>GST & Compliance Audit</strong> – Verification of GST records, returns, and compliance framework to ensure accurate reporting and avoid litigation risks.</li>
                <li><strong>Forensic & Stock Audit</strong> – Specialized audits to detect frauds, irregularities, and misstatements, along with verification of stock and inventory management for operational accuracy.</li>
            </ul>

            <!-- <h3 class="mt-4">Conclusion</h3>
            <p>
                Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet.
            </p> -->
        </div>

        <!-- CTA -->
        <!--      -->
    </div>
</div>
<!-- Detail Page End -->
@endsection