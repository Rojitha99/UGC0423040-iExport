@extends('layouts.app', ['navbarColor' => '#198754'])

@section('title', 'Home - Sellers')

@section('content')


<!-- Search Bar -->
<div class="search-container" role="search">
  <input type="text" class="search-bar" placeholder="What are you looking for?">
  <button class="search-btn">
    <i class="bi bi-search"></i>
  </button>
</div>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">
                <i class="fas fa-leaf"></i> iExport Seller Network
            </h1>
            <p class="lead mb-5">
                Connecting Sri Lanka's finest agricultural exporters with global buyers
            </p>
            <a href="#seller-benefits" class="btn btn-success btn-lg px-4 me-2">
                Explore Benefits
            </a>
            <a href="#register" class="btn btn-outline-light btn-lg px-4">
                Join Now
            </a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="container mb-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">1,250+</h3>
                    <p class="text-muted mb-0">Verified Sellers</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">75+</h3>
                    <p class="text-muted mb-0">Countries Served</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">25</h3>
                    <p class="text-muted mb-0">Districts Covered</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">$50M+</h3>
                    <p class="text-muted mb-0">Annual Exports</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="seller-benefits" class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Join iExport Sellers?</h2>
            <p class="lead text-muted">Grow your export business with our powerful platform</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>Global Reach</h4>
                    <p>Connect with international buyers from 75+ countries looking for authentic Ceylon products.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Business Growth</h4>
                    <p>Our tools help you increase sales, streamline operations, and expand your market share.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>Verified Badge</h4>
                    <p>Gain buyer trust with our verification system that authenticates your products and business.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Secure Payments</h4>
                    <p>Our escrow system ensures you get paid on time for all your exports.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4>Logistics Support</h4>
                    <p>Access our network of trusted logistics partners for seamless shipping worldwide.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Training</h4>
                    <p>Free workshops on export procedures, quality standards, and market trends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration CTA -->
    <section id="register" class="bg-light py-5 mb-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Ready to Grow Your Export Business?</h2>
            <p class="lead mb-4">Join Sri Lanka's largest agricultural export network today</p>
            <a href="/register" class="btn btn-success btn-lg px-5">
                <i class="fas fa-user-plus me-2"></i> Register as Seller
            </a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Sellers Say</h2>
            <p class="text-muted">Success stories from our verified exporters</p>
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
                        <p class="card-text">"iExport helped us triple our cinnamon exports to Europe within just one year. The buyer network is incredible."</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/bawan.jpg') }}" width="50" height="50" class="rounded-circle me-3">
                            <div>
                                <h6 class="mb-0">Bawantha Malshan</h6>
                                <small class="text-muted">Colombo Spice Exporters</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add 2 more testimonials -->
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
                        <p class="card-text">“We’ve been sourcing Ceylon cinnamon and cloves from Ceylon Aroma for over two years now. Their product quality is top-notch — rich aroma, clean packaging, and always on time. Their communication is clear, and the documentation is professional. Highly recommended for bulk spice buyers.”
— Green Leaf Importers, Germany</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/jani.jpg') }}" width="50" height="50" class="rounded-circle me-3">
                            <div>
                                <h6 class="mb-0">Janidu Malawipathirana</h6>
                                <small class="text-muted">JM Agricultura</small>
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
                        <p class="card-text">“We’ve been importing cinnamon from Ceylon Aroma Exports for over a year. Their product quality is consistently excellent, and shipments always arrive on time.”</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/asg.jpg') }}" width="50" height="50" class="rounded-circle me-3">
                            <div>
                                <h6 class="mb-0">Asgir Perera</h6>
                                <small class="text-muted">SL-Top Company</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection