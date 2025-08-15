@include('admin.layouts.AdminStyle')
<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.navbar')
            <!-- Sidebar -->
            @include('admin.layouts.sidnav')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">Logistics Management</h1>
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Orders Today</h5>
                                <h2 class="card-text">42</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">In Transit</h5>
                                <h2 class="card-text">28</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Delivered Today</h5>
                                <h2 class="card-text">14</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Shipping Partners</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Partner ID</th>
                                        <th>Name</th>
                                        <th>Service Areas</th>
                                        <th>Active Shipments</th>
                                        <th>Rating</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>L101</td>
                                        <td>Global Express</td>
                                        <td>Worldwide</td>
                                        <td>32</td>
                                        <td>4.8 ★</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Manage</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>L102</td>
                                        <td>QuickShip</td>
                                        <td>Domestic</td>
                                        <td>18</td>
                                        <td>4.5 ★</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Manage</button>
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