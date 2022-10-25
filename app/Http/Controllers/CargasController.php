<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Cargas;
use App\Models\Alumnos;


class CargasController extends Controller
{

   
    public function index()
    {
        $Alumnos= Alumnos::all();
       return view('cargas.index', ['Alumnos' => $Alumnos]);
    }

    public function create()
    {
        $Alumnos= Alumnos::all();

       return view('cargas.create', ['Alumnos' => $Alumnos]);
    }

    public function show()
    {

    }


}