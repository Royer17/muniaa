@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('assets/img/bgs/banner-img-1.jpg') }})"></div>
    <div class="banner-inner">
        <div class="container-lg">
            <div class="inner-container clearfix">
                <h1>Deportes</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('pages.home') }}">Inicio</a></li>
                        <li><a href="">Servicios</a></li>
                        <li class="active">Deportes</li>
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