<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Cargas;
use App\Models\Alumnos;
use App\Models\Asignaturas;
use App\Models\Grados;
use App\Models\Grupos;
use App\Models\Niveles;
use App\Models\Periodos;
use App\Models\Profesores;

class CargasController extends Controller
{

   
    public function index()
    {
      
        $Cargas = Cargas::all();
       return view('cargas.index', ['Cargas'=> $Cargas]);

  
    }

    public function create()
    {
        
        $Alumnos= Alumnos::all();
        
        $Profesores= Profesores::all();

        $periodos = Periodos::all();

        $niveles = Niveles::all();

        $grupos = Grupos::all();

        $grados = Grados::all();

        $asignaturas = Asignaturas::all();

       return view('cargas.add', [
        'Alumnos'=> $Alumnos,
        'Profesores'=> $Profesores,
        'Periodos'=>$periodos,
        'Niveles'=>$niveles,
        'Grupos'=>$grupos,
        'Grados'=>$grados,
        'Asignaturas'=>$asignaturas

    ]);
    }

    public function store(Request $request)
    {

        $grupo = $request->get('grupo');
        $grado = $request->get('grado');
        $nivel =$request->get('nivel');
        $periodo =$request->get('periodo');
        $docente = $request->get('docente');
        $asignatura =$request->get('asignatura');
        $bimestre =$request->get('bimestre');
        $alumnos =$request->get('alumnos');

        foreach($alumnos as $alumno){

        
        
            $data = new Cargas([
                'grupo'=>$request->get('grupo'),
                'grado'=>$request->get('grado'),
                'nivel'=>$request->get('nivel'),
                'periodo'=>$request->get('periodo'),
                'docente'=>$request->get('docente'),
                'asignatura'=>$request->get('asignatura'),
                'bimestre'=>$request->get('bimestre'),
                'alumnos'=>$alumno,
            
              
            ]);
            $data->save(); 
        }

     /*  return view('profes.store'); */
        return redirect('/cargas')->with('mensaje','Carga Registrada Correctamente.'); 

    }

    public function edit($id){

        $Cargas= Cargas::find($id);
   
           return view('cargas.edit',['cargas'=>$Cargas]);
       }



       
    public function update(Request $request, $id)
    {
  
        if ($request->hasFile('foto_cargas')) {
            $file = $request->file('foto_cargas');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosCargas/'),$nombrearchivo); 

            $carga = Cargas::findOrFail($id);
           
            $carga->grupo                = $request->grupo;
            $carga->grado                = $request->grado;
            $carga->nivel                  = $request->nivel;
            $carga->periodo                = $request->periodo;
            $carga->docente                 = $request->docente;
            $carga->asignatura              = $request->asignatura;
            $carga->bimestre             = $request->bimestre;
            $carga->alumnos             = $request->alumnos;
          
       
            $carga->save(); 
        }else{
            $carga = Cargas::findOrFail($id);

            $carga->grupo                = $request->grupo;
            $carga->grado                = $request->grado;
            $carga->nivel                  = $request->nivel;
            $carga->periodo                = $request->periodo;
            $carga->docente                 = $request->docente;
            $carga->asignatura              = $request->asignatura;
            $carga->bimestre             = $request->bimestre;
            $carga->alumnos             = $request->alumnos;
            
            $carga->save(); 
        } 

            $updateCarga ="Carga academica actualizada Correctamente";
        return redirect('cargas/')->with(['updateCarga' => $updateCarga]);
    }


    public function destroy($id){
        $carga = Cargas::findOrFail($id);
        $carga->delete();
        return redirect('/cargas')->with('mensaje', 'La carga academica fue borrado correctamente.');
    }


       
}