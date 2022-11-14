<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Conceptos;


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
    public function store(Request $r)
    {
        dd(request()->all());
      $inputs = $r->all();
       $pago = new Pagos(['nombre'=> $inputs['name'],
       'monto'=> $inputs['cantidad'],
       'fecha'=> $inputs['fech']
   ]);
   $concept->save();
   return redirect('/concepts');
    }
    public function update($id, Request $r)
    {
        $inputs = $r->all();
        $concept = conceptos::find($id);
        $concept->nombre = $inputs['name'];
        $concept->monto = $inputs['cantidad'];
        $concept->fecha = $inputs['fech'];
        $concept->save();

        return redirect('/concepts');
    }

    public function destroy($id)
    {
        $pagos = Pagos::find($id);
            $pagos->delete();
        return redirect('/concepts');
    }
    
    public function show(){

    }
    public function register(){

        return view ('pagos.search');
    }
    public function search(Request $request)
    {
        
        $Conceptos = Conceptos::all();
        $id = $request->get('matricula');
        $Alumnos= Alumnos::where('id',$id)->get(); 
           return view('pago.register',['Alumnos'=> $Alumnos],['Conceptos'=> $Conceptos]);
    }
    public function conceptos (){
     
        return view ('pago.conceptos');
    }
    public function configPago (){
        return view ('pago.config');
    }
}
