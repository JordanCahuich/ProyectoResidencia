<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    
    public function index()
    {
        return view('pago.index');
    }
    public function create(){

    }
    public function show(){

    }
    public function register(){
        return view ('pago.register');
    }


}
    