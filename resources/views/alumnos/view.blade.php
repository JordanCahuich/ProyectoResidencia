@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                <a href="/alumno" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                DETALLES DEL ALUMNO<hr>
            </h2>

        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
                
                <div class="card-body">
                <h6 class="card-title"><strong>Nombre:</strong>
                     {{ $alumno->nombre }} <hr>
                </h6>
                <h5 class="card-title"><strong>Primer Apellido:</strong> 
                    {{ $alumno->primer_apellido }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Segundo Apellido:</strong> 
                    {{ $alumno->segundo_apellido }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Genero:</strong> 
                    {{ $alumno->sexo }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Fecha Nacimiento:</strong> 
                    {{ $alumno->fecha_nacimiento }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>CURP:</strong> 
                    {{ $alumno->curp }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Edad:</strong> 
                    {{ $alumno->edad }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Tipo Sangre:</strong> 
                    {{ $alumno->tipo_sangre }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Nivel Escolar:</strong> 
                    {{ $alumno->nivel_escolar }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Grado:</strong> 
                    {{ $alumno->grado }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Grupo:</strong> 
                    {{ $alumno->grupo }} 
                    <hr>
                </h5>
                
            
                <h5 class="card-title"><strong>Observeción:</strong> 
                    {{ $alumno->observ }} 
                    <hr>
                </h5>
                </div>
            </div>
            </div>

            
@endsection