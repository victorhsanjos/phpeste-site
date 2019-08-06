<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
          </div>
        </div>
        @foreach ($page->categories as $key => $category)
          <div class="row mb-5">
            <div class="col-md-12 text-left section-heading">
              <h4 class="mb-5 text-uppercase">{{ $category->description }}</h4>
            </div>
            @foreach ($sponsors as $sponsor)
              @if ($sponsor->type === $key)
                <div class="col-6 col-md-6 col-lg-4">
                  <a href="{{ $sponsor->url_site }}" target="_blank">
                    <img src="{{ $sponsor->image }}" alt="{{ $sponsor->name }}" class="img-fluid">
                  </a>
                </div>
              @endif
            @endforeach
          </div>
        @endforeach
      
        <div class="row mb-5">
          <div class="col-md-12 col-lg-12 mb-4">
            <h1 class="text-center">Seja um <a href="mailto:{{ $page->event_contact_email ?? '#' }}">patrocinador</a>!</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="p-4 border text-center">
              <h2>Sua empresa aqui</h2>
              <div class="row justify-content-center">
                <div class="col-md-7">
                  <p><a href="mailto:{{ $page->event_contact_email ?? '#' }}" class="btn btn-primary px-4 py-2">Torne-se um patrocinador</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>