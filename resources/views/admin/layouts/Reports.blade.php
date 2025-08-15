@include('admin.layouts.AdminStyle')
<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.navbar')
            <!-- Sidebar -->
            @include('admin.layouts.sidnav')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">Reports</h1>
                
                <div class="alert alert-success mt-4">
                    Generated Monthly Report
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-4 mb-4">
                        <div class="card report-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Sales Report</h5>
                                <p class="card-text">Detailed analysis of sales performance by period, region, and product category.</p>
                                <a href="#" class="btn btn-outline-primary">Generate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card report-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Inventory Report</h5>
                                <p class="card-text">Current stock levels, low inventory alerts, and product movement analysis.</p>
                                <a href="#" class="btn btn-outline-primary">Generate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card report-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Seller Performance</h5>
                                <p class="card-text">Metrics and ratings for all sellers including sales volume and customer feedback.</p>
                                <a href="#" class="btn btn-outline-primary">Generate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card report-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Customer Analytics</h5>
                                <p class="card-text">Customer demographics, purchasing patterns, and retention metrics.</p>
                                <a href="#" class="btn btn-outline-primary">Generate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card report-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Logistics Report</h5>
                                <p class="card-text">Shipping performance, delivery times, and carrier efficiency analysis.</p>
                                <a href="#" class="btn btn-outline-primary">Generate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card report-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Financial Summary</h5>
                                <p class="card-text">Revenue, expenses, profits, and other key financial metrics.</p>
                                <a href="#" class="btn btn-outline-primary">Generate</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Recent Reports</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Report Name</th>
                                        <th>Generated On</th>
                                        <th>Period</th>
                                        <th>Format</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monthly Sales Report - June 2023</td>
                                        <td>2023-07-01</td>
                                        <td>Jun 1-30, 2023</td>
                                        <td>PDF</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Download</button>
                                            <button class="btn btn-sm btn-info">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Seller Performance - Q2 2023</td>
                                        <td>2023-07-05</td>
                                        <td>Apr 1 - Jun 30, 2023</td>
                                        <td>Excel</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Download</button>
                                            <button class="btn btn-sm btn-info">View</button>
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