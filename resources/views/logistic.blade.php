<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport - Logistics Partners</title>
  <link rel="icon" type="image/png" href="cin.webp">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <!-- Font Awesome -->
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
      box-shadow: 0 2px 5px #0d6efd;
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
    @media (max-width: 991.98px) {
      .secondary-navbar {
        top: auto;
      }
      body {
        padding-top: 180px;
      }
    }
    
    /* Content Sections */
    .intro-section {
      background-color: #f8f9fa;
      padding: 40px 0;
      margin-bottom: 40px;
      border-radius: 10px;
    }
    .filter-controls {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
    }
    .view-all-btn {
      margin: 30px auto;
      display: block;
      max-width: 200px;
    }
    
    /* Partner Card Styles */
    .custom-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      transition: all 0.3s ease;
      background-color: #fff;
      height: 100%;
      position: relative;
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
    .partner-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #ffc107;
      color: #000;
      padding: 3px 8px;
      border-radius: 4px;
      font-weight: bold;
      font-size: 0.8rem;
    }
    .rating-stars {
      color: #ffc107;
      margin-bottom: 10px;
    }
    
    /* Footer Styles */
    footer {
      background-color: #343a40;
    }
    .footer-links a {
      color: rgba(255, 255, 255, 0.5);
      text-decoration: none;
    }
    .footer-links a:hover {
      color: white;
    }
    
    /* Utility Classes */
    .hidden {
      display: none !important;
    }
    .no-results {
      text-align: center;
      padding: 40px;
      font-size: 1.2rem;
      color: #666;
    }
  </style>
</head>
<body>

<!-- Main Navbar - Fixed -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color:#0d6efd ;">
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
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color:#0d6efd ;">
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
          <a class="nav-button" href="{{ route('buyers') }}" >Buyers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('logistic') }}" style="background-color: #c58911">Logistic</a>
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
  <input type="text" id="searchInput" class="search-bar" placeholder="Search logistics partners...">
  <button class="search-btn" id="searchButton">
    <i class="bi bi-search"></i>
  </button>
</div>

<!-- Introduction Section -->
<div class="container intro-section">
  <div class="row">
    <div class="col-md-8 mx-auto text-center">
      <h2>Premium Logistics Partners for Your Export Needs</h2>
      <p class="lead">
        iExport connects you with trusted logistics providers specializing in agricultural exports. 
        Our partners are ranked based on reliability, shipping times, and customer satisfaction to 
        ensure your products reach global markets efficiently.
      </p>
      <div class="d-flex justify-content-center gap-3 mt-4">
        <span class="badge bg-primary">Air Freight</span>
        <span class="badge bg-success">Sea Shipping</span>
        <span class="badge bg-warning text-dark">Cold Chain</span>
        <span class="badge bg-info">Customs Clearance</span>
      </div>
    </div>
  </div>
</div>

<!-- Filter Controls -->
<div class="container filter-controls">
  <div class="row">
    <div class="col-md-4">
      <label for="partnerType" class="form-label">Partner Type</label>
      <select class="form-select" id="partnerType">
        <option value="all">All Types</option>
        <option value="air">Air Freight</option>
        <option value="sea">Sea Shipping</option>
        <option value="land">Land Transport</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="serviceLevel" class="form-label">Service Level</label>
      <select class="form-select" id="serviceLevel">
        <option value="all">All Levels</option>
        <option value="premium">Premium</option>
        <option value="standard">Standard</option>
        <option value="economy">Economy</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="sortBy" class="form-label">Sort By</label>
      <select class="form-select" id="sortBy">
        <option value="rating">Highest Rated</option>
        <option value="price">Lowest Price</option>
        <option value="speed">Fastest Delivery</option>
      </select>
    </div>
  </div>
</div>

<!-- Featured Partners -->
<div class="container">
  <h2 class="text-center mb-5">Top-Rated Export Partners</h2>
  <div id="noResults" class="no-results hidden">
    No partners found matching your search criteria.
  </div>
  <div class="row text-center" id="partnersContainer">
    <!-- Partner 1 -->
    <div class="col-lg-4 mb-4 partner-card" 
         data-type="air" 
         data-service="premium" 
         data-rating="4.9" 
         data-price="2.50" 
         data-speed="4"
         data-name="Commercial Export Syndicate"
         data-description="Specializing in perishable goods with climate-controlled shipping to 50+ countries.">
      <div class="custom-card">
        <span class="partner-badge">Top Partner</span>
        <img src="{{ asset('images/company 1.png') }}" alt="Commercial Export Syndicate" class="custom-img">
        <div class="rating-stars">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <span class="text-muted ms-2">4.9 (128)</span>
        </div>
        <h3 class="fw-normal mt-2">Commercial Export Syndicate</h3>
        <p>Specializing in perishable goods with climate-controlled shipping to 50+ countries.</p>
        <div class="d-flex justify-content-between mt-3">
          <span class="text-success">$2.50/kg</span>
          <span class="text-primary">3-5 days</span>
        </div>
        <p><a class="btn btn-primary mt-3" href="#">Request Quote</a></p>
      </div>
    </div>

    <!-- Partner 2 -->
    <div class="col-lg-4 mb-4 partner-card" 
         data-type="sea" 
         data-service="standard" 
         data-rating="4.7" 
         data-price="1.80" 
         data-speed="7"
         data-name="Samagi Logistics"
         data-description="Bulk shipping experts with dedicated routes to Middle East and European markets.">
      <div class="custom-card">
        <span class="partner-badge">Premium</span>
        <img src="{{ asset('images/company 2.jpg') }}" alt="Samagi Logistics" class="custom-img">
        <div class="rating-stars">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          <span class="text-muted ms-2">4.7 (92)</span>
        </div>
        <h3 class="fw-normal mt-2">Samagi Logistics</h3>
        <p>Bulk shipping experts with dedicated routes to Middle East and European markets.</p>
        <div class="d-flex justify-content-between mt-3">
          <span class="text-success">$1.80/kg</span>
          <span class="text-primary">7-10 days</span>
        </div>
        <p><a class="btn btn-primary mt-3" href="#">Request Quote</a></p>
      </div>
    </div>

    <!-- Partner 3 -->
    <div class="col-lg-4 mb-4 partner-card" 
         data-type="land" 
         data-service="premium" 
         data-rating="4.2" 
         data-price="2.20" 
         data-speed="5"
         data-name="Joint Agri Products"
         data-description="Customs clearance specialists with offices in all major export destinations.">
      <div class="custom-card">
        <span class="partner-badge">Verified</span>
        <img src="{{ asset('images/company 3.png') }}" alt="Joint Agri Products" class="custom-img">
        <div class="rating-stars">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star"></i>
          <span class="text-muted ms-2">4.2 (76)</span>
        </div>
        <h3 class="fw-normal mt-2">Joint Agri Products</h3>
        <p>Customs clearance specialists with offices in all major export destinations.</p>
        <div class="d-flex justify-content-between mt-3">
          <span class="text-success">$2.20/kg</span>
          <span class="text-primary">5-8 days</span>
        </div>
        <p><a class="btn btn-primary mt-3" href="#">Request Quote</a></p>
      </div>
    </div>
  </div>
</div>

<!-- View All Button -->
<button class="btn btn-warning view-all-btn" id="viewAllBtn">
  <i class="bi bi-arrow-down-circle"></i> View All Partners
</button>

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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get DOM elements
  const searchInput = document.getElementById('searchInput');
  const searchButton = document.getElementById('searchButton');
  const partnerTypeFilter = document.getElementById('partnerType');
  const serviceLevelFilter = document.getElementById('serviceLevel');
  const sortByFilter = document.getElementById('sortBy');
  const partnersContainer = document.getElementById('partnersContainer');
  const partnerCards = Array.from(document.querySelectorAll('.partner-card'));
  const viewAllBtn = document.getElementById('viewAllBtn');
  const noResults = document.getElementById('noResults');
  
  // Store original order for reset
  const originalOrder = [...partnerCards];
  
  // Add event listeners
  searchInput.addEventListener('input', applyFilters);
  searchButton.addEventListener('click', applyFilters);
  partnerTypeFilter.addEventListener('change', applyFilters);
  serviceLevelFilter.addEventListener('change', applyFilters);
  sortByFilter.addEventListener('change', applyFilters);
  viewAllBtn.addEventListener('click', toggleAllPartners);
  
  // Apply all filters
  function applyFilters() {
    const searchTerm = searchInput.value.toLowerCase();
    const typeValue = partnerTypeFilter.value;
    const serviceValue = serviceLevelFilter.value;
    const sortValue = sortByFilter.value;
    
    // Filter partners
    let filteredPartners = partnerCards.filter(card => {
      const matchesSearch = searchTerm === '' || 
        card.dataset.name.toLowerCase().includes(searchTerm) || 
        card.dataset.description.toLowerCase().includes(searchTerm);
      const matchesType = typeValue === 'all' || card.dataset.type === typeValue;
      const matchesService = serviceValue === 'all' || card.dataset.service === serviceValue;
      return matchesSearch && matchesType && matchesService;
    });
    
    // Show no results message if needed
    if (filteredPartners.length === 0) {
      noResults.classList.remove('hidden');
      partnersContainer.classList.add('hidden');
    } else {
      noResults.classList.add('hidden');
      partnersContainer.classList.remove('hidden');
    }
    
    // Sort partners
    filteredPartners = sortPartners(filteredPartners, sortValue);
    
    // Update display
    updateDisplay(filteredPartners);
  }
  
  // Sort partners based on selected option
  function sortPartners(partners, sortBy) {
    return [...partners].sort((a, b) => {
      switch(sortBy) {
        case 'rating':
          return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
        case 'price':
          return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
        case 'speed':
          return parseFloat(a.dataset.speed) - parseFloat(b.dataset.speed);
        default:
          return 0;
      }
    });
  }
  
  // Update the displayed partners
  function updateDisplay(partnersToShow) {
    // Hide all partners first
    partnerCards.forEach(card => {
      card.classList.add('hidden');
    });
    
    // Show filtered partners
    partnersToShow.forEach(card => {
      card.classList.remove('hidden');
    });
    
    // Reorder in DOM
    partnersToShow.forEach(card => {
      partnersContainer.appendChild(card);
    });
  }
  
  // Toggle view all partners
  function toggleAllPartners() {
    const allPartners = document.getElementById('allPartners');
    if (allPartners) {
      if (allPartners.style.display === 'none') {
        allPartners.style.display = 'block';
        viewAllBtn.innerHTML = '<i class="bi bi-arrow-up-circle"></i> Show Less';
      } else {
        allPartners.style.display = 'none';
        viewAllBtn.innerHTML = '<i class="bi bi-arrow-down-circle"></i> View All Partners';
      }
    }
  }
  
  // Initialize
  applyFilters();
});
</script>
</body>
</html>