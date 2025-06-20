<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport</title>
  <link rel="icon" type="image/png" href="cin.webp">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #fff;
      padding-top: 140px; /* Added padding to account for fixed navbars */
      padding-bottom: 50px;
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
      box-shadow: 0 2px 5px rgb(223, 40, 40);
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
    .hero-image {
      width: 100%;
      height: auto;
      max-height: 500px;
      object-fit: cover;
    }
    .image-container {
      width: 100%;
      overflow: hidden;
    }
    /* New styles for responsive navbar */
    .navbar-nav-right {
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    @media (max-width: 991.98px) {
      .navbar-nav-right {
        flex-direction: column;
        align-items: flex-start;
      }
      .post-ad-btn {
        margin-top: 10px;
        margin-bottom: 10px;
      }
      body {
        padding-top: 180px; /* Increased padding for mobile to account for stacked nav items */
      }

    }
    
    /* Fixed navbar styles */
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
      top: 72px; /* Height of main navbar */
    }
    
    /* Adjust content position when secondary nav is collapsed */
    @media (max-width: 991.98px) {
      .secondary-navbar {
        top: auto; /* Let it flow naturally below main navbar */
      }
    }

    .carousel-item img {
  height: 400px; /* Adjust as needed */
  object-fit: cover; /* Ensures images cover the area without distortion */
}

.featured-badge {
      position: absolute;
      top: 10px;
      left: 10px;
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
      height: 80px;
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
   .pre{
    position: relative;
    top:-150px;
    left:-130px;
    
   }
   .next{
    position: relative;
    top:-150px;
    right:-130px;
   }

   .custom-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    transition: all 0.3s ease;
    background-color: #fff;
    height: 100%;
  }

  .custom-card:hover {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
  }

  .custom-img {
    width: auto;
    height: 100px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease;
  }

  .custom-card:hover .custom-img {
    transform: scale(1.05);
  }
  .title-cat{
    margin-top: 50px;
    margin-bottom: 20px;
  }
  .spice-nav {
      display: flex;
      justify-content: center;
      background-color: #f8f9fa;
      padding: 20px;
      gap: 20px;
    }

    .spice-item {
      position: relative;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .spice-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      transition: filter 0.3s;
    }

    .spice-name {
      position: absolute;
      bottom: 0;
      height: 50%;
      width: 100%;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      text-align: center;
      font-weight: bold;
      padding: 5px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .spice-item:hover img {
      filter: brightness(50%);
    }

    .spice-item:hover .spice-name {
      opacity: 1;
    }
  </style>
</head>
<body>

<!-- Main Navbar - Fixed -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color: rgb(223, 40, 40);">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-2" href="index.html"><i class="fa-solid fa-anchor"></i>
      iExport
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    

      <ul class="navbar-nav navbar-nav-right mb-2 mb-lg-0 fs-5">
        <li class="nav-item me-3">
          <a href="chat.html" style="text-decoration: none;">
          <span class="text-white"><i class="bi bi-chat-left-dots"></i> Chat</span></a>
        </li>
        <li class="nav-item me-3">
          <a href="login.html" style="text-decoration: none;">
          <span class="text-white"><i class="bi bi-person"></i> Login</span></a>
        </li>
        <li class="nav-item">
          <a href="post.html">
          <button class="btn btn-warning fw-bold post-ad-btn">POST YOUR AD</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Secondary Navigation - Fixed -->
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color:rgb(223, 40, 40) ;">
  <div class="container">
    <div class="navbar justify-content-center">
      <ul class="navbar-nav d-flex flex-row flex-wrap justify-content-center gap-3">
        <li class="nav-item">
          <a class="nav-button" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-button dropdown-toggle" href="product.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
                    <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Cinnamon.html">Ceylon Cinnamon</a></li>
            <li><a class="dropdown-item" href="Pepper.html">Ceylon Pepper </a></li>
            <li><a class="dropdown-item" href="Cloves.html">Ceylon Cloves</a></li>
            <li><a class="dropdown-item" href="Nutmeg.html">Ceylon Nutmeg</a></li>
            <li><a class="dropdown-item" href="Cardamom.html">Ceylon Cardamom</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="Sellers.html">Sellers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="Buyers.html">Buyers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="Logistic.html">Logistic</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="invest.html">Investors</a>
        </li>
      </ul>
    </div>
  </div>
</div>


<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel"><br>
  <!-- Carousel Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
  </div>

  <!-- Carousel Items -->
  <div class="carousel-inner">
    <!-- First Slide -->
    <div class="carousel-item">
      <img src="545829.jpg" class="d-block w-100" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Example headline.</h1>
          <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>

    <!-- Second Slide -->
    <div class="carousel-item">
      <img src="log.jpg" class="d-block w-100" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>

    <!-- Third Slide (Active by default) -->
    <div class="carousel-item active">
      <img src="bis.jpeg" class="d-block w-100" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="title-cat">
    <h2><center>What is your Choice?</center></h2>
</div>
<div class="spice-nav">
    <div class="spice-item">
      <a href="invest_cin.html">
      <img src="cin.webp" alt="Cinnamon">
      <div class="spice-name" >Ceylon Cinnamon</div></a>
    </div>
    <div class="spice-item">
      <a href="invest_pep.html">
      <img src="pep.webp" style="filter: brightness(50%)" alt="Pepper">
      <div class="spice-name" style="opacity: 1">Ceylon Pepper  </div></a>
    </div>
    <div class="spice-item">
      <a href="invest_clo.html">
      <img src="clo.jpeg" alt="Cloves">
      <div class="spice-name">Ceylon Cloves</div></a>
    </div>
    <div class="spice-item">
      <a href="invest_nut.html">
      <img src="nut.jpeg" alt="Nutmeg">
      <div class="spice-name">Ceylon Nutmeg</div></a>
    </div>
    <div class="spice-item">
      <a href="invest_car.html">
      <img src="car.jpeg" alt="Cardamom">
      <div class="spice-name">Ceylon Cardamom</div></a>
    </div>
  </div>

  <!-- Search Bar -->
<div class="search-container" role="search">
  <input type="text" class="search-bar" placeholder="What are you looking for?">
  <button class="search-btn">
    <i class="bi bi-search"></i>
  </button>
</div>

<!-- Main Content Container -->
<div class="container main-content-container mt-4">
  <div class="row">
    <!-- Sidebar Filter -->
    <div class="col-md-3" style="height: 600px; overflow-y: auto; position: sticky; top: 140px;">
      <div class="sidebar">
        <h6>Sort results by</h6>
        <select class="form-select mb-3" id="sortBy">
          <option value="newest">Date: Newest on top</option>
          <option value="oldest">Date: Oldest on top</option>
          <option value="priceLow">Price: Low to High</option>
          <option value="priceHigh">Price: High to Low</option>
        </select>

        <h6>Filter ads by</h6>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="urgentOnly">
          <label class="form-check-label" for="urgentOnly">URGENT</label>
        </div>

        <h6>Type of poster</h6>
        <select class="form-select mb-3" id="posterType">
          <option value="all">All</option>
          <option value="member">Member</option>
          <option value="verified">Verified Sellers</option>
          <option value="nonMember">Not Member</option>
        </select>

        <h6>Category</h6>
        <div class="mb-3">
          <select class="form-select" id="categoryFilter">
            <option value="all">All Categories</option>
            <option value="pepeer">Pepper</option>
            <option value="powder">Pepper Powder</option>
            <option value="tools">Farming Tools & Machinery</option>
          </select>
        </div>

        <h6>Location</h6>
        <div class="mb-3">
          <select class="form-select" id="locationFilter">
            <option value="all">All Locations</option>
            <option value="jaffna">Jaffna</option>
            <option value="puttalam">Puttalam</option>
            <option value="gampaha">Gampaha</option>
            <option value="kurunegala">Kurunegala</option>
            <option value="matale">Matale</option>
          </select>
        </div>
        
        <button class="btn btn-warning w-100" id="applyFilters">Apply Filters</button>
        <button class="btn btn-outline-secondary w-100 mt-2" id="resetFilters">Reset Filters</button>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
      <h5>Ceylon Pepper</h5>
      <p id="showingCount">Showing 1-5 of 622 ads</p>

      <!-- Search Bar -->
      <div class="search-container mb-4" role="search">
        <input type="text" class="search-bar" placeholder="What are you looking for?">
        <button class="search-btn">
          <i class="bi bi-search"></i>
        </button>
      </div>

      <!-- Product Cards Container -->
      <div class="row" id="productsContainer">
        <!-- Product Card 1 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="pepeer" 
             data-location="Gampaha" 
             data-date="2023-06-15" 
             data-price="70">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="pep.webp" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">pepper</h5>
                <p class="card-text">Waliweriya,Gampaha</p>
                <p class="card-text text-success">$ 10</p>
                <p class="card-text"><small class="text-muted">1 day ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 2 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="powder" 
             data-location="matale" 
             data-date="2025-06-14" 
             data-price="40">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="pep5.webp" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">pepeer Powder</h5>
                <p class="card-text">Matale,Central province</p>
                <p class="card-text text-success">$ 9.9/p>
                <p class="card-text"><small class="text-muted">2 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 3 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="pepeer" 
             data-location="jaffna" 
             data-date="2023-06-13" 
             data-price="170">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100" >
              <img src="pep6.webp" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">Pepper,100kg(EDB)</h5>
                <p class="card-text">Jaffna</p>
                <p class="card-text text-success">$ 8.9</p>
                
                <p class="card-text"><small class="text-muted">3 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 4 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="powder" 
             data-location="puttalam" 
             data-date="2023-06-12" 
             data-price="25">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="pep4.webp" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Pepper Powder,300kg</h5>
                <p class="card-text">AB Company,Puttalam</p>
                <p class="card-text text-success">$ 8.5</p>
                <p class="card-text"><small class="text-muted">4 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 5 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="verified" 
             data-category="powder" 
             data-location="kurunegala" 
             data-date="2023-06-11" 
             data-price="20">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="pep3.webp" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Pepper Powder</h5>
                <p class="card-text">IIS,kurunagala</p>
                <p class="card-text text-success">$ 9.2</p>
                <p class="card-text"><small class="text-muted">5 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 6 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="true" 
             data-poster-type="notMember" 
             data-category="pepper" 
             data-location="Kurunegala" 
             data-date="2023-06-10" 
             data-price="100">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="pep2.webp" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Pepper,200kg,(SLS)</h5>
                <p class="card-text">Agriculture,Kurunegala</p>
                <p class="card-text text-success">$ 9.6</p>
                <p class="card-text" style="color:red"><b>Urgent</b></p>
                <p class="card-text"><small class="text-muted">6 days ago</small></p>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center my-4">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="page1.html">1</a></li>
          <li class="page-item"><a class="page-link" href="page2.html">2</a></li>
          <li class="page-item"><a class="page-link" href="page3.html">3</a></li>
          <li class="page-item">
            <a class="page-link" href="page2.html">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<!-- Footer -->
    <footer class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3"><i class="fa-solid fa-anchor"></i></i> iExport</h5>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get DOM elements
  const productsContainer = document.getElementById('productsContainer');
  const showingText = document.getElementById('showingCount');
  const productCards = Array.from(document.querySelectorAll('.col-sm-6.col-lg-4.mb-4'));
  
  // Filter controls
  const applyFiltersBtn = document.getElementById('applyFilters');
  const resetFiltersBtn = document.getElementById('resetFilters');
  const urgentOnlyCheckbox = document.getElementById('urgentOnly');
  const posterTypeSelect = document.getElementById('posterType');
  const categoryFilter = document.getElementById('categoryFilter');
  const locationFilter = document.getElementById('locationFilter');
  const sortBySelect = document.getElementById('sortBy');

  // Store original order for reset
  const originalOrder = [...productCards];
  
  // Apply filters when button is clicked
  applyFiltersBtn.addEventListener('click', applyFilters);
  
  // Reset all filters
  resetFiltersBtn.addEventListener('click', resetFilters);
  
  // Main filter function
  function applyFilters() {
    const showUrgentOnly = urgentOnlyCheckbox.checked;
    const posterType = posterTypeSelect.value;
    const category = categoryFilter.value;
    const location = locationFilter.value;
    const sortBy = sortBySelect.value;
    
    // First show all products
    productCards.forEach(card => card.style.display = 'block');
    
    // Filter products
    const filteredProducts = productCards.filter(card => {
      const isUrgent = card.dataset.urgent === 'true';
      const cardPosterType = card.dataset.posterType;
      const cardCategory = card.dataset.category;
      const cardLocation = card.dataset.location.toLowerCase();
      
      // Apply filters
      let shouldShow = true;
      
      if (showUrgentOnly && !isUrgent) shouldShow = false;
      if (posterType !== 'all' && cardPosterType !== posterType) shouldShow = false;
      if (category !== 'all' && cardCategory !== category) shouldShow = false;
      if (location !== 'all' && !cardLocation.includes(location.toLowerCase())) shouldShow = false;
      
      return shouldShow;
    });
    
    // Sort products
    const sortedProducts = sortProducts(filteredProducts, sortBy);
    
    // Update display
    updateDisplay(sortedProducts);
  }
  
  // Sort products function
  function sortProducts(products, sortBy) {
    return [...products].sort((a, b) => {
      const aPrice = parseFloat(a.dataset.price);
      const bPrice = parseFloat(b.dataset.price);
      const aDate = new Date(a.dataset.date);
      const bDate = new Date(b.dataset.date);
      
      switch(sortBy) {
        case 'priceLow': return aPrice - bPrice;
        case 'priceHigh': return bPrice - aPrice;
        case 'newest': return bDate - aDate;
        case 'oldest': return aDate - bDate;
        default: return 0;
      }
    });
  }
  
  // Update display function
  function updateDisplay(productsToShow) {
    // Clear container
    productsContainer.innerHTML = '';
    
    // Add filtered and sorted products
    productsToShow.forEach(card => {
      productsContainer.appendChild(card);
    });
    
    // Update showing count
    showingText.textContent = `Showing ${productsToShow.length} of ${productCards.length} ads`;
  }
  
  // Reset function
  function resetFilters() {
    urgentOnlyCheckbox.checked = false;
    posterTypeSelect.value = 'all';
    categoryFilter.value = 'all';
    locationFilter.value = 'all';
    sortBySelect.value = 'newest';
    
    // Restore original display
    updateDisplay(originalOrder);
  }
  
  // Initialize
  applyFilters();
});
</script>
</body>
</html>