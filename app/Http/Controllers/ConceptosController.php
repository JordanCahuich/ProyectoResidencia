<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conceptos;
class ConceptosController extends Controller
{
    public function index()
    {
      $Conceptos = Conceptos::all();
       return view('conceptos.index',['Conceptos'=> $Conceptos]);
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
    public function store(Request $r)
    {
      $inputs = $r->all();
       $concept = new Conceptos(['nombre'=> $inputs['name'],
       'monto'=> $inputs['cantidad'],
       'fecha'=> $inputs['fech']
   ]);
   $concept->save();
   return redirect('/concepts');
    }
    
}
