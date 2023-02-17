@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <FONT FACE="century gothic" SIZE=4 COLOR="#212121">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">REGISTRAR HORARIO<hr></h2>
        <form class="forms-sample" method="post" action="/horarios" enctype="multipart/form-data">
            @csrf

            <div class="row"> <!--ROW INICIO -->
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Grupo</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Aula</label>
                    <div class="col-sm-12">
                      <input type="text" name="aula" class="form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Dia</label>
                    <div class="col-sm-12">
                      <input type="text" name="dia" class="form-control" />
                    </div>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Hora</label>
                    <div class="col-sm-12">
                      <input type="time" name="hora" class="form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Asignatura</label>
                    <div class="col-sm-12">
                      <input type="text" name="asignatura" class="form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Docente</label>
                    <div class="col-sm-12">
                      <input type="text" name="profesor" class="form-control" />
                    </div>
                </div>
            <!--    <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Asignatura</label>
                    <select name="genero" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Docente</label>
                    <select name="genero" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div> -->
              
              
            </div> <!--ROW FIN-->
             
          
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3" style="background-color: 	#8cf064">Registrar</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3" style="background-color: 	#f75e5e">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
    </FONT>
</div>

@endsection