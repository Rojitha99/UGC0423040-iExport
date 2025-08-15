@include('admin.layouts.AdminStyle')
<body>
    <div class="container-fluid">
        <div class="row">
             @include('admin.layouts.navbar')
            <!-- Sidebar -->
            @include('admin.layouts.sidnav')

            <!-- Main Content -->
            <div class="col-md-10 main-content p-4">
                

                <!-- Stats Cards -->
                @yield('content')

                
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


