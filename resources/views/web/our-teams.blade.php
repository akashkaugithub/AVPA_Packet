@extends('web.layouts.app')
@section('content')
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-tag {
    display: inline-block;
    padding: 8px 20px;
    background-color: #e7f1ff;
    color: #0d6efd;
    border-radius: 30px;
    font-weight: 600;
    margin-bottom: 15px;
}

.section-title {
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.team-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.team-card {
    flex: 0 0 calc(50% - 30px);
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.team-img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
}

.team-content {
    padding: 25px;
}

.team-name {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 5px;
}

.team-position {
    color: #0d6efd;
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 1.1rem;
}

.team-description {
    color: #555;
    margin-bottom: 15px;
    line-height: 1.7;
}

.read-more {
    display: inline-block;
    color: #0d6efd;
    text-decoration: none;
    font-weight: 600;
    margin-top: 10px;
}

.read-more:hover {
    text-decoration: underline;
}

.team-social {
    display: flex;
    margin-top: 20px;
    gap: 12px;
}

.social-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #f1f8ff;
    color: #0d6efd;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background: #0d6efd;
    color: white;
    transform: translateY(-3px);
}

@media (max-width: 992px) {
    .team-card {
        flex: 0 0 100%;
        max-width: 600px;
    }

    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .team-img {
        height: 280px;
    }

    .team-name {
        font-size: 1.3rem;
    }

    .section-title {
        font-size: 1.8rem;
    }
}
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header-team mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Our Team</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Core Team Section -->
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p>
            <h1 class="display-5 mb-5">Core Team</h1>
        </div>

        <div class="team-row">
            @foreach($coreTeam as $key => $member)
            <div class="team-card wow fadeInUp" data-wow-delay="0.{{ $key+1 }}s">
                <img src="{{ $member->image ? asset('uploads/teams/' . $member->image) : asset('default.png') }}"
                    alt="{{ $member->name }}" class="team-img">

                <div class="team-content">
                    <h3 class="team-name">{{ $member->name }}</h3>

                    <p class="team-description">
                        {{ Str::limit($member->description, 100, '...') }}
                    </p>

                    <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#TeamModal{{ $member->id }}">
                        Read more...
                    </a>

                    <div class="team-social">
                        @if($member->facebook)<a href="{{ $member->facebook }}" class="social-icon"><i class="fab fa-facebook-f"></i></a>@endif
                        @if($member->twitter)<a href="{{ $member->twitter }}" class="social-icon"><i class="fab fa-twitter"></i></a>@endif
                        @if($member->linkedin)<a href="{{ $member->linkedin }}" class="social-icon"><i class="fab fa-linkedin-in"></i></a>@endif
                        @if($member->email)<a href="mailto:{{ $member->email }}" class="social-icon"><i class="fas fa-envelope"></i></a>@endif
                    </div>
                </div>
            </div>

            {{-- Core Team Modal --}}
            <div class="modal fade" id="TeamModal{{ $member->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content text-center p-3">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ $member->image ? asset('uploads/teams/' . $member->image) : asset('default.png') }}"
                                alt="{{ $member->name }}" class="img-fluid rounded-circle mb-3" style="width:150px; height:150px; object-fit:cover;">
                            <h3 class="mb-3">{{ $member->name }}</h3>
                            <p class="team-position">{{ $member->position }}</p>
                            <p style="text-align: center;">{!! nl2br(e($member->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Associate Team Section -->
        @if($associateTeam->count() > 0)
        <br><br>
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p>
            <h1 class="display-5 mb-5">Associate Team</h1>
        </div>

        <div class="team-row">
            @foreach($associateTeam as $key => $member)
            <div class="team-card wow fadeInUp" data-wow-delay="0.{{ $key+1 }}s">
                <img src="{{ $member->image ? asset('uploads/teams/' . $member->image) : asset('default.png') }}"
                    alt="{{ $member->name }}" class="team-img">

                <div class="team-content">
                    <h3 class="team-name">{{ $member->name }}</h3>

                    <p class="team-description">
                        {{ Str::limit($member->description, 100, '...') }}
                    </p>

                    <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#AssociateModal{{ $member->id }}">
                        Read more...
                    </a>

                    <div class="team-social">
                        @if($member->facebook)<a href="{{ $member->facebook }}" class="social-icon"><i class="fab fa-facebook-f"></i></a>@endif
                        @if($member->twitter)<a href="{{ $member->twitter }}" class="social-icon"><i class="fab fa-twitter"></i></a>@endif
                        @if($member->linkedin)<a href="{{ $member->linkedin }}" class="social-icon"><i class="fab fa-linkedin-in"></i></a>@endif
                        @if($member->email)<a href="mailto:{{ $member->email }}" class="social-icon"><i class="fas fa-envelope"></i></a>@endif
                    </div>
                </div>
            </div>

            {{-- Associate Modal --}}
            <div class="modal fade" id="AssociateModal{{ $member->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content text-center p-3">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ $member->image ? asset('uploads/teams/' . $member->image) : asset('default.png') }}"
                                alt="{{ $member->name }}" class="img-fluid rounded-circle mb-3" style="width:150px; height:150px; object-fit:cover;">
                            <h3 class="mb-3">{{ $member->name }}</h3>
                            <p class="team-position">{{ $member->position }}</p>
                            <p style="text-align: center;">{!! nl2br(e($member->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<!-- Team End -->


{{-- Modal for Static Card --}}
<div class="modal fade" id="StaticTeamModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content text-center p-3">
            <div class="modal-header border-0">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Image -->
                <img src="{{ asset('web/img/team-1.jpg') }}" alt="John Doe"
                    class="img-fluid rounded-circle mb-3"
                    style="width:150px; height:150px; object-fit:cover;">

                <!-- Name -->
                <h3 class="mb-3">John Doe</h3>
                <p class="team-position">Senior Developer</p>

                <!-- Full Description -->
                <p>
                    John Doe is an experienced developer with expertise in web development and design. 
                    He brings creativity and technical skill to every project. This is a static card example.
                </p>
            </div>
        </div>
    </div>
</div>


<script>
// Simple animation trigger on scroll
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.wow');

    function checkIfInView() {
        animatedElements.forEach(function(element) {
            const position = element.getBoundingClientRect();

            if (position.top < window.innerHeight && position.bottom >= 0) {
                const delay = element.getAttribute('data-wow-delay') || '0s';
                element.style.animationDelay = delay;
                element.style.visibility = 'visible';
                element.classList.add('animated');

                if (element.classList.contains('fadeIn')) {
                    element.style.animationName = 'fadeIn';
                } else if (element.classList.contains('fadeInUp')) {
                    element.style.animationName = 'fadeInUp';
                } else if (element.classList.contains('slideInDown')) {
                    element.style.animationName = 'slideInDown';
                }
            }
        });
    }

    // Check on load and scroll
    checkIfInView();
    window.addEventListener('scroll', checkIfInView);
});
</script>

@endsection