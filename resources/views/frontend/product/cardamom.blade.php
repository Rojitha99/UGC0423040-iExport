@extends('layouts.app', ['navbarColor' => '#C2B280'])

@section('title', 'iExport-Cardamom')

@include('partials.css.car')

@section('content')


<!-- Main Content Container -->
<div class="container main-content-container mt-4">
  <div class="row">
    <!-- Sidebar Filter -->
     @include('components.filter')


    <!-- Main Content -->
    <div class="col-md-9">
      <h5>Ceylon Cardamom</h5>
      <p id="showingCount">Showing 1-5 of 622 ads</p>

      

      <!-- Product Cards Container -->
      <div class="row" id="productsContainer">
        <!-- Product Card 1 -->
         @foreach($customers as $customer)
         @if($customer->category == 'Cardamom')
        <div class="col-sm-6 col-lg-4 mb-4" 
             data-urgent="true" 
             data-poster-type="member" 
             data-poster-type="verified"
             data-category="stick" 
             data-location="gampaha" 
             data-date="2023-06-15" 
             data-price="70">
          <a href="cin01.html" class="text-decoration-none text-dark">
            <div class="card" >
              <img src="{{ asset('storage/'.$customer->image) }}" class="card-img-top" alt="Pepper">
              <div class="card-body">
                <h5 class="card-title">{{$customer->post_title}}</h5>
                <p class="card-text">{{$customer->company_name}}</p>
                <p class="card-text text-success">Rs.{{$customer->price}}</p>
                <p class="card-text" style="color:red"><b>Urgent</b></p>
                <p class="card-text"><small class="text-muted">{{$customer->created_at}}</small></p>
              </div>
            </div>
          </a>
        </div>
        @endif
        @endforeach
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