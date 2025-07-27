@extends('layouts.app', ['navbarColor' => 'rgb(140, 77, 212)'])

@section('title', 'Home - Buyers')

@section('content')





<!-- Search Bar -->
<div class="search-container" role="search">
  <input type="text" class="search-bar" placeholder="What are you looking for?">
  <button class="search-btn">
    <i class="bi bi-search"></i>
  </button>
</div>

    <!-- Stats Section -->
    <section class="container mb-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">50+</h3>
                    <p class="text-muted mb-0">Verified Exporters</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">100+</h3>
                    <p class="text-muted mb-0">Product Categories</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">1,000+</h3>
                    <p class="text-muted mb-0">Monthly Transactions</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">24h</h3>
                    <p class="text-muted mb-0">Avg. Response Time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Buy Through iExport?</h2>
            <p class="lead text-muted">Secure, efficient sourcing from Sri Lanka's best producers</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Verified Suppliers</h4>
                    <p>All sellers undergo strict verification to ensure product authenticity and business legitimacy.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h4>Secure Transactions</h4>
                    <p>Our escrow system protects your payments until order fulfillment is confirmed.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h4>Logistics Network</h4>
                    <p>Access our partnered logistics providers for reliable global shipping.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h4>Quality Assurance</h4>
                    <p>Standardized quality checks and certificates for all products.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h4>Competitive Pricing</h4>
                    <p>Direct-from-source pricing without middleman markups.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Buyer Support</h4>
                    <p>Dedicated account managers for international buyers.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- How It Works -->
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How It Works For Buyers</h2>
            <p class="text-muted">Simple steps to source from Sri Lanka's best producers</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center p-4 h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <h2 class="mb-0">1</h2>
                    </div>
                    <h4 class="my-3">Create Account</h4>
                    <p>Register as a buyer with your business details (5 min process)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center p-4 h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <h2 class="mb-0">2</h2>
                    </div>
                    <h4 class="my-3">Find Suppliers</h4>
                    <p>Search or browse verified exporters by product or category</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center p-4 h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <h2 class="mb-0">3</h2>
                    </div>
                    <h4 class="my-3">Request Quotes</h4>
                    <p>Contact sellers directly or request bulk quotations</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center p-4 h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <h2 class="mb-0">4</h2>
                    </div>
                    <h4 class="my-3">Place Order</h4>
                    <p>Secure transaction with our payment protection system</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-light py-5 mb-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Trusted By Global Buyers</h2>
                <p class="text-muted">What international importers say about iExport</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"iExport has transformed how we source Ceylon cinnamon. The quality assurance and direct supplier access saves us 20% compared to traditional channels."</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex align-items-center">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" width="50" height="50" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">Sarah Johnson</h6>
                                    <small class="text-muted">Global Spices Inc., USA</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">“Our partnership with Sri Lankan exporters has been seamless. High-quality cloves and tea products, always delivered on time.”</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/pol.webp') }}" width="50" height="50" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">San Paul</h6>
                                    <small class="text-muted">PureTaste Distributors (Germany)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">“We received top-grade Ceylon cinnamon with rich aroma and excellent packaging. Very satisfied with the sourcing process and prompt delivery.”</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/ken.webp') }}" width="50" height="50" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">kean Wilianson</h6>
                                    <small class="text-muted">King Spices Ltd. (UK)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mb-5">
        <div class="bg-primary text-white rounded-3 p-5 text-center">
            <h2 class="fw-bold mb-3">Ready to Source From Sri Lanka?</h2>
            <p class="lead mb-4">Join hundreds of global buyers who trust iExport for authentic Ceylon products</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <a href="#" class="btn btn-light btn-lg px-4">Register as Buyer</a>
                <a href="#" class="btn btn-outline-light btn-lg px-4">Contact Our Team</a>
            </div>
        </div>
    </section>

@endsection