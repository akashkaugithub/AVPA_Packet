@extends('admin.layouts.app')
@section('title', 'Gallery Management')
@section('content')
<main>
    <div class="tabandpill-wrap">
        <div class="container-fluid">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="#Gallery" data-toggle="tab">Gallery</a>
                </li>
            </ul>
        </div>

        <br>

        <div class="tab-content" id="ex2-content">
            <div class="tab-pane nopane fade show active" id="Gallery" role="tabpanel">
                <div class="container">
                    <div class="row">
                        @foreach($gallery as $item)
                        <div class="col-6 mb-3">
                            <div class="card-box position-relative" style="overflow:hidden; border-radius:8px;">
                                <img src="{{ asset($item->image) }}" class="img-fluid w-100"
                                    style="height:250px; object-fit:cover; border-radius:8px;">

                                <!-- Delete button -->
                                <form action="{{ route('gallery.delete', $item->id) }}" method="POST"
                                    style="position:absolute; top:8px; right:8px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="border:none; background:rgba(255,255,255,0.8); border-radius:50%; padding:5px; cursor:pointer;">
                                        <img src="{{ asset('admin/images/delete.svg') }}" alt="Delete"
                                            style="width:18px; height:18px;">
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach

                        {{-- Upload button --}}
                        <div class="col-6 mb-3">
                            <div class="upload-image d-flex align-items-center justify-content-center"
                                data-bs-toggle="modal" data-bs-target="#uploadModal"
                                style="border:2px dashed #ccc; height:250px; border-radius:8px; cursor:pointer;">
                                <div class="upload-content text-center">
                                    <i class="fas fa-cloud-upload-alt upload-icon fa-2x mb-2"></i>
                                    <h5 class="mb-2">Drag & Drop files here</h5>
                                    <p class="text-muted mb-0">or click to browse</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Upload Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-3">
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Upload Images</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="file" name="images[]" class="form-control" multiple required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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