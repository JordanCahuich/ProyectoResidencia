@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="h5 mb-4">DETALLES DOCENTES<hr></h2>
          
        


        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <p class="card-title"><strong>Nombre completo:</strong>
                     {{ $profesores->nombre}} 
                </p>


                <p class="card-title"><strong>Fecha de nacimiento:</strong> 
                    {{ $profesores->fecha_nacimiento}} 
                </p>


                <p class="card-title"><strong>Edad:</strong> 
                    {{ $profesores->edad}} 
                </p>


                <p class="card-title"><strong>Genero:</strong> 
                    {{ $profesores->genero }} 
                </p>


                <p class="card-title"><strong>Nivel Academico:</strong> 
                    {{ $profesores->nivelacademico }} 
                </p>


                <p class="card-title"><strong>Correo electronico:</strong> 
                    {{ $profesores->email }} 
                </p>


                <p class="card-title"><strong>Telefono:</strong> 
                    {{ $profesores->telefono }} 
                </p>


                <p class="card-title"><strong>Localidad:</strong> 
                    {{ $profesores->localidad}} 
                </p>


                <p class="card-title"><strong>Domicilio:</strong> 
                    {{ $profesores->domicilio}} 
                </p>
                

                <p class="card-title"><strong>Tipo:</strong> 
                    {{ $profesores->tipo_profesor}} 
                </p>

                @if ( $profesores->foto_profesor !=NULL )
                <img class="card-img-top imgs" src="/fotosProfesor/{{ $profesores->foto_profesor }}" alt="Foto-Profesor" style="width:400px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/vacia.png') }}" alt="Foto-Profesor" style="width:400px; margin: 0 auto;">   
                @endif

                
                <div class="form-group float-right mt-3" style="float: right">
                    <a href="/profes"  class="btn btn-primary btn-fw mb-3">Regresar</a>
                </div>

                </div>
            </div>
        </div>

            
@endsection 