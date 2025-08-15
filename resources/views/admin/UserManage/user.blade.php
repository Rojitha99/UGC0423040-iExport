@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
</div>
<div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
    </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">
    Add New User
</button>

<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="slideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="slideModalLabel">Add New Role</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="/saveUser" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                
                    
                <!-- title -->
                <div class="mb-3">
                    <label for="name" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="NAME">
                </div>
 
                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label">User Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>

                 <!-- Password -->
                 <div class="mb-3">
                    <label for="password" class="form-label">User Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD">
                </div>

                <!-- Roles -->
                <div class="mb-3">
                    <label for="password" class="form-label">User Roles</label>
                    <select class="form-control" name="roles[]">
                       <option value="">Select Role</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                            @endforeach
                    </select>
                 
                </div>
                
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
    </div>
    </div>
</div>

<div class="card mb-4">
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Password</th>
                     <th>User Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->name }}
                        @endforeach
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#userModal{{ $user->id }}">Edit</button>
                        <a href="/deleteUser/{{$user->id}}"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <div class="modal fade" id="userModal{{ $user->id }}" tabindex="-1" aria-labelledby="slideModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="slideModalLabel">Add New Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                       
                        <form method="POST" action="/userUpdate" enctype="multipart/form-data">
                            @csrf

                            
                            <div class="modal-body">
                                 <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    
                                <!-- title -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="NAME">
                                </div>

                                <!-- email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">User Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Email">
                                </div>

                                <!-- Password
                                <div class="mb-3">
                                    <label for="password" class="form-label">User Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" placeholder="PASSWORD">
                                </div> -->

                                <!-- Roles -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">User Roles</label>
                                    <select class="form-control" name="roles[]">
                                    <option value="">Select Role</option>
                                            @foreach ($roles as $role)
                                            <option value="{{ $role }}">{{ $role }}</option>
                                            @endforeach
                                    </select>
                                
                                </div>
                                
                        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
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