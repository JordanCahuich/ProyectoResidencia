@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">REGISTRAR CARGA ACADEMICA<hr></h2>
        <form class="forms-sample" method="post" action="/cargas" enctype="multipart/form-data">
            @csrf

            <div class="row"> <!--ROW INICIO -->
              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Grupo</label>
                <select name="grupo" class="form-control form-control-sm">
                    <option selected=>Seleccione</option>
                        <option>A</option>
                        <option>B</option>
                </select>
            </div>

     
            <div class="col-md-4">
              <label class="col-sm-12 col-form-label">Grado</label>
              <select name="grado" class="form-control form-control-sm">
                  <option selected=>Seleccione</option>
                      <option>1</option>
                      <option>2</option>
              </select>
          </div>
        

      
          <div class="col-md-4">
            <label class="col-sm-12 col-form-label">Nivel</label>
            <select name="nivel" class="form-control form-control-sm">
                <option selected=>Seleccione</option>
                    <option>Primaria</option>
                    <option>Preescolar</option>
            </select>
        </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Periodo</label>
                    <select name="periodo" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>20222023</option>
                            <option>20232024</option>
                    </select>
                </div>
              


                <div class="col-md-4">
                  <label class="col-sm-12 col-form-label">Docente</label>
                  <select name="docente" class="form-control form-control-sm">
                      <option selected=>Seleccione</option>
                          <option>Felipe Salgado</option>
                          <option>Omar Chab</option>
                  </select>
              </div>



              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Asignatura</label>
                <select name="asignatura" class="form-control form-control-sm">
                    <option selected=>Seleccione</option>
                        <option>Español</option>
                        <option>Matetmaticas</option>
                </select>
            </div>
        
           
            <div class="col-md-4">
              <label class="col-sm-12 col-form-label">Bimestre</label>
              <select name="bimestre" class="form-control form-control-sm">
                  <option selected=>Seleccione</option>
                      <option>1</option>
                      <option>2</option>
              </select>
          </div>


                        <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Alumnos</label>
                    <select name="alumnos" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>

                            @foreach ($Alumnos as $alumno)
                            <option>{{$alumno->nombre}}</option>
                            @endforeach
                    </select>
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
</div>

@endsection



<!--
<p>
<div style="text-align: center; ">
    <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar periodo</FONT>
    <form action="" method="post">
    <select name="cargas" id="cargas" onchange="this.form.submit()">
        <option value="">Seleccionar...</option>
        <option value="">20202021</option>
        <option value="">20212022</option>
        <option value="">20222023</option>
   
    
    </select> 
    </form>
</p>


<p>
    <div style="text-align: center; ">
        <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar nivel</FONT>
    <form action="" method="post">
    <select name="cargas" id="cargas" onchange="this.form.submit()">
        <option value="">Seleccionar...</option>
        <option value="">Nivel preescolar</option>
        <option value="">Nivel primaria</option>
        
    
    </select> 
    </form>

</p>


<p>
    <div style="text-align: center; ">
        <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar grado</FONT>
        <form action="" method="post">
        <select name="cargas" id="cargas" onchange="this.form.submit()">
            <option value="">Seleccionar...</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
        
        </select> 
        </form>


</p>

        <div style="text-align: center; ">
        <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar grupo</FONT>
            <form action="" method="post">
            <select name="cargas" id="cargas" onchange="this.form.submit()">
                <option value="">Seleccionar...</option>
                <option value="">A</option>
                <option value="">B</option>
                <option value="">C</option>
                <option value="">D</option>
                <option value="">E</option>
            
            </select> 
            </form>


     <p>
            <div style="text-align: center; ">
            <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar profesor</FONT>
                <form action="" method="post">
                <select name="cargas" id="cargas" onchange="this.form.submit()">
                    <option value="">Seleccionar...</option>
                    <option value="">Carlos Omar</option>
                    <option value="">Carlos Jimenez</option>
                    <option value="">Felipe Salgado</option>
              
                
                </select> 
                </form>   

    </p>


    <p>
                <div style="text-align: center; ">
            <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar asignatura</FONT>
                    <form action="" method="post">
                    <select name="cargas" id="cargas" onchange="this.form.submit()">
                        <option value="">Seleccionar...</option>
                        <option value="">Matetmaticas I</option>
                        <option value="">Español I</option>
                        <option value="">Etica I</option>
                        <option value="">Historia I</option>
                        <option value="">Fisica I</option>
                    
                    </select> 
                    </form>   
    </p>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mr-2 mb-3" style="background-color: #0059ff">Guardar</button>
                        
                    </div> 
                -->

