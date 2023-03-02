@extends('layouts.app')

@section('content')
<div class="container">
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Sección Alumnos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detalles Alumnos</li>
        </ol>
    </nav>




<div class="row justify-content-center">

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="h5 mb-4">DETALLES DEL ALUMNO<hr></h2>
        <form class="forms-sample" method="post" action="/cargas" enctype="multipart/form-data">
            @csrf



        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
                
              
                <p class="text-gray mb-4"><strong>Nombre:
                    {{ $alumno->nombre }} 
                </p> 
                
                <p class="text-gray mb-4"><strong>Primer Apellido:
                    {{ $alumno->primer_apellido }} 
                </p> 

                <p class="text-gray mb-4"><strong>Segundo Apellido:
                    {{ $alumno->segundo_apellido}} 
                </p>

                <p class="text-gray mb-4"><strong>Genero:
                    {{ $alumno->sexo }} 
                </p>

                <p class="text-gray mb-4"><strong>Fecha Nacimiento:
                    {{ $alumno->fecha_nacimiento  }} 
                </p>

                <p class="text-gray mb-4"><strong>CURP:
                    {{ $alumno->curp  }} 
                </p>

                <p class="text-gray mb-4"><strong>Edad:
                    {{ $alumno->edad  }} 
                </p>

                <p class="text-gray mb-4"><strong>Tipo Sangre:
                    {{ $alumno->tipo_sangre }} 
                </p>

                <p class="text-gray mb-4"><strong>Nivel Escolar:
                    {{ $alumno->nivel_escolar}} 
                </p>

                <p class="text-gray mb-4"><strong>Grado:
                    {{ $alumno->grado }} 
                </p>

                <p class="text-gray mb-4"><strong>Grupo:
                    {{ $alumno->grupo }} 
                </p>

                <p class="text-gray mb-4"><strong>Periodo escolar:
                    {{ $alumno->periodo_escolar}} 
                </p>
                
                <p class="text-gray mb-4"><strong>Nombre Tutor:
                    {{ $alumno->nombre_tutor}} 
                </p>
               
                <p class="text-gray mb-4"><strong>Parentesco:
                    {{ $alumno->parentesco}} 
                </p>

                <p class="text-gray mb-4"><strong>Tutor principal:
                    {{ $alumno->tutor_principal}} 
                </p>

                <p class="text-gray mb-4"><strong>Dirección:
                    {{ $alumno->direccion}} 
                </p>

                <p class="text-gray mb-4"><strong>Colonia:
                    {{ $alumno->colonia}} 
                </p>

                
                <p class="text-gray mb-4"><strong>Teléfono contacto:
                    {{ $alumno->telefono_contacto}} 
                </p>

                <p class="text-gray mb-4"><strong>En caso de emergencia hablar a:
                    {{ $alumno->nombre_emergencia}} 
                </p>

                <p class="text-gray mb-4"><strong>Parentesco:
                    {{ $alumno->parentesco2}} 
                </p>

               

                <p class="text-gray mb-4"><strong>Tel. 1 Autorizada:
                    {{ $alumno->tel1_autorizada}} 
                </p>

               

                
            
               
                </div>
            </div>
        </div>

            
@endsection

