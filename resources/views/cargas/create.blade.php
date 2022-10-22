<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>carga academica</title>

<style type ="text/css">
    
    .boton{
        text-decoration:none;
    font-weight: 300;
    font-size: 15px;
    color:#333333;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:10px;
    padding-right:10px;
    background-color:#8cf064;
    border-color: #d8d8d8;
    border-width: 3px;
    border-style: solid;
    border-radius:20px;
    }

     .boton:hover{
        
        background:rgb(92, 92, 90);
        color:white;
     }
  
     .boton2{
        text-decoration:none;
    font-weight: 300;
    font-size: 15px;
    color:#333333;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:10px;
    padding-right:10px;
    background-color:#f75e5e;
    border-color: #d8d8d8;
    border-width: 3px;
    border-style: solid;
    border-radius:20px;
    }

     .boton2:hover{
        
      background:rgb(92, 92, 90);
        color:white;
     }

     .boton3{
        text-decoration:none;
    font-weight: 300;
    font-size: 15px;
    color:#333333;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:10px;
    padding-right:10px;
    background-color:#66d1fc;
    border-color: #d8d8d8;
    border-width: 3px;
    border-style: solid;
    border-radius:20px;
    }

     .boton3:hover{
        
      background:rgb(92, 92, 90);
        color:white;
     }


   .form-label{
 
  color: rgb(57, 70, 243);
}

    .cuerpo{
 
    text-align:center;
}

.forma{
 
 text-align:left;
}

  </style>
   

</head>
<body >

  
@extends('layouts.app')
@section('content')

 
<img src="{{ asset('images/logotjp.png') }}" alt="profile" width="50"
height="50" />

<form class= "cuerpo"  action="" method="post">
 <p> 
  <FONT FACE="century gothic" SIZE=4 COLOR="#212121">
<h5>ASIGNACION DE CARGA ACADEMICA POR ALUMNO</h5>
  </FONT>
 </p>
 <hr>
 <FONT FACE="century gothic" SIZE=4 COLOR="#056daa">

 <div>
  
        
   
    <label for="validationCustom04" class="form-label" >Seleccionar alumno</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="" >Seleccionar...</option>
      @foreach ($Alumnos as $alumno)
      <option>{{$alumno->nombre}}</option>
      @endforeach
     
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
</div>




 <hr>

 <p>

    <div>
        <label for="validationCustom04" class="form-label" >Seleccinar periodo escolar</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="" >Seleccionar...</option>
          <option >20202021</option>
          <option >20212022</option>
          <option >20222023</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>
    

 </p>

 <p>

    <div>
        <label for="validationCustom04" class="form-label" >Seleccinar nivel escolar</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="" >Seleccionar...</option>
          <option >Preescolar</option>
          <option >Primaria</option>
         
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>

</p>

<p>
    <div>
        <label for="validationCustom04" class="form-label" >Seleccinar grado</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="" >Seleccionar...</option>
          <option >1</option>
          <option >2</option>
          <option >3</option>
          <option >4</option>
          <option >5</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>
<div>


</p>

<p>
<div>
  <div>
    <label for="validationCustom04" class="form-label" >Seleccinar grupo</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="" >Seleccionar...</option>
      <option >A</option>
      <option >B</option>
      <option >C</option>
      <option >D</option>
      <option >E</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
</div>
<div>
</p>
           
<hr>

<div class="forma">
    <label for="validationCustom05" class="form-label" >Seleccionar asignatura</label>
    <select class="form-select" id="validationCustom05" required>
      <option selected disabled value="" >Seleccionar...</option>
      <option>Matetmaticas I</option>
      <option>Español I</option>
      <option>Etica I</option>
      <option>Historia I</option>
      <option>Fisica I</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>

  <label for="validationCustom05" class="form-label" >Seleccionar maestro</label>
  <select class="form-select" id="validationCustom05" required>
    <option selected disabled value="" >Seleccionar...</option>
    <option>Carlos Omar</option>
    <option>Carlos Jimenez</option>
    <option>Felipe Salgado</option>
  </select>
  <div class="invalid-feedback">
    Please select a valid state.
  </div>
</div>

<div class="forma">
  <label for="validationCustom05" class="form-label" >Seleccionar asignatura</label>
  <select class="form-select" id="validationCustom05" required>
    <option selected disabled value="" >Seleccionar...</option>
    <option>Matetmaticas I</option>
    <option>Español I</option>
    <option>Etica I</option>
    <option>Historia I</option>
    <option>Fisica I</option>
  </select>
<div class="invalid-feedback">
    Please select a valid state.
</div>

<label for="validationCustom05" class="form-label" >Seleccionar maestro</label>
<select class="form-select" id="validationCustom05" required>
  <option selected disabled value="" >Seleccionar...</option>
  <option>Carlos Omar</option>
  <option>Carlos Jimenez</option>
  <option>Felipe Salgado</option>
</select>
<div class="invalid-feedback">
  Please select a valid state.
</div>
</div>

<div class="forma">
  <label for="validationCustom05" class="form-label" >Seleccionar asignatura</label>
  <select class="form-select" id="validationCustom05" required>
    <option selected disabled value="" >Seleccionar...</option>
    <option>Matetmaticas I</option>
    <option>Español I</option>
    <option>Etica I</option>
    <option>Historia I</option>
    <option>Fisica I</option>
  </select>
<div class="invalid-feedback">
    Please select a valid state.
</div>

<label for="validationCustom05" class="form-label" >Seleccionar maestro</label>
<select class="form-select" id="validationCustom05" required>
  <option selected disabled value="" >Seleccionar...</option>
  <option>Carlos Omar</option>
  <option>Carlos Jimenez</option>
  <option>Felipe Salgado</option>
</select>
<div class="invalid-feedback">
  Please select a valid state.
</div>
</div>


<div class="forma">
  <label for="validationCustom05" class="form-label" >Seleccionar asignatura</label>
  <select class="form-select" id="validationCustom05" required>
    <option selected disabled value="" >Seleccionar...</option>
    <option>...</option>
    <option>Matetmaticas I</option>
    <option>Español I</option>
    <option>Etica I</option>
    <option>Historia I</option>
    <option>Fisica I</option>
  </select>
<div class="invalid-feedback">
    Please select a valid state.
</div>

<label for="validationCustom05" class="form-label" >Seleccionar maestro</label>
<select class="form-select" id="validationCustom05" required>
  <option selected disabled value="" >Seleccionar...</option>
  <option>Carlos Omar</option>
  <option>Carlos Jimenez</option>
  <option>Felipe Salgado</option>
</select>
<div class="invalid-feedback">
  Please select a valid state.
</div>
</div>


</p>

<hr>
<div class="form-group text-center">
    <button type="submit" class="boton" >Guardar</button>
    <button type="reset" class="boton3" >Borrar</button>
    <button type="submit" class="boton2" >Cancelar</button>
    
</div>

</FONT>
</form> 

<?php
if(isset($_POST["nombre_alumno"])){$cargas=$_POST["nombre_alumno"];
?>
<div style="padding:20px;"><?php echo "Has elegido el alumno: ".$cargas."";?></div>
<?php }?>
            

</body>
</html>         
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

