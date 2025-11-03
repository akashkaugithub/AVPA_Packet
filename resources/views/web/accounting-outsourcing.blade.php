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
<div class="container-fluid page-header-account mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Accounting Outsourcing</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Accounting Outsourcing</li>
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
                We provide reliable and cost-effective accounting outsourcing services, enabling you to focus on business growth while we manage your books.
            </p>

            <!-- <h3 class="mt-4">Why Choose This Service?</h3>
            <p>
                Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                stet lorem sit clita duo justo magna dolore erat amet.
            </p> -->

            <ul class="custom-list mb-4">
                <li><strong>Bookkeeping & Payroll Processing</strong> – Maintenance of accurate books of accounts, employee payroll, PF/ESI compliances, and salary structuring.</li>
                <li><strong>Virtual CFO Services</strong> – Strategic financial leadership without the cost of a full-time CFO, including budgeting, forecasting, and financial decision support.</li>
                <li><strong>Preparation of MIS Reports</strong> – Customized management information system reports for performance tracking and decision-making.</li>
                <li><strong>Finalization of Accounts</strong> – Preparation of financial statements as per applicable accounting standards, ready for audits and statutory filings.</li>
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