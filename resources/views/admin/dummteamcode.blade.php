@extends('admin.layouts.app')
@section('title', 'Teams Management')
@section('content')
<!-- MAIN -->
<main>
    <div class="influ-in">
        <div class="influ-strip-2">
            <form>
                <div class="influ-search">
                    <label for="">
                        <input type="text" name="" placeholder="Search">
                        <button><img src="{{asset('admin/images/search.svg')}}" alt=""></button>
                    </label>
                </div>
                <div class="influ-btns">
                    <!-- ADD-BUTTON -->
                    <button type="button" data-bs-toggle="modal" data-bs-target="#add-pop" class="influ-btn">Add
                        Team</button>
                    <!-- ADD-BUTTON -->
                </div>
        </div>
        </form>
    </div>
    <div class="influ-table">
        <div id="table-responsive-1" class="table-responsive">
            <table>
                <tbody>
                    <tr>
                        <th>S.No</th>
                        <th>Profile Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($teams as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}.</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#profile-pic-{{ $user->id }}">
                                <img class="profile-pic-img"
                                    src="{{ $user->image ? asset('storage/' . $user->image) : asset('admin/images/dummy-img.svg') }}"
                                    alt="">
                            </a>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->description }}</td>
                        <td>
                            <!-- Activate / Suspend -->
                            @if($user->block_status == 1)
                            <a href="javascript:void(0);" class="status-btn" data-id="{{ $user->id }}"
                                data-status="active">
                                <img src="{{asset('admin/images/un-check.svg')}}" alt="Activate">
                            </a>
                            @else
                            <a href="javascript:void(0);" class="status-btn" data-id="{{ $user->id }}"
                                data-status="block">
                                <img src="{{asset('admin/images/check.svg')}}" alt="Suspend">
                            </a>
                            @endif

                            <!-- Edit -->
                            <a href="javascript:void(0);" class="edit-btn" data-id="{{ $user->id }}">
                                <img src="{{asset('admin/images/edit.svg')}}" alt="Edit">
                            </a>

                            <!-- Delete -->
                            <a href="javascript:void(0);" class="delete-btn" data-id="{{ $user->id }}">
                                <img src="{{asset('admin/images/delete.svg')}}" alt="Delete">
                            </a>
                        </td>
                    </tr>

                    <!-- DELETE-POPUP -->
                    <div class="modal my-popup" id="delete-popup-{{ $user->id }}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-edit">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <p>Are you sure you want to delete <b>{{ $user->name }}</b>?</p>
                                    <div class="delete-pop-btn">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger delete-confirm"
                                            data-id="{{ $user->id }}">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="influ-pagi">
            <ul>
                <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
            <p>Showing 50 of 170 results</p>
        </div>
    </div>
    </div>
</main>
<!-- MAIN -->

<!-- ADD-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="add-pop" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="{{asset('admin/images/cross-pop.svg')}}" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        @csrf
                        <div class="delete-pop-inner gap-1">
                            <h3>Add</h3>
                        </div>
                        <div class="edit-pop-form mt-5">
                            <div class="edit-pop-in">
                                <label>Image</label>
                                <input type="file" class="edit-field" name="image" accept="image/*">
                            </div>
                            <div class="edit-pop-in">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name" name="name" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Email</label>
                                <input type="text" placeholder="Enter Email" name="email" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Phone</label>
                                <input type="text" placeholder="Enter Phone" name="phone" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Description</label>
                                <textarea name="description" placeholder="Enter Description"
                                    class="edit-field"></textarea>
                            </div>
                            <div class="delete-pop-btn mt-4">
                                <!-- <a href="javascript:void(0);" id="add-pop form" class="btn-save">Save</a> -->
                                <button type="submit" class="btn-save" id="">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ADD-POPUP -->

<!-- EDIT-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="edit-pop" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="images/cross-pop.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        <div class="delete-pop-inner gap-1">
                            <h3>Edit</h3>
                        </div>
                        <div class="edit-pop-form mt-5">
                            <div class="edit-pop-in">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Email</label>
                                <input type="text" placeholder="Enter Email" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Phone</label>
                                <input type="text" placeholder="Enter Phone" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Description</label>
                                <input type="text" placeholder="Enter Description" class="edit-field">
                            </div>
                            <div class="delete-pop-btn mt-4">
                                <!-- <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">Save</a> -->
                                <button type="submit" class="btn-save">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EDIT-POPUP -->

<!-- ACTIVE-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="active-pop" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="images/fill-cross-pop.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        <div class="delete-pop-inner">
                            <img src="images/active-pop.svg" alt="">
                            <!-- <h3>Active</h3> -->
                            <p>Are you sure you want to <br> Activate ?</p>
                        </div>
                        <div class="delete-pop-btn">
                            <a href="#" class="active" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Yes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ACTIVE-POPUP -->

<!-- SUSPEND-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="suspend-pop" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="images/fill-cross-pop.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        <div class="delete-pop-inner">
                            <img src="images/suspend-pop.svg" alt="">
                            <!-- <h3>Suspend</h3> -->
                            <p>Are you sure you want to <br> suspend ?</p>
                        </div>
                        <div class="delete-pop-btn">
                            <a href="#" class="active" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Yes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SUSPEND-POPUP -->

<!-- DELETE-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="delete-popup" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="images/fill-cross-pop.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        <div class="delete-pop-inner">
                            <img src="images/delete-pop.svg" alt="" style="width: 50px;">
                            <p class="my-2">Are you sure you want to Delete?</p>
                        </div>
                        <div class="delete-pop-btn">
                            <a href="#" class="active" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">Yes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DELETE-POPUP -->
<!-- Profile-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="profile-pic" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="images/fill-cross-pop.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        <img class="profile-image-1" src="images/profile-1-big.svg" alt="">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile-POPUP -->

<!-- LOGOUT-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="logout" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-edit" role="document">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="images/fill-cross-pop.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form>
                        <div class="delete-pop-inner">
                            <img src="images/logout-pop.svg" alt="">
                            <h3>Logout</h3>
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="delete-pop-btn">
                            <a href="admin-login.html">Yes</a>
                            <a href="#" class="active" data-bs-dismiss="modal" aria-label="Close">No</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGOUT-POPUP -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">


<script>
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
</script>


<script>
$(document).ready(function() {
    // Handle Add Form Submission
    $('#add-pop form').on('submit', function(e) {
        e.preventDefault(); // Prevent form default submit
        var formData = new FormData(this);

        // AJAX Request for adding team
        $.ajax({
            url: '/create', // Replace with your actual route
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success(response.success, '', {
                    timeOut: 3000,
                    progressBar: true,
                    closeButton: true
                });
                $('#add-pop').modal('hide'); // Hide modal after successful form submission
                // Optionally reload or update the list on the page.
                // Reload page after 1 sec
                setTimeout(function() {
                    location.reload();
                }, 1000);
            },
            error: function(xhr) {
                toastr.error('Something went wrong!'); // Show error message
            }
        });
    });
});
</script>
<script>
$(document).ready(function() {

    // Edit open
    $(document).on('click', '.edit-btn', function() {
        var userId = $(this).data('id');
        $.get('/user/' + userId, function(data) {
            var modal = $('#edit-pop');
            modal.find('input[name="name"]').val(data.name);
            modal.find('input[name="email"]').val(data.email);
            modal.find('input[name="phone"]').val(data.phone);
            modal.find('input[name="description"]').val(data.description);
            modal.data('id', userId);
            modal.modal('show');
        });
    });

    // Edit submit
    $('#edit-pop form').on('submit', function(e) {
        e.preventDefault();
        var id = $('#edit-pop').data('id');
        var formData = $(this).serialize();
        $.post('/update/' + id, formData, function(response) {
            toastr.success(response.success);
            $('#edit-pop').modal('hide');
            setTimeout(() => location.reload(), 1000);
        }).fail(() => toastr.error('Failed to update.'));
    });

    // Delete confirm
    $(document).on('click', '.delete-confirm', function() {
        var id = $(this).data('id');
        $.post('/delete/' + id, {
            _token: '{{ csrf_token() }}'
        }, function(response) {
            toastr.success(response.success);
            $('#delete-popup-' + id).modal('hide');
            setTimeout(() => location.reload(), 1000);
        }).fail(() => toastr.error('Failed to delete.'));
    });

    // Status change (Activate / Suspend)
    $(document).on('click', '.status-change', function() {
        var id = $(this).data('id');
        var status = $(this).data('status');
        $.post('/change-status/' + id + '/' + status, {
            _token: '{{ csrf_token() }}'
        }, function(response) {
            toastr.success(response.success);
            $('#' + status + '-pop-' + id).modal('hide');
            setTimeout(() => location.reload(), 1000);
        }).fail(() => toastr.error('Failed to change status.'));
    });

});
</script>