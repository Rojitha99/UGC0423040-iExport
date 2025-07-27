<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Default Title')</title>
  @include('partials.head')
  @include('partials.css.cssstyle')
  
</head>
<body>
  @include('components.navbar')
  
  <main class="py-4">
    @yield('content')
  </main>

  @include('components.footer')
  @include('partials.jsscript')
  
</body>
</html>