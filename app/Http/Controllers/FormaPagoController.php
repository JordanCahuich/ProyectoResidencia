<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormaPago;

class FormaPagoController extends Controller
{
    public function create()
    {
      //$conceptos= conceptos::all();
       return view('pago.addPago');
    }
    public function store(Request $r)
    {
      $inputs = $r->all();
       $formapago = new FormaPago(['tipo'=> $inputs['Tipo'],
       'nombre'=> $inputs['Nombre'],
       'valor'=> $inputs['Valor']
   ]);
   $formapago->save();
   return redirect('/concepts/pago');
    }
}
