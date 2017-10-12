<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Professor;
use App\Models\Aluno; // Acho que não vai precisar
use App\Models\TurmaAluno;
use DB;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Turmas';
        $turmas = Turma::get();
        $professores = Professor::get();
        $turmaAlunosIn = [];

        // $teste = Turma::find(1);
        // $prof = $teste->getProfessor();
        // die($prof->ST_PROFESSOR_PRO);

        return view('turmas', compact('title', 'turmas', 'professores', 'turmaAlunosIn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = Turma::create($request->all());

        if($insert)
            return redirect()->back();
        else
            throw new Exception("Não foi possível registrar a turma");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Adicionar Alunos';

        $turma = DB::select('
            SELECT ST_TURMA_TUR FROM TURMAS WHERE ID_TURMA_TUR = ?
        ', [$id]);

        $subtitle = "Turma {$turma[0]->ST_TURMA_TUR}";

        // Quando um aluno só pode estar em uma única turma
        $turmaAlunos = DB::select('
            SELECT alunos.ST_ALUNO_ALU, alunos.ID_ALUNO_ALU, alunos.NM_MATRICULA_ALU
            FROM alunos WHERE alunos.ID_ALUNO_ALU NOT IN (
                SELECT turma_alunos.ID_ALUNO_ALU
                FROM turma_alunos
                INNER JOIN turmas ON turma_alunos.ID_TURMA_TUR = turmas.ID_TURMA_TUR
                WHERE turma_alunos.ID_TURMA_TUR = ?
            )
        ', [$id]);

        // Alunos da turma
        $turmaAlunosIn = DB::select('
            SELECT *
            FROM turma_alunos
            INNER JOIN alunos ON turma_alunos.ID_ALUNO_ALU = alunos.ID_ALUNO_ALU
            INNER JOIN turmas ON turma_alunos.ID_TURMA_TUR = turmas.ID_TURMA_TUR
            WHERE turma_alunos.ID_TURMA_TUR = ?
        ', [$id]);

        return view('turma-alunos', compact('title', 'subtitle', 'turmaAlunos', 'turmaAlunosIn', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Turma::destroy($id);

        if($delete)
            return redirect()->back();
        else
            throw new Exception("Não foi possível remover a turma");
    }
}
