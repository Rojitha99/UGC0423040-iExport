@extends('frontend.Customer.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Logistics Management</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addShippingModal">
        <i class="fas fa-plus me-1"></i> Add Shipping Method
    </button>
</div>



<!-- Shipping Methods Section -->
<div class="card shadow-sm mb-4" id="shippingMethods">
    <div class="card-header bg-white">
        <h5 class="mb-0">Shipping Methods</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Delivery Time</th>
                        <th>Price</th>
                        <th>Free Threshold</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt="Standard">
                                Standard Shipping
                            </div>
                        </td>
                        <td>3-5 business days</td>
                        <td>$5.99</td>
                        <td>$50.00</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt="Express">
                                Express Shipping
                            </div>
                        </td>
                        <td>1-2 business days</td>
                        <td>$12.99</td>
                        <td>$100.00</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt="Local">
                                Local Pickup
                            </div>
                        </td>
                        <td>Same day</td>
                        <td>$0.00</td>
                        <td>N/A</td>
                        <td><span class="badge bg-secondary">Inactive</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Inventory Locations Section -->
<div class="card shadow-sm mb-4" id="inventoryLocations">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Inventory Locations</h5>
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addLocationModal">
            <i class="fas fa-plus me-1"></i> Add Location
        </button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title">Main Warehouse</h5>
                                <span class="badge bg-primary">Primary</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Set as Primary</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>
                            123 Warehouse Ave, Brooklyn, NY 11205
                        </p>
                        <div class="d-flex justify-content-between small text-muted">
                            <span>Capacity: 85%</span>
                            <span>SKUs: 245</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title">West Coast Hub</h5>
                                <span class="badge bg-secondary">Secondary</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Set as Primary</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>
                            456 Distribution St, Los Angeles, CA 90015
                        </p>
                        <div class="d-flex justify-content-between small text-muted">
                            <span>Capacity: 62%</span>
                            <span>SKUs: 178</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Add Shipping Method Modal -->
<div class="modal fade" id="addShippingModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Shipping Method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Shipping Method Name</label>
                        <input type="text" class="form-control" placeholder="e.g., Standard Shipping">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Delivery Time</label>
                            <input type="text" class="form-control" placeholder="e.g., 3-5 business days">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Shipping Cost</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" step="0.01" placeholder="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Free Shipping Threshold</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" step="0.01" placeholder="0.00">
                        </div>
                        <small class="text-muted">Leave empty if no free shipping option</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service Logo</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="activateShipping" checked>
                        <label class="form-check-label" for="activateShipping">Activate this shipping method</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Shipping Method</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Location Modal -->
<div class="modal fade" id="addLocationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Inventory Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Location Name</label>
                        <input type="text" class="form-control" placeholder="e.g., Main Warehouse">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control mb-2" placeholder="Street address">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="ZIP">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact Person</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Contact Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contact Phone</label>
                            <input type="tel" class="form-control" placeholder="(123) 456-7890">
                        </div>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="setPrimary">
                        <label class="form-check-label" for="setPrimary">Set as primary location</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Location</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Chart.js for delivery performance -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Delivery Performance Chart
    const ctx = document.getElementById('deliveryChart').getContext('2d');
    const deliveryChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'On-Time Delivery %',
                data: [92, 89, 93, 95, 94, 96, 94],
                borderColor: '#4e73df',
                backgroundColor: 'rgba(78, 115, 223, 0.05)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: false,
                    min: 85,
                    max: 100
                }
            }
        }
    });
</script>
@endsection