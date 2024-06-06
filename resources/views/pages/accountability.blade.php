@extends('layouts.app')

@section('content')

<section id="vision">
    <div class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white">
        <h1 class="text-sm md:text-3xl uppercase">Rendición de Cuentas</h1>
    </div>
    <div class="bg-gray-100">
        <div class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10">
            
            <div class="flex flex-col max-w-lg bg-white shadow-lg rounded-lg overflow-hidden mx-auto">
                <div class="overflow-x-auto p-6 bg-gray-100">
                    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">#</th>
                                <th class="py-3 px-4 text-left">Título</th>
                                <th class="py-3 px-4 text-left">Descripción</th>
                                <th class="py-3 px-4 text-left">Imagen</th>
                                <th class="py-3 px-4 text-left">Enlace</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach($accountability as $key => $record)
                            <tr class="border-t border-gray-200">
                                <td class="py-3 px-4">{{ $key + 1 }}</td>
                                <td class="py-3 px-4 font-bold text-2xl text-gray-900">{{ $record->title }}</td>
                                <td class="py-3 px-4 text-base">{!! $record->description !!}</td>
                                <td class="py-3 px-4">
                                    @if ($record->image)
                                    <img class="w-full h-auto rounded-md" src="{{ $record->image }}" alt="{{ $record->title }}">
                                    @endif
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex justify-end">
                                        <a href="{{ $record->url }}" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                                            <img src="/img/pdf.png" alt="PDF icon" class="w-6 h-6 mr-2">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            
       
    

@include('shared.information')

@endsection
