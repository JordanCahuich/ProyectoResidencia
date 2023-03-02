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
                'periodo_escolar'=>$request->get('periodo_escolar'),

                'nombre_tutor'=>$request->get('nombre_tutor'),
                'parentesco'=>$request->get('parentesco'),
                'tutor_principal'=>$request->get('tutor_principal'),
                'direccion'=>$request->get('direccion'),
                'colonia'=>$request->get('colonia'),
                'telefono_contacto'=>$request->get('telefono_contacto'),
                'nombre_emergencia'=>$request->get('nombre_emergencia'),
                'parentesco2'=>$request->get('parentesco2'),
                'tel1_autorizada'=>$request->get('tel1_autorizada'),
                'foto_estudiante'=>$nombrearchivo,
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
                'periodo_escolar'=>$request->get('periodo_escolar'),
               'nombre_tutor'=>$request->get('nombre_tutor'),
                'parentesco'=>$request->get('parentesco'),
                'tutor_principal'=>$request->get('tutor_principal'),
                'direccion'=>$request->get('direccion'),
                'colonia'=>$request->get('colonia'),
                'telefono_contacto'=>$request->get('telefono_contacto'),
                'nombre_emergencia'=>$request->get('nombre_emergencia'),
                'parentesco2'=>$request->get('parentesco2'),
                'tel1_autorizada'=>$request->get('tel1_autorizada'),
                'foto_estudiante'=>$nombrearchivo,
                'profesor_id'=>$request->get('profesor_id'),
                 
                 
            ]);
            $data->save(); 
        } 

        return redirect('/alumno')->with('mensaje','Alumno Registrado Correctamente.');

    }

    
    public function show(Request $request, $id){

        $pagosCursoAlumno = Pagos::where('alumno_id',$id)->get();
        $verificarPago = $pagosCursoAlumno->count();
   
        $pagosCursoAlumno = 0;
        $alumno = Alumnos::findOrFail($id); 
        return view('alumnos.view', compact('alumno','pagosCursoAlumno'));
        
        
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
            $alumno->tipo_sangre              = $request->tipo_sangre;
            $alumno->nivel_escolar            = $request->nivel_escolar;
            $alumno->grado                    = $request->grado;
            $alumno->periodo_escolar          = $request->periodo_escolar;
            $alumno->nombre_tutor             = $request->nombre_tutor;
            $alumno->parentesco               = $request->parentesco;
            $alumno->tutor_principal          = $request->tutor_principal;
            $alumno->direccion                = $request->direccion;
            $alumno->colonia                  = $request->olonia ;
            $alumno->telefono_contacto        = $request->telefono_contacto;
            $alumno->nombre_emergencia        = $request->nombre_emergencia;
            $alumno->parentesco2              = $request->parentesco2;
            $alumno->tel1_autorizada          = $request->tel1_autorizada;
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
            $alumno->tipo_sangre              = $request->tipo_sangre;
            $alumno->nivel_escolar            = $request->nivel_escolar;
            $alumno->grado                    = $request->grado;
            $alumno->periodo_escolar          = $request->periodo_escolar;
            $alumno->nombre_tutor             = $request->nombre_tutor;
            $alumno->parentesco               = $request->parentesco;
            $alumno->tutor_principal          = $request->tutor_principal;
            $alumno->direccion                = $request->direccion;
            $alumno->colonia                  = $request->olonia ;
            $alumno->telefono_contacto        = $request->telefono_contacto;
            $alumno->nombre_emergencia        = $request->nombre_emergencia;
            $alumno->parentesco2              = $request->parentesco2;
            $alumno->tel1_autorizada          = $request->tel1_autorizada;
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
