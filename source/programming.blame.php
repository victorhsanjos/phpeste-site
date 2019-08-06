@extends('_layouts.master')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="mb-4">Programação</h1>
                </div>
            </div>
        </div>
    </div>  

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12 col-lg-12 mb-5">
                    Gostaria de submeter uma palestra ou workshop? [Clique aqui](https://speakerfight.com/events/call4papers-phpeste-2019-recifepe/).

                    @include('_shared.block-images', ['grade' => 'uploads/grade.jpg'])
                </div>
            </div>
        </div>
    </div>
@include('_shared.block-images', ['image1' => 'images/img_1.jpg', 'image2' => 'images/img_2.jpg'])

@include('_shared.contact-info')
@endsection