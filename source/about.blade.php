@extends('_layouts.master')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">A conferência</h1>
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
            <h2 class="font-weight-bold text-uppercase display-3">O PHPeste</h2>
            <p>
                PHPeste é uma conferência de PHP organizada pelas comunidades “cabra da peste” do nordeste brasileiro.
                O evento já passou por João Pessoa (PB), Salvador (BA), Fortaleza(CE), São Luis(MA) e agora é a vez de
                Recife(PE) sediar um dos maiores eventos de PHP do Brasil. Serão três dias de muito aprendizado,
                muita mão na massa e, principalmente, de gente “arretada da peste” que irá ampliar ainda mais seu
                networking. O evento contará com a participação de palestrantes de altíssimo nível, minicursos práticos,
                e conversas focadas na temática do evento: crescimento e colaboração.
            </p>
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
            <h2 class="font-weight-bold text-uppercase display-3"><span class="d-block">Comunidades</span> </h2>
            <p>
                A conferência é organizada pelas comunidades dos estados nordestinos: Alagoas, Bahia, Ceará, Maranhão,
                Paraíba, Pernambuco, Piauí, Rio Grande do Norte e Sergipe. Dessa vez a Comunidade PHP Pernambuco está
                a frente da organização, e como a conferência é executada exclusivamente por membros voluntários das
                comunidades os custos são minimizados para manter os preços dos ingressos o mais baixo possível. Dessa
                forma, contamos com a colaboração de todos.
            </p>
            
          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                    <h2 class="mb-5 text-uppercase">Organização</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($organizers as $organizer)
                    <div class="col-md-6 col-lg-3 col-sm-12 mb-2">
                        <div class="organizer text-left">
                            <img src="{{ $organizer->image }}" alt="Image" class="img-fluid">
                            <h3 class="heading mb-0 mt-6"><a href="#"><span>{{ $organizer->first_name }}</span> {{ $organizer->last_name }}</a></h3>
                            <div class="organizer_rede">
                              <p>{{ $organizer->profession }}</p>
                              <ul>
                                @foreach ($organizer->social ?? [] as $key => $item)
                                  <li>
                                    <a href="{{ $item }}" alt="{{ $key }}">
                                      <img src="{{ '/assets/images/' . strtolower($key) . '.png' }}" />
                                    </a>
                                  </li>
                                @endforeach
                              </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('_shared.block-images', ['image1' => 'images/img_4.jpg', 'image2' => 'images/img_3.jpg'])

    {{-- @include('_shared.why-us') --}}

    @include('_shared.contact-info')
@endsection