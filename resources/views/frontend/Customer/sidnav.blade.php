<div class="col-md-2 sidebar p-0">
                   
                    <ul class="nav flex-column">
                        <br><br>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('frontend.Customer.sellerdashboard') }}">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.Customer.sellerprofile') }}">
                                <i class="fas fa-store me-2"></i> Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.Customer.post') }}">
                                <i class="fas fa-store me-2"></i> Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.Customer.sellerlogistic') }}">
                                <i class="fas fa-shipping-fast me-2"></i> Logistics
                            </a>
                        </li>
                        

                        
                        <li class="nav-item mt-3">
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
</div>