@extends('admin.layouts.app')
@section('title', 'Quick Link Management')
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
                        Quick Link</button>
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
                        <th>Date</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($teams as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}.</td>
                        <td>{{ $user->date }}</td>
                        <td>{{ $user->title }}</td>
                        <td>{{ $user->link }}</td>
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
                                    <p>Are you sure you want to delete <b>{{ $user->title }}</b>?</p>
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
                        <h3>Add Quick Link</h3>
                        <div class="edit-pop-form mt-3">
                            <div class="edit-pop-in">
                                <label>Date</label>
                                <input type="date" placeholder="Enter Date" name="date" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Title</label>
                                <input type="text" placeholder="Enter Title" name="title" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Link</label>
                                <input type="text" placeholder="Enter Link" name="link" class="edit-field">
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
                        <h3>Edit Quick Link</h3>
                        <div class="edit-pop-form mt-3">
                            <div class="edit-pop-in">
                                <label>Date</label>
                                <input type="date" placeholder="Enter Date" class="edit-field" name="date">
                            </div>
                            <div class="edit-pop-in">
                                <label>Title</label>
                                <input type="text" placeholder="Enter title" class="edit-field" name="title">
                            </div>
                            <div class="edit-pop-in">
                                <label>Link</label>
                                <input type="text" placeholder="Enter Link" class="edit-field" name="link">
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
            url: '/create-quick-links',
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
        $.get('/quick-links/' + id, function(data) {
            var modal = $('#edit-pop');
            modal.find('input[name="data"]').val(data.date);
            modal.find('input[name="title"]').val(data.title);
            modal.find('input[name="link"]').val(data.link);
            modal.data('id', id);
            modal.modal('show');
        });
    });

    // ---------------- EDIT SAVE ----------------
    $('#edit-form').on('submit', function(e) {
        e.preventDefault();
        var id = $('#edit-pop').data('id');
        var formData = $(this).serialize();
        $.post('/update-quick-links/' + id, formData, function(res) {
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
        $.post('/delete-quick-links/' + id, {
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
        $.post('/change-status-quick-links/' + id + '/' + status, {
            _token: '{{ csrf_token() }}'
        }, function(res) {
            toastr.success(res.success);
            setTimeout(() => location.reload(), 800); 
        }).fail(() => toastr.error('Status change failed'));
    });

});
</script>
