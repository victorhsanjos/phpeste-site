@extends('_layouts.master')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Contato</h1>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
          
            <form id="my-form" class="p-5 bg-white" name="contact" method="POST" data-netlify="true">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="name">Nome</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Nome">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">E-mail</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Telefone</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensagem</label>
                  <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Diga olá para nós"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar mensagem" class="btn btn-primary px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>

          <!--<div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>
          </div>-->
        </div>
      </div>
    </div>

    {{-- @include('_shared.why-us') --}}

    @include('_shared.contact-info')
@endsection

@push('scripts')
  <script>
    $("#my-form").submit(function(e) {
      e.preventDefault();

      var $form = $(this);
      $.post($form.attr("action"), $form.serialize()).then(function() {
        alert("Obrigado, sua mensagem foi enviada!");
      });
    });
  </script>
@endpush