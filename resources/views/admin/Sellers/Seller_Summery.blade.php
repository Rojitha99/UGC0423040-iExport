@extends('admin.layouts.admin')


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Seller Summery</h1>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SellerModal">
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
    <div class="modal fade" id="SellerModal" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/saveSeller" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="verifiedSellers" class="form-label">Verified Sellers</label>
                            <input type="text" class="form-control" id="verifiedSellers" name="verified_sellers" placeholder="Enter Verified Sellers" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="countriesServed" class="form-label">Countries Served</label>
                            <input type="text" class="form-control" id="countriesServed" name="countries_served" placeholder="Enter Countries Served" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="districtsCovered" class="form-label">Districts Covered</label>
                            <input type="text" class="form-control" id="districtsCovered" name="districts_covered" placeholder="Enter Districts Covered" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="annualExports" class="form-label">Annual Exports</label>
                            <input type="test" class="form-control" id="annualExports" name="annual_exports" placeholder="Enter Annual Exports" required>
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
                    <th scope="col">Verified Sellers</th>
                    <th scope="col">Countries Served</th>
                    <th scope="col">Districts Covered</th>
                    <th scope="col">Annual Exports</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellers as $seller)
                <tr>
                    <td>{{ $seller->verified_sellers}}</td>
                    <td>{{ $seller->countries_served }}</td>
                    <td>{{ $seller->districts_covered }}</td>
                    <td>{{ $seller->annual_exports }}</td>
                    
                    <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#sellerModal{{ $seller->id }}">Edit</button>
                        <a href="/deleteSeller/{{$seller->id}}"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                    <div class="modal fade" id="sellerModal{{ $seller->id }}" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form method="POST" action="/sellerUpdate" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" name="seller_id" value="{{ $seller->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="verifiedSellers" class="form-label">Verified Sellers</label>
                                            <input type="text" class="form-control" id="verifiedSellers" name="verified_sellers" placeholder="Enter Verified Sellers" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="countriesServed" class="form-label">Countries Served</label>
                                            <input type="text" class="form-control" id="countriesServed" name="countries_served" placeholder="Enter Countries Served" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="districtsCovered" class="form-label">Districts Covered</label>
                                            <input type="text" class="form-control" id="districtsCovered" name="districts_covered" placeholder="Enter Districts Covered" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="annualExports" class="form-label">Annual Exports</label>
                                            <input type="test" class="form-control" id="annualExports" name="annual_exports" placeholder="Enter Annual Exports" required>
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