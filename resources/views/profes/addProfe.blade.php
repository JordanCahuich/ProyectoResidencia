@extends('layouts.app')

@section('content')

@include('mensajes')


<div class="row justify-content-center">
    @if ($update !=0)
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="card-title text-center">ACTUALIZAR DATOS DEL PROFESOR <hr></h2>
            <form class="forms-sample" method="post" action="{{ route('profe.update', $profe->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Nombre Y Apellido</label>
                        <input type="text" name="nameFull" class="form-control" value="{{ $profe->nameFull }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Cédula</label>
                        <input type="number" name="cedula" class="form-control" value="{{ $profe->cedula }}" required>
                    </div>
                </div>

                <div class="row  mb-3">
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Teléfono</label>
                        <input type="number" name="phone" class="form-control" value="{{ $profe->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Correo</label>
                        <input type="email" name="email" class="form-control" value="{{ $profe->email }}">
                    </div>
                </div>