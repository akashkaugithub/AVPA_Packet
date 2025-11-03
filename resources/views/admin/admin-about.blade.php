@extends('admin.layouts.app')
@section('title', 'About Us')
@section('content')
<main>
    <div class="tabandpill-wrap">
        <div class="container-fluid">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="#Whoneed" data-toggle="tab">About Us</a>
                </li>
            </ul>
        </div>

        <br>

        <style>
            .tab-content {
                margin-left: 14px;
            }
        </style>

        <!-- Pills content -->
        <div class="tab-content" id="ex2-content">
            <div class="tab-pane fade show active" id="Whoneed" role="tabpanel" aria-labelledby="ex3-tab-1">
                <textarea class="editable-editor" rows="15" name="description" id="description" readonly>{{ $aboutus->description }}</textarea>
            </div>
            <div class="save-edit-btn">
                <a href="#" class="active" id="edit-btn">Edit</a>
                <a href="#" id="save-btn">Save</a>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</main>


<!-- LOGOUT-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="logout" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="{{ asset('admin/images/fill-cross-pop.svg') }}" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="delete-pop-inner">
                            <img src="{{ asset('admin/images/logout-pop.svg') }}" alt="">
                            <h3>Logout</h3>
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="delete-pop-btn">
                            <button type="submit" class="btn btn-danger">Yes</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGOUT-POPUP -->
@endsection



@push('page_script')
<script>
    $(document).ready(function () {
        let activeTextarea = null;

        // Click on Edit button
        $("#edit-btn").click(function (e) {
            e.preventDefault();

            // Find the active tab's textarea
            activeTextarea = $(".tab-pane.active textarea");
            activeTextarea.removeAttr("readonly").focus();
        });

        // Click on Save button
        $("#save-btn").click(function (e) {
            e.preventDefault();

            if (!activeTextarea) return;

            let field = activeTextarea.attr("name");
            let value = activeTextarea.val();

            // Disable editing after saving
            activeTextarea.attr("readonly", "readonly");

            // AJAX request to save data
            $.ajax({
                url: "{{ route('update.aboutUs') }}", // Make sure the route name is correct
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    [field]: value
                },
                success: function (response) {
                    // alert('Data saved successfully.');
                    console.log('Data saved successfully.');
                },
                error: function (xhr) {
                    alert("Error saving data. Please try again.");
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endpush
