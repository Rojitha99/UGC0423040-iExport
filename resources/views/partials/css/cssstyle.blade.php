<style>
    html, body {
      overflow-x: hidden;
    }
    body {
      background-color: #fff;
      padding-top: 140px;
      
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
      box-shadow: 0 2px 5px green;
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
    .carousel-item img {
      height: 400px;
      object-fit: cover;
      filter: brightness(50%);
    }
    .featured-badge {
      position: absolute;
      top: 5px;
      left: 5px;
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
      height: 130px;
      width:200px;
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
    .pre {
      position: relative;
      top: -150px;
      left: -130px;
    }
    .next {
      position: relative;
      top: -150px;
      right: -130px;
    }
    @media (max-width: 991.98px) {
      .secondary-navbar {
        top: auto;
      }
      body {
        padding-top: 180px;
      }
    }


.hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://example.com/ceylon-spices-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        .stat-card {
            border-left: 4px solid rgb(140, 77, 212);
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: rgb(140, 77, 212);
            margin-bottom: 1rem;
        }
        .product-card {
            transition: all 0.3s;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .verified-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #198754;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
        }


/* product page */
.hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://example.com/ceylon-spices-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        .stat-card {
            border-left: 4px solid #0d6efd;
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
        .product-card {
            transition: all 0.3s;
            height: 100%;

        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card img{
          width:cover;
          height:250px;
          border:1px rgb(218, 215, 215) solid;
        }
        .verified-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #198754;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
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

/* Force dropdown above navbar */
.navbar .dropdown-menu {
    z-index: 1055 !important; /* Higher than navbar (Bootstrap navbar is 1030) */
}

.testimonial-img {
  width: 80px; /* or whatever size you want */
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
}

    
  </style>