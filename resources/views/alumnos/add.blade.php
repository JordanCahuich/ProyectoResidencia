@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">REGISTRAR NUEVO ALUMNO <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('alumno.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre (S)</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Apellido paterno</label>
                    <div class="col-sm-12">
                      <input type="text" name="primer_apellido" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Apellido materno</label>
                    <div class="col-sm-12">
                      <input type="text" name="segundo_apellido" class="form-control" />
                    </div>
                </div>
              

              <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Genero</label>
                    <select name="sexo" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Fecha Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="text" name="fecha_nacimiento" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">CURP</label>
                    <div class="col-sm-12">
                      <input type="text" name="curp" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Edad</label>
                    <div class="col-sm-12">
                      <input type="number" name="edad" class="form-control" required />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tipo de sangre</label>
                    <select name="tipo_sangre" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                    </select>
                </div>



                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Nivel escolar </label>
                    <select name="nivel_escolar" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Primaria</option>
                            <option>Prescolar</option>
                    </select>
                </div>

            <div class="row">
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Grado</label>
                    <div class="col-sm-12">
                      <input type="number" name="grado" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Grupo</label>
                    <div class="col-sm-12">
                      <input type="text" name="grupo" class="form-control"/>
                    </div>
                </div>
               
            



        

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Foto del Alumno</label>
                    <div class="col-sm-9">
                      <input type="file" name="foto_estudiante" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Observación</label>
                    <textarea name="observ" class="form-control" rows="4" cols="50"></textarea>
                </div>
            </div>
             
          
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Registrar Alumno</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection