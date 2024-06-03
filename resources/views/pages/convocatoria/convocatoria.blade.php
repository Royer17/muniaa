@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Convocatorias</h1>
    
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">

    <div class="container-lg">

        <div class="row as">
      

        <div class="article pull-left">
       
            <div class="article-title">
            <a href="#">DESCARGAR FICHA CURRICULAR</a>
            </div>
        </div>
        <br>
        </div>

        <?php $i=1; ?>
        <div class="row ">
        <!-- contenido -->

        <!--  table -->
        <table id="tabla_convoca" class="table table-bordered" cellspacing="0" style="width:100%">
        <thead>
        <tr>
        <th>Nº</th>
        <th>Descripcion</th>
        <th>Unidad</th>
        <th>Fecha</th>
        <th>Bases</th>
        <th>Aptos</th>
        <th>Resultados</th>
        

        </tr>
        </thead>

        <tbody>
        <?php foreach ($query as $registro): ?>
        <tr>
        <td>
        <?= $i ?>
        </td>
        <td>
        <dl>
        <dt><?= $registro->referencia ?> </dt>
        <dd><?= $registro->unidad ?></dd>
        <dd class="c-orange"><?= $registro->fecha ?></dd>
        </dl>
        </td>
        <td>
        <?php if ($registro->bases): ?>
        {{-- portaltransparencia/convocatoria/Bases/ --}}
        <a target="_blank" href="<?= url($registro->bases); ?>" >
        <img class="img-responsive" src="<?= url('img/pdf.png') ?>" width="50px">
        </a>
        <!--<?php if ($i==1): ?>-->
        <!--    <dd class="c-orange"><a target="_blank" href="<?= url('portaltransparencia/convocatoria/Comunicado/COMUNICADO.pdf'); ?>">COMUNICADO</a></dd>-->
        <!--<?php endif ?>-->
        <!--<?php if ($i==2): ?>-->
        <!--    <dd class="c-orange"><a target="_blank" href="<?= url('portaltransparencia/convocatoria/Comunicado/COMUNICADO.pdf'); ?>">COMUNICADO</a></dd>-->
        <!--<?php endif ?>-->
        <?php endif ?>
        </td>
        <td>
        <?php if ($registro->aptos): ?>
        <a target="_blank" href="<?= url('portaltransparencia/convocatoria/Aptos/'.$registro->aptos); ?>">
        <img class="img-responsive" src="<?= url('img/pdf.png') ?>" width="50px">
        </a>
        <?php endif ?>
        </td>
        <td>
        <?php if ($registro->resultados): ?>
        <a target="_blank" href="<?= url('portaltransparencia/convocatoria/Resultados/'.$registro->resultados); ?>">
        <img class="img-responsive" src="<?= url('img/pdf.png') ?>" width="50px">
        </a>
        <?php endif ?>
        </td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <?php $i++ ?>

        <?php endforeach; ?>

        </tbody>


        </table>



        <br>



        </div>

        <div class="row as">

        </div>


        
        
    </div>




        </div>

     


@include('shared.information')
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="/js/convocatoria.js"></script>
@endsection