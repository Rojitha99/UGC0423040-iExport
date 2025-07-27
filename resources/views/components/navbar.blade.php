<!-- Main Navbar - Fixed -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-navbar main-navbar" style="background-color: {{ $navbarColor ?? '' }};">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-2" href="{{ route('frontend.home') }}"><i class="fa-solid fa-anchor"></i>
      iExport
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    

      <ul class="navbar-nav navbar-nav-right mb-2 mb-lg-0 fs-5">
        <li class="nav-item me-3">
          <a href="{{ route('frontend.chat') }}" style="text-decoration: none;">
          <span class="text-white"><i class="bi bi-chat-left-dots"></i> Chat</span></a>
        </li>
        <li class="nav-item me-3">
          <a href="{{ route('login') }}" style="text-decoration: none;">
          <span class="text-white"><i class="bi bi-person"></i> Login</span></a>
        </li>
        <li class="nav-item">
          <a href="{{ route('frontend.post') }}">
          <button class="btn btn-warning fw-bold post-ad-btn">POST YOUR AD</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Secondary Navigation - Fixed -->
<div class="container-fluid py-3 fixed-navbar secondary-navbar" style="background-color: {{ $navbarColor ?? '' }};">
  <div class="container">
    <div class="navbar justify-content-center">
      
    <ul class="navbar-nav d-flex flex-row flex-wrap justify-content-center gap-3">
    <!-- Home -->
    <li class="nav-item">
        <a class="nav-button @if(request()->routeIs('frontend.home')) active @endif" 
           href="{{ route('frontend.home') }}"
           @if(request()->routeIs('frontend.home')) style="background-color: #c58911;" @endif>
            Home
        </a>
    </li>

    <!-- Products Dropdown - Fixed with proper Bootstrap classes -->
    <li class="nav-item dropdown">
        <a class="nav-button dropdown-toggle @if(request()->routeIs('frontend.cinnamon', 'frontend.pepper', 'frontend.cloves', 'frontend.nutmeg', 'frontend.cardamom')) active @endif" 
           href="#" 
           id="productsDropdown" 
           role="button" 
           data-bs-toggle="dropdown" 
           aria-expanded="false"
           @if(request()->routeIs('frontend.cinnamon', 'frontend.pepper', 'frontend.cloves', 'frontend.nutmeg', 'frontend.cardamom')) style="background-color: #c58911;" @endif>
            Product
        </a>
        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
            <li>
                <a class="dropdown-item @if(request()->routeIs('frontend.cinnamon')) active @endif" 
                   href="{{ route('frontend.cinnamon') }}"
                   @if(request()->routeIs('frontend.cinnamon')) style="background-color: #c58911;" @endif>
                    Ceylon Cinnamon
                </a>
            </li>
            <li>
                <a class="dropdown-item @if(request()->routeIs('frontend.pepper')) active @endif" 
                   href="{{ route('frontend.pepper') }}"
                   @if(request()->routeIs('frontend.pepper')) style="background-color: #c58911;" @endif>
                    Ceylon Pepper
                </a>
            </li>
            <li>
                <a class="dropdown-item @if(request()->routeIs('frontend.cloves')) active @endif" 
                   href="{{ route('frontend.cloves') }}"
                   @if(request()->routeIs('frontend.cloves')) style="background-color: #c58911;" @endif>
                    Ceylon Cloves
                </a>
            </li>
            <li>
                <a class="dropdown-item @if(request()->routeIs('frontend.nutmeg')) active @endif" 
                   href="{{ route('frontend.nutmeg') }}"
                   @if(request()->routeIs('frontend.nutmeg')) style="background-color: #c58911;" @endif>
                    Ceylon Nutmeg
                </a>
            </li>
            <li>
                <a class="dropdown-item @if(request()->routeIs('frontend.cardamom')) active @endif" 
                   href="{{ route('frontend.cardamom') }}"
                   @if(request()->routeIs('frontend.cardamom')) style="background-color: #c58911;" @endif>
                    Ceylon Cardamom
                </a>
            </li>
        </ul>
    </li>

    <!-- Sellers -->
    <li class="nav-item">
        <a class="nav-button @if(request()->routeIs('frontend.sellers')) active @endif" 
           href="{{ route('frontend.sellers') }}"
           @if(request()->routeIs('frontend.sellers')) style="background-color: #c58911;" @endif>
            Sellers
        </a>
    </li>

    <!-- Buyers -->
    <li class="nav-item">
        <a class="nav-button @if(request()->routeIs('frontend.buyers')) active @endif" 
           href="{{ route('frontend.buyers') }}"
           @if(request()->routeIs('frontend.buyers')) style="background-color: #c58911;" @endif>
            Buyers
        </a>
    </li>

    <!-- Logistic -->
    <li class="nav-item">
        <a class="nav-button @if(request()->routeIs('frontend.logistic')) active @endif" 
           href="{{ route('frontend.logistic') }}"
           @if(request()->routeIs('frontend.logistic')) style="background-color: #c58911;" @endif>
            Logistic
        </a>
    </li>

    <!-- Invest -->
    <li class="nav-item">
        <a class="nav-button @if(request()->routeIs('frontend.invest')) active @endif" 
           href="{{ route('frontend.invest') }}"
           @if(request()->routeIs('frontend.invest')) style="background-color: #c58911;" @endif>
            Invest
        </a>
    </li>
</ul>
    </div>
  </div>
</div>