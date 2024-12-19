<?php

namespace App\Http\Controllers;

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
        $semestres = Semestre::all();
        $programas = Programa::all();
        $licenciaturas = Licenciatura::all();
        $docentes = Docente::all();
        $materias = Materia::all();
        // dd($depreciaciones);
        return view('cuestionarios.index', compact('semestres','programas','licenciaturas','docentes','materias'));
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
