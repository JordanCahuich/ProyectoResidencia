<?php

namespace App\Http\Controllers;

use App\Models\Asignaturas;
use App\Models\Grados;
use App\Models\Grupos;
use App\Models\Horarios;
use App\Models\Profesores;
use Illuminate\Http\Request;

class HorariosController extends Controller
{

    public function index()
    {

        $Horarios = Horarios::with('grupos')->with('grados')->with('asignaturas')->with('profesores')->get();

        return view('horarios.index', ['Horarios'=> $Horarios,]);

    }



    public function create()
    {


        $Profesores = Profesores::all();
        $asignaturas = Asignaturas::all();
        $grupos = Grupos::all();
        $grados = Grados::all();

        return view('horarios.add', [

        'Profesores'=>$Profesores,
        'Asignaturas'=>$asignaturas,
        'Grupos'=>$grupos,
        'Grados'=>$grados

    ]);

    }


    public function show(Request $request, $id){

      
        $Horarios = Horarios::where('id', $id)->first();
        return view('horarios.view')->with('horarios', $Horarios);
        
        
    }




    public function store(Request $request)
    {

        $asignaturas = Asignaturas::whereIn('id', $request->get('asignaturas'))->get();


                $data = new Horarios([

                'grupo_id'=>$request->get('grupo'),
                'grado_id'=>$request->get('grado'),
                'aula'=>$request->get('aula'),
                'dia'=>$request->get('dia'),
                'hora'=>$request->get('hora'),
                'hora_fin'=>$request->get('hora_fin'),

                'asignatura_id'=>$request->get('asignatura'),
                'docente_id'=>$request->get('docente'),

            ]);
            $data->save();
            $data->asignaturas()->attach($asignaturas);




        return redirect('/horarios')->with('mensaje','Horario Registrado Correctamente.');

    }




    public function edit($id){

     $Horarios= Horarios::find($id);

        return view('horarios.edit',['horarios'=>$Horarios]);
    }


    public function update(Request $request, $id)
    {

            $horario = Horarios::findOrFail($id);

            $horario->grupo             =$request->grupo;
            $horario->grado             =$request->grado;
            $horario->aula                      = $request->aula;
            $horario->dia                  = $request->dia;
            $horario->hora                  = $request->hora;
            $horario->hora_fin                  = $request->hora_fin;
            $horario->asignatura                  = $request->asignatura;
            $horario->profesores                  = $request->profesores;

            $horario->save();


            $updateHorario ="Horario actualizado Correctamente";
        return redirect('horarios/')->with(['updateHorario' => $updateHorario]);
    }



    public function destroy($id){
        $horario = Horarios::findOrFail($id);
        $horario->delete();
        return redirect('/horarios')->with('mensaje', 'El horario fue borrado correctamente.');
    }




}
