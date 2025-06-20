<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport</title>
  <link rel="icon" type="image/png" href="cin.webp">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
  </style>
</head>
<body>

<!-- Main Navbar - Fixed -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color:green">
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
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color:green;">
  <div class="container">
    <div class="navbar justify-content-center">
      <ul class="navbar-nav d-flex flex-row flex-wrap justify-content-center gap-3">
        <li class="nav-item">
          <a class="nav-button" href="{{ route('home') }}" style="background-color: #c58911">Home</a>
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
          <a class="nav-button" href="{{ route('buyers') }}">Buyers</a>
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



<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/cin-m.webp') }}" class="d-block w-100" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>High Quality Product</h1>
          <p class="opacity-75">Sri Lanka’s agriculture sector includes tea, cinnamon, rice, rubber, and coconut farming. It supports rural livelihoods, exports, and food security, playing a vital role in the national economy.
</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('cinnamon') }}">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/log.jpg') }}" class="d-block w-100" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Our Logistic Platform</h1>
          <p>Sri lanka is the most fameous harbers in indian oscern</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('logistic') }}">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/bis.jpeg') }}" class="d-block w-100" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Make your Business</h1>
          <p>Your need is our Asset.you is our hart.we do your need perfectly</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('login') }}">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container py-4">
  <h4 class="mb-3">Featured Ads</h4>
  <div id="featuredAdsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <a href="{{ route('cin01') }}" style="text-decoration: none; color: #000;">
            <div class="ad-card">
              <div class="featured-badge" style="z-index: 1;">FEATURED</div>
              <div class="d-flex gap-2 mb-2 thumbnail-group">
                <img src="{{ asset('images/cin.webp') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/cin2.webp') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/cin3.webp') }}" class="img-fluid" alt=""> 
              </div>
              <h6>Cinnamon Sticks 4,5 inch 500kg</h6>
              <p class="mb-0">Some of Sticks different size have</p>
              <span class="badge badge-member me-2">MEMBER</span>
              <span class="badge badge-verified">VERIFIED SELLER</span>
              <p class="text-muted small mt-2 mb-1">SL Plant,Kadawatha,Gampaha</p>
              <p class="price">Negotiable</p>
              <p class="text-muted small">1 day</p>
            </div></a>
          </div>
          <div class="col-md-6">
            <a href="{{ route('car01') }}" style="text-decoration: none; color: #000;">
            <div class="ad-card">
              <div class="featured-badge" style="z-index: 1;">FEATURED</div>
              <div class="d-flex gap-2 mb-2 thumbnail-group">
                <img src="{{ asset('images/car.jpeg') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/car2.webp') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/car.webp') }}" class="img-fluid" alt="">
              </div>
              <h6>Cardamom 1000kg Certificate EDB/DOA</h6>
              <p class="mb-0">Pickup Befor 2 month ago</p>
              <span class="badge badge-member">MEMBER</span>
              <p class="text-muted small mt-2 mb-1">Rikllagaskada,Central province</p>
              <p class="price">Negotiable</p>
              <p class="text-muted small">5 days 👑</p>
            </div></a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <a href="{{ route('clo01') }}" style="text-decoration: none; color: #000;">
            <div class="ad-card">
              <div class="featured-badge" style="z-index: 1;">FEATURED</div>
              <div class="d-flex gap-2 mb-2 thumbnail-group">
                <img src="{{ asset('images/clo.jpeg') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/clo2.webp') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/clo3.webp') }}" class="img-fluid" alt="">
              </div>
              <h6>Cloves Certificate SLSI/EDB</h6>
              <p class="mb-0">We have 100kg Cloves</p>
              <span class="badge badge-member me-2">MEMBER</span>
              <span class="badge badge-verified">VERIFIED SELLER</span>
              <p class="text-muted small mt-2 mb-1">Colombo 10</p>
              <p class="price">Negotiable</p>
              <p class="text-muted small">5 hours</p>
            </div></a>
          </div>
          <div class="col-md-6">
            <a href="{{ route('nut01') }}" style="text-decoration: none; color: #000;">
            <div class="ad-card">
              <div class="featured-badge" style="z-index: 1;">FEATURED</div>
              <div class="d-flex gap-2 mb-2 thumbnail-group">
                <img src="{{ asset('images/nut.jpeg') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/nut.webp') }}" class="img-fluid" alt="">
                <img src="{{ asset('images/nut2.webp') }}" class="img-fluid" alt="">
              </div>
              <h6>Nutmeg High Quality Pick 1 month befor</h6>
              <p class="mb-0">We have Nutmeg and Nutmeg powder</p>
              <span class="badge badge-member">MEMBER</span>
              <p class="text-muted small mt-2 mb-1">Ambalangoda</p>
              <p class="price">Negotiable</p>
              <p class="text-muted small">1 hours ⬆ 👑</p>
            </div></a>
          </div>
        </div>
      </div>
    </div>
    <div class="pre">
      <button class="carousel-control-prev" type="button" data-bs-target="#featuredAdsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
    </div>
    <div class="next">
      <button class="carousel-control-next" type="button" data-bs-target="#featuredAdsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<div class="container my-5">
  <h2 class="mb-3">About iExport</h2>
  <div class="card p-4 bg-light border-0 shadow-sm">
    <p><strong>About iExport, Sri Lanka's Premier Export & Marketplace Platform!</strong><br>
      iExport is your go-to platform for buying, selling, and exporting products across Sri Lanka. Whether you're looking to purchase Ceylon cinnamon, export black pepper, or find reliable logistics for your tea shipment — iExport makes it simple.
    </p>
    <p>
      With categories tailored for Sri Lanka's export industry and domestic marketplace, iExport helps individuals, SMEs, and enterprises showcase their products locally and globally. Use filters and smart search tools to find exactly what you need — fast.
    </p>
    <p><strong>Buy, Sell, and Export New or Used Products via iExport</strong><br>
      Every month, hundreds of users register with iExport to buy and sell products, manage services, or connect with exporters. We support verified memberships for sellers, brokers, and investors to expand their reach.
    </p>
    <p>
      Whether you're a local farmer, spice trader, or logistics company, iExport helps you post your ad in less than 2 minutes. Visit our <em>Post Your Ad</em> page to see how to get started and boost your listings.
    </p>
    <h5 class="mt-4">Why Choose iExport?</h5>
    <ul class="list-unstyled ps-3">
      <li> <strong>Easy Navigation:</strong> Quickly list or discover products for sale or export with our user-friendly interface.</li>
      <li> <strong>Secure & Safe Transactions:</strong> Buyers and sellers enjoy full protection and verified identity options.</li>
      <li> <strong>Location-Based Search:</strong> Filter listings by province or district for efficient local deals and deliveries.</li>
      <li> <strong>Business Membership Perks:</strong> Unlock exclusive tools and insights to help scale your export or domestic business.</li>
    </ul>
    <p class="mt-3">
      Looking for the right buyers in Sri Lanka or abroad? Post your ad on <strong>iExport</strong> and grow your business.
    </p>
  </div>
</div>

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
          <li class="mb-2"><a href="{{ route('cinnamon') }}" class="text-white-50">Browse Products</a></li>
          <li class="mb-2"><a href="{{ route('sellers') }}" class="text-white-50">Find Suppliers</a></li>
          <li class="mb-2"><a href="{{ route('buyers') }}" class="text-white-50">Buyer Protection</a></li>
          <li class="mb-2"><a href="{{ route('help') }}" class="text-white-50">Help Center</a></li>
        </ul>
      </div>
      <div class="col-md-2 mb-4">
        <h6 class="fw-bold">Company</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{ route('home') }}" class="text-white-50">About Us</a></li>
          <li class="mb-2"><a href="{{ route('careers') }}" class="text-white-50">Careers</a></li>
          <li class="mb-2"><a href="{{ route('chat') }}" class="text-white-50">Contact</a></li>
          <li class="mb-2"><a href="{{ route('blog') }}" class="text-white-50">Blog</a></li>
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
        <a href="{{ route('terms') }}" class="text-white-50 small me-3">Terms</a>
        <a href="{{ route('privacy') }}" class="text-white-50 small me-3">Privacy</a>
        <a href="{{ route('sitemap') }}" class="text-white-50 small">Sitemap</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>