<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConceptosController extends Controller
{
    public function index()
    {
       return view('conceptos.index');
    }
    public function formaPago()
    {
       return view('conceptos.pago');
    }
    
    public function create()
    {
       return view('conceptos.add');
    }
}
