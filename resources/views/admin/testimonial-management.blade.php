@extends('admin.layouts.app')
@section('title', 'Testimonial Management')
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
                        Testimonial</button>
                    <!-- ADD-BUTTON -->


                    <!-- <select class="edit-field edit-select filter-select">
								<option value="1">All Admins</option>
								<option value="2">Active</option>
								<option value="3">Paid</option>
								<option value="4">New</option>
							</select> -->

                    <!-- CSV-BUTTON -->
                    <!-- <button type="button" class="influ-btn">
								<img src="images/filter-icons/export.svg" alt="">Export CSV
							</button> -->
                    <!-- CSV-BUTTON -->
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
                        <th>Position</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($testimonials as $key => $testimonial)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            <img src="{{ $testimonial->image ? asset('storage/'.$testimonial->image) : asset('admin/images/dummy-img.svg') }}"
                                class="profile-pic-img" style="width:60px;height:60px;object-fit:cover;">
                        </td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->position }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td>
                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#edit-{{ $testimonial->id }}">
                                <img src="{{asset('admin/images/edit.svg')}}" alt="Edit">
                            </a>
                            <form action="{{ route('admin.testimonials.destroy',$testimonial->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none;background:none;">
                                    <img src="{{asset('admin/images/delete.svg')}}" alt="Delete">
                                </button>
                            </form>
                        </td>
                    </tr>

                    {{-- EDIT MODAL --}}
                    <div class="modal fade" id="edit-{{ $testimonial->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('admin.testimonials.update',$testimonial->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Image</label>
                                        <input type="file" name="image">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $testimonial->name }}">
                                        <label>Position</label>
                                        <input type="text" name="position" value="{{ $testimonial->position }}">
                                        <label>Description</label>
                                        <textarea name="description">{{ $testimonial->description }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
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
                    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="delete-pop-inner gap-1">
                            <h3>Add Testimonial</h3>
                        </div>
                        <div class="edit-pop-form mt-5">
                            <div class="edit-pop-in">
                                <label>Profile Picture</label>
                                <input type="file" name="image" class="edit-field" accept="image/*">
                            </div>

                            <div class="edit-pop-in">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter Name" class="edit-field" required>
                            </div>

                            <div class="edit-pop-in">
                                <label>Position</label>
                                <input type="text" name="position" placeholder="Enter Position" class="edit-field"
                                    required>
                            </div>

                            <div class="edit-pop-in">
                                <label>Description</label>
                                <textarea name="description" placeholder="Enter Description"
                                    class="edit-field"></textarea>
                            </div>

                            <div class="delete-pop-btn mt-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
                                <input type="text" placeholder="Enter Name" value="Katona Beatrix" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Email</label>
                                <input type="text" placeholder="Enter Email" value="Katona@gmail.com"
                                    class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Phone</label>
                                <input type="text" placeholder="Enter Phone" value="2342563496" class="edit-field">
                            </div>
                            <div class="edit-pop-in">
                                <label>Assign role</label>
                                <select class="edit-field edit-select">
                                    <option value="1">Select role</option>
                                    <option value="2" selected>Lorem</option>
                                    <option value="3">Lorem</option>
                                    <option value="4">Lorem</option>
                                </select>
                            </div>
                            <div class="delete-pop-btn mt-4">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">Save</a>
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
<div class="modal animate__animated animate__bounceIn my-popup" id="delete-pop" tabindex="-1" role="dialog"
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

<!-- LOGOUT-POPUP -->
@endsection