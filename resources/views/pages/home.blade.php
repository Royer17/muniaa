<?php $__env->startSection('content'); ?>

<section class="section" id="slider">
  <div class="swiper main-swiper">
    <div class="swiper-wrapper">
      @foreach($sliders as $slider)
          <div class="swiper-slide">
            <img
              class="w-full"
              src="{{ $slider->img_slide }}"
              alt="Foto principal alto de alianza"
            />
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
<section class="section flex" id="services">
  <div
    class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 px-4 md:py-6 md:gap-x-7 md:gap-y-8 mx-auto max-w-[1300px]"
  >
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
</section>
<section class="section hidden md:block bg-[#E3E3E3]" id="news-desktop">
  <div class="flex p-5 lg:max-w-[1300px] mx-auto py-10">
    <div class="max-w-4xl">
      <a href="/noticias"> <h1 class="title">Noticias</h1> </a>
      
      <div
        thumbsSlider=""
        class="swiper news-thumb-swiper h-[435px] rounded-l-xl"
      >
        <div class="swiper-wrapper">

          @foreach($news as $item)
          <div class="swiper-slide">
            <div class="group slide-item">
              <div>
                <img
                  class="max-w-[200px] w-full"
                  src="{{ $item->image }}"
                />
              </div>
              <div class="flex flex-col justify-center gap-2 text-white">
                <p class="text-sm font-bold group-hover:text-white">
                  {{ $item->title }}
                </p>
                <p class="text-xs group-hover:text-white">{{ \Date::parse($item->date)->format('l\, d \d\e\ F \d\e\l\ Y') }}</p>
                <a href="/noticias/{{ $item->slug }}"> <p class="text-xs group-hover:text-white"> ver más </p></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="w-8/12">
      <div
        class="swiper news-swiper max-w-full max-h-[500px] w-full rounded-xl overflow-hidden"
      >
        <div class="swiper-wrapper w-full">
          @foreach($news as $item)
          <div class="swiper-slide">
            <img
              class="w-full h-full"
              src="{{ $item->image }}"
            />
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
    </div>
  </div>
</section>
<section class="section md:hidden" id="news-mobile">
  <a href="/noticias"><h1 class="title">Noticias</h1></a>
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

<section class="section hidden md:block" id="works-desktop">
  <div class="flex p-5 lg:max-w-[1300px] mx-auto py-10">
    <div class="max-w-4xl">
      <h1 class="title">Obras</h1>
      <div
        thumbsSlider=""
        class="swiper works-thumb-swiper border-solid border-l-2 border-t-2 border-b-2 border-[#B0B0B0] h-[435px] rounded-l-xl"
      >
        <div class="swiper-wrapper">
          @foreach($works as $work)
          <div class="swiper-slide">
            <div class="group slide-item">
              <div>
                <img
                  class="max-w-[200px] w-full"
                  src="{{ $work['foto'] }} " alt="Sin Imagen"
                />
              </div>
              <div class="flex flex-col justify-center gap-2 text-white">
                <p class="text-sm font-bold group-hover:text-white">
                  {{ $work['actividad'] }}
                </p>
              </div>
            </div>
          </div>
          @endforeach
                   
        </div>
      </div>
    </div>

    <div class="w-8/12">
      <div
        class="swiper works-swiper max-w-full max-h-[500px] w-full rounded-xl overflow-hidden"
      >
        <div class="swiper-wrapper w-full">
          @foreach($works as $work)
          <div class="swiper-slide">
            <img
              class="w-full h-full"
              src="{{ $work['foto'] }} "
            />
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
    </div>
  </div>
</section>
<section class="section md:hidden" id="works-mobile">
  <h1 class="title">Obras</h1>
  <div class="swiper works-swiper bg-dark-blue rounded-tl-xl">
    <div class="swiper-wrapper">

      @foreach($works as $work)
        <div class="swiper-slide">
        <div class="works-slide">
          <div>
            <img src="{{ $work['foto'] }}" alt="Foto obras 1" />
          </div>
          <div class="flex flex-col justify-center gap-2 text-white">
            <p class="text-sm font-bold">
              {{ $work['actividad'] }}
            </p>
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
  <div></div>
</section>
<section class="section mt-5" id="photo-gallery">
  <div class="bg-dark-blue py-2 md:pt-6 md:pb-10">
    <div class="max-w-[300px] md:max-w-[900px] mx-auto">
      <h1
        class="text-white text-[14px] md:text-[32px] text-center font-bold mb-3 mt-1"
      >
        Galeria de Fotos
      </h1>


      <div class="swiper photo-gallery-swiper">
        <div class="swiper-wrapper">
          
          @foreach($notice_images as $image)
          <div class="swiper-slide px-[20px]">
            <img src="{{ $image->foto }}" alt="Fotos Alto de Alianza">
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
    </div>
  </div>
  <div></div>
</section>
<section class="section" id="links">
  <h1 class="title md:hidden">Enlaces</h1>
  <div class="swiper links-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="mx-auto" src="icons/INDECOPI.svg" alt="Indecopi" />
      </div>
      <div class="swiper-slide">
        <img
          class="mx-auto"
          src="icons/CONTRALORIA.svg"
          alt="Contraloria"
        />
      </div>
      <div class="swiper-slide">
        <img class="mx-auto" src="icons/OSCE.svg" alt="Osce" />
      </div>
      <div class="swiper-slide">
        <img class="mx-auto" src="icons/SUNASS.svg" alt="Sunass" />
      </div>
    </div>

    <div class="button-next custom-next">
      <svg fill="currentColor" viewBox="0 0 20 20">
        <path
          fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
          clip-rule="evenodd"
        />
      </svg>
    </div>
    <div class="button-prev custom-prev">
      <svg fill="currentColor" viewBox="0 0 20 20">
        <path
          fill-rule="evenodd"
          d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
          clip-rule="evenodd"
        />
      </svg>
    </div>
  </div>
</section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>