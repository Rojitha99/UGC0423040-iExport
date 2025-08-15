@extends('admin.layouts.admin')
 

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Roles</h1>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ReviewModal">
            Add New Role
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
                <form method="POST" action="/saveRole" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSlideModalLabel">Add New Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="permission_name" class="form-label">Role Name</label>
                            <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter Verified Sellers" required>
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
                    <th scope="col">Role Name</th>
                    <th scope="col">Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($Roles as $Role)
                    <tr>
                        <td>{{ $Role->id}}</td>
                        <td>{{ $Role->name }}</td>
                     
                        
                        <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#reviewModal{{ $Role->id }}">Edit</button>
                         <a href="/permissionToRole/{{$Role->id}}"class="btn btn-sm btn-success">Add Permission to Role</a>
                        <a href="/deleteRole/{{$Role->id}}"class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="reviewModal{{ $Role->id }}" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form method="POST" action="/roleUpdate" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" name="role_id" value="{{ $Role->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSlideModalLabel">Edit Slide{{ $Role->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="permission_name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="role_name" name="role_name" value="{{ $Role->name }}">
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