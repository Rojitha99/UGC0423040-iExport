<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iExport - Sri Lanka's Premier Seller Network</title>
    <link rel="icon" type="image/png" href="cin.webp">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
      
    
     html, body {
      overflow-x: hidden;
    }
    body {
      background-color: #fff;
      padding-top: 140px;
      padding-bottom: 50px;
    }
   
    .link {
      text-decoration: none;
    }
    .search-bar {
      border-radius: 40px;
      padding: 12px 20px;
      font-size: 1rem;
      width: 100%;
      border: #cc7116;
      outline: none;
    }
    .search-container {
      max-width: 700px;
      margin: 30px auto;
      position: relative;
      background: white;
      border: #cc7116;
      border-radius: 40px;
      padding: 5px;
      box-shadow: 0 2px 5px green;
    }
    .search-btn {
      position: absolute;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      background-color: #fcd116;
      border-radius: 50%;
      padding: 8px 12px;
      border: none;
    }
    .search-btn i {
      color: black;
    }
    .location-badge {
      background-color: #007b5e;
      color: white;
      border-radius: 20px;
      padding: 5px 15px;
      margin-left: 15px;
    }
    .nav-button {
      background-color: transparent;
      border: 1px solid #fff;
      font-weight: 500;
      border-radius: 20px;
      padding: 5px 15px;
      color: #e3e6e4 !important;
      text-decoration: none !important;
    }
    .nav-button:hover {
      background-color: #c58911;
    }
    .dropdown-toggle::after {
      display: none;
    }
    .fixed-navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1030;
      width: 100%;
    }
    .main-navbar {
      top: 0;
    }
    .secondary-navbar {
      top: 72px;
    }
    .carousel-item img {
      height: 400px;
      object-fit: cover;
      filter: brightness(50%);
    }
    .featured-badge {
      position: absolute;
      top: 5px;
      left: 5px;
      background: orange;
      color: white;
      font-weight: bold;
      font-size: 0.8rem;
      padding: 3px 6px;
      border-radius: 3px;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: black;
      border-radius: 50%;
    }
    .thumbnail-group img {
      height: 130px;
      width:200px;
      object-fit: cover;
      border-radius: 5px;
      
    }
    .ad-card {
      position: relative;
      border: 1px solid #eee;
      border-radius: 5px;
      padding: 10px;
      background: #fff8ee;
      height: 100%;
    }
    .badge-member {
      background-color: #ffc107;
      color: black;
      font-size: 0.75rem;
    }
    .badge-verified {
      background-color: #0d6efd;
      color: white;
      font-size: 0.75rem;
    }
    .price {
      color: green;
      font-weight: bold;
    }
    .pre {
      position: relative;
      top: -150px;
      left: -130px;
    }
    .next {
      position: relative;
      top: -150px;
      right: -130px;
    }
    @media (max-width: 991.98px) {
      .secondary-navbar {
        top: auto;
      }
      body {
        padding-top: 180px;
      }
    }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://example.com/ceylon-spices.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        .stat-card {
            border-left: 4px solid #198754;
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #198754;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
      <!-- Main Navbar - Fixed -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color:#198754;">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-2" href="{{ route('home') }}"><i class="fa-solid fa-anchor"></i>
      iExport
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    

      <ul class="navbar-nav navbar-nav-right mb-2 mb-lg-0 fs-5">
        <li class="nav-item me-3">
          <a href="{{ route('chat') }}" style="text-decoration: none;">
          <span class="text-white"><i class="bi bi-chat-left-dots"></i> Chat</span></a>
        </li>
        <li class="nav-item me-3">
          <a href="{{ route('login') }}" style="text-decoration: none;">
          <span class="text-white"><i class="bi bi-person"></i> Login</span></a>
        </li>
        <li class="nav-item">
          <a href="{{ route('post') }}">
          <button class="btn btn-warning fw-bold post-ad-btn">POST YOUR AD</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Secondary Navigation - Fixed -->
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color:#198754;;">
  <div class="container">
    <div class="navbar justify-content-center">
      <ul class="navbar-nav d-flex flex-row flex-wrap justify-content-center gap-3">
        <li class="nav-item">
          <a class="nav-button" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-button dropdown-toggle" href="product.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
                    <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('cinnamon') }}">Ceylon Cinnamon</a></li>
            <li><a class="dropdown-item" href="{{ route('pepper') }}">Ceylon Pepper </a></li>
            <li><a class="dropdown-item" href="{{ route('cloves') }}">Ceylon Cloves</a></li>
            <li><a class="dropdown-item" href="{{ route('nutmeg') }}">Ceylon Nutmeg</a></li>
            <li><a class="dropdown-item" href="{{ route('cardamom') }}">Ceylon Cardamom</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('sellers') }}" style="background-color: #c58911">Sellers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('buyers') }}" >Buyers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('logistic') }}">Logistic</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('invest') }}">Investors</a>
        </li>
      </ul>
    </div>
  </div>
</div>


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

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3"><i class="fa-solid fa-anchor"></i> iExport</h5>
        <p>Sri Lanka's premier agricultural export platform connecting global buyers with verified sellers.</p>
        <div class="mt-4">
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <h6 class="fw-bold">For Buyers</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="Cinnamon.html" class="text-white-50">Browse Products</a></li>
          <li class="mb-2"><a href="Sellers.html" class="text-white-50">Find Suppliers</a></li>
          <li class="mb-2"><a href="Buyers.html" class="text-white-50">Buyer Protection</a></li>
          <li class="mb-2"><a href="help.html" class="text-white-50">Help Center</a></li>
        </ul>
      </div>
      <div class="col-md-2 mb-4">
        <h6 class="fw-bold">Company</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="index.html" class="text-white-50">About Us</a></li>
          <li class="mb-2"><a href="careers.html" class="text-white-50">Careers</a></li>
          <li class="mb-2"><a href="chat.html" class="text-white-50">Contact</a></li>
          <li class="mb-2"><a href="blog.html" class="text-white-50">Blog</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h6 class="fw-bold">Stay Updated</h6>
        <p>Subscribe to our newsletter for product updates and market insights.</p>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Your email">
          <button class="btn btn-success" type="button">Subscribe</button>
        </div>
      </div>
    </div>
    <hr class="my-4 bg-secondary">
    <div class="row">
      <div class="col-md-6">
        <p class="small mb-0">© 2023 iExport. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="terms.html" class="text-white-50 small me-3">Terms</a>
        <a href="privacy.html" class="text-white-50 small me-3">Privacy</a>
        <a href="sitemap.html" class="text-white-50 small">Sitemap</a>
      </div>
    </div>
  </div>
</footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>