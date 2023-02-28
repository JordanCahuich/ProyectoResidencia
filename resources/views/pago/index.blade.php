@extends('layouts.app')

@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Sección pagos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historial de pagos</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <h2>Historial de pagos<hr></h2>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <form class="form-inline row">
                    <div class="row">
                        <div class="col">
                            <input  name="Nombre" class="form-control" type="search" placeholder="nombre" aria-label="Search">
                        </div>

                        <div class="col">
                            <input  name="Matricula" class="form-control "  type="search" placeholder="Matricula" aria-label="Search">
                        </div>
                        <div class="col">
                            <input  name="Grado" class="form-control"  type="search" placeholder="Grado" aria-label="Search">
                        </div>
                        <div class="col">
                            <input  name="Grupo" class="form-control" type="search" placeholder="Grupo" aria-label="Search">
                        </div>

                    <div class="col-md-2">

                        <button class="btn btn-success" type="submit" style="background-color:#009624">Buscar</button>

                    </div>
                    <a href="/pagos/register" class="btn btn-secondary" style="background-color: 	#fbc02d; width: 100px; height: 40px; ">
                        Registar
                    </a>
                    </div>
                </form>
            </div>

</div>



            <div class="card-header">Lista de Pagos</div>

                {{ $dataTable->table() }}


@endsection

