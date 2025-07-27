@extends('admin.layouts.admin')

@section('title', 'Edit Slide')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2>Edit Slide</h2>
        </div>
        
        <div class="card-body">
            <form action="{{ route('admin.slides.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Image Upload Field -->
                <div class="mb-3">
                    <label for="image" class="form-label">Slide Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <small class="text-muted">Recommended size: 1200x600px, JPG/PNG format</small>
                    <!-- New Image Preview -->
                    <div class="mt-2 d-none" id="newImagePreview">
                        <label class="form-label">Image Preview</label>
                        <div>
                            <img id="imagePreview" class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    </div>
                </div>

                <!-- Title Field -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" 
                           value="{{ old('title', $slide->title) }}" required>
                </div>

                <!-- Description Field -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $slide->description) }}</textarea>
                </div>

                <!-- Button Text Field -->
                <div class="mb-3">
                    <label for="button_text" class="form-label">Button Text</label>
                    <input type="text" class="form-control" id="button_text" name="button_text" 
                           value="{{ old('button_text', $slide->button_text) }}">
                </div>

                <!-- Button Link Field -->
                <div class="mb-3">
                    <label for="button_link" class="form-label">Button Link</label>
                    <input type="text" class="form-control" id="button_link" name="button_link" 
                           value="{{ old('button_link', $slide->button_link) }}">
                </div>

                <!-- Order Field -->
                <div class="mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" class="form-control" id="order" name="order" 
                           value="{{ old('order', $slide->order) }}" min="1">
                </div>

                <!-- Active Status -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                           {{ old('is_active', $slide->is_active) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Active Slide</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.slides.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Update Slide
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Image Preview Script -->
@section('scripts')
<script>
    document.getElementById('image').addEventListener('change', function(e) {
        const [file] = e.target.files
        if (file) {
            document.getElementById('imagePreview').src = URL.createObjectURL(file)
            document.getElementById('newImagePreview').classList.remove('d-none')
        }
    })
</script>
@endsection
@endsection