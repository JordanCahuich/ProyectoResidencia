<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    
    public function index(Request $r)
    {
        $pagos= Pago::all();
        return view('pagos.index',compact());
    }
    public function create(){

    }
    public function show(){

    }
    public function register(){
        return view ('pagos.register');
    }
    public function search(Request $request)
    {
        $pagos = Pago::query();
        with(['Alumnos'])
        ->when(request('search',function ($query) {

        })
        ->paginate(5){
            return view ('/pagos.register', compact('pagos'));
        }
        
    }

}
    