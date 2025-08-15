@extends('admin.layouts.admin')


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Seller Summery</h1>
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
                <form method="POST" action="/saveReview" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="stars" class="form-label">Stars</label>
                            <input type="text" class="form-control" id="stars" name="stars" placeholder="Enter Verified Sellers" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter Countries Served" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="imageUpload" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="imageUpload" name="image" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Districts Covered" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="company" class="form-label">Annual Exports</label>
                            <input type="test" class="form-control" id="company" name="company" placeholder="Enter Company Name" required>
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
                    <th scope="col">Stars</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->stars}}</td>
                        <td>{{ $review->comment }}</td>
                        <td><img width="100" src="{{ asset('storage/'.$review->image) }}" alt="Slide Image" class="img-thumbnail"></td>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->company }}</td>
                        
                        <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#reviewModal{{ $review->id }}">Edit</button>
                        <a href="/deleteReview/{{$review->id}}"class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="reviewModal{{ $review->id }}" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form method="POST" action="/reviewUpdate" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="stars" class="form-label">Stars</label>
                                            <input type="text" class="form-control" id="stars" name="stars" placeholder="Enter Verified Sellers" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="comment" class="form-label">Comment</label>
                                            <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter Countries Served" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="imageUpload" class="form-label">Image Upload</label>
                                            <input type="file" class="form-control" id="imageUpload" name="image" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Districts Covered" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="company" class="form-label">Annual Exports</label>
                                            <input type="test" class="form-control" id="company" name="company" placeholder="Enter Company Name" required>
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