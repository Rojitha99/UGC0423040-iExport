@extends('admin.layouts.admin')

@section('title', 'Create New Slide')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Create New Slide</h1>
        </div>
        
        <div class="card-body">
            <form action="{{ route('admin.slides.store') }}" method="POST" enctype="multipart/form-data" id="slideForm">
                @csrf
                
                <div class="row">
                    <!-- Title Field -->
                    <div class="col-md-8 mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Order Field -->
                    <div class="col-md-4 mb-3">
                        <label for="order" class="form-label">Display Order</label>
                        <input type="number" class="form-control @error('order') is-invalid @enderror" 
                               id="order" name="order" value="{{ old('order', $nextOrder ?? 0) }}" min="0">
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Lower numbers appear first</small>
                    </div>
                </div>
                
                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label">Slide Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                           id="image" name="image" accept="image/*" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="mt-2">
                        <img id="imagePreview" src="#" alt="Image Preview" 
                             class="img-thumbnail d-none" style="max-height: 200px;">
                    </div>
                </div>
                
                <!-- Additional Fields -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="button_text" class="form-label">Button Text</label>
                        <input type="text" class="form-control" id="button_text" 
                               name="button_text" value="{{ old('button_text') }}">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="button_link" class="form-label">Button Link</label>
                        <input type="url" class="form-control @error('button_link') is-invalid @enderror" 
                               id="button_link" name="button_link" value="{{ old('button_link') }}"
                               placeholder="https://example.com">
                        @error('button_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" 
                              rows="3">{{ old('description') }}</textarea>
                </div>
                
                <!-- Status Toggle -->
                <div class="mb-4 form-check form-switch">
                    <input type="checkbox" class="form-check-input" 
                           id="is_active" name="is_active" value="1" checked>
                    <label class="form-check-label" for="is_active">Active Slide</label>
                </div>
                
                <!-- Form Actions -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.slides.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Back to List
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Create Slide
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
        const preview = document.getElementById('imagePreview');
        const file = e.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('d-none');
        }
    });
</script>
@endsection
@endsection