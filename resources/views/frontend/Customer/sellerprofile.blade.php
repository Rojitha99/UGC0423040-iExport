@extends('frontend.Customer.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Profile</h1>
</div>

<div class="row">
    <!-- Profile Card -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                
                <h4 class="mt-3 mb-1">{{ auth()->user()->name }}</h4>
                <p class="text-muted mb-3">{{ auth()->user()->email }}</p>
            </div>
        </div>
        
        <!-- Account Status Card -->
        <div class="card shadow-sm mt-3">
            <div class="card-header bg-white">
                <h6 class="mb-0">Account Status</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <span>Verification:</span>
                    <span class="badge bg-{{ auth()->user()->profile?->is_verified ? 'success' : 'secondary' }}">
                        {{ auth()->user()->profile?->is_verified ? 'Verified' : 'Verified' }}
                    </span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Member Since:</span>
                    <span>{{ auth()->user()->created_at->format('M d, Y') }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Last Login:</span>
                    <span>{{ auth()->user()->profile?->last_login_at?->diffForHumans() ?? '5 min ago' }}</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Profile Form -->
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#personal" data-bs-toggle="tab">Personal Info</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="personal">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="{{ auth()->user()->email }}"required >
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
    // Avatar preview functionality
    document.getElementById('avatarUpload').addEventListener('change', function(e) {
        const previewContainer = document.querySelector('.preview-container');
        const preview = document.getElementById('avatarPreview');
        
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.style.display = 'block';
            }
            
            reader.readAsDataURL(this.files[0]);
        } else {
            previewContainer.style.display = 'none';
        }
    });

    // Update last login time when page loads
    window.addEventListener('load', function() {
        fetch("{{ route('profile.update-last-login') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        });
    });
</script>
@endsection