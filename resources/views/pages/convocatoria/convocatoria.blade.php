@extends('layouts.app')

@section('content')

<section id="vision">
    <div class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white">
        <h1 class="text-sm md:text-3xl uppercase">Convocatorias</h1>
    </div>
    <div class="bg-[#E9E9E9] py-6 md:py-10">
        <div class="container mx-auto flex flex-col md:flex-row gap-6 px-3 md:px-20">
            <div class="flex-1 bg-white shadow-md rounded-2xl p-4 md:p-6">
                <div class="mb-6">
                    <a href="#" class="text-blue-500 hover:underline font-bold">DESCARGAR FICHA CURRICULAR</a>
                </div>

                  <br><br>
                <div class="overflow-x-auto">
                  <table id="tabla_convoca" class="w-full bg-white border border-gray-300">
                      <thead>
                          <tr class="bg-gray-100 border-b">
                              <th class="text-left py-4 px-6">Nº</th>
                              <th class="text-left py-4 px-6">Descripción</th>
                              <th class="text-left py-4 px-6">Unidad</th>
                              <th class="text-left py-4 px-6">Fecha</th>
                              <th class="text-center py-4 px-6">Bases</th>
                              <th class="text-center py-4 px-6">Aptos</th>
                              <th class="text-center py-4 px-6">Resultados</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($query as $registro)
                              <tr class="border-b">
                                  <td class="py-4 px-6 border border-gray-300">{{ $loop->iteration }}</td>
                                  <td class="py-4 px-6 border border-gray-300">
                                      <dl>
                                          <dt>{{ $registro->referencia }}</dt>
                                          <dd>{{ $registro->unidad }}</dd>
                                          <dd class="text-orange-500">{{ $registro->fecha }}</dd>
                                      </dl>
                                  </td>
                                  <td class="py-4 px-6 border border-gray-300">
                                      @if ($registro->bases)
                                          <a target="_blank" href="{{ url($registro->bases) }}">
                                              <img class="w-6 h-6 inline" src="{{ url('img/pdf.png') }}" alt="PDF icon">
                                          </a>
                                      @endif
                                  </td>
                                  <td class="py-4 px-6 border border-gray-300">
                                      @if ($registro->aptos)
                                          <a target="_blank" href="{{ url('portaltransparencia/convocatoria/Aptos/'.$registro->aptos) }}">
                                              <img class="w-6 h-6 inline" src="{{ url('img/pdf.png') }}" alt="PDF icon">
                                          </a>
                                      @endif
                                  </td>
                                  <td class="py-4 px-6 border border-gray-300">
                                      @if ($registro->resultados)
                                          <a target="_blank" href="{{ url('portaltransparencia/convocatoria/Resultados/'.$registro->resultados) }}">
                                              <img class="w-6 h-6 inline" src="{{ url('img/pdf.png') }}" alt="PDF icon">
                                          </a>
                                      @endif
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
              
              
            </div>
        </div>
   


@include('shared.information2')
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="/js/convocatoria.js"></script>
@endsection
