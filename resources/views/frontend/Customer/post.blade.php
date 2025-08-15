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
                                
                                <option value="Oil">Oil</option>
                                <option value="seeds">Seeds</option>
                                <option value="stick">Stick</option>
                                <option value="powder">Powder</option>
                                <option value="whole">Whole</option>
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
                        <button type="button" class="btn btn-primary" id="paymentBtn">Payment Process</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    </div> <!-- This closes your Add Customer Modal -->

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
      <div class="modal-dialog">
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
                        
                        
                        
                        
                    </div>
                    
                    <!-- Order Summary -->
                    <!-- resources/views/payments/form.blade.php -->
                      @foreach($customers as $customer)
                    <form action="/customer/{customer}/payment" method="POST">
                        @csrf
                       
                        <div class="card mt-3">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Order Summary</h6>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Base Fee:</span>
                                    <span>Rs. 500.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Urgent Fee:</span>
                                    <span>Rs. {{ $customer->urgent ? '200.00' : '0.00' }}</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total:</span>
                                    <span>Rs. {{ number_format($customer->urgent ? 700 : 500, 2) }}</span>
                                </div>
                            </div>
                        </div>
   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" id="completePaymentBtn" class="btn btn-success">Complete Payment</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>  
@push('scripts')
<script>

document.addEventListener('DOMContentLoaded', function() {
    // Handle payment button click
    document.getElementById('paymentBtn').addEventListener('click', function(e) {
        e.preventDefault();
        
        // First validate the form
        const form = document.querySelector('#addCustomerModal form');
        if (form.checkValidity()) {
            // Hide add customer modal
            var addCustomerModal = bootstrap.Modal.getInstance(document.getElementById('addCustomerModal'));
            if (!addCustomerModal) {
                addCustomerModal = new bootstrap.Modal(document.getElementById('addCustomerModal'));
            }
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
        const form = document.querySelector('#addCustomerModal form');
        const formData = new FormData(form);
        
        // Add payment method info
        const activeTab = document.querySelector('#paymentMethodTabs .nav-link.active');
        if (activeTab.id === 'credit-card-tab') {
            formData.append('payment_method', 'credit_card');
        } else if (activeTab.id === 'paypal-tab') {
            formData.append('payment_method', 'paypal');
        } else {
            formData.append('payment_method', 'bank_transfer');
        }
        
        // Show loading state
        const completeBtn = document.getElementById('completePaymentBtn');
        completeBtn.disabled = true;
        completeBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
        
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
        })
        .finally(() => {
            completeBtn.disabled = false;
            completeBtn.innerHTML = 'Complete Payment';
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
                        <td>{{ $customer->urgent ? 'Urgent' : '.' }}</td>
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
                    <div class="d-flex flex-row flex-nowrap overflow-auto gap-3 mb-4">
    @foreach ($customers as $customer)
        <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card" style="width: 200px;">
                <img src="{{ asset('storage/'.$customer->image) }}" 
                     class="card-img-top" 
                     alt="Cinnamon"
                     style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $customer->post_title }}</h5>
                    <p class="card-text">{{ $customer->company_name }}</p>
                    <p class="card-text text-success">Rs.{{ $customer->price }}</p>
                    <p class="card-text" style="color:red"><b>{{ $customer->urgent ? 'Urgent' : ' ' }}</b></p>
                    <p class="card-text">
                        <small class="text-muted">{{ $customer->created_at }}</small>
                    </p>
                </div>
            </div>
        </a>
    @endforeach
    
</div>


                
            </tbody>
        </table>
    </div>
</div>
@stack('scripts')

@endsection

