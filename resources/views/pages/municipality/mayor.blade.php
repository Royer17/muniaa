@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
  .hover\:bg-indigo-700:hover {
      background-color: rgb(6 58 98/var(--tw-bg-opacity));
  }
  </style>
<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Alcalde</h1>
    
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">

          <section class="md:h-full flex text-gray-600">
            <div class="container px-5 py-5 mx-auto">
                <div class="text-center mb-12">
                    <h5 class="text-base md:text-lg text-indigo-700 mb-1"> {!! $setting->mayor !!}</h5>
                    <h1 class="text-4xl md:text-4xl text-gray-700 font-semibold">Alcalde</h1>
                </div>
                <div class="flex flex-wrap -m-4">
  
               
                    
                    <div class="p-4 sm:w-1/2 lg:w-3/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-72 md:h-72 w-full object-cover object-center"
                            
                                src="{{ $setting->photo }}" alt="blog">

                                <br>
                                <p class="leading-relaxed mb-3"> {!! $setting->description !!}</p>
                        </div>
                        
                    </div>
                    
                   
                  
                 
                </div>
            </div>
        </section>

        </div>

@include('shared.information')
@endsection

