@extends('admin.layouts.app')
@section('title', 'Get In Touch')
@section('content')

<main>
    
    <div class="influ-in">
        <div class="influ-strip-2">
            <form>
                <div class="influ-search">
                    
                </div>
                <div class="influ-btns">
                    <!-- ADD-BUTTON -->
                    <button type="button" data-bs-toggle="modal" data-bs-target="#add-pop" class="influ-btn">
                    Add Image
                </button>
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
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>

                    @forelse($records as $key => $record)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                <a href="{{ asset($record->image) }}" target="_blank">
                                    <img class="profile-pic-img" src="{{ asset('public/' . $record->image) }}" alt="" width="80">
                                </a>
                            </td>
                            <td>
                                <!-- Edit -->
                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                   data-bs-target="#edit-pop-{{ $record->id }}">
                                   <img src="{{asset('admin/images/edit.svg')}}" alt="">
                                </a>

                                <!-- Delete -->
                                <form action="{{ route('getInTouch.delete', $record->id) }}"
                                      method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border:none;background:none;">
                                        <img src="{{asset('admin/images/delete.svg')}}" alt="">
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- EDIT-POPUP -->
                        <div class="modal animate__animated animate__bounceIn my-popup"
                             id="edit-pop-{{ $record->id }}" tabindex="-1" role="dialog">
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
                                            <form action="{{ route('getInTouch.update',$record->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="delete-pop-inner gap-1">
                                                    <h3>Edit</h3>
                                                </div>
                                                <div class="edit-pop-form mt-5">
                                                    <div class="edit-pop-in">
                                                        <label>Image</label>
                                                        <input type="file" name="image" class="edit-field" accept="image/*">
                                                        <small>Current: <img src="{{ asset($record->image) }}" width="50"></small>
                                                    </div>
                                                    <div class="delete-pop-btn mt-4">
                                                        <button type="submit">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- EDIT-POPUP END -->

                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No Records Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- ADD-POPUP -->
<div class="modal animate__animated animate__bounceIn my-popup" id="add-pop" tabindex="-1" role="dialog">
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
                    <form action="{{ route('getInTouch.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="delete-pop-inner gap-1">
                            <h3>Add</h3>
                        </div>
                        <div class="edit-pop-form mt-5">
                            <div class="edit-pop-in">
                                <label>Image</label>
                                <input type="file" name="image" class="edit-field" accept="image/*" required>
                            </div>
                            <div class="delete-pop-btn mt-4">
                                <button type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ADD-POPUP END -->

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
