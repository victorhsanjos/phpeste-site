<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHPeste &mdash; 2019</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_partials.styles')
    <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
  </head>
  <body>
  
  <div class="site-wrap">

    @include('_partials.menu')
  
    @yield('content')
    
    @include('_partials.footer')
  </div>

  @include('_partials.scripts')

  @stack('scripts')s
  <script>
    if (window.netlifyIdentity) {
      window.netlifyIdentity.on("init", user => {
        if (!user) {
          window.netlifyIdentity.on("login", () => {
            document.location.href = "/admin/";
          });
        }
      });
    }
  </script>
  </body>
</html>