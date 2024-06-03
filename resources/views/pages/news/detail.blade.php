@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Detalles Noticia</h1>
    
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">

        <section class="section hidden md:block bg-[#E3E3E3]" id="news-desktop">
            <div class="flex p-5 lg:max-w-[1300px] mx-auto py-10">
              <div class="w-4/12">
                <a href="/noticias"> <h1 class="title">Noticias</h1> </a>
                
                <div
                  thumbsSlider=""
                  class="swiper news-thumb-swiper h-[435px] rounded-l-xl"
                >
                  <div class="swiper-wrapper">
          
                    
                    <div class="swiper-slide">
                      <div class="group slide-item">
                        
                        <div class="flex flex-col justify-center gap-2 text-white">
                          <p class="text-sm font-bold group-hover:text-white">
                            {!! $main_news->vc_titulo_informacion !!}
                          </p>
                          
                         
                          <p class="text-xs group-hover:text-white">{{ $main_news->fecha }}</p>
                          <a href=""> <p class="text-xs group-hover:text-white"> {!! $main_news->tx_contenido_informacion !!}  </p></a>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
          
              <div class="w-8/12">
                <div
                  class="swiper news-swiper max-w-full max-h-[500px] w-full rounded-xl overflow-hidden"
                >
                  <div class="swiper-wrapper w-full">
                   
                    <div class="swiper-slide">
                      @if($main_news->foto)
                      <img
                        class="w-full h-full"
                        src="{{ $main_news->foto }}"
                      />
                      @endif
                    </div>
                    <div class="swiper-slide">
                        @if($main_news->foto1)
                        <img
                          class="w-full h-full"
                          src="{{ $main_news->foto1 }}"
                        />
                        @endif
                    </div>
                    <div class="swiper-slide">
                        @if($main_news->foto2)
                        <img
                          class="w-full h-full"
                          src="{{ $main_news->foto2 }}"
                        />
                        @endif
                    </div>
                   
          
                  </div>
          
                  <div class="button-next custom-next">
                    <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <div class="button-prev custom-prev">
                    <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        fill-rule="evenodd"
                        d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@include('shared.information')
@endsection