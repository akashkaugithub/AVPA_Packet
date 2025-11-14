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
<div class="container-fluid page-header-term mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Term Condition</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Term Condition</li>
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
        </div> -->

        <!-- Featured Image -->
        <div class="mb-4 text-center">
            <!-- <img src="https://via.placeholder.com/900x400" alt="Detail Image" class="img-fluid rounded shadow"> -->
        </div>

        <!-- Content -->
        <div class="content text-start">
            <p>
                 {!! $policy->terms_condition  ?? 'No Term Condition found.' !!}
            </p>

            <!-- <h3 class="mt-4">Our Audit & Assurance services go beyond statutory requirements to provide valuable insights into your organization’s operations and controls. We focus on transparency, risk management, and value addition.</h3> -->
             <!-- <p>We provide end-to-end taxation services, ensuring that your tax matters are handled with accuracy, foresight, and maximum efficiency.</p> -->
            <!-- <p>
                Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                stet lorem sit clita duo justo magna dolore erat amet.
            </p> -->

            <!-- <ul class="custom-list mb-4">
                <li><strong>Income Tax Return Filing</strong>   – Hassle-free preparation and filing of individual, corporate, and trust income tax returns with compliance to all statutory norms.</li>
                <li><strong>Tax Planning & Advisory</strong>   – Strategic tax planning tailored to minimize liabilities and optimize savings within the framework of law.</li>
                <li><strong>TDS & Advance Tax Compliance</strong>   – Assistance with timely deduction, deposit, and filing of TDS returns along with advance tax calculations and payments</li>
                <li><strong>GST Registration & Returns</strong>   – End-to-end support in GST registration, monthly/quarterly/annual return filing, and reconciliation.</li>
                <li><strong>GST Audit & Litigation</strong>   – Representation before GST authorities, handling assessments, audits, and litigation with complete documentation and expert advisory.</li>
            </ul> -->

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