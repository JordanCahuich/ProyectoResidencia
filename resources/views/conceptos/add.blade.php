@extends('layouts.app')

@section('content')
<div class="container" style="margin: 0px auto; " ,>

<div style="text-align:center; " >

    <h3>REGISTRAR NUEVO CONCEPTO</h3>
    
</div>
<hr>
<div class="row justify-content-center"  ;>
    <div class="card" style="background-color:#82b1ff">
        <div class="card-body">
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/concepto" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputUsername1">Nombre del concepto</label>
                <input type="text" name="name" class="form-control" required>
                @if ($errors->has('nombre'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Monto del concepto</label>
                <input type="number" name="cantidad" class="form-control" required>
                @if ($errors->has('monto'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('monto') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Fecha de creación</label>
                <input type="date" name="fech" class="form-control" required>
                @if ($errors->has('fecha'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('fecha') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success" style="background-color: #009624">Guardar</button>
                <a href="/concepts"  class="btn btn-success" style="background-color: #a30000">Cancelar</a>
            </div>
        
        </form>
        </div>
    </div>
</div> 

</hr>
</table>
</div>


@endsection

</div>
</body>
</html>
