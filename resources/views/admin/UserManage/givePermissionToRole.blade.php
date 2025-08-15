@extends('admin.layouts.admin')
 

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Role: {{$Role->name}}</h1>
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
</div>
<div class="container">
    <div class="card-body">
        <form action="{{ url('givePermissionToRole/' . $Role->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <label for="Role_id">Permissions</label>
            <div class="row">
                @foreach ($Permissions as $Permission)
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" 
                                type="checkbox" name="permissions[]" 
                                value="{{ $Permission->name }}" 
                                id="defaultCheck1"
                                {{ in_array($Permission->id, $rolePermissions) ? 'checked' : '' }}
                                />
                        <label class="form-check-label" for="defaultCheck1">
                            {{ $Permission->name }}
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
    
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button> 
            </div>
    
        </form>
    </div>
</div>



@endsection