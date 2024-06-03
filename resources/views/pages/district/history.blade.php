@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
<<<<<<< HEAD
      <h1 class="text-sm md:text-3xl uppercase">Visión y Misión</h1>

      
=======
      <h1 class="text-sm md:text-3xl uppercase">Historia</h1>
    
>>>>>>> b68f443473edac17fb58b7511470487b1496c0c8
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>
<<<<<<< HEAD
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
=======
<!--             <img
              class="w-full mb-5 max-h-[40rem]"
              src="https://picsum.photos/1200/600"
            /> -->
            <div class="flex flex-col gap-4">
              {!! $setting->history !!}
>>>>>>> b68f443473edac17fb58b7511470487b1496c0c8
            </div>
          </div>
        </div>
       

<<<<<<< HEAD
=======

>>>>>>> b68f443473edac17fb58b7511470487b1496c0c8
  @include('shared.information')
@endsection