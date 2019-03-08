<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Confe &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_partials.styles')
    
  </head>
  <body>
  
  <div class="site-wrap">

    @include('_partials.menu')
  
    @yield('content')
    
    @include('_partials.footer')
  </div>

  @include('_partials.scripts')

  </body>
</html>