<!DOCTYPE html>
<html lang="en">
  <head>
     @include('front.layout.head')
  </head>
  <body>      
    <div class="site-wrap">
      <header class="row">
        @include('front.layout.header')
      </header>
      @yield('content')
      @show
      @include('front.layout.footer')
    </div>
</body>
</html>
