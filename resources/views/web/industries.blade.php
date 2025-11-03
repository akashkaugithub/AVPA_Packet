@extends('web.layouts.app')
@section('content')

<style>
.service-card {
    background-color: #fff;
    color: #1e73be;
    border-radius: 12px;
    padding: 50px 30px; /* box ke andar bhi extra space */
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* balance content */
    gap: 25px; /* har element ke beech spacing */
}

.service-card .icon {
    color: #1e73be;
    font-size: 40px; /* thoda bada bhi kar diya */
    transition: all 0.3s ease;
}

.service-card .title {
    font-weight: 600;
    margin: 0; /* margin reset */
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
    margin-top: auto; /* button ko neeche push karega */
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



</style>
<!-- Page Header Start -->
<div class="container-fluid page-header-industries mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown" style="color:white;">Industries</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Industries</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                Our Industries
            </p>
            <h1 class="display-5">We Provide Best Services</h1>
        </div>

        <!-- Service Cards -->
        <div class="row g-4">

            <!-- Card 1 -->
             @foreach($industries as $industry)
            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="icon">
                        <!-- <i class="fas fa-chart-line fa-2x"></i> -->
                         <img src="{{ asset('public/' . $industry->image) }}" 
                 alt="{{ $industry->name }}" 
                 style="width:80px; height:80px; object-fit:contain;">
                    </div>
                    <h5 class="title">{{ $industry->name}}</h5>
                    <!-- <a href="#" class="explore">→ EXPLORE MORE</a> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection