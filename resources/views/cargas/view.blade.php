@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                <a href="/carga/7" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                DETALLES DEL DOCENTE<hr>
            </h2>

        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <h6 class="card-title"><strong>Grupo:</strong>
                     {{ $carga->grupo }} <hr>
                </h6>
                <h5 class="card-title"><strong>Grado:</strong> 
                    {{ $carga->grado}} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Nivel:</strong> 
                    {{ $carga->nivel}} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Periodo:</strong> 
                    {{ $carga->periodo }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Docente:</strong> 
                    {{ $carga->docente }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Asignatura:</strong> 
                    {{ $carga->asignatura_id }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Bimestre:</strong> 
                    {{ $carga->bimestre }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Alumnos:</strong> 
                    {{ $carga->alumno}} 
                    <hr>
                </h5>

                
            
                </div>
            </div>
            </div>

            
@endsection