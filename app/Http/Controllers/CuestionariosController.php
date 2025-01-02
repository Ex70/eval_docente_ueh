<?php

namespace App\Http\Controllers;

use App\Models\Cuestionario;
use App\Models\Docente;
use App\Models\Licenciatura;
use App\Models\Materia;
use App\Models\Programa;
use App\Models\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuestionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $total_p1 = $total_p2 = $total_p3 = $total_p4 = $total_p5 = $total_p6 = $total_p7 = $total_p8 = $total_p9 = $total_p10 = $total_p11 = 0;
        $total_p1 = Cuestionario::sum('pregunta1');
        // dd($total_p1);
        $cadena="Daniel Sandria Flores-Seminario II de Proyectos de Investigación ( Ciencia de Datos)-ISC901";
        $guion1=strpos($cadena,'-');
        $docente=substr($cadena,0,$guion1);
        // dd($docente);
        $cadena2=substr($cadena,$guion1+1);
        $guion2=strpos($cadena2,'-');
        $materia=substr($cadena2,0,$guion2);
        // dd($materia);
        $grupo=substr($cadena2,$guion2+1);
        // dd($grupo);
        $cuestionarios = Cuestionario::all()->toArray();
        // dd($cuestionarios[0]['pregunta1']);
        foreach ($cuestionarios as $value => $cuestionario) {
            // dd($cuestionario['pregunta1']);
            $total_p1+= $cuestionario['pregunta1'];
            $total_p2+= $cuestionario['pregunta2'];
            $total_p3+= $cuestionario['pregunta3'];
            $total_p4+= $cuestionario['pregunta4'];
            $total_p5+= $cuestionario['pregunta5'];
            $total_p6+= $cuestionario['pregunta6'];
            $total_p7+= $cuestionario['pregunta7'];
            $total_p8+= $cuestionario['pregunta8'];
            $total_p9+= $cuestionario['pregunta9'];
            $total_p10+= $cuestionario['pregunta10'];
            $total_p11+= $cuestionario['pregunta11'];
        }
        // dd($total_p1+$total_p1);
        $semestres = Semestre::all();
        $programas = Programa::all();
        $licenciaturas = Licenciatura::all();
        $docentes = Docente::all();
        $materias = Materia::all();
        // dd($depreciaciones);
        return view('cuestionarios.index', compact('semestres','programas','licenciaturas','docentes','materias','cuestionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function consulta(Request $req){
        // dd($_POST);
        $sql = "SELECT * from materias where materias.id_semestre=".$_POST['grupo']." and materias.id_programa=".$_POST['programa']." and materias.id_docente NOT IN (SELECT docentes.id from docentes where docentes.nombre IN(SELECT cuestionarios.docente FROM cuestionarios WHERE cuestionarios.correo='".$_POST['correo']."'));";
        $materias = DB::select($sql);
        return $materias;
    }
}
