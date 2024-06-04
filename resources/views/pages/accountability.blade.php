@extends('layouts.app')

@section('content')

<section id="vision">
    <div class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white">
        <h1 class="text-sm md:text-3xl uppercase">Rendición de Cuentas</h1>
    </div>
    <div class="bg-gray-100">
        <div class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10">
            
            <div class="flex-1 max-w-lg bg-white shadow-md rounded-lg overflow-hidden">
              @foreach($accountability as $record)
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $record->title }}</div>
                    @if ($record->image)
                    <img class="mb-4" src="{{ $record->image }}" alt="{{ $record->title }}">
                    @endif
                    <p class="text-gray-700 text-base">{!! $record->description !!}</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="{{ $record->url }}" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enlace</a>
                </div>
                @endforeach
            </div>
            
       
    

@include('shared.information')

@endsection
