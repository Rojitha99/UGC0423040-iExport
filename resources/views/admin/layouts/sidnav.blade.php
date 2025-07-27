<div class="col-md-2 sidebar p-0">
                <div class="p-3 text-white">
                    <h4>SpiceExport Admin</h4>
                    <hr class="bg-light">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.usermanage') }}">
                            <i class="fas fa-users me-2"></i> User Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.Sellers') }}">
                            <i class="fas fa-store me-2"></i> Sellers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.Logistics') }}">
                            <i class="fas fa-shipping-fast me-2"></i> Logistics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.Reports') }}">
                            <i class="fas fa-chart-bar me-2"></i> Reports
                        </a>
                    </li>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" 
       data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-cog me-2"></i> Settings
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
        <a class="dropdown-item" href="{{ route('admin.slides.index') }}">
             Home-slide bar
        </a>
        <a class="dropdown-item" href="#">
             Home-Ads
        </a>
        <a class="dropdown-item" href="#">
             Product
        </a>
        <a class="dropdown-item" href="#">
             Seller-reviews
        </a>
        <a class="dropdown-item" href="#">
            Buyer-reviews
        </a>
        <a class="dropdown-item" href="#">
             Logistic-Top-Rate Export
        </a>
        <a class="dropdown-item" href="#">
            Invest-Choice
        </a>
    </div>
</li>
                    <li class="nav-item mt-3">
                       <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
</form>
                    </li>
                </ul>
            </div>