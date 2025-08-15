@extends('frontend.Customer.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
            
            <a href="{{ route('frontend.Customer.post') }}">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                Add Customer Post
            </button></a>
     

    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-white bg-primary dashboard-card">
            <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <h2 class="card-text">20</h2>
                <a href="#" class="text-white">View all</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success dashboard-card">
            <div class="card-body">
                <h5 class="card-title">Active Products</h5>
                <h2 class="card-text">2</h2>
                <a href="#?status=active" class="text-white">View active</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-info dashboard-card">
            <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <h2 class="card-text">18</h2>
                <a href="#" class="text-white">View orders</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning dashboard-card">
            <div class="card-body">
                <h5 class="card-title">Total Revenue</h5>
                <h2 class="card-text">130000.00</h2>
                <a href="#" class="text-white">View earnings</a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Products -->
<div class="card mb-4">
    <div class="card-header">
        <h5>Recent Products</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>18</td>
                        <td>Cinnamon</td>
                        <td>2000</td>
                        <td>
                            <span class="badge bg-primary">
                                Done
                            </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Recent Orders -->
<div class="card">
    <div class="card-header">
        <h5>Recent Orders</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>20</td>
                        <td>John</td>
                        <td>12000</td>
                        <td>
                            <span class="badge bg-primary">
                               Pending
                            </span>
                        </td>
                        <td>#</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection