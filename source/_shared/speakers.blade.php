<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
          </div>
        </div>
        <div class="row">
          
        @foreach ($speakers as $speaker)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="{{ $speaker->getPath() }}" class="d-block mb-3 thumbnail"><img src="/assets/images/uploads/{{ $speaker->image }}" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>{{ $speaker->first_name }}</span> {{ $speaker->last_name }}</a></h3>
              <p>{{ $speaker->profession }}</p>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>