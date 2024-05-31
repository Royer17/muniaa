@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
    <h1 class="text-2xl md:text-4xl font-bold mb-4 ">Portal de Transparencia</h1>

      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
      
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>
            
            <div class="flex justify-center">
                <iframe class="w-full h-128 md:w-2/3 md:h-96 border-2 border-gray-300 rounded-lg shadow-lg"
                        src="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=11734#.X1lRJ3lKgdU"
                        frameborder="0"
                        allowfullscreen>
                </iframe>
            </div>

            <div class="flex flex-col gap-4">
              <div>

              </div>
            </div>
          </div>
        </div>
        <div class="hidden md:flex flex-col gap-5">
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/parquefami.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/parquefami.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/licenciafun.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/sci.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/regciv.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/sci.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/regciv.png') }}" /> </a>
          </div>
          <div class="service-card-base">
            <a href="#"> <img src="{{ asset('img/services/regciv.png') }}" /> </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('shared.information')
@endsection