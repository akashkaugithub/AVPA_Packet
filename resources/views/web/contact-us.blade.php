@extends('web.layouts.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header-contact mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown" style="color:#175a84">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                 <li class="breadcrumb-item"><a href="#">Pages</a></li> 
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact Us</p>
                <h1 class="display-5 mb-4">Get in Touch With Us</h1>
                <p class="mb-4">We’re here to assist you every step of the way—reach out with your questions, feedback, partnership inquiries, or support needs.</p>
                <form id="contactForm">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                    required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required>
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message"
                                    id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <button class="btn btn-primary py-3 px-5" type="submit">Submit</button> -->
                             <button id="submitBtn" class="btn btn-primary py-3 px-5" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
           <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div id="map" class="position-relative rounded overflow-hidden h-100"></div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$('#contactForm').on('submit', function(e) {
    e.preventDefault();

    let $btn = $('#submitBtn'); 
    let oldText = $btn.text();  

    // disable button and show loading text
    $btn.prop('disabled', true).text('Please wait...');

    $.ajax({
        url: "{{ route('contact.store') }}",
        type: "POST",
        data: $(this).serialize(),
        success: function(response) {
            if (response.success) {
                toastr.success(response.message, 'Success');
                $('#contactForm')[0].reset();
            }
        },
        error: function(xhr) {
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                $.each(xhr.responseJSON.errors, function(key, value) {
                    toastr.error(value[0]);
                });
            } else {
                toastr.error('Something went wrong!');
            }
        },
        complete: function() {
            // reset button back
            $btn.prop('disabled', false).text(oldText);
        }
    });
});

</script>

<script>
toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "4000"
}
</script>

<script>
    
// ✅ Google Map Initialization
function initMap() {
    var locations = [
      { lat: 28.6692, lng: 77.4538, title: "Ghaziabad Office" },
      { lat: 28.5355, lng: 77.3910, title: "Noida Office" },
      { lat: 28.6139, lng: 77.2090, title: "Delhi Office" }
    ];

    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: { lat: 28.6016, lng: 77.2718 }
    });

    locations.forEach(function(loc) {
      new google.maps.Marker({
        position: { lat: loc.lat, lng: loc.lng },
        map: map,
        title: loc.title
      });
    });
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6GXMka8IuhTfz02c2AJv9FbRIrWykpgc&callback=initMap"></script>

@endpush
