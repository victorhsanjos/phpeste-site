<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHPeste 2019 - Recife, capital pernambucana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_partials.styles')
    <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65548481-8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-65548481-8');
    </script>
  </head>
  <body>
  
  <div class="site-wrap">

    @include('_partials.menu')
  
    @yield('content')
    
    @include('_partials.footer')
  </div>

  @include('_partials.scripts')

  @stack('scripts')
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