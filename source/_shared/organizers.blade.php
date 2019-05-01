<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
          </div>
        </div>
        <div class="row">
          
        @foreach ($organizers as $organizer)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="organizer text-left">
              <a href="{{ $organizer->getPath() }}" class="d-block mb-3 thumbnail"><img src="/assets/{{ $organizer->image }}" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>{{ $organizer->first_name }}</span> {{ $organizer->last_name }}</a></h3>
              <p>{{ $organizer->profession }}</p>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>