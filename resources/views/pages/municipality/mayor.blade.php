@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">ALCALDE</h1>

      
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>
            <img
              class="w-full mb-5 max-h-[40rem]"
              src="{{ $setting->photo }}"
            />
            <div class="flex flex-col gap-4">
              <div>
                <h2 class="text-xl font-bold mb-4">Alcalde</h2>
                <p class="text-sm md:text-base">
                    {!! $setting->mayor !!}
                </p>
              </div>
              <div>
                <p class="text-sm md:text-base">
                    {!! $setting->description !!}
                </p>
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