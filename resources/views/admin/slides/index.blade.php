@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Homepage Slides</h1>
        <a href="{{ route('admin.slides.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Slide
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slides as $slide)
                    <tr>
                        <td>{{ $slide->order }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$slide->image_path) }}" width="100">
                        </td>
                        <td>{{ $slide->title }}</td>
                        <td>
                            <span class="badge bg-{{ $slide->is_active ? 'success' : 'danger' }}">
                                {{ $slide->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.slides.destroy', $slide->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection