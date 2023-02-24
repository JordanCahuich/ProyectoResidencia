
@extends('layouts.app')

@section('content')
<div class="container" style="margin: 0px auto;",>

<div style="text-align:center; " >
   

    <h3>LISTA DE DOCENTES</h3>
  
</div>
</hr>


<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Seccion de docentes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de docentes</li>
        </ol>
    </nav>





<div class="row justify-content-end";>

</div>
<hr>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
            <tr>
            <th>Nombre completo</th>
            <th>Fecha de nacimiento</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Localidad</th>
            <th>Domicilio</th>
            <th>Acción</th>
            </tr>
</thead>




<tbody>
    <tr>
        
    @foreach($Profesores as $p)
  
        <td>
        <h6 class="country" style="margin: 0px auto;" > <b>{{$p->nombre}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{ date('d-m-Y', strtotime($p->fecha_nacimiento))}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{$p->edad}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{$p->genero}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{$p->email}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{$p->telefono}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{$p->localidad}}</b></h4>
        </td>
        <td>
        <h6 class="country" style="margin: 0px auto;"> <b>{{$p->domicilio}}</b></h4>
        </td>
    
        <td style="float: right">
                        <a href="/profes/{{$p->id}}/edit" class="btn btn-inverse-success"   style="float: left; padding: 8px 5px !important margin: 10px;" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>
                        <form action="/profes/{{$p->id}}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-inverse-danger"  style="float: right; padding:  8px 5px !important;" title="Borrar Concepto">
                            <i class="mdi mdi-delete-sweep"></i>Borrar
                        </button>


                        
                    </form>
                </td>
            </td>
    </tr>
    @endforeach
</tbody>
</hr>
</table>
  
</div>
@endsection
</div>

