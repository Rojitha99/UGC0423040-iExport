<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iExport - Global Buyers Portal</title>
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
      box-shadow: 0 2px 5px rgb(140, 77, 212);
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
      background-color: rgb(140, 77, 212);
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
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://example.com/ceylon-spices-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        .stat-card {
            border-left: 4px solid rgb(140, 77, 212);
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: rgb(140, 77, 212);
            margin-bottom: 1rem;
        }
        .product-card {
            transition: all 0.3s;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .verified-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #198754;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <!-- Main Navbar - Fixed -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color:rgb(140, 77, 212)">
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
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color:rgb(140, 77, 212);">
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
          <a class="nav-button" href="{{ route('sellers') }}">Sellers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('buyers') }}" style="background-color: #c58911">Buyers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('logistic') }}">Logistic</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('invest_cin') }}">Investors</a>
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