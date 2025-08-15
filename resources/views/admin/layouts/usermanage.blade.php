@include('admin.layouts.AdminStyle')
<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.navbar')
            <!-- Sidebar -->
            @include('admin.layouts.sidnav')

            <!-- Main Content -->
            <div class="col-md-10 main-content p-4">
                

                

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">User Management</h1>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>All Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>Admin</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Deactivate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>jane@example.com</td>
                                        <td>Moderator</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-success">Approve</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>