<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;


class PagosController extends Controller
{
    public function index(Request $request)
    {

        $id = $request->get('Matricula');
        $nombre = $request->get('Nombre');
    
        $Alumnos= Alumnos::ids($id)->nombres($nombre)->paginate(10);
        return view('pago.index',['Alumnos'=> $Alumnos]);
   
    }
    public function create(){

    }
    public function show(){

    }
    public function register(){

        return view ('pagos.search');
    }
    public function search(Request $request)
    {

        $id = $request->get('matricula');
        $Alumnos= Alumnos::where('id',$id)->get(); 
           return view('pago.register',['Alumnos'=> $Alumnos]);
    }
    public function search2(Request $request)
    {
    }
}
