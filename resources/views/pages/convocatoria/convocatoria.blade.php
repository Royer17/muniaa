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
                    <a href="https://munialtoalianza.gob.pe/web/resources/fotoContenido/293_3419_17012023_FORMATOS%20CAS.pdf" target="_blank" class="text-blue-500 hover:underline font-bold">DESCARGAR FORMATO CAS</a>
                </div>

                  <br><br>
                  <div class="overflow-x-auto">
                    <table id="tabla_convoca" class="stripe w-full bg-white rounded-lg overflow-hidden shadow-md border border-gray-300">
                        <!-- Cabecera de la tabla -->
                        <thead class="bg-gray-100 border-b border-gray-300">
                            <tr>
                                <th class="px-4 py-2">Nº</th>
                                <th class="px-4 py-2">Descripción</th>
                                <th class="px-4 py-2">Unidad</th>
                                <th class="px-4 py-2">Fecha</th>
                                <th class="px-4 py-2 text-center">Bases</th>
                                <th class="px-4 py-2 text-center">Aptos</th>
                                <th class="px-4 py-2 text-center">Resultados</th>
                            </tr>
                        </thead>
                        <!-- Cuerpo de la tabla -->
                        <tbody>
                            <!-- Contenido de la tabla -->
                        </tbody>
                    </table>
                </div>
                
                @push('scripts')
                <script>
                    $(document).ready(function () {
                        $('#tabla_convoca').DataTable({
                            "pagingType": "simple_numbers", // Usar paginación simple
                            "language": {
                                "paginate": {
                                    "next": "&rarr;", // Personalizar botón de siguiente
                                    "previous": "&larr;" // Personalizar botón de anterior
                                }
                            }
                        });
                    });
                </script>
                @endpush
                
   
       

@section('scripts')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="/js/convocatoria.js"></script>
@endsection

@include('shared.information2')
@endsection
