@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Homepage Slides</h1>
        <a href="{{ route('admin.slides.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Slide
        </a>
    </div>

    
</div>
@endsection


<div>
@if(session('success'))
        <div class="alert-success alert-dismissible fade show"role="alert">
            {(session('success'))}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->any()as $error)
                <li>{{$error}}</li>
                @endforeach
            <ul>
        </div>
        @endif
</div>


@extends('admin.layouts.admin')

@section('content')
<!-- <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Homepage Slides</h1>
        
    </div> -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
<!-- </div> -->
@endsection
@section('scripts')
<!-- Add these at the bottom of your template -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection





<!-- 
slider -->
    <div class="carousel-item active">
      <img src="{{ asset('images/cin-m.webp') }}" class="d-block w-100" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>High Quality Product</h1>
          <p class="opacity-75">Sri Lanka’s agriculture sector includes tea, cinnamon, rice, rubber, and coconut farming. It supports rural livelihoods, exports, and food security, playing a vital role in the national economy.
          </p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('frontend.cinnamon') }}">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/log.jpg') }}" class="d-block w-100" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Our Logistic Platform</h1>
          <p>Sri lanka is the most fameous harbers in indian oscern</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('frontend.logistic') }}">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/bis.jpeg') }}" class="d-block w-100" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Make your Business</h1>
          <p>Your need is our Asset.you is our hart.we do your need perfectly</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}">Sign up today</a></p>
        </div>
      </div>
    </div>





    <!-- post -->

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport-Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card shadow">
          <div class="card-header bg-primary text-white text-center">
            <h4>Add New Post</h4>
          </div>
          <div class="card-body">
            <form action="/post" method="POST" enctype="multipart/form-data">
              
              <div class="mb-3">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter post title" required>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category" class="form-select" required>
                  <option value="">Select Category</option>
                  <option value="Cinnamon">Cinnamon</option>
                  <option value="Cloves">Cloves</option>
                  <option value="Pepper">Pepper</option>
                  <option value="Tea">Tea</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
              </div>

              
              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Write details..." required></textarea>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Price (LKR)</label>
                <input type="number" name="price" class="form-control" placeholder="Ex: 2500" required>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Contact Number</label>
                <input type="tel" name="contact" class="form-control" placeholder="07XXXXXXXX" required>
              </div>

              
              <button type="submit" class="btn btn-primary w-100">Post Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>








@extends('frontend.Customer.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Posts</h1>

        @foreach ($users as $user)
    @if(auth()->check() && auth()->id() === $user->id)
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                Add Customer Post
            </button>
        @endif
@endforeach
        
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

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/saveCustomer" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCustomerModalLabel">Add New Customer Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="post_title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter Post Title" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                
                                <option value="Cinnamon">Cinnamon</option>
                                <option value="Pepper">Pepper</option>
                                <option value="Cloves">Cloves</option>
                                <option value="Nutmeg">Nutmeg</option>
                                <option value="Cardamom">Cardamom</option>
                            </select>
                        </div>

                         <div class="form-group mb-3">
                            <label for="product_category" class="form-label">Product Category</label>
                            <select class="form-control" id="product_category" name="product_category" required>
                                
                                <option value="Cinnamon">Oil</option>
                                <option value="Pepper">Seeds</option>
                                <option value="Cloves">Stick</option>
                                <option value="Nutmeg">Powder</option>
                                <option value="Cardamom">Whole</option>
                            </select>
                        </div>

                         <div class="form-group mb-3">
                            <label for="place" class="form-label">Product Category</label>
                            <select class="form-control" id="place" name="place" required>
                                
                                <option value="all">All Locations</option>
                                    <option value="galle">Galle</option>
                                    <option value="matara">Matara</option>
                                    <option value="gampaha">Gampaha</option>
                                    <option value="kalatara">Kalutara</option>
                                    <option value="colombo">Colombo</option>
                                    <option value="ratnapura">Ratnapura</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="terms" name="urgent" value="1">
                            <label class="form-check-label" for="terms">
                            Urgent
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="more_info_link" class="form-label">More Info Link</label>
                            <input type="url" class="form-control" id="more_info_link" name="more_info_link" placeholder="Enter your Link">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Customers Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Post Title</th>
                    <th>Category</th>
                    <th>Product Category</th>
                    <th>Place</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Contact</th>
                    <th>Urgent</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->post_title }}</td>
                        <td>{{ $customer->category }}</td>
                        <td>{{ $customer->product_category }}</td>
                        <td>{{ $customer->place }}</td>
                        <td>{{ $customer->company_name }}</td>
                        <td>{{ $customer->Description }}</td>
                        <td>{{ $customer->quantity }}</td>
                        <td>Rs. {{ number_format($customer->price, 2) }}</td>
                        <td>{{ $customer->contact_number }}</td>
                        <td>{{ $customer->urgent ? 'Yes' : 'No' }}</td>
                        <td>
                            @if($customer->image)
                                <img width="100" src="{{ asset('storage/'.$customer->image) }}" alt="Slide Image" class="img-thumbnail">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            @if($customer->more_info_link)
                                <a href="{{ $customer->more_info_link }}" target="_blank">View</a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#customerModal{{ $customer->id }}">Edit</button>
                        <a href="/deleteCustomer/{{$customer->id}}"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                    </tr>
                    
                    <!-- Edit Modal for each customer -->
                    <div class="modal fade" id="customerModal{{ $customer->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="/customerUpdate" enctype="multipart/form-data">
                                    @csrf
                                    

                                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Customer Post</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Include all the same fields as add modal, but pre-populated -->
                                        <div class="form-group mb-3">
                                            <label for="post_title" class="form-label">Post Title</label>
                                            <input type="text" class="form-control" id="post_title" name="post_title" 
                                                   value="{{ $customer->post_title }}" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                                
                                                <option value="Cinnamon">Cinnamon</option>
                                                <option value="Pepper">Pepper</option>
                                                <option value="Cloves">Cloves</option>
                                                <option value="Nutmeg">Nutmeg</option>
                                                <option value="Cardamom">Cardamom</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="product_category" class="form-label">Product Category</label>
                                            <select class="form-control" id="product_category" name="product_category" required>
                                                
                                                <option value="Oil">Oil</option>
                                                <option value="Seeds">Seeds</option>
                                                <option value="Stick">Stick</option>
                                                <option value="Powder">Powder</option>
                                                <option value="Whole">Whole</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="place" class="form-label">Product Category</label>
                                            <select class="form-control" id="place" name="place" required>
                                                
                                                <option value="all">All Locations</option>
                                                    <option value="galle">Galle</option>
                                                    <option value="matara">Matara</option>
                                                    <option value="gampaha">Gampaha</option>
                                                    <option value="kalatara">Kalutara</option>
                                                    <option value="colombo">Colombo</option>
                                                    <option value="ratnapura">Ratnapura</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="Description" class="form-label">Description</label>
                                            <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="contact_number" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="urgent" name="urgent" value="1">
                                            <label class="form-check-label" for="urgent">
                                            Urgent
                                            </label>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="more_info_link" class="form-label">More Info Link</label>
                                            <input type="url" class="form-control" id="more_info_link" name="more_info_link" placeholder="Enter your Link">
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="current_image" class="form-label">Current Image</label>
                                            <img src="{{ $customer->image_url }}" width="100" class="d-block mb-2">
                                            <label for="image" class="form-label">Change Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Post</button>
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










<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('post_title');
            $table->string('category');
            $table->string('place');
            $table->string('company_name');
            $table->string('image');
            $table->string('Description');
            $table->string('price');
            $table->string('contact_number');
            $table->string('more_info_link')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};














@extends('frontend.Customer.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Posts</h1>

       @auth
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
        Add Customer Post
    </button>
@endauth
        
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

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/saveCustomer" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCustomerModalLabel">Add New Customer Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="post_title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter Post Title" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                
                                <option value="Cinnamon">Cinnamon</option>
                                <option value="Pepper">Pepper</option>
                                <option value="Cloves">Cloves</option>
                                <option value="Nutmeg">Nutmeg</option>
                                <option value="Cardamom">Cardamom</option>
                            </select>
                        </div>

                         <div class="form-group mb-3">
                            <label for="product_category" class="form-label">Product Category</label>
                            <select class="form-control" id="product_category" name="product_category" required>
                                
                                <option value="Cinnamon">Oil</option>
                                <option value="Pepper">Seeds</option>
                                <option value="Cloves">Stick</option>
                                <option value="Nutmeg">Powder</option>
                                <option value="Cardamom">Whole</option>
                            </select>
                        </div>

                         <div class="form-group mb-3">
                            <label for="place" class="form-label">Product Category</label>
                            <select class="form-control" id="place" name="place" required>
                                
                                <option value="all">All Locations</option>
                                    <option value="galle">Galle</option>
                                    <option value="matara">Matara</option>
                                    <option value="gampaha">Gampaha</option>
                                    <option value="kalatara">Kalutara</option>
                                    <option value="colombo">Colombo</option>
                                    <option value="ratnapura">Ratnapura</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="terms" name="urgent" value="1">
                            <label class="form-check-label" for="terms">
                            Urgent
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="more_info_link" class="form-label">More Info Link</label>
                            <input type="url" class="form-control" id="more_info_link" name="more_info_link" placeholder="Enter your Link">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    
    
    <!-- Customers Table -->


    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Post Title</th>
                    <th>Category</th>
                    <th>Product Category</th>
                    <th>Place</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Contact</th>
                    <th>Urgent</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->post_title }}</td>
                        <td>{{ $customer->category }}</td>
                        <td>{{ $customer->product_category }}</td>
                        <td>{{ $customer->place }}</td>
                        <td>{{ $customer->company_name }}</td>
                        <td>{{ $customer->Description }}</td>
                        <td>{{ $customer->quantity }}</td>
                        <td>Rs. {{ number_format($customer->price, 2) }}</td>
                        <td>{{ $customer->contact_number }}</td>
                        <td>{{ $customer->urgent ? 'Yes' : 'No' }}</td>
                        <td>
                            @if($customer->image)
                                <img width="100" src="{{ asset('storage/'.$customer->image) }}" alt="Slide Image" class="img-thumbnail">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            @if($customer->more_info_link)
                                <a href="{{ $customer->more_info_link }}" target="_blank">View</a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                        <button class="btn btn-sm btn-primary edit-slide" data-bs-toggle="modal" data-bs-target="#customerModal{{ $customer->id }}">Edit</button>
                        <a href="/deleteCustomer/{{$customer->id}}"class="btn btn-sm btn-danger">Delete</a>
                    </td>
                    </tr>
                    
                    <!-- Edit Modal for each customer -->
                    <div class="modal fade" id="customerModal{{ $customer->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="/customerUpdate" enctype="multipart/form-data">
                                    @csrf
                                    

                                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Customer Post</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Include all the same fields as add modal, but pre-populated -->
                                        <div class="form-group mb-3">
                                            <label for="post_title" class="form-label">Post Title</label>
                                            <input type="text" class="form-control" id="post_title" name="post_title" 
                                                   value="{{ $customer->post_title }}" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                                
                                                <option value="Cinnamon">Cinnamon</option>
                                                <option value="Pepper">Pepper</option>
                                                <option value="Cloves">Cloves</option>
                                                <option value="Nutmeg">Nutmeg</option>
                                                <option value="Cardamom">Cardamom</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="product_category" class="form-label">Product Category</label>
                                            <select class="form-control" id="product_category" name="product_category" required>
                                                
                                                <option value="Oil">Oil</option>
                                                <option value="Seeds">Seeds</option>
                                                <option value="Stick">Stick</option>
                                                <option value="Powder">Powder</option>
                                                <option value="Whole">Whole</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="place" class="form-label">Product Category</label>
                                            <select class="form-control" id="place" name="place" required>
                                                
                                                <option value="all">All Locations</option>
                                                    <option value="galle">Galle</option>
                                                    <option value="matara">Matara</option>
                                                    <option value="gampaha">Gampaha</option>
                                                    <option value="kalatara">Kalutara</option>
                                                    <option value="colombo">Colombo</option>
                                                    <option value="ratnapura">Ratnapura</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="Description" class="form-label">Description</label>
                                            <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="contact_number" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="urgent" name="urgent" value="1">
                                            <label class="form-check-label" for="urgent">
                                            Urgent
                                            </label>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="more_info_link" class="form-label">More Info Link</label>
                                            <input type="url" class="form-control" id="more_info_link" name="more_info_link" placeholder="Enter your Link">
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label for="current_image" class="form-label">Current Image</label>
                                            <img src="{{ $customer->image_url }}" width="100" class="d-block mb-2">
                                            <label for="image" class="form-label">Change Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 mb-4" >
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card" >
              <img src="{{ asset('storage/'.$customer->image) }}" class="card-img-top" alt="Cinnamon">
              <div class="card-body">
                <h5 class="card-title">{{$customer->post_title}}</h5>
                <p class="card-text">{{$customer->company_name}}</p>
                <p class="card-text text-success">Rs.{{$customer->price}}</p>
                <p class="card-text" style="color:red"><b>{{$customer->urgent}}</b></p>
                <p class="card-text"><small class="text-muted">{{$customer->created_at}}</small></p>
              </div>
            </div>
          </a>
        </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection












@extends('frontend.Customer.master')

@section('content')
<div class="container">
    <!-- Your existing content -->

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Customer Form Step -->
                <div id="customerFormStep">
                    <form id="customerForm" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Customer Post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Your existing form fields -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="proceedToPaymentBtn" class="btn btn-primary">Proceed to Payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Complete Your Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Payment Method Tabs -->
                    <ul class="nav nav-tabs mb-4" id="paymentMethodTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="credit-card-tab" data-bs-toggle="tab" 
                                    data-bs-target="#credit-card" type="button" role="tab">
                                <i class="fas fa-credit-card me-2"></i>Credit Card
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="paypal-tab" data-bs-toggle="tab" 
                                    data-bs-target="#paypal" type="button" role="tab">
                                <i class="fab fa-paypal me-2"></i>PayPal
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bank-transfer-tab" data-bs-toggle="tab" 
                                    data-bs-target="#bank-transfer" type="button" role="tab">
                                <i class="fas fa-university me-2"></i>Bank Transfer
                            </button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="paymentMethodTabsContent">
                        <!-- Credit Card -->
                        <div class="tab-pane fade show active" id="credit-card" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Card Number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" 
                                           placeholder="1234 5678 9012 3456" 
                                           name="card_number">
                                    <span class="input-group-text">
                                        <i class="fab fa-cc-visa"></i>
                                        <i class="fab fa-cc-mastercard ms-2"></i>
                                        <i class="fab fa-cc-amex ms-2"></i>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Expiration Date</label>
                                    <input type="text" class="form-control" 
                                           placeholder="MM/YY" name="expiry">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">CVV</label>
                                    <input type="text" class="form-control" 
                                           placeholder="123" name="cvv">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Cardholder Name</label>
                                <input type="text" class="form-control" 
                                       placeholder="John Doe" name="card_name">
                            </div>
                        </div>
                        
                        <!-- PayPal -->
                        <div class="tab-pane fade" id="paypal" role="tabpanel">
                            <div class="alert alert-info">
                                You will be redirected to PayPal to complete your payment
                            </div>
                        </div>
                        
                        <!-- Bank Transfer -->
                        <div class="tab-pane fade" id="bank-transfer" role="tabpanel">
                            <div class="alert alert-info">
                                <h5>Bank Transfer Instructions</h5>
                                <p>Please transfer the amount to the following bank account:</p>
                                <ul class="list-unstyled">
                                    <li><strong>Bank Name:</strong> Example Bank</li>
                                    <li><strong>Account Name:</strong> Your Store Name</li>
                                    <li><strong>Account Number:</strong> 1234567890</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Summary -->
                    <div class="card mt-3">
                        <div class="card-header bg-light">
                            <h6 class="mb-0">Order Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Post Fee:</span>
                                <span>Rs. 500.00</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <span>Total:</span>
                                <span>Rs. 500.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="completePaymentBtn" class="btn btn-success">Complete Payment</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle proceed to payment button
    document.getElementById('proceedToPaymentBtn').addEventListener('click', function(e) {
        e.preventDefault();
        
        // First validate the form
        const form = document.getElementById('customerForm');
        if (form.checkValidity()) {
            // Hide add customer modal
            var addCustomerModal = bootstrap.Modal.getInstance(document.getElementById('addCustomerModal'));
            addCustomerModal.hide();
            
            // Show payment modal
            var paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
            paymentModal.show();
        } else {
            form.reportValidity();
        }
    });
    
    // Handle complete payment button
    document.getElementById('completePaymentBtn').addEventListener('click', function() {
        const formData = new FormData(document.getElementById('customerForm'));
        
        // Add payment method info
        const activeTab = document.querySelector('#paymentMethodTabs .nav-link.active');
        if (activeTab.id === 'credit-card-tab') {
            formData.append('payment_method', 'credit_card');
        } else if (activeTab.id === 'paypal-tab') {
            formData.append('payment_method', 'paypal');
        } else {
            formData.append('payment_method', 'bank_transfer');
        }
        
        // Submit the form via AJAX
        fetch('/saveCustomer', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                alert('Error: ' + (data.message || 'Payment failed'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred during payment');
        });
    });
    
    // Format credit card number
    const cardNumberInput = document.querySelector('#paymentModal input[name="card_number"]');
    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function(e) {
            let value = this.value.replace(/\s+/g, '');
            if (value.length > 0) {
                value = value.match(new RegExp('.{1,4}', 'g')).join(' ');
            }
            this.value = value;
        });
    }
    
    // Format expiry date
    const expiryInput = document.querySelector('#paymentModal input[name="expiry"]');
    if (expiryInput) {
        expiryInput.addEventListener('input', function(e) {
            let value = this.value.replace(/\D/g, '');
            if (value.length > 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            this.value = value;
        });
    }
});
</script>
@endpush

@endsection



<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Complete Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Payment Method Tabs -->
        <ul class="nav nav-tabs mb-3" id="paymentMethodTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="credit-card-tab" data-bs-toggle="tab" 
                    data-bs-target="#credit-card" type="button" role="tab">
              <i class="fas fa-credit-card me-2"></i> Credit Card
            </button>
          </li>
        </ul>
        
        <div class="tab-content" id="paymentMethodTabsContent">
          <!-- Credit Card -->
          <div class="tab-pane fade show active" id="credit-card" role="tabpanel">
            <form id="paymentForm">
              <div class="mb-3">
                <label class="form-label">Card Number</label>
                <input type="text" class="form-control" name="card_number" 
                       placeholder="1234 5678 9012 3456" required
                       pattern="[0-9]{16}" title="16-digit card number">
              </div>
              
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Expiration Date</label>
                  <input type="text" class="form-control" name="expiry" 
                         placeholder="MM/YY" required
                         pattern="(0[1-9]|1[0-2])\/[0-9]{2}" title="MM/YY format">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">CVV</label>
                  <input type="text" class="form-control" name="cvv" 
                         placeholder="123" required
                         pattern="[0-9]{3,4}" title="3 or 4-digit CVV">
                </div>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Cardholder Name</label>
                <input type="text" class="form-control" name="card_name" 
                       placeholder="John Doe" required>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount" 
                       value="500.00" readonly>
              </div>
              
              <div id="paymentSuccess" class="alert alert-success d-none"></div>
              <div id="paymentErrors" class="alert alert-danger d-none"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="completePaymentBtn" class="btn btn-success">
          Complete Payment
        </button>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  const completePaymentBtn = document.getElementById('completePaymentBtn');
  const paymentForm = document.getElementById('paymentForm');
  const paymentSuccess = document.getElementById('paymentSuccess');
  const paymentErrors = document.getElementById('paymentErrors');
  
  // Example test data that will work
  const testPaymentData = {
    card_number: "4111111111111111", // Test Visa card number
    expiry: "12/25",                // Future expiration
    cvv: "123",                     // 3-digit CVV
    card_name: "John Doe",          // Cardholder name
    amount: "500.00"                // Fixed amount
  };
  
  // Handle complete payment button
  completePaymentBtn.addEventListener('click', function() {
    // Reset messages
    paymentSuccess.classList.add('d-none');
    paymentErrors.classList.add('d-none');
    
    // Validate form
    if (!paymentForm.checkValidity()) {
      paymentForm.classList.add('was-validated');
      return;
    }
    
    // Show loading state
    completePaymentBtn.disabled = true;
    completePaymentBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Processing...';
    
    // Simulate successful payment processing
    setTimeout(function() {
      // In real implementation, you would make an AJAX call here
      // For this example, we'll simulate a successful response
      
      // Show success message
      paymentSuccess.textContent = 'Payment successful! Your post has been submitted.';
      paymentSuccess.classList.remove('d-none');
      
      // Reset button
      completePaymentBtn.disabled = false;
      completePaymentBtn.innerHTML = 'Complete Payment';
      
      // Close modal after 2 seconds
      setTimeout(function() {
        var paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
        paymentModal.hide();
        
        // Optional: reload page or redirect
        window.location.reload();
      }, 2000);
      
    }, 1500); // Simulate processing delay
  });
  
  // Format card number input
  const cardNumberInput = document.querySelector('input[name="card_number"]');
  cardNumberInput.addEventListener('input', function(e) {
    let value = this.value.replace(/\s+/g, '');
    if (value.length > 0) {
      value = value.match(/.{1,4}/g).join(' ');
    }
    this.value = value;
  });
  
  // Format expiry date input
  const expiryInput = document.querySelector('input[name="expiry"]');
  expiryInput.addEventListener('input', function(e) {
    let value = this.value.replace(/\D/g, '');
    if (value.length > 2) {
      value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }
    this.value = value;
  });
  
  // Pre-fill test data (for demo only - remove in production)
  document.querySelector('input[name="card_number"]').value = testPaymentData.card_number;
  document.querySelector('input[name="expiry"]').value = testPaymentData.expiry;
  document.querySelector('input[name="cvv"]').value = testPaymentData.cvv;
  document.querySelector('input[name="card_name"]').value = testPaymentData.card_name;
});
</script>
@endpush




<!-- Search Bar -->
      <div class="search-container mb-4" role="search">
        <input type="text" class="search-bar" placeholder="What are you looking for?">
        <button class="search-btn">
          <i class="bi bi-search"></i>
        </button>
      </div>