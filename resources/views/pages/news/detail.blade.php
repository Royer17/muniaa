@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">{!! $main_news->vc_titulo_informacion !!}</h1>
    
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">

        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="content-inner">
                    <div class="single-post">
                        <div class="post-details">
                            <div class="main-image-box">
                                <figure class="image"><img src="{{ asset('/assets/img/news/news-01.jpg') }}" alt=""></figure>
                            </div>

                            <h2>{!! $main_news->vc_titulo_informacion !!}</h2>

                            {!! $main_news->tx_contenido_informacion !!}
                            <br>
                            @if($main_news->foto)
                            <img src="{{ $main_news->foto }}" style="  display: block;margin-left: auto;margin-right: auto;width: 100%;">
                            @endif

                            <br>
                            @if($main_news->foto1)
                            <img src="{{ $main_news->foto1 }}" style="  display: block;margin-left: auto;margin-right: auto;width: 100%;">
                            @endif
                            <br>
                            @if($main_news->foto2)
                            <img src="{{ $main_news->foto2 }}" style="  display: block;margin-left: auto;margin-right: auto;width: 100%;">
                            @endif
                            <br>
                            Fecha de publicación: {{ $main_news->fecha }}
                        </div>
                        <div class="share-post">
                            <strong>Comparte esta publicación con tus amigos</strong>
                            <ul class="links clearfix">
                                <li class="facebook"><a href="#"><span class="txt">Facebook</span></a></li>
                                <li class="twitter"><a href="#"><span class="txt">Twiter</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="bg-layer">
                        <div class="image-layer"></div>
                    </div>
                    <div class="sidebar-widget search-box">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Buscar</h4>
                            </div>
                            <form method="GET" action="">
                                <div class="form-group">
                                    <input type="search" name="q" placeholder="Búsqueda por título" required>
                                    <button type="submit"><span class="material-icons">search</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Últimas Noticias</h4>
                            </div>
                            <div class="recent-posts-box">
                                @foreach($other_news as $item)
                                <div class="post">
                                    <div class="inner">
                                        <figure class="post-thumb">
                                            <img src="{{ asset('/assets/img/news/news-02.jpg') }}" alt="">
                                            <a href="" class="overlink"><span class="icon material-icons">info</span></a>
                                        </figure>
                                        <div class="post-date">{{ $item->fecha }}</div>
                                        <h5 class="title"><a href="/noticias/{{ $item->slug }}">{{ $item->vc_titulo_informacion }}</a></h5>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- tags -->
<!--                     <div class="sidebar-widget popular-tags">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Tags</h4>
                            </div>
                            <ul class="tags-list clearfix">
                                <li><a href="">Cultura</a></li>
                                <li><a href="">Seguridad</a></li>
                                <li><a href="">Deportes</a></li>
                                <li><a href="">Recreación</a></li>
                            </ul>
                        </div>
                    </div> -->
                </aside>
            </div>
        </div>

        </div>
       


@include('shared.information')
@endsection