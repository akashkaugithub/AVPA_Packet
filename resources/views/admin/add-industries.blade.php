@extends('admin.layouts.app')
@section('title', 'Industries Management')
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
                        Industries</button>
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
                        <th>Icon Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($teams as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}.</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#profile-pic-{{ $user->id }}">
                                <img class="profile-pic-img"
                                    src="{{ $user->image ? asset('public/' . $user->image) : asset('admin/images/dummy-img.svg') }}"
                                    alt="">
                            </a>
                        </td>
                        <td>{{ $user->name }}</td>
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

                    <!-- DELETE-POPUP (per user) -->
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
    </div>
</main>
<!-- MAIN -->

<!-- ADD-POPUP -->
<div class="modal my-popup" id="add-pop" tabindex="-1">
    <div class="modal-dialog modal-dialog-edit">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal">
                    <span><img src="{{asset('admin/images/cross-pop.svg')}}" alt=""></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form id="add-form">
                        @csrf
                        <h3>Add Industries</h3>
                        <div class="edit-pop-form mt-3">
                            <div class="edit-pop-in">
                                <label>Image</label>
                                <input type="file" class="edit-field" name="image" accept="image/*">
                            </div>
                            <div class="edit-pop-in">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name" name="name" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Description</label>
                                <textarea name="description" placeholder="Enter Description"
                                    class="edit-field"></textarea>
                            </div>
                            <div class="delete-pop-btn mt-4">
                                <button type="submit" class="btn-save">Save</button>
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
<div class="modal my-popup" id="edit-pop" tabindex="-1">
    <div class="modal-dialog modal-dialog-edit">
        <div class="modal-content clearfix">
            <div class="modal-heading">
                <button type="button" class="close close-btn-front" data-bs-dismiss="modal">
                    <span><img src="{{asset('admin/images/cross-pop.svg')}}" alt=""></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-pop-wrap">
                    <form id="edit-form">
                        @csrf
                        <h3>Edit Industries</h3>
                        <div class="edit-pop-form mt-3">
                            <div class="edit-pop-in">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name" class="edit-field" name="name">
                            </div>
                            <div class="edit-pop-in">
                                <label>Description</label>
                                <input type="text" placeholder="Enter Description" class="edit-field" name="description">
                            </div>
                            <div class="delete-pop-btn mt-4">
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">

<script>
toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right"
};

$(document).ready(function() {

    // ---------------- ADD ----------------
    $('#add-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({ 
            url: '/create-industries',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                toastr.success(res.success);
                $('#add-pop').modal('hide');
                setTimeout(() => location.reload(), 800);
            },
            error: () => toastr.error('Add failed')
        });
    });

    // ---------------- EDIT OPEN ----------------
    $(document).on('click', '.edit-btn', function() {
        var id = $(this).data('id');
        $.get('/user-industries/' + id, function(data) {
            var modal = $('#edit-pop');
            modal.find('input[name="name"]').val(data.name);
            // modal.find('input[name="email"]').val(data.email);
            // modal.find('input[name="phone"]').val(data.phone);
            modal.find('input[name="description"]').val(data.description);
            modal.data('id', id);
            modal.modal('show');
        });
    });

    // ---------------- EDIT SAVE ----------------
    $('#edit-form').on('submit', function(e) {
        e.preventDefault();
        var id = $('#edit-pop').data('id');
        var formData = $(this).serialize();
        $.post('/update-industries/' + id, formData, function(res) {
            toastr.success(res.success);
            $('#edit-pop').modal('hide');
            setTimeout(() => location.reload(), 800);
        }).fail(() => toastr.error('Update failed'));
    });

    // ---------------- DELETE ----------------
    $(document).on('click', '.delete-btn', function() {
        var id = $(this).data('id');
        $('#delete-popup-' + id).modal('show');
    });

    $(document).on('click', '.delete-confirm', function() {
        var id = $(this).data('id');
        $.post('/delete-industries/' + id, {
            _token: '{{ csrf_token() }}'
        }, function(res) {
            toastr.success(res.success);
            $('#delete-popup-' + id).modal('hide');
            setTimeout(() => location.reload(), 800);
        }).fail(() => toastr.error('Delete failed'));
    });

    // ---------------- STATUS (Activate / Suspend) ----------------
    $(document).on('click', '.status-btn', function() {
        var id = $(this).data('id');
        var status = $(this).data('status');
        $.post('/change-status-industries/' + id + '/' + status, {
            _token: '{{ csrf_token() }}'
        }, function(res) {
            toastr.success(res.success);
            setTimeout(() => location.reload(), 800);
        }).fail(() => toastr.error('Status change failed'));
    });
 
});
</script>
