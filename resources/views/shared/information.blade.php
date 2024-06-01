<div class="hidden md:flex flex-col gap-5">
  @foreach($services as $service)
  <div class="service-card-base">
    @if($service->url)
    <a href="{{ $service->url }}" target="_blank">
    @else
    <a href="/servicios-municipales/{{ $service->slug }}" target="_blank">
    @endif
      <img src="{{ $service->image }}" />
    </a>
  </div>
  @endforeach
  
</div>
</div>
</div>
</section>



<section class="section md:hidden" id="news-mobile">
  <h1 class="title">Noticias</h1>
  <div class="swiper news-swiper bg-dark-blue rounded-tl-xl">
    <div class="swiper-wrapper">

      @foreach($news as $item)
      <div class="swiper-slide">
        <div class="news-slide">
          <div>
            <img src="{{ $item->image }}" />
          </div>
          <div class="flex flex-col justify-center gap-2 text-white">
            <p class="text-sm font-bold">
              {{ $item->title }}
            </p>
            <p class="text-xs">{{ \Date::parse($item->date)->format('l\, d \d\e\ F \d\e\l\ Y') }}</p>
            <a href="/noticias/{{ $item->slug }}"> <p class="text-xs group-hover:text-white"> ver más </p></a>
          </div>
        </div>
      </div>

      @endforeach


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
</section>
    <div class="swiper news-swiper bg-dark-blue rounded-tl-xl">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="news-slide">
            <div>
              <img src="https://picsum.photos/300/200" />
            </div>
            <div class="flex flex-col justify-center gap-2 text-white">
              <p class="text-sm font-bold">
                Patrullaje permanente en la avenida manuel cuadros
              </p>
              <p class="text-xs">23 de Nov.</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="news-slide">
            <div>
              <img src="https://picsum.photos/300/200" />
            </div>
            <div class="flex flex-col justify-center gap-2 text-white">
              <p class="text-sm font-bold">
                Patrullaje permanente en la avenida manuel cuadros
              </p>
              <p class="text-xs">23 de Nov.</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="news-slide">
            <div>
              <img src="https://picsum.photos/300/200" />
            </div>
            <div class="flex flex-col justify-center gap-2 text-white">
              <p class="text-sm font-bold">
                Patrullaje permanente en la avenida manuel cuadros
              </p>
              <p class="text-xs">23 de Nov.</p>
            </div>
          </div>
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
  </section>
 
  <section class="section md:hidden mt-10" id="services">
    <div
      class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 px-4 md:px-20 md:py-6 md:gap-x-7 md:gap-y-8"
    >
    <div class="service-card-base">
        <a href="#"> <img src="{{ '/img/services/secciu.png' }}" /> </a>
      </div>
      <div class="service-card-base">
        <a href="#"> <img src="{{ asset('img/services/parquefami.png') }}" /> </a>
      </div>
      <div class="service-card-base">
        <a href="#"> <img src="{{ '/img/services/licenciafun.png' }}" /> </a>
      </div>
      <div class="service-card-base">
        <a href="#"> <img src="{{ '/img/services/sci.png' }}" /> </a>
      </div>
      <div class="service-card-base">
        <a href="#"> <img src="{{ '/img/services/regciv.png' }}" /> </a>
      </div>
      <div class="service-card-base">
        <a href="#"> <img src="{{ '/img/services/sci.png' }}" /> </a>
      </div>
      <div class="service-card-base">
        <a href="#"> <img src="{{ '/img/services/regciv.png' }}" /> </a>
      </div>
    </div>
  </section>


 <section class="section !m-0" id="photo-gallery">
    <div class="bg-dark-blue py-2 md:pt-6 md:pb-10">
      <div class="max-w-[300px] md:max-w-[900px] mx-auto">
        <h1
          class="text-white text-[14px] md:text-[32px] text-center font-bold mb-3 mt-1"
        >
          Galeria de Fotos
        </h1>
        <div class="swiper photo-gallery-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide px-[20px]">
              <img src="{{ asset('img/photos/foto.png') }}"  alt="Fotos Alto de Alianza 1" />
            </div>
            <div class="swiper-slide px-[20px]">
              <img src="{{ asset('img/photos/foto.png') }}" alt="Fotos Alto de Alianza 2" />
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
    <div></div>
  </section>