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
        $grado = $request->get('Grado');
        $alumnos= Alumnos::nombres($nombre)->ids($id)->grados($grado)->paginate(5);
        return view('pago.index',['Alumnos'=> $alumnos]);
   
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
