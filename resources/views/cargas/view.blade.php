@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="h5 mb-4">DETALLES DE CARGAS<hr></h2>
            <form class="forms-sample" method="post" action="/cargas" enctype="multipart/form-data">
                @csrf


        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <p class="card-title"><strong>Grupo:</strong>
                     {{ $carga->grupos->letra }} 
                </p>


                <p class="card-title"><strong>Grado:</strong> 
                    {{ $carga->grados->numero}} 
                </p>


                <p class="card-title"><strong>Nivel:</strong> 
                    {{ $carga->niveles->nombre}} 
                </p>


                <p class="card-title"><strong>Periodo:</strong> 
                    {{ $carga->periodos->nombre }} 
                </p>
      

                <p class="card-title"><strong>Asignatura:</strong> 
                    {{ $carga->asignaturas->nombre }} 
                </p>


                <p class="card-title"><strong>Bimestre:</strong> 
                    {{ $carga->bimestres->numero }} 
                </p>


                <p class="card-title"><strong>Alumnos:</strong> 
                    {{ $carga->alumnos->nombre}} 
                </p>

                
                <div class="form-group float-right mt-3" style="float: right">
                   
                    <a href="/cargas"  class="btn btn-primary btn-fw mb-3">Regresar</a>
                </div>

                </div>
            </div>
            </div>

            
@endsection 