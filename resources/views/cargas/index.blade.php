<html>
<body>
<head>

  <style type ="text/css">

.default{
 
  color: rgb(29, 29, 31);
  text-align: center;
}

.alum, .perd, .asig{

 color: rgb(45, 45, 158);

}
  </style>
</head>

@section('content')

@extends('layouts.app')

<div class="container" style="margin: 20px auto">
    <h2>Z</h2>


   
<table class="default" style="margin: 20px auto"  border=2 width="250" height="80";>

<tr class="alum">
  
  <th>Alumno</th>
</tr>
<tr>
  <td>Zaira Natali Ceh Chable</td>
</tr>

<table class="default" style="margin: 20px auto"  border=2 width="250" height="80"  text-align: center;>
<tr class="perd">
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

  <tr class="asig">
    <th>Asignatura</th>
    <th>Maestro</th>
  </tr>
  <tr>
    <td>Matetmaticas I</td>
    <td>Carlos Omar</td>
  </tr>
</table>

<table class="default" style="margin: 20px auto"  border=2 width="250" height="80";>

  <tr class="asig">
    <th>Asignatura</th>
    <th>Maestro</th>
  </tr>
  <tr>
    <td>Español I</td>
    <td>Carlos Jimenez</td>
  </tr>
</table>

</div>
@endsection
</body>
</html>