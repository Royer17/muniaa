@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Noticias</h1>
    
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
      <div class="col">
            
            <div class="container-lg">
              <!-- rows -->
                <div class="row clearfix">
                    <!-- col -->
                    @foreach($news as $item)
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ $item->image }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">{{ \Date::parse($item->created_at)->format('l\, d \d\e\ F \d\e\l\ Y') }}</div>
                                    <div class="upper-title">
                                        <h4><a href="/noticias/{{ $item->slug }}">{{ $item->title }}</a></h4>
                                    </div>
                                    <div class="more-link"><a href="/noticias/{{ $item->slug }}">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    @endforeach
                    {{-- 
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva es el epicentro del Plan Tayta</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-03.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Clausuran e Intervienen Boticas en Ciudad Nueva</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-04.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Colegios que Albergarán al Plan Tayta fueron desinfectados</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-01.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- col -->
                    <div class="column col-lg-4 col-md-6 col-sm-12">
                        <!-- item -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/news/news-02.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">Viernes, 28 de Agosto del 2020</div>
                                    <div class="upper-title">
                                        <h4><a href="">Ciudad Nueva Adelanta Homenaje a Tacna</a></h4>
                                    </div>
                                    <div class="more-link"><a href="">Sigue Leyendo</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    --}}
                    <!-- col -->
                </div>
                <!-- rows -->
                <!-- pagination -->
                @if ($news->hasPages())
                <div class="pagination-box text-center">
                        <ul class="pagination">

                            @if($news->currentPage() >= 3)
                                <li class="hidden-xs"><a href="{{ $news->url(1) }}" style="margin-right: 16px;">1</a></li>
                            @endif
                            @if($news->currentPage() == 4)
                                <li class="hidden-xs"><a href="{{ $news->url(2) }}" style="margin-right: 16px;">2</a></li>
                            @endif
                            @if($news->currentPage() > 4)
                                <li><span style="margin-right: 16px;">...</span></li>
                            @endif
                            @foreach(range(1, $news->lastPage()) as $i)
                                @if($i >= $news->currentPage() - 1 && $i <= $news->currentPage() + 1)
                                    @if ($i == $news->currentPage())
                                        <li class="active"><span style="margin-right: 16px;">{{ $i }}</span></li>
                                    @else
                                        <li><a href="{{ $news->url($i) }}" style="margin-right: 16px;">{{ $i }}</a></li>
                                    @endif
                                @endif
                            @endforeach
                            @if($news->currentPage() < $news->lastPage() - 3)
                                <li><span style="margin-right: 16px;">...</span></li>
                            @endif
                            @if($news->currentPage() < $news->lastPage() - 2)
                                <li class="hidden-xs"><a href="{{ $news->url($news->lastPage()) }}" style="margin-right: 16px;">{{ $news->lastPage() }}</a></li>
                            @endif
                        </ul>


<!--                     <ul class="styled-pagination">
                        <li class="prev"><a href="#"><i class="material-icons">navigate_before</i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="next"><a href="#"><i class="material-icons">navigate_next</i></a></li>
                    </ul> -->
                </div>
                @endif

                <!-- pagination -->
            </div>
    
    
    
    </div>


        </div>

      </div>
    </div>
  </section>

@include('shared.information')
@endsection

