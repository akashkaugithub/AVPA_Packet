@extends('web.layouts.app')
@section('content')

<style>
.project-image {
    width: 100%;
    height: 250px;
    /* apne design ke hisaab se set karo */
    object-fit: cover;
    /* image crop hoke uniform dikhegi */
}

.owl-nav button {
    position: absolute;
    top: 40%;
    transform: translateY(-50%);
    background: rgba(100, 149, 237, 0.7);
    /* halka blue bg */
    color: #fff !important;
    border: none;
    border-radius: 50%;
    width: 45px;
    height: 45px;
    font-size: 20px !important;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.owl-nav button:hover {
    background: rgba(100, 149, 237, 1);
    /* hover pe dark blue */
}

.owl-nav .owl-prev {
    left: -55px;
    /* slider ke left side */
}

.owl-nav .owl-next {
    right: -55px;
    /* slider ke right side */
}

.service-card {
    background-color: #fff;
    color: #1e73be;
    border-radius: 12px;
    padding: 50px 30px;
    /* box ke andar bhi extra space */
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* balance content */
    gap: 25px;
    /* har element ke beech spacing */
}

.service-card .icon {
    color: #1e73be;
    font-size: 40px;
    /* thoda bada bhi kar diya */
    transition: all 0.3s ease;
}

.service-card .title {
    font-weight: 600;
    margin: 0;
    /* margin reset */
    font-size: 20px;
    color: #000;
    transition: all 0.3s ease;
}

.service-card .explore {
    display: inline-block;
    color: #1e73be;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-top: auto;
    /* button ko neeche push karega */
}

.service-card:hover {
    background-color: #1e73be;
    color: #fff;
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
}

.service-card:hover .icon,
.service-card:hover .title,
.service-card:hover .explore {
    color: #fff;
}
.service-card {
    background-color: #fff;
    color: #1e73be;
    border-radius: 12px;
    padding: 50px 30px;
    /* box ke andar bhi extra space */
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* balance content */
    gap: 25px;
    /* har element ke beech spacing */
}

.service-card .icon {
    color: #1e73be;
    font-size: 40px;
    /* thoda bada bhi kar diya */
    transition: all 0.3s ease;
}

.service-card .title {
    font-weight: 600;
    margin: 0;
    /* margin reset */
    font-size: 20px;
    color: #000;
    transition: all 0.3s ease;
}

/* Hover effect */
.service-card .service-description {
    color: #60626D;
    font-family: 'Open Sans', Sans-serif;
    transition: color 0.3s ease;
}

.service-card .explore {
    display: inline-block;
    color: #1e73be;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-top: auto;
    /* button ko neeche push karega */
}

.service-card:hover {
    background-color: #1e73be;
    color: #fff;
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
}

.service-card:hover .service-description {
    color: #fff;
}

.service-card:hover .icon,
.service-card:hover .title,
.service-card:hover .explore {
    color: #fff;
    
}  

/* Style for the section title */
.section-title {
    color: #fff;  /* White color for the title */
    font-size: 28px;  /* Font size of 28px */
    font-family: 'Open Sans', Sans-serif;  /* Font family */
    font-weight: bold;  /* Optional: makes the title bold */
}

/* Style for the underline */
.underline {
    width: 40px;  /* Width of the underline */
    height: 4px;  /* Height of the underline */
    background-color: #f37e28;  /* Orange color for the underline */
    margin-top: 8px;  /* Adds some space between the title and underline */
}



</style>


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('web/img/slider.png')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <!-- <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Welcome to AVPA & Co</p> -->
                                <h3 class="display-1 mb-4 animated slideInDown" style="color:white;">Your Financial Status Is Our Goal</h3>
                                <a href="/our-services" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('web/img/slider1.png')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <!-- <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Welcome to AVPA & Co</p> -->
                                <h3 class="display-1 mb-4 animated slideInDown" style="color:white;">True Financial Support For You</h3>
                                <a href="/our-services" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{asset('web/img/img01.png')}}">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded fw-semi-bold py-1 px-3" style="color: #59ba4d;">Welcome</p>
                <h1 class="display-5 mb-4">At A V P A & CO</h1>
                <p>At A V P A & CO, we provide precise, ethical, and result-oriented services tailored to
                                your needs.</p>
                <p class="mb-4">We deliver reliable, ethical, and result-driven financial solutions. With expertise in
                    taxation, audit, and advisory, we simplify complexities, ensure compliance, and support your growth
                    journey. Trust us to be more than accountants—we are your partners in building financial clarity and
                    success. </p>
                    
                                <p class="mb-0">From tax planning to statutory audits, regulatory compliance, and strategic
                              advisory, our expertise ensures financial clarity, business growth, and long-term
                               success—making us the partner you can always rely on.</p>
                              <!-- <p>At A V P A & Co., we specialize in delivering comprehensive Chartered Accountancy-->
                              <!--services that go beyond numbers. </p>-->
                              <p class="mb-0">With a strong foundation in professional ethics, technical knowledge, and
                               industry experience, we provide businesses and individuals with reliable, practical, and
                                future-ready solutions.</p>
                <!--<div class="border rounded p-4">-->
                <!--    <nav>-->
                <!--        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">-->
                <!--            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"-->
                <!--                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"-->
                <!--                aria-selected="true">&nbsp; &nbsp; Story &nbsp; &nbsp;</button>-->
                <!--            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"-->
                <!--                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"-->
                <!--                aria-selected="false">&nbsp; &nbsp; Expertise &nbsp; &nbsp;</button>-->
                            <!-- <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                <!--                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"-->
                <!--                aria-selected="false">Vision</button> -->
                <!--        </div>-->
                <!--    </nav>-->
                <!--    <div class="tab-content" id="nav-tabContent">-->
                <!--        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"-->
                <!--            aria-labelledby="nav-story-tab">-->
                <!--            <p>At A V P A & CO, we provide precise, ethical, and result-oriented services tailored to-->
                <!--                your needs.</p>-->
                <!--            <p class="mb-0">From tax planning to statutory audits, regulatory compliance, and strategic-->
                <!--                advisory, our expertise ensures financial clarity, business growth, and long-term-->
                <!--                success—making us the partner you can always rely on.</p>-->
                <!--        </div>-->
                <!--        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">-->
                <!--            <p>At A V P A & Co., we specialize in delivering comprehensive Chartered Accountancy-->
                <!--                services that go beyond numbers. </p>-->
                <!--            <p class="mb-0">With a strong foundation in professional ethics, technical knowledge, and-->
                <!--                industry experience, we provide businesses and individuals with reliable, practical, and-->
                <!--                future-ready solutions.</p>-->
                <!--        </div>-->
                        <!-- <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                <!--            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet-->
                <!--                diam et eos labore.</p>-->
                <!--            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.-->
                <!--                Clita erat ipsum et lorem et sit</p>-->
                <!--        </div> -->
                <!--    </div>-->
                <!--</div>-->
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
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
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
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
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
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
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
            <!-- Heading Left Aligned -->
                <div class="text-start mb-2">
                    <span class="section-title">Trusted Clients</span>
                    <div class="underline"></div>
                </div>
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
<div class="container-xxl feature py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded fw-semi-bold py-1 px-3" style="color: #59ba4d;">Why Choosing Us!</p>
                <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                <p class="mb-4">At A V P A & CO, we believe that values are the pillars that define our identity, guide
                    our work culture, and shape every client relationship. These values are not just words for us—they
                    are commitments that influence every decision we take and every service we deliver.</p>
                <a class="btn btn-primary py-3 px-5" href="/about-us">Explore More</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="feature-box border rounded p-4">
                                    <!--<i class="fa fa-check fa-3x text-primary mb-3"></i>-->
                                    <i class="fa fa-check fa-3x mb-3" style="color: #f37e28;"></i>
                                    <h4 class="mb-3">Integrity & Confidentiality</h4>
                                    <p class="mb-3">We operate with the highest standards of honesty, ethics, and
                                        transparency. </p>
                                    <a class="fw-semi-bold" href="/about-us">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x mb-3" style="color: #f37e28;"></i>
                                    <h4 class="mb-3">Client-Centric Approach</h4>
                                    <p class="mb-3">Every client has unique goals, challenges, and opportunities.</p>
                                    <a class="fw-semi-bold" href="/about-us">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-box border rounded p-4">
                            <i class="fa fa-check fa-3x mb-3" style="color: #59ba4d;"></i>
                            <h4 class="mb-3">Professional Excellence</h4>
                            <p class="mb-3">We are committed to delivering services with precision, accuracy, and
                                consistency</p>
                            <a class="fw-semi-bold" href="/about-us">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
<!-- <div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
            <h1 class="display-5 mb-5">Awesome Financial Services For Business</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Audit & Assurance</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Taxation Service</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Business Setup & Compliance</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Accounting & Outsourcing</h5>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="{{asset('web/img/service-1.jpg')}}" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="{{asset('web/img/service-2.jpg')}}" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="{{asset('web/img/service-3.jpg')}}" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100"
                                        src="{{asset('web/img/service-4.jpg')}}" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-xxl py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <p class="d-inline-block border rounded fw-semi-bold py-1 px-3" style="color: #59ba4d;">
                Our Services
            </p>
            <h1 class="display-5">We Provide Best Services</h1>
        </div>

        <!-- Service Cards -->
        <div class="row g-4">
            @foreach($services as $service )
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="icon mb-3">
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid" style="height: 60px; object-fit: contain;">
            </div>
                    <h5 class="title">{{$service->name}}</h5>
                   <p>
            {{ implode(' ', array_slice(explode(' ', $service->description), 0, 5)) }}{{ strlen($service->description) > 0 ? '...' : '' }}
        </p>

                    <a href="#" class="explore">→ EXPLORE MORE</a>
                </div>
            </div>
            @endforeach
        </div>
        <!-- View All Services Button -->
        <div class="text-center mt-4">
            <a href="/our-services" class="btn btn-primary">View All Services</a>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Callback Start -->
<!-- <div class="container-fluid callback my-5 pt-5">
    <div class="container pt-5">
        <div class="row align-items-center">

           
            <div class="col-lg-6">
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch</p>
                        <h1 class="display-5 mb-5">Request A Call-Back</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.7s">
                @if(!empty($get->image))
                <img src="{{ asset($get->image) }}" alt="Contact Us" class="img-fluid rounded shadow">
                @else
                <img src="{{ asset('web/img/geography.jpg') }}" alt="Contact Us" class="img-fluid rounded shadow">
                @endif

            </div>

        </div>
    </div>
</div> -->
<div class="container-fluid callback my-5 pt-5">
    <div class="container pt-5">
        <div class="row align-items-center">
            <!-- IMAGE SECTION (CAROUSEL) -->
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @php
                            $chunkedImages = $get->chunk(3);  // Group images into chunks of 3
                        @endphp
                        @foreach($chunkedImages as $chunkIndex => $chunk)
                            <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                                <div class="row justify-content-center">
                                    @foreach($chunk as $item)
                                        @if(!empty($item->image))
                                            <div class="col-4">
                                                <img src="{{ asset('public/' . $item->image) }}" alt="Contact Us" class="img-fluid rounded shadow clickable-img"
     style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#callbackModal">

                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal with Form -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Request A Call-Back</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="bg-white border rounded p-4">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <!-- Services Dropdown -->
                                <select class="form-select" id="service">
                                    <option selected disabled>Select Service</option>
                                    <option value="Audit & Assurance">Audit & Assurance</option>
                                    <option value="Taxation">Taxation</option>
                                    <option value="Business Setup">Business Setup & Compliance</option>
                                    <option value="Accounting & Outsourcing">Accounting & Outsourcing</option>
                                    <option value="Advisory & Consultancy">Advisory & Consultancy</option>
                                </select>
                                <label for="service">Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Callback End -->

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
                    <img class="img-fluid rounded" src="{{asset('web/img/team-1.jpg')}}" alt="">
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
                    <img class="img-fluid rounded" src="{{asset('web/img/team-2.jpg')}}" alt="">
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
                    <img class="img-fluid rounded" src="{{asset('web/img/team-3.jpg')}}" alt="">
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


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
            <h1 class="display-5 mb-5">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">

            @foreach($testimonials as $item)
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    {!! $item->description !!}
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                <h4>{{ $item->name }}</h4>
                <span>{{ $item->position }}</span>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Testimonial End -->


<!-- logo section -->
<div class="container-xxl py-5" style="background-color: #FCFCFC;">
    <div class="container">
        <!-- Custom Gallery Section with 2 Circular Images -->
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <!--<div class="gallery-img-wrapper rounded-circle overflow-hidden shadow-lg">-->
                    <img class="img-fluid" src="{{ asset('web/img/ca_logo.svg') }}" alt="Image 1">
                <!--</div>-->
            </div>
            <div class="col-6 col-md-3 mb-4">
                <!--<div class="gallery-img-wrapper rounded-circle overflow-hidden shadow-lg">-->
                    <img class="img-fluid" src="{{ asset('web/img/icai.png') }}" alt="Image 2">
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<!-- logo section -->


<!-- Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Gallery</p>
            <h1 class="display-5 mb-5">We Have Our Latest Portfolio</h1>
        </div>

        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
            @foreach($gallery as $item)
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid  project-image gallery-img" src="{{ asset($item->image) }}"
                        alt="{{ $item->title }}" data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset($item->image) }}">
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

<!-- Gallery End -->

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="btn-close ms-auto me-2 mt-2" data-bs-dismiss="modal"></button>
            <img id="modalImage" src="" class="img-fluid rounded" alt="">
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener("DOMContentLoaded", function() {
    const galleryImages = document.querySelectorAll(".gallery-img");
    const modalImage = document.getElementById("modalImage");

    galleryImages.forEach(img => {
        img.addEventListener("click", function() {
            modalImage.src = this.getAttribute("data-image");
        });
    });
});
</script>

<script>
$('.project-carousel').owlCarousel({ 
    loop: true,
    margin: 25,
    autoplay: true,
    smartSpeed: 1000,
    dots: false,
    nav: true, // 👈 arrows on
    navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    }
});
</script>