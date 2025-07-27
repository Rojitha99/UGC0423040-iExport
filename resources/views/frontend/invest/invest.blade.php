@extends('layouts.app', ['navbarColor' => '#3B3B3B'])

@section('title', 'iExport-Invest')

@section('content')




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
          <a href="{{ route('frontend.cin01') }}" class="text-decoration-none text-dark">
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