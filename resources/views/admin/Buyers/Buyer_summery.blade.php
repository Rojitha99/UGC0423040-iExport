@extends('admin.layouts.admin')


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Buyer Summery</h1>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BuyerModal">
            Add Buyer Summery
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
    <div class="modal fade" id="BuyerModal" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/saveBuyer" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="verifiedExporters" class="form-label">Verified Exporters</label>
                            <input type="text" class="form-control" id="verifiedSellers" name="verified_exporters" placeholder="Enter Verified Exporters" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="productCategories" class="form-label">Product Categories</label>
                            <input type="text" class="form-control" id="countriesServed" name="product_categories" placeholder="Enter Product Categories" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="monthlyTransactions" class="form-label">Monthly Transactions</label>
                            <input type="text" class="form-control" id="districtsCovered" name="monthly_transactions" placeholder="Enter Monthly Transactions" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="avgResponseTime" class="form-label">Avg Response Time</label>
                            <input type="test" class="form-control" id="annualExports" name="avg_response_time" placeholder="Enter Avg Response Time" required>
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
                    <th scope="col">Verified Exporters</th>
                    <th scope="col">Product Categories</th>
                    <th scope="col">Monthly Transactions</th>
                    <th scope="col">Avg Response Time</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buyers as $buyer)
                <tr>
                    <td>{{ $buyer->verified_exporters}}</td>
                    <td>{{ $buyer->product_categories }}</td>
                    <td>{{ $buyer->monthly_transactions }}</td>
                    <td>{{ $buyer->avg_response_time }}</td>
                    
                    <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#buyerModal{{ $buyer->id }}">Edit</button>
                        <a href="/deleteBuyer/{{$buyer->id}}"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                    <div class="modal fade" id="buyerModal{{ $buyer->id }}" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form method="POST" action="/buyerUpdate" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSlideModalLabel">Add New Slide</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="verifiedExporters" class="form-label">Verified Exporters</label>
                                            <input type="text" class="form-control" id="verifiedSellers" name="verified_exporters" placeholder="Enter Verified Exporters" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="productCategories" class="form-label">Product Categories</label>
                                            <input type="text" class="form-control" id="countriesServed" name="product_categories" placeholder="Enter Product Categories" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="monthlyTransactions" class="form-label">Monthly Transactions</label>
                                            <input type="text" class="form-control" id="districtsCovered" name="monthly_transactions" placeholder="Enter Monthly Transactions" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="avgResponseTime" class="form-label">Avg Response Time</label>
                                            <input type="test" class="form-control" id="annualExports" name="avg_response_time" placeholder="Enter Avg Response Time" required>
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