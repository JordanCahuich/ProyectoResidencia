@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
  <FONT FACE="century gothic" SIZE=4 COLOR="#212121">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">REGISTRAR DOCENTE<hr></h2>
        <form class="forms-sample" method="post" action="/profes" enctype="multipart/form-data">
            @csrf

            <div class="row"> <!--ROW INICIO -->
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre completo</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Fecha de nacimiento</label>
                    <div class="col-sm-12">
                      <input type="date" name="fecha_nacimiento" class="form-control" />
                    </div>
                </div>

        

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Edad</label>
                    <div class="col-sm-12">
                      <input type="number" name="edad" class="form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Genero</label>
                    <select name="genero" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div>
              


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Correo electronico</label>
                    <div class="col-sm-12">
                      <input type="text" name="email" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Telefono</label>
                    <div class="col-sm-12">
                      <input type="tel" name="telefono" class="form-control" />
                    </div>
                </div>
        
           
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Localidad</label>
                    <div class="col-sm-12">
                      <input type="text" name="localidad" class="form-control"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Domicilio</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio" class="form-control" />
                    </div>
                </div>


        

              
            </div> <!--ROW FIN-->
             
          
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3" style="background-color: 	#8cf064">Registrar Docente</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3" style="background-color: 	#f75e5e">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</FONT>
</div>

@endsection