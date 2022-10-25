<html>
<body>
<head>

  <style type ="text/css">

.alum{
 
  color: rgb(57, 70, 243);
  text-align:center;
}

  </style>
</head>

@section('content')

@extends('layouts.app')

<div class="container" style="margin: 20px auto">
    <h2>Historial de cargas</h2>

    </div>
    <form class="form-inline row">
        <input  name="Nombre" class="form-control mr-sm-2" style="width: 150px; height: 25px;" type="search" placeholder="nombre" aria-label="Search">

        <input  name="Matricula" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Matricula" aria-label="Search">
        <input  name="Grado" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Grado" aria-label="Search">
        <input  name="Grupo" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Grupo" aria-label="Search">
        <input  name="Periodo" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Periodo" aria-label="Search">
        <input  name="Nivel" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Nivel" aria-label="Search">
        <input  name="Asignatura" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Asignatura" aria-label="Search">
        <input  name="Maestro" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Maestro" aria-label="Search">
        <div class="col-md-2">

        <button class="btn btn-success" type="submit" >Search</button>
        
        </div>
        <a href="/carga/index" class="btn btn-secondary">
            Registar 
        </a>
    <div class="row float-right" style="margin: 0px 40px;"> 
       
    </div> 
    </form>
   
<table class="default" style="margin: 20px auto"  border=2 width="250" height="80";>

<tr class="alum">
  <th>Alumno</th>
</tr>
<tr>
  <td>zaira</td>
</tr>

<table class="default" style="margin: 20px auto"  border=2 width="250" height="80"  text-align: center;>
<tr >
  <th>Periodo</th>
  <th>Nivel</th>
  <th>Grado</th>
  <th>Grupo</th>
</tr>
<tr>
  <td>20212022</td>
  <td>Primaria</td>
  <td>1</td>
  <td>C</td>
</tr>

<table class="default" style="margin: 20px auto"  border=2 width="250" height="80";>

  <tr>
    <th>Asignatura</th>
    <th>Maestro</th>
  </tr>
  <tr>
    <td>Matetmaticas I</td>
    <td>Carlos Omar</td>
  </tr>
</table>

</div>
@endsection
</body>
</html>