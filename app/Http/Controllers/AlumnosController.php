<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumnos;
use App\Models\Cursos;
use App\Models\Profesores;
use App\Models\Pagos;



class AlumnosController extends Controller
{
    
    public function index()
    {
        $alumnosTotal = Alumnos::all();
        $alumnos = Alumnos::orderBy('id', 'DESC')->paginate(6);
        return view('alumnos.index', compact('alumnos','alumnosTotal'));

    }


    public function create()
    {
        $cursos = Cursos::get();
        #$user = User::where('name', 'John')->first();
        #$cursos = Cursos::all();
        $profesores = Profesores::orderBy('id','asc')->get();
        //$alumnos = Alumnos::orderBy('id', 'DESC')->paginate(3);
        
        return view('alumnos.add',compact('cursos','profesores'));

    }

    
    public function store(Request $request)
    {

        /*
            return $request('nameFullAlumno');
            return $request->all();
        */

        if ($request->hasFile('foto_estudiante')) {
            $file = $request->file('foto_estudiante');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosAlumnos/'),$nombrearchivo); 

            $data = new Alumnos([
                'nombre'=>$request->get('nombre'),
                'primer_apellido'=>$request->get('primer_apellido'),
                'segundo_apellido'=>$request->get('segundo_apellido'),
                'sexo'=>$request->get('sexo'),
                'fecha_nacimiento'=>$request->get('fecha_nacimiento'),
                'curp'=>$request->get('curp'),
                'edad'=>$request->get('edad'),
                'tipo_sangre'=>$request->get('tipo_sangre'),
                'nivel_escolar'=>$request->get('nivel_escolar'),
                'grado'=>$request->get('grado'),
                'grupo'=>$request->get('grupo'),
                'foto_estudiante'=>$nombrearchivo,
                'observ'=>$request->get('observ'),
                'curso_id'=>$request->get('curso_id'),
                'profesor_id'=>$request->get('profesor_id'),
                 

            ]);
            $data->save(); 
        }else{
            $data = new Alumnos([
                'nombre'=>$request->get('nombre'),
                'primer_apellido'=>$request->get('primer_apellido'),
                'segundo_apellido'=>$request->get('segundo_apellido'),
                'sexo'=>$request->get('sexo'),
                'fecha_nacimiento'=>$request->get('fecha_nacimiento'),
                'curp'=>$request->get('curp'),
                'edad'=>$request->get('edad'),
                'tipo_sangre'=>$request->get('tipo_sangre'),
                'nivel_escolar'=>$request->get('nivel_escolar'),
                'grado'=>$request->get('grado'),
                'grupo'=>$request->get('grupo'),
                'foto_estudiante'=>$nombrearchivo,
                'observ'=>$request->get('observ'),
                'curso_id'=>$request->get('curso_id'),
                'profesor_id'=>$request->get('profesor_id'),
                 
            ]);
            $data->save(); 
        } 

        return redirect('/alumno')->with('mensaje','Alumno Registrado Correctamente.');

    }

    
    public function show(Request $request, $id){

        $pagosCursoAlumno = Pagos::where('alumno_id',$id)->get();
        $verificarPago = $pagosCursoAlumno->count();
   
        if($verificarPago !=0){
            $sumaPagoTotal  = Pagos::where('alumno_id',$id)->sum('aporte');
            $SqlvalorCurso = Pagos::where('alumno_id',$id)->limit(1)->get();
            $valorCurso = ($SqlvalorCurso[0]->valor_curso);
            $alumno = Alumnos::findOrFail($id);
            return view('alumnos.view', compact('alumno', 'pagosCursoAlumno','sumaPagoTotal','valorCurso'));
        }else{
            $pagosCursoAlumno = 0;
            $alumno = Alumnos::findOrFail($id); 
            return view('alumnos.view', compact('alumno','pagosCursoAlumno'));
        }
        
        
    }
    
    public function edit($id){

        $alumno   = Alumnos::findOrFail($id);
        $cursos   = Cursos::get();
        $profesores = Profesores::orderBy('id','asc')->get();

        $CursoAsignadoBD = $alumno->curso_id;
        $ProfeAsignadoBD = $alumno->profesor_id;

        return view('alumnos.update',compact('alumno','cursos','profesores','CursoAsignadoBD','ProfeAsignadoBD'));
    }


    public function update(Request $request, $id)
    {
  
        if ($request->hasFile('foto_estudiante')) {
            $file = $request->file('foto_estudiante');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosAlumnos/'),$nombrearchivo); 

            $alumno = Alumnos::findOrFail($id);
            $alumno->nombre                   = $request->nombre;
            $alumno->primer_apellido          = $request->primer_apellido;
            $alumno->segundo_apellido         = $request->segundo_apellido;
            $alumno->sexo                     = $request->sexo;
            $alumno->fecha_nacimiento         = $request->fecha_nacimiento;
            $alumno->curp                     = $request->curp;
            $alumno->edad                     = $request->edad;
            $alumno->grado_escolar            = $request->grado_escolar;
            $alumno->observ                   = $request->observ;
            $alumno->curso_id                 = $request->curso_id;
            $alumno->profesor_id              = $request->profesor_id;

            $alumno->save(); 
        }else{
            $alumno = Alumnos::findOrFail($id);
            $alumno->nombre                   = $request->nombre;
            $alumno->primer_apellido          = $request->primer_apellido;
            $alumno->segundo_apellido         = $request->segundo_apellido;
            $alumno->sexo                     = $request->sexo;
            $alumno->fecha_nacimiento         = $request->fecha_nacimiento;
            $alumno->curp                     = $request->curp;
            $alumno->edad                     = $request->edad;
            $alumno->grado_escolar            = $request->grado_escolar;
            $alumno->observ                   = $request->observ;
            $alumno->curso_id                 = $request->curso_id;
            $alumno->profesor_id              = $request->profesor_id;
            $alumno->save(); 
        } 

            $updateAlumno ="Alumno actualizado Correctamente";
        return redirect('alumno/')->with(['updateAlumno' => $updateAlumno]);
    }



    public function destroy(Request $request, $id){
        $alumno = Alumnos::findOrFail($id);
        $alumno->delete();
        return redirect('/alumno')->with('mensaje', 'El alumno fue borrado correctamente.');
    }


    public function exportAlumnos()
    {
        $alumnos = Alumnos::all();
        return view('exports.exportAlumnos', compact('alumnos'));     
    }
    


}
