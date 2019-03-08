@extends('_layouts.master')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">About Us</h1>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section pb-0">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4">
            <img src="/assets/images/img_4.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 col-lg-5 ml-auto">
            <h2 class="font-weight-bold text-uppercase display-3"><span class="d-block">About</span> Confe.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio molestiae fuga modi delectus? Soluta consequuntur esse, fugit ratione. Nobis deserunt, suscipit ut similique animi tempora. Tempore quaerat autem nihil, accusantium.</p>
          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-6 mb-4 order-md-2">
            <img src="/assets/images/img_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 col-lg-5 mr-auto order-md-1">
            <h2 class="font-weight-bold text-uppercase display-3"><span class="d-block">Innovate</span> </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio molestiae fuga modi delectus? Soluta consequuntur esse, fugit ratione. Nobis deserunt, suscipit ut similique animi tempora. Tempore quaerat autem nihil, accusantium.</p>
            
          </div>
          
        </div>
      </div>
    </div>

    @include('_shared.speakers', ['title' => 'The Team'])

    @include('_shared.block-images', ['image1' => 'images/img_4.jpg', 'image2' => 'images/img_3.jpg'])

    @include('_shared.why-us')

    @include('_shared.contact-info')
@endsection