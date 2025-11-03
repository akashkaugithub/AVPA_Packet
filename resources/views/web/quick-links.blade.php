@extends('web.layouts.app')
@section('content')

<style>
.news-box {
    border: 2px solid #cce5cc;
    padding: 32px;
    width: 90%;
    margin: 0 auto;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
    background: #fff;
}

.news-title {
    font-weight: bold;
    font-size: 26 px;
    color: #333;
    border-bottom: 1px solid #cce5cc;
    margin-bottom: 10px;
}

.news-list {
    height: 220px;
    /* box height */
    overflow: hidden;
    position: relative;
}
 
.news-item {
    margin-bottom: 15px;
    animation: scrollNews 10s linear infinite;
}

.news-item p {
    margin: 0;
    color: #555;
}

.news-item a {
    color: #007b00;
    font-weight: bold;
    text-decoration: none;
}

.news-item a:hover {
    text-decoration: underline;
}

@keyframes scrollNews {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-100%);
    }
}
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header-service mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Latest News</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Quick Links</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                Latest News
            </p> -->
            <h1 class="display-5">Quick Links</h1>
        </div>


<div class="news-box">
    <div class="news-title">Latest:</div>
    <div class="news-list" id="newsList">
        @foreach ($news as $item)
            <div class="news-item">
                <p>
                    <a href="{{ (str_starts_with($item->link, 'http') ? $item->link : 'https://' . $item->link) }}"
   target="_blank" rel="noopener noreferrer">
    {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }} – {{ $item->title }}
</a>

                </p>
            </div>
        @endforeach
    </div>
</div>


</div>
</div>

<script>
    // Auto-scroll logic (looping)
    const newsList = document.getElementById('newsList');
    let scrollSpeed = 30; // lower = faster

    function autoScroll() {
        newsList.scrollTop++;
        if (newsList.scrollTop >= newsList.scrollHeight - newsList.clientHeight) {
            newsList.scrollTop = 0;
        }
    }

    let scrollInterval = setInterval(autoScroll, scrollSpeed);

    // Pause on hover
    newsList.addEventListener('mouseover', () => clearInterval(scrollInterval));
    newsList.addEventListener('mouseout', () => scrollInterval = setInterval(autoScroll, scrollSpeed));
</script>


@endsection