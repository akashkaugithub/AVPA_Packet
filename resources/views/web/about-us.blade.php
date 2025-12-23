@extends('web.layouts.app')
@section('content')



<style>
.diamond-layout {
    position: relative;
    width: 850px;
    /* diamond area */
    height: 650px;
    margin: 0 auto;
}

.diamond-layout .feature-box {
    position: absolute;
    width: 280px;
    /* box width */
    height: 260px;
    /* rectangle height */
    background: #fff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Top */
.diamond-layout .feature-box:nth-child(1) {
    top: 0;
    left: 50%;
    transform: translateX(-50%);
}

/* Left */
.diamond-layout .feature-box:nth-child(2) {
    top: 50%;
    left: 0;
    transform: translateY(-50%);
}

/* Right */
.diamond-layout .feature-box:nth-child(3) {
    top: 50%;
    right: 0;
    transform: translateY(-50%);
}

/* Bottom */
.diamond-layout .feature-box:nth-child(4) {
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}

/* Responsive */
@media(max-width: 768px) {
    .diamond-layout {
        width: 100%;
        height: auto;
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        position: static;
    }

    .diamond-layout .feature-box {
        position: static;
        transform: none;
        margin: 0 auto;
    }
}
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header-about mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown" style="color:white;">About</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{asset('web/img/about.jpg')}}">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                <h1 class="display-5 mb-4">We Help Our Clients To Grow Their Business</h1>
                @foreach($about as $item)
                <p class="mb-4">{!! $item->description !!}</p>
                @endforeach
                <div class="border rounded p-4">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                aria-selected="true">&nbsp;&nbsp; Our Promise &nbsp;&nbsp;</button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                aria-selected="false">&nbsp;&nbsp; Our Mission &nbsp;&nbsp;</button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                aria-selected="false">&nbsp;&nbsp; Our Vision &nbsp;&nbsp;</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                            aria-labelledby="nav-story-tab">
                            <p>We don’t just act as accountants; we act as trusted advisors. By leveraging modern
                                technology, regulatory knowledge, and years of industry experience, we strive to be a
                                long-term partner in the success journey of our clients.</p>
                            <p class="mb-0">At A V P A & Co., we measure our success by the success of those we serve.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                            <p>At A V P A & Co., our mission is to provide reliable, innovative, and result-oriented
                                professional services that help clients navigate complex financial and regulatory
                                landscapes with ease.</p>
                            <p class="mb-0">We are committed to upholding the highest standards of integrity, accuracy,
                                and professionalism in every assignment we undertake.</p>
                            <p>By combining traditional expertise with modern solutions, we strive to deliver services
                                that not only ensure compliance but also enable long-term financial growth and
                                stability.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <p>Our vision is to be recognized as a trusted financial partner for individuals,
                                entrepreneurs, and businesses across industries. </p>
                            <p class="mb-0">We aspire to build lasting relationships with our clients by being a
                                constant support in their journey of compliance, efficiency, and growth.</p>
                            <p>We aim to position ourselves as a firm that represents not just technical expertise, but
                                also trust, ethics, and innovation in the field of Chartered Accountancy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>No Hidden Cost</h4>
                                <span>“Transparent pricing, ethical billing, and absolutely no hidden costs guaranteed.”</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Dedicated Team</h4>
                                <span>“A Dedicated Team Committed to Excellence, Accuracy, and Client Success.”</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <span>“Available 24/7 via Email and WhatsApp for Seamless Client Support.”</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">
                    {{ $fact->trusted_clients ?? 0 }}
                </h1>
                <span class="fs-5 text-white">Trusted Clients</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>

            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">
                    {{ $fact->finished_projects ?? 0 }}
                </h1>
                <span class="fs-5 text-white">Projects Completed</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>

            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">
                    {{ $fact->year_of_experience ?? 0 }}
                </h1>
                <span class="fs-5 text-white">Years of Experience</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>

            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-award fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">
                    {{ $fact->visited_experience ?? 0 }}
                </h1>
                <span class="fs-5 text-white">Awards Achieved</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
        </div>
    </div>
</div>

<!-- Facts End -->

<!-- Features Start -->
<!-- <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary py-3 px-5" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Fast Executions</h4>
                                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                                        <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Guide & Support</h4>
                                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                                        <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Financial Secure</h4>
                                <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                                <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Features Start -->
<div class="container-xxl feature py-5">
    <div class="container text-center">
        <!-- Title -->
        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
        <h1 class="display-5 mb-5">Few Reasons Why People Choosing Us!</h1>

        <!-- Diamond Layout -->
        <div class="diamond-layout">
            <!-- Top -->
            <div class="feature-box border rounded p-4">
                <i class="fa fa-check fa-3x mb-3" style="color: #f37e28;"></i>
                <h4 class="mb-3">Comprehensive Expertise</h4>
                <p class="mb-3">From start-up registrations to complex tax litigation, from statutory audits to
                    strategic financial planning, we cover the entire spectrum of professional services.</p>
                <!-- <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a> -->
            </div>

            <!-- Left -->
            <div class="feature-box border rounded p-4">
                <i class="fa fa-check fa-3x mb-3" style="color: #59ba4d;"></i>
                <h4 class="mb-3">Client-Centric Approach</h4>
                <p class="mb-3">Every client, whether an individual or a corporation, receives personalized attention
                    and solutions designed to add measurable value.</p>
                <!-- <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a> -->
            </div>

            <!-- Right -->
            <div class="feature-box border rounded p-4">
                <i class="fa fa-check fa-3x mb-3" style="color: #59ba4d;"></i>
                <h4 class="mb-3">Ethics & Integrity</h4>
                <p class="mb-3">We uphold the highest standards of professional ethics and confidentiality in all our
                    engagements.</p>
                <!-- <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a> -->
            </div>

            <!-- Bottom -->
            <div class="feature-box border rounded p-4">
                <i class="fa fa-check fa-3x mb-3" style="color: #f37e28;"></i>
                <h4 class="mb-3">Commitment to Excellence</h4>
                <p class="mb-3">Our aim is not just to meet compliance requirements, but to create systems that help
                    clients grow sustainably.</p>
                <!-- <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a> -->
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Team Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p>
            <h1 class="display-5 mb-5">Exclusive Team</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Kate Winslet</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Jac Jacson</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Doris Jordan</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->
@endsection