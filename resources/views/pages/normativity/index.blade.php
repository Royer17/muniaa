@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Normatividad</h1>
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>

            Filtrar por disposición
            <select id="tipodocu">
              <option value="">Todas</option>
              @foreach($document_types as $document)
                <option value="{{ $document->id }}">{{ $document->name }}</option>
              @endforeach
            </select>

            <input type="hidden" name="" value="" id="tipodocu">
            <div class="row ">
            <!-- contenido -->

            <!--  table -->
            <table id="tabla_resolutions" class="table table-bordered" cellspacing="0" style="width:100%">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th width="150px">Número de documento</th>
                        <th>Resumen</th>
                        <th>Tipo de documento</th>
                        <th>Fecha</th>
                        <th>Enlace</th>
                        <th>Imagen</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

          </div>
        </div>
      </div>
  


@include('shared.information')
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        datatableNormatividad();

        function datatableNormatividad()
        {
            $postsTable = $('#tabla_resolutions').DataTable({
                "dom": 'flrtip',
                "language": {
                    "url": "/admin/panel/datatable.spanish.json"
                },
                order: [
                    [3, 'desc']
                ],
                processing: true,
                serverSide: true,
                destroy:true,
                ajax: `/normatividad/resolutions-datatable?tipodocu=${document.querySelector('#tipodocu').value}`,
                columns: [
                    {data:'idnor', name: 'normas.idnor', searchable: false},
                    {data:'numdoc', name: 'normas.numdoc', searchable: true},
                    {data:'referenc', name: 'normas.referenc', searchable: true},
                    {data:'tipodocu', name: 'document_types.name', searchable: true},
                    {data:'fechaemi', name: 'normas.fechaemi', searchable: false},
                    {data:'nomfile', name: 'normas.nomfile', searchable: false},
                    {data:'fecha_formatted'},

                ],
                "aoColumnDefs": [
                    {
                        "bVisible": false,
                         "aTargets": [0, 6]
                    },
                    {
                          "aTargets": [ 5 ],
                          "mData": "nomfile",
                          "mRender": function ( data, type, full ) {

                            if (full['nomfile']) {

                              return `
                                <a target="_blank" href="${full['nomfile']}">
                                  <img class="img-responsive" src="/img/pdf.png" width="50px">
                                </a>

                              `;
                            }
                            return "";
                          }
                    },
                    {
                          "aTargets": [ 4 ],
                          "mData": "fechaemi",
                          "mRender": function ( data, type, full ) {
                              return full['fecha_formatted'];
                          }
                    },
                ]
            });
        }

        document.querySelector('#tipodocu')
          .addEventListener('change', () => {
            datatableNormatividad();
          });

    </script>
@endsection