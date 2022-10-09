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
                <h5 class="card-title"><strong>Sexo:</strong> 
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
                <h5 class="card-title"><strong>Grado Escolar:</strong> 
                    {{ $alumno->grado_escolar }} 
                    <hr>
                </h5>
                
            
                <h5 class="card-title"><strong>Observeción:</strong> 
                    {{ $alumno->observ }} 
                    <hr>
                </h5>
                </div>
            </div>
            </div>

            <div class="col-md-6">
                @if(!empty($pagosCursoAlumno))
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active text-center">
                      RECIBOS DE PAGO DEL ALUMNO
                    </p> 
                    @foreach ($pagosCursoAlumno as $pago)
                        <p class="list-group-item list-group-item-action" style="display: flex; justify-content: space-between">
                            <span>
                                Aporte: {{ $pago->aporte }}  
                            </span>
                            <span class="text-center"> 
                                Fecha: {{ $pago->created_at->format('Y-m-d') }} 
                            </span>
                            <span>
                                <a href="/fotosPagos/{{ $pago->photo_pago }}" class="btn btn-info" target="_blank">ver recibo</a> 
                            </span>
                        </p>
                    @endforeach
                  </div>
                <p style="background-color: #f9f9f9; padding:10px 5px; color:#333; font-weight:bold;">
                    TOTAL APORTE: $ {{ $sumaPagoTotal }} de {{ $valorCurso }}
                </p>
                    @if ($sumaPagoTotal == $valorCurso)
                        <p style="background-color: #ccc; padding:10px 5px; color:green; font-weight:bold;">
                            El alumno ha cancelado todo el valor del curso.
                        </p>
                    @endif
                @else
                <h3 class="text-center font-weight-bold mt-5" style="color: crimson">
                     No existe ningún pago registrado 
                    </h3>
                @endif
            </div>
        </div>


            </div>
        </div>
    </div>
</div>

@endsection