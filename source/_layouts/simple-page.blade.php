@extends('_layouts.master')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">{{ $page->title }}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            @yield('pageContent')
          </div>
        </div>
      </div>
    </div>

        <!-- Modal -->  
  @foreach($schedules as $speaker)
  
  <div class="modal right fade" id="{{$speaker->modal}}" tabindex="-1" role="dialog" aria-labelledby="{{$speaker->modal}}-speaker">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title header-text" id="{{$speaker->modal}}-speaker">{{$speaker->speaker}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <h3 class="modal-title modal-title-text">{{$speaker->title}}</h3>
        
        <div class="modal-body">
          <p>
              {{$speaker->section}}
          </p>
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
@endforeach

    {{-- @include('_shared.why-us') --}}

    @include('_shared.contact-info')
@endsection