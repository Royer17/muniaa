@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Galería de Fotos</h1>
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>

            <div class="flex flex-col gap-4">
              <div>
                <h2 class="text-xl font-bold mb-4">Fotos</h2>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($notice_images as $notice)
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ $notice->foto }}" alt="">
                    </div>
                    @endforeach
                    
                </div>



              </div>
            </div>
          </div>
        </div>
      

  @include('shared.information')
@endsection