@include('admin.layouts.AdminStyle')
<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.navbar')
            <!-- Sidebar -->
            @include('admin.layouts.sidnav')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">Sellers Management</h1>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Active Sellers</h5>
                                <h2 class="card-text">156</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pending Approvals</h5>
                                <h2 class="card-text">12</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Recent Seller Approvals</h4>
                        <button class="btn btn-primary">Approve All Pending</button>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            Approved Seller (ID: 45)
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Seller ID</th>
                                        <th>Business Name</th>
                                        <th>Owner</th>
                                        <th>Products</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>45</td>
                                        <td>Spice World</td>
                                        <td>Raj Patel</td>
                                        <td>24</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>46</td>
                                        <td>Herb Masters</td>
                                        <td>Priya Sharma</td>
                                        <td>18</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Approve</button>
                                            <button class="btn btn-sm btn-danger">Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>