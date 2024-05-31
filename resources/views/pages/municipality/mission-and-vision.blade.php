@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Visión y Misión</h1>
      <div class="page-nav">
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('pages.home') }}">Inicio</a></li>
            <li><a href="">Municipalidad</a></li>
            <li class="active">Misión y Visión</li>
        </ul>
    </div>
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>
            <img
              class="w-full mb-5 max-h-[40rem]"
              src="https://picsum.photos/1200/600"
            />
            <div class="flex flex-col gap-4">
              <div>
                <h2 class="text-xl font-bold mb-4">Visión</h2>
                <p class="text-sm md:text-base">
                    {!! $setting->vision !!}
                </p>
              </div>
              <div>
                <h2 class="text-xl font-bold mb-4">Misión</h2>
                <p class="text-sm md:text-base">
                    {!! $setting->vision !!}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden md:flex flex-col gap-5">
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/secciu.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/parquefami.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/licenciafun.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/sci.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/regciv.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/sci.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/regciv.png" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="./img/services/regciv.png" /> </a>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('assets/img/bgs/banner-img-1.jpg') }})"></div>
    <div class="banner-inner">
        <div class="container-lg">
            <div class="inner-container clearfix">
                <h1>Misión y Visión</h1>



            </div>
        </div>
    </div>
</section>
<section class="default-section">
    <div class="container-lg">

        <div class="row as">
        <!-- contenido -->


        <div class="text-titulo">
        VISIÓN
        </div>

        <div class="text-descripcion">
            {!! $setting->vision !!}
            <br>

        {{-- La Municipalidad de Ciudad Nueva es el órgano de gobierno local que representa y gestiona los intereses de los vecinos en la jurisdicción, promueve una fuerte gobernabilidad democrática, asegurando la mayor participación ciudadana en la formulación de las políticas  locales de alta calidad, con la mayor eficiencia, haciendo un uso responsable, transparente y estratégico de los recursos públicos, de manera que provoque sinergias con las inversiones de otras instituciones del estado y del sector privado, para mejorar la calidad de vida de los ciudadanos en la jurisdicción. --}}
        <br>
        </div>


        </div>
        <br><br>

        <div class="row as">
        <!-- contenido -->


        <div class="text-titulo">
        MISIÓN
        </div>



        <div class="text-descripcion">
            <br>
           

        <br>
        </div>


        </div>
    </div>
</section>
@endsection