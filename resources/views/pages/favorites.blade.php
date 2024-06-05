@extends('layouts.app')

@section('content')

<section id="vision">
    <div class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white">
        <h1 class="text-sm md:text-3xl uppercase">{{ $document['title'] }}</h1>
    </div>
    <div class="bg-[#E9E9E9] py-6 md:py-10">
        <div class="container mx-auto flex flex-col md:flex-row gap-6 px-3 md:px-20">
            <div class="flex-1 bg-white shadow-md rounded-2xl p-4 md:p-6">
                <div>

                    @if(isset($document['external_image']))
                        <img class="w-full mb-5 max-h-[40rem] object-cover rounded-xl" src="{{ $document['external_image'] }}" alt="External image">
                    @endif
                    <div class="flex flex-col gap-4">
                        <div>
                            <h2 class="text-xl font-bold mb-4">{{ $document['title'] }}</h2>
                            <p class="text-sm md:text-base">
                                {!! $document['description'] !!}
                            </p>
                        </div>
                        @if(count($files))
                            <div>
                                <h2 class="text-xl font-bold mb-4">Archivos relacionados</h2>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-white border border-gray-200">
                                        <thead>
                                            <tr class="bg-gray-100 border-b">
                                                <th class="text-left p-4">#</th>
                                                <th class="text-left p-4">Title</th>
                                                <th class="text-left p-4">Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($files as $key => $file)
                                                <tr class="border-b">
                                                    <td class="p-4">{{ $key + 1 }}</td>
                                                    <td class="p-4 flex items-center">
                                                        @if(pathinfo($file['url'], PATHINFO_EXTENSION) === 'pdf')
                                                            <img src="/img/pdf.svg" alt="PDF icon" class="w-6 h-6 mr-2">
                                                        @endif
                                                        {{ $file['title'] }}
                                                    </td>
                                                    <td class="p-4">
                                                        <a href="{{ $file['url'] }}" target="_blank" class="text-blue-500 hover:underline"> <img src="/img/pdf.svg" alt="PDF icon" class="w-6 h-6 mr-2"> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
       
  

@include('shared.information') 
@endsection
