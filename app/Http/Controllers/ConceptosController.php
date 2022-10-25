<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conceptos;
class ConceptosController extends Controller
{
    public function index()
    {
       return view('conceptos.index');
    }
    public function formaPago()
    {
      $conceptos= conceptos::all();
       return view('conceptos.pago',['Conceptos'=> $conceptos]);
    }
    
    public function create()
    {
       return view('conceptos.add');
    }
}
