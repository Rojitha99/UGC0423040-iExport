<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport-5</title>
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
  padding-top: 140px;
  padding-bottom: 50px;
  font-family: Arial, sans-serif;
}

.search-container {
  max-width: 500px;
  margin-bottom: 40px;
  position: relative;
  background: white;
  border-radius: 40px;
  padding: 5px;
  box-shadow: 0 2px 5px #A0522D;
}

.search-bar {
  border-radius: 40px;
  padding: 12px 20px;
  font-size: 1rem;
  width: 100%;
  border: none;
  outline: none;
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

/* Fixed Navbar Positioning */
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
  top: 72px; /* Adjust if navbar height changes */
}

/* Responsive adjustments */
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
    padding-top: 180px;
  }
  .secondary-navbar {
    top: auto;
  }
}
.link-d a{
text-decoration: none;
color: rgb(162, 162, 162);
}
/* Contact Box */
.contact-box {
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 16px;
  max-width: 100%;
  background-color: #fff;
}

.contact-option {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  cursor: pointer;
}

.contact-option i {
  font-size: 1.5rem;
  margin-right: 10px;
}

.phone-number {
  background-color: #e9ecef;
  padding: 6px 12px;
  border-radius: 6px;
  display: inline-block;
  margin-top: 5px;
  font-weight: bold;
}

/* Product Cards */
.card-img-top {
  height: 300px;
  width:300px;
  
  
}

.card-text.text-success {
  font-size: 1.2rem;
  font-weight: bold;
  color: green;
  justify-content: ;
}
.thumb {
  cursor: pointer;
  border: 2px solid transparent;
}
.thumb:hover {
  border-color: #fcd116;
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
          <a class="nav-button" href="{{ route('sellers') }}" style="background-color: #c58911">Sellers</a>
        </li>
        <li class="nav-item">
          <a class="nav-button" href="{{ route('buyers') }}" >Buyers</a>
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

<!-- Container -->
<div class="container mt-4">
  <div class="row">
    <!-- Left: Main Content -->
    <div class="col-md-8">
      <!-- Search Bar -->
      <div class="search-container mb-4" role="search">
        <input type="text" class="search-bar" placeholder="What are you looking for?">
        <button class="search-btn">
          <i class="bi bi-search"></i>
        </button>
      </div>
      <!-- Title & Ads Info -->
      <div class="link-d">
      <p ><a href="index.html">Home</a>><a href="Cardamom.html">Product/Celon Cinnamon</a>><a href="cin01.html" style="color: rgb(33, 33, 33);">Cinnamon stic</a></p>
      </div>
      <!-- Product Card -->
      <div class="card h-100 text-center mb-4">
        <!-- Product Header -->
        <div class="card-body">
          <h5 class="card-title">Pineapple Plants</h5>
          <p class="card-text">Gampaha, Crops, Seeds & Plants</p>
          <p class="card-text"><small class="text-muted">5 hours ago</small></p>
        </div>

        <!-- Main Image -->
        <div>
          <img
            id="mainImage"
            src="car7.webp"
            alt="Pineapple Plants"
            class="border border-dark rounded mx-auto d-block"
            style="width: 500px; height: 300px; object-fit: cover; cursor: pointer;"
            data-bs-toggle="modal"
            data-bs-target="#imageModal"
          >
        </div>

        <!-- Thumbnail Images -->
        <div class="d-flex justify-content-center gap-2 p-3">
          <img src="{{ asset('images/car7.webp') }}" class="img-thumbnail border border-success thumb" alt="Thumb 1" width="80" onclick="changeImage(this)">
          <img src="{{ asset('images/car2.webp') }}" class="img-thumbnail thumb" alt="Thumb 2" width="80" onclick="changeImage(this)">
          <img src="{{ asset('images/car3.webp') }}" class="img-thumbnail thumb" alt="Thumb 3" width="80" onclick="changeImage(this)">
        </div>

        <!-- Product Details -->
        <div class="card-body">
        <h2 class="card-text text-success">Rs 100</h2>
        <h5 class="card-title">Description</h5>
        
        <!-- Collapsible Text -->
        <p class="card-text" id="descriptionText">
            Ceylon Cinnamon Sticks (Quills)<br>
            <span id="dots">...</span>
            <span id="moreText" style="display: none;">
            Sourced from the heart of Sri Lanka, our Ceylon Cinnamon Sticks are hand-rolled and sun-dried to preserve aroma and flavor. Ideal for tea blends, cooking, baking, and natural remedies.

Grade: Alba / C5 / M4

Packaging: 250g | 500g | 1kg | Custom bulk

Uses: Culinary, health products, essential oils

Export Quality: ISO & SLS certified
            </span>
        </p>

        <!-- Toggle Button -->
        <button class="btn btn-link p-0" onclick="toggleDescription()" id="toggleBtn">See more</button>
    </div>
  </div>
</div>
    
    <!-- Right: Contact Box -->
    <div class="col-md-4">
      <div class="contact-box shadow-sm mt-4 mt-md-0 p-3 border rounded">
        <p class="text-muted mb-1">For sale by <strong>Chinthaka</strong></p>

        <div class="contact-option d-flex align-items-center mb-2">
          <i class="bi bi-telephone-fill text-success me-2 fs-5"></i>
          <div>
            <div><strong>Call seller</strong></div>
            <div class="phone-number">0778430140</div>
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
            <img src="cin.webp" alt="Pineapple Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
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
            <img src="cin2.webp" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
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

    <!-- Add more cards here as needed -->
     <a href="#" class="text-decoration-none text-dark">
      <div class="card mb-3" style="max-height: 150px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="cin2.webp" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
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
            <img src="cin2.webp" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
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
            <img src="cin2.webp" alt="Cinnamon Plants" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
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

<footer class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3"><i class="bi bi-globe"></i> iExport</h5>
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