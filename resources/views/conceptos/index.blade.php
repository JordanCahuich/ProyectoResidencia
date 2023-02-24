@extends('layouts.app')

@section('content')

<div class="container" style="margin: 0px auto;",>

<div style="text-align:center; " >

    <h3>LISTA DE CONCEPTOS</h3>
    
</div>
</hr>
<div class="row justify-content-end";>
<a href="/concepto/create" class="btn btn-secondary" style="background-color: 	#fbc02d">
            Registar 
        </a>
</div>
<hr>
<div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class= "thead-light">
            <tr>
            <th class="border-0 rounded-start">#</th>
            <th class="border-0">Concepto</th>
            <th class="border-0">Monto</th>
            <th class="border-0">Creacion</th>
            <th class="border-0">Acción
            </th>
            </tr>
</thead>
<tbody>
    <tr>
        
    @foreach($Conceptos as $c)
    <td><a href="#" class="text-primary fw-folda">1</a></td>
    <td class="fw-bold d-flex align-items-center">
    <div class="country" style="margin: 0px auto;"> <b>{{$c->nombre}}</b></div>
   
        </td>
        <td>
        <h5 class="country" style="margin: 0px auto;"> <b>{{$c->monto}}</b></h5>
        </td>
        <td>
        <h5 class="country" style="margin: 0px auto;"> <b>{{ date('d-m-Y', strtotime($c->fecha))}}</b></h5>
        </td>
        <td style="float: right">
                        <a href="/concepts/{{$c->id}}/edit" class="btn btn-inverse-success"   style="float: left; padding: 8px 5px !important margin: 10px;" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>
                        <form action="/concepts/{{$c->id}}}" method="post">
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
</body>
</html>