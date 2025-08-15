@extends('admin.layouts.admin')
 

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Permission</h1>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ReviewModal">
            Add Seller Summery
        </button>
    </div>


    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Add Slide Modal -->
    <div class="modal fade" id="ReviewModal" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/savePermission" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="permission_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="permission_name" name="permission_name" placeholder="Enter Verified Sellers" required>
                        </div>
                        
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Slide</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Slides Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Permission Name</th>
                    <th scope="col">Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($Permissions as $Permission)
                    <tr>
                        <td>{{ $Permission->id}}</td>
                        <td>{{ $Permission->name }}</td>
                     
                        
                        <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#reviewModal{{ $Permission->id }}">Edit</button>
                        <a href="/deletePermission/{{$Permission->id}}"class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="reviewModal{{ $Permission->id }}" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form method="POST" action="/permissionUpdate" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" name="permission_id" value="{{ $Permission->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSlideModalLabel">Edit Slide{{ $Permission->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="permission_name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="permission_name" name="permission_name" value="{{ $Permission->name }}">
                                        </div>
                                      
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Slide</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection