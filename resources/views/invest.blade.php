<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport</title>
  <link rel="icon" type="image/png" href="">
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
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color:rgb(223, 40, 40);">
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
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color:rgb(223, 40, 40);">
  <div class="container">
    <div class="navbar justify-content-center">
      <ul class="navbar-nav d-flex flex-row flex-wrap justify-content-center gap-3">
        <li class="nav-item">
          <a class="nav-button" href="{{ route('home') }}" >Home</a>
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
          <a class="nav-button" href="{{ route('invest') }}" style="background-color: #c58911">Investors</a>
        </li>
      </ul>
    </div>
  </div>
</div>




<div class="title-cat">
    <h2><center>What is your Choice?</center></h2>
</div>
<div class="spice-nav">
    <div class="spice-item">
      <a href="invest_cin.html">
      <img src="{{ asset('images/cin.webp') }}" style="filter: brightness(50%)" alt="Cinnamon">
      <div class="spice-name" style="opacity: 1" >Ceylon Cinnamon</div></a>
    </div>
    <div class="spice-item">
      <a href="invest_pep.html">
      <img src="{{ asset('images/pep.webp') }}" alt="Pepper">
      <div class="spice-name">Ceylon Pepper  </div></a>
    </div>
    <div class="spice-item">
      <a href="invest_clo.html">
      <img src="{{ asset('images/clo3.webp') }}" alt="Cloves">
      <div class="spice-name">Ceylon Cloves</div></a>
    </div>
    <div class="spice-item">
      <a href="invest_nut.html">
      <img src="{{ asset('images/nut2.webp') }}" alt="Nutmeg">
      <div class="spice-name">Ceylon Nutmeg</div></a>
    </div>
    <div class="spice-item">
      <a href="invest_car.html">
      <img src="{{ asset('images/car.jpeg') }}" alt="Cardamom">
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
          <option value="agent">Authorized agent</option>
          <option value="nonMember">Not Member</option>
        </select>

        <h6>Category</h6>
        <div class="mb-3">
          <select class="form-select" id="categoryFilter">
            <option value="all">All Categories</option>
            <option value="crops">Crops, Seeds & Plants</option>
            <option value="other">Other Agriculture</option>
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
            <option value="colombo">Colombo</option>
          </select>
        </div>
        
        <button class="btn btn-warning w-100" id="applyFilters">Apply Filters</button>
        <button class="btn btn-outline-secondary w-100 mt-2" id="resetFilters">Reset Filters</button>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
      <h5>Agricultural items for sale in Sri Lanka</h5>
      <p id="showingCount">Showing 1-5 of 622 ads</p>

      
      <!-- Product Cards Container -->
      <div class="row" id="productsContainer">
        <!-- Product Card 1 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="true" 
             data-poster-type="member" 
             data-poster-type="verified"
             data-category="stick" 
             data-location="gampaha" 
             data-date="2023-06-15" 
             data-price="70">
          <a href="{{ route('cin01') }}" class="text-decoration-none text-dark">
            <div class="card" >
              <img src="{{ asset('images/cin.webp') }}" class="card-img-top" alt="Cinnamon">
              <div class="card-body">
                <h5 class="card-title">Cinnamon Sticks 4,5 inch 500kg</h5>
                <p class="card-text">SL Plant,Kadawatha,Gampaha</p>
                <p class="card-text text-success">$ 9</p>
                <p class="card-text" style="color:red"><b>Urgent</b></p>
                <p class="card-text"><small class="text-muted">1 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 2 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="stick" 
             data-location="Gampaha" 
             data-date="2025-06-14" 
             data-price="40">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cin5.webp') }}" class="card-img-top" alt="Cinnamon">
              <div class="card-body">
                <h5 class="card-title">Cinnamon 5/6 inch sticks 200kg</h5>
                <p class="card-text">Ragama,Gampaha</p>
                <p class="card-text text-success">$ 8</p>
                <p class="card-text"><small class="text-muted">2 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 3 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="oil" 
             data-location="matara" 
             data-date="2023-06-13" 
             data-price="170">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cin6.webp') }}" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">Cinnamon Oil</h5>
                <p class="card-text">RS Farm,Matara</p>
                <p class="card-text text-success">$ 9.3/p>
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
             data-location="kalutara" 
             data-date="2023-06-12" 
             data-price="25">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cin2.webp') }}" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Cinnamon Powder,100kg,(EDB)</h5>
                <p class="card-text">Kalutara</p>
                <p class="card-text text-success">$ 8.9</p>
                <p class="card-text"><small class="text-muted">4 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 5 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="verified" 
             data-category="oil" 
             data-location="Colombo" 
             data-date="2023-06-11" 
             data-price="20">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cin3.webp') }}" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Cinnamon Oil</h5>
                <p class="card-text">Ebert Grow,Colombo 12</p>
                <p class="card-text text-success">$ 9.1</p>
                <p class="card-text"><small class="text-muted">5 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 6 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="true" 
             data-poster-type="notMember" 
             data-category="powder" 
             data-location="Kurunegala" 
             data-date="2023-06-10" 
             data-price="100">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100" >
              <img src="{{ asset('images/cin5.webp') }}" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Cinnamon Powder,(EDB)</h5>
                <p class="card-text">Hikaduwa,Gall</p>
                <p class="card-text text-success">$ 10</p>
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