<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Conceptos;
use App\Models\FormaPago;

use App\Models\Pago;

class PagosController extends Controller
{
    public function index(Request $request)
    {
        
            $id = $request->get('Matricula');
            $nombre = $request->get('Nombre');
            $grado = $request->get('Grado');
            $pagos=Pago::all();
        $alumnos= Alumnos::nombres($nombre)->ids($id)->grados($grado)->paginate(5);
        return view('pago.index')->with('Alumnos', $alumnos)->with('Pagos',$pagos);   
    }
    public function create(){

    }
    public function store(Request $r)
    {
        $inputs = $r->all();  
        if ($r->hasFile('foto_comprobante')) {
            $file = $r->file('foto_comprobante');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosPagos/'),$nombrearchivo); 
        
    
       $pago = new Pago(['nombre'=> $inputs['nombr'],
       
       'importetotal'=> $inputs['resultado'],
       'tipo'=> $inputs['Tipo'],
       'alumno_id'=> $inputs['Id'],
       'fecha'=> $inputs['fech'],
       'photo_pago'=> $nombrearchivo
   ]);
   $pago->save();
}else{
    $pago = new Pago(['nombre'=> $inputs['nombr'],
       
    'importetotal'=> $inputs['resultado'],
    'tipo'=> $inputs['Tipo'],
    'alumno_id'=> $inputs['Id'],
    'fecha'=> $inputs['fech'],
    'photo_pago'=> ''
]);
   $pago->save();
}
   return redirect('/pago');
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
        $formapago = FormaPago::all(); 
        $id = $request->get('matricula');
        $Alumnos= Alumnos::where('id',$id)->get(); 
           return view('pago.register')->with('Alumnos', $Alumnos)->with('Conceptos',$Conceptos)->with('Forma',$formapago);
    }
    public function conceptos (){
     
        return view ('pago.conceptos');
    }
    public function configPago (){
        return view ('pago.config');
    }
}