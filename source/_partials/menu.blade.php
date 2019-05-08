<div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="/">{{ $page->event_name }}</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <!-- d-lg-none -->
                    <div class="d-inline-block  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                     <!-- d-lg-block -->
                    <ul class="site-menu js-clone-nav d-none">
                      <li class="{{ $page->selected('') }}"><a href="/">Home</a></li>
                      <li class="{{ $page->selected('speakers') }}"><a href="/speakers">Palestrantes</a></li>
                      <li class="{{ $page->selected('programming') }}"><a href="/programming">Programação</a></li>
                      {{-- <li class="{{ $page->selected('venue') }}"><a href="/venue">Local</a></li> --}}
                      {{-- <li class="{{ $page->selected('sponsors') }}"><a href="/sponsors">Patrocinadores</a></li> --}}
                      <li class="{{ $page->selected('about') }}"><a href="/about">Sobre</a></li>
                      <li class="{{ $page->selected('code-of-conduct') }}"><a href="/code-of-conduct">Código de conduta</a></li>
                      {{-- <li class="{{ $page->selected('faq') }}"><a href="/faq">FAQ</a></li> --}}
                      <li class="{{ $page->selected('contact') }}"><a href="/contact">Contato</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>