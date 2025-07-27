@extends('layouts.app', ['navbarColor' => '#5E3023'])

@section('title', 'iExport-Cloves')

@include('partials.css.clo')

@section('content')

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
            <option value="cloves">Cloves</option>
            <option value="oil">Cloves Oil</option>
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
      <h5>Ceylon Cloves</h5>
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
             data-category="cloves" 
             data-location="Gampaha" 
             data-date="2023-06-15" 
             data-price="70">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/clo2.webp') }}" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">Cloves,100kg</h5>
                <p class="card-text">Waliweriya,Gampaha</p>
                <p class="card-text text-success">$ 2.2</p>
                <p class="card-text"><small class="text-muted">1 day ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 2 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="oil" 
             data-location="matale" 
             data-date="2025-06-14" 
             data-price="40">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cloo4.webp') }}" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">Cloves Oil</h5>
                <p class="card-text">Matale,Central province</p>
                <p class="card-text text-success">$ 2.4</p>
                <p class="card-text"><small class="text-muted">2 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 3 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="cloves" 
             data-location="jaffna" 
             data-date="2023-06-13" 
             data-price="170">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card h-100" >
              <img src="{{ asset('images/clo3.webp') }}" class="card-img-top" alt="Pineapple Plants">
              <div class="card-body">
                <h5 class="card-title">Cloves,100kg(EDB)</h5>
                <p class="card-text">Jaffna</p>
                <p class="card-text text-success">$ 2.3</p>
                <p class="card-text"><small class="text-muted">3 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 4 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="member" 
             data-category="oil" 
             data-location="puttalam" 
             data-date="2023-06-12" 
             data-price="25">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cloo2.webp') }}" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Cloves Oil,300kg</h5>
                <p class="card-text">SS Company,Puttalam</p>
                <p class="card-text text-success">$ 2.5</p>
                <p class="card-text"><small class="text-muted">4 days ago</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 5 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="false" 
             data-poster-type="verified" 
             data-category="cloves" 
             data-location="colombo" 
             data-date="2023-06-11" 
             data-price="20">
          <a href="{{ route('frontend.clo01') }}" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/clo5.webp') }}" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Cloves Certificate SLSI/EDB </h5>
                <p class="card-text">Colombo 10</p>
                <p class="card-text text-success">$ 2</p>
                <p class="card-text"><small class="text-muted">5 days ago 👑</small></p>
              </div>
            </div>
          </a>
        </div>

        <!-- Product Card 6 -->
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="true" 
             data-poster-type="notMember" 
             data-category="oil" 
             data-location="Kurunegala" 
             data-date="2023-06-10" 
             data-price="100">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="{{ asset('images/cloo5.webp') }}" class="card-img-top" alt="Snake Plants">
              <div class="card-body">
                <h5 class="card-title">Cloves Oil,200 liters,(SLS)</h5>
                <p class="card-text">Agriculture,Kurunegala</p>
                <p class="card-text text-success">$2.4</p>
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
@endsection