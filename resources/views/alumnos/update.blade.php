@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">ACTUALIZAR DATOS DEL ALUMNO <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('alumno.update', $alumno->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <div class="col-md-2">
                  <label for="exampleInputUsername1" style="text-align: center;">Foto actual</label>
                  <br>
                  @if ($alumno->foto_estudiante !=NULL)
                      <img src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="foto profe" style="max-width: 100px; margin: 0 auto;">
                  @else
                      <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:100px; margin: 0 auto;">
                  @endif
                  
              </div>
              <div class="col-md-2">
                  <label for="exampleInputUsername1">Cambiar Foto</label>
                  <input type="file" name="foto_estudiante" class="form-control">
              </div>

            <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre(s)</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre }}" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Apellido paterno</label>
                    <div class="col-sm-12">
                      <input type="text" name="primer_apellido" class="form-control" value="{{ $alumno->primer_apellido }}" />
                    </div>
                </div>
                <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Apellido materno</label>
                  <div class="col-sm-12">
                    <input type="text" name="segundo_apellido" class="form-control" value="{{ $alumno->segundo_apellido}}"/>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Genero</label>
                  <div class="col-sm-12">
                    <input type="text" name="sexo" class="form-control"  value="{{ $alumno->sexo}}"/>
                  </div>
              </div>
              <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Fecha Nacimiento</label>
                  <div class="col-sm-12">
                    <input type="text" name="fecha_nacimiento" class="form-control" value="{{ $alumno->fecha_nacimiento}}"/>
                  </div>
              </div>
              <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">CURP</label>
                  <div class="col-sm-12">
                    <input type="text" name="curp" class="form-control"  value="{{ $alumno->curp }}"/>
                  </div>
              </div>
          </div>

            <div class="row">
              <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Edad</label>
                <div class="col-sm-12">
                  <input type="text" name="edad" class="form-control" value="{{ $alumno->edad }}"/>
                </div>
            </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Tipo de sangre</label>
                    <div class="col-sm-12">
                      <input type="text" name="tipo_sangre" class="form-control" value="{{ $alumno->tipo_sangre }}"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nivel escolar</label>
                    <div class="col-sm-12">
                      <input type="text" name="nivel_escolar" class="form-control" value="{{ $alumno->nivel_escolar}}"/>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Grado</label>
                <div class="col-sm-12">
                  <input type="text" name="grado" class="form-control" value="{{ $alumno->grado }}"/>
                </div>
              </div>
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Grupo</label>
                    <div class="col-sm-12">
                      <input type="text" name="grupo" class="form-control" value="{{ $alumno->grupo }}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Periodo escolar</label>
                    <div class="col-sm-12">
                      <input type="text" name="periodo_escolar" class="form-control" value="{{ $alumno->periodo_escolar }}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Domcilio</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio" class="form-control" value="{{ $alumno->domicilio }}"/>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">En caso de emergencia hablar a:</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre_emergencia" class="form-control" value="{{ $alumno->nombre_emergencia}}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. Emergencia</label>
                    <div class="col-sm-12">
                      <input type="text" name="tel_emergencia" class="form-control" value="{{ $alumno->tel_emergencia}}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Persona autorizada</label>
                    <div class="col-sm-12">
                      <input type="text" name="persona_autorizada" class="form-control" value="{{ $alumno->persona_autorizada}}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Parentesco</label>
                    <div class="col-sm-12">
                      <input type="text" name="parentesco" class="form-control" value="{{ $alumno->parentesco}}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. 1 Autorizada</label>
                    <div class="col-sm-12">
                      <input type="text" name="tel1_autorizada" class="form-control" value="{{ $alumno->tel1_autorizada}}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tel. 2 Autorizada</label>
                    <div class="col-sm-12">
                      <input type="text" name="tel2_autorizada" class="form-control" value="{{ $alumno->tel2_autorizada}}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Domicilio persona autorizada</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio_autorizada" class="form-control" value="{{ $alumno->domicilio_autorizada}}"/>
                    </div>
                </div>


                
              
              <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Observación</label>
                <textarea name="observ" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>

            <div class="form-group text-center mt-5 mb-3">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Actualizar datos del  Alumno</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection