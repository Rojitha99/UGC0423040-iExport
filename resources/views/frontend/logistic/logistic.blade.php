@extends('layouts.app', ['navbarColor' => '#0d6efd '])

@section('title', 'iExport-Logistic')

@section('content')




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
@endsection