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

                            <!-- col -->
                        </div>
                        <!-- rows -->
                        <!-- pagination -->
                        <!-- pagination -->
                    </div>
            
            
            
            </div>


        </div>

      </div>
    </div>
  </section>

@include('shared.information')
@endsection

