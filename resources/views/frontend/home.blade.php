@extends('layouts.app', ['navbarColor' => 'green'])

@section('title', 'iExport-Home')

@include('partials.css.home')

@section('content')
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
          <p><a class="btn btn-lg btn-primary" href="{{ route('frontend.cinnamon') }}">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/log.jpg') }}" class="d-block w-100" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Our Logistic Platform</h1>
          <p>Sri lanka is the most fameous harbers in indian oscern</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('frontend.logistic') }}">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/bis.jpeg') }}" class="d-block w-100" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Make your Business</h1>
          <p>Your need is our Asset.you is our hart.we do your need perfectly</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}">Sign up today</a></p>
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
            <a href="{{ route('frontend.cin01') }}" style="text-decoration: none; color: #000;">
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
            <a href="{{ route('frontend.car01') }}" style="text-decoration: none; color: #000;">
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
            <a href="{{ route('frontend.clo01') }}" style="text-decoration: none; color: #000;">
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
            <a href="{{ route('frontend.nut01') }}" style="text-decoration: none; color: #000;">
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
  
@endsection