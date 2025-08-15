@extends('layouts.app', ['navbarColor' => '#A0522D'])

@section('title', 'iExport-Cinnamon')

@include('partials.css.cin')

<!-- Container -->
@foreach ($customers as $customer)
<div class="container mt-4">
  <div class="row">
    <!-- Left: Main Content -->
    <div class="col-md-8">
      
      <!-- Title & Ads Info -->
      <div class="link-d">
      <p ><a href="index.html">Home</a>><a href="Cardamom.html">Product/Celon Cinnamon</a>><a href="cin01.html" style="color: rgb(33, 33, 33);">Cinnamon stic</a></p>
      </div>
      <!-- Product Card -->
      <div class="card h-100 text-center mb-4">
        <!-- Product Header -->
        <div class="card-body">
          <h5 class="card-title">{{ $customer->post_title }}</h5>
          <p class="card-text">{{ $customer->place }}{{ $customer->company_name }}</p>
          <p class="card-text"><small class="text-muted">{{ $customer->post_title }}</small></p>
        </div>

        <!-- Main Image -->
        <div>
          <img
            id="mainImage"
            src="clo.jpeg"
            alt="Pineapple Plants"
            class="border border-dark rounded mx-auto d-block"
            style="width: 500px; height: 300px; object-fit: cover; cursor: pointer;"
            data-bs-toggle="modal"
            data-bs-target="#imageModal"
          >
        </div>

        <!-- Thumbnail Images -->
        <div class="d-flex justify-content-center gap-2 p-3">
          <img src="{{ asset('storage/'.$customer->image) }}" class="img-thumbnail border border-success thumb" alt="Thumb 1" width="80" onclick="changeImage(this)">
          <img src="{{ asset('storage/'.$customer->image) }}" class="img-thumbnail thumb" alt="Thumb 2" width="80" onclick="changeImage(this)">
          <img src="{{ asset('storage/'.$customer->image) }}" class="img-thumbnail thumb" alt="Thumb 3" width="80" onclick="changeImage(this)">
        </div>

        <!-- Product Details -->
        <div class="card-body">
        <h2 class="card-text text-success">Rs 100</h2>
        <h5 class="card-title">Description</h5>
        
        <!-- Collapsible Text -->
        <p class="card-text" id="descriptionText">
            {{ $customer->price }}<br>
            <span id="dots">...</span>
            <span id="moreText" style="display: none;">
            {{ $customer->Description }}
            </span>
        </p>

        <!-- Toggle Button -->
        <button class="btn btn-link p-0" onclick="toggleDescription()" id="toggleBtn">See more</button>
    </div>
  </div>
</div>
@endforeach
    
    <!-- Right: Contact Box -->
    <div class="col-md-4">
      <div class="contact-box shadow-sm mt-4 mt-md-0 p-3 border rounded">
        <p class="text-muted mb-1">For sale by <strong>Chinthaka</strong></p>

        <div class="contact-option d-flex align-items-center mb-2">
          <i class="bi bi-telephone-fill text-success me-2 fs-5"></i>
          <div>
            <div><strong>Call seller</strong></div> 
            <div class="phone-number">{{ $customer->contact_number }}</div>
          </div>
        </div>

        <div class="contact-option d-flex align-items-center mb-2">
          <i class="bi bi-chat-left-dots-fill text-warning me-2 fs-5"></i>
          <div><strong>Chat</strong></div>
        </div>

        <div class="contact-option d-flex align-items-center">
          <i class="bi bi-whatsapp text-success me-2 fs-5"></i>
          <div><strong>WhatsApp</strong></div>
        </div>
      </div>
      <!-- Related Products Section -->
<div class="container mt-5">
  <h5 class="mb-3">Related Products</h5>

  <!-- Scrollable Column -->
  <div style="max-height: 600px; overflow-y: auto;">
    
    <!-- Product Card 1 -->
    <a href="#" class="text-decoration-none text-dark">
      <div class="card mb-3" style="max-height: 150px;">
        <div class="row g-0">
          <!-- Image Left -->
          <div class="col-md-4">
            <img src="{{ asset('images/cin2.webp') }}" alt="Pineapple Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
          </div>
          <!-- Content Right -->
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-1">Pineapple Plants</h5>
              <p class="card-text small text-muted mb-1">Gampaha, Crops</p>
              <p class="card-text text-success mb-1">Rs 100</p>
              <p class="card-text small text-muted">5 hours ago</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Product Card 2 -->
    <a href="#" class="text-decoration-none text-dark">
      <div class="card mb-3" style="max-height: 150px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/cin4.webp') }}" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-1">Cinnamon</h5>
              <p class="card-text small text-muted mb-1">Matara, Crops</p>
              <p class="card-text text-success mb-1">Rs 200</p>
              <p class="card-text small text-muted">2 hours ago</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Add more cards here as needed -->
     <a href="#" class="text-decoration-none text-dark">
      <div class="card mb-3" style="max-height: 150px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/cin5.webp') }}" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-1">Cinnamon Plants</h5>
              <p class="card-text small text-muted mb-1">Matara, Crops</p>
              <p class="card-text text-success mb-1">Rs 200</p>
              <p class="card-text small text-muted">2 hours ago</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a href="#" class="text-decoration-none text-dark">
      <div class="card mb-3" style="max-height: 150px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/cin5.webp') }}" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-1">Cinnamon Plants</h5>
              <p class="card-text small text-muted mb-1">Matara, Crops</p>
              <p class="card-text text-success mb-1">Rs 200</p>
              <p class="card-text small text-muted">2 hours ago</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a href="#" class="text-decoration-none text-dark">
      <div class="card mb-3" style="max-height: 150px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/cin5.webp') }}" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-1">Cinnamon Plants</h5>
              <p class="card-text small text-muted mb-1">Matara, Crops</p>
              <p class="card-text text-success mb-1">Rs 200</p>
              <p class="card-text small text-muted">2 hours ago</p>
            </div>
          </div>
        </div>
      </div>
    </a>

  </div>
</div>

    </div>
  </div>
</div>

<!-- Modal for Full Image View -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark position-relative">
      <!-- Close Button -->
      <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close"></button>

      <!-- Image Body -->
      <div class="modal-body p-0">
        <img id="modalImage" src="cin.webp" class="w-100" style="max-height: 90vh; object-fit: contain;" alt="Full View">
      </div>
    </div>
  </div>
</div>


<!-- Script to handle image switching -->
<script>
  function changeImage(thumb) {
    const mainImage = document.getElementById("mainImage");
    const modalImage = document.getElementById("modalImage");

    mainImage.src = thumb.src;
    modalImage.src = thumb.src;

    // Highlight selected thumbnail
    document.querySelectorAll('.thumb').forEach(img => img.classList.remove('border-success'));
    thumb.classList.add('border-success');
  }

  // Sync modal image with current main image
  document.getElementById("mainImage").addEventListener("click", () => {
    document.getElementById("modalImage").src = document.getElementById("mainImage").src;
  });

  function toggleDescription() {
    const dots = document.getElementById("dots");
    const moreText = document.getElementById("moreText");
    const btn = document.getElementById("toggleBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      moreText.style.display = "none";
      btn.innerText = "See more";
    } else {
      dots.style.display = "none";
      moreText.style.display = "inline";
      btn.innerText = "See less";
    }
  }
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>