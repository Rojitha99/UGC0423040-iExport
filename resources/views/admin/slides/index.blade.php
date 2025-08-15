@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Homepage Slides</h1>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSlideModal">
            Add Slide
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
    <div class="modal fade" id="addSlideModal" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/saveSlider" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter Heading" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="buttonName" class="form-label">Button Name</label>
                            <input type="text" class="form-control" id="buttonName" name="button_name" placeholder="Enter Button Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="imageUpload" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="imageUpload" name="image" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="moreInfoLink" class="form-label">More Info Link</label>
                            <input type="url" class="form-control" id="moreInfoLink" name="more_info_link" placeholder="Enter your Link">
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
                    <th scope="col">Heading</th>
                    <th scope="col">Description</th>
                    <th scope="col">Button Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">More Info Link</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                    <tr>
                    <td>{{ $slider->heading }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>{{ $slider->button_name }}</td>
                    <td><img width="100" src="{{ asset('storage/'.$slider->image) }}" alt="Slide Image" class="img-thumbnail"></td>
                    <td>
                        @if($slider->more_info_link)
                            <a href="{{ $slider->more_info_link }}" target="_blank">View Link</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#sliderModal{{ $slider->id }}">Edit</button>
                        <a href="/deleteSlider/{{$slider->id}}"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                    </tr>
                    <div class="modal fade" id="sliderModal{{ $slider->id }}" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form method="POST" action="/sliderUpdate" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" name="slider_id" value="{{ $slider->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSlideModalLabel">Edit Slide</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="heading" class="form-label">Heading</label>
                                            <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter Heading" >
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" >
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="buttonName" class="form-label">Button Name</label>
                                            <input type="text" class="form-control" id="buttonName" name="button_name" placeholder="Enter Button Name" >
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="imageUpload" class="form-label">Image Upload</label>
                                            <input type="file" class="form-control" id="imageUpload" name="image" >
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="moreInfoLink" class="form-label">More Info Link</label>
                                            <input type="url" class="form-control" id="moreInfoLink" name="more_info_link" placeholder="Enter your Link">
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