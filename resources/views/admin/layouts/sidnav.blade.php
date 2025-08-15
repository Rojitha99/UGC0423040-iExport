<div class="col-md-2 sidebar p-0">
                   
                    <ul class="nav flex-column">
                        <br><br>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('admin.layouts.master') }}">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"  role="button" 
                            data-bs-toggle="dropdown" data-bs-target="#userRoleManage"aria-expanded="false" aria-controls="userRoleManage">
                                <i class="fas fa-users me-2"></i> User Management
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" id="#userRoleManage" aria-labelledby="settingsDropdown">
                                <a class="dropdown-item" href="/userIndex">
                                    Users
                                </a>
                                <a class="dropdown-item" href="/roleIndex">
                                    Roles
                                </a>
                                <a class="dropdown-item" href="/permissionIndex">
                                    Permission
                                </a>
                            </div>
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
                                <a class="dropdown-item" href="/slideIndex">
                                    Home-slide bar
                                </a>
                                <a class="dropdown-item" href="#">
                                    Featured-Ads
                                </a>
                                
                                <a class="dropdown-item" href="/sellerIndex">
                                    Seller-Summery
                                </a>
                                <a class="dropdown-item" href="/reviewIndex">
                                    Seller-reviews
                                </a>
                                <a class="dropdown-item" href="/buyerIndex">
                                    Buyers-Summery
                                </a>
                                <a class="dropdown-item" href="#">
                                    Buyer-reviews
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