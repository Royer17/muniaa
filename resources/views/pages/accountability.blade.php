@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase"> Rendición de Cuentas </h1>
    
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>
<!--             <img
              class="w-full mb-5 max-h-[40rem]"
              src="https://picsum.photos/1200/600"
            /> -->
            <div class="flex flex-col gap-4">
                
              @foreach($accountability as $record)
                <label>{{ $record->title }}</label>
                <img class="w-full mb-5 max-h-[40rem]" src="{{ $record->image }}"/>
                <img class="w-full mb-5 max-h-[40rem]" src="{{ $record->external_image }}"/>
                <p>{!!  $record->description !!}</p>
                <a href="{{  $record->url }}" target="_blank">Enlace</a>
                <hr>


              @endforeach
            </div>
          </div>
        </div>
        

@include('shared.information')
@endsection