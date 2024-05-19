@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ 'img/bgs/banner-img-6.jpg' }})"></div>
    <div class="banner-inner">
        <div class="container-lg">
            <div class="inner-container clearfix">
                <h1>Portal de Transparencia</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('pages.home') }}">Inicio</a></li>
                        <li class="active">Portal de Transparencia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="default-section">
    
    <div class="container-lg">
           
    </div>
  
</section>
@endsection