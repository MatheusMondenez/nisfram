<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Alunos';
        $alunos = Aluno::get();

        return view('alunos', compact('title', 'alunos'));
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
        $insert = Aluno::create($request->all());

        if($insert)
            return response()->json(['staus' => 200, 'msg' => 'Aluno registrado com sucesso.']);
        else
            return response()->json(['staus' => 500, 'msg' => 'Não foi possível registrar o aluno.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);

        return response()->json($aluno);
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
        $aluno = Aluno::find($id);
        $update = $aluno->update($request->all());

        if($update)
            return response()->json(['staus' => 200, 'msg' => 'Aluno alterado com sucesso.']);
        else
            return response()->json(['staus' => 500, 'msg' => 'Não foi possível alterar o aluno.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Aluno::destroy($id);

        if($delete)
            return response()->json(['staus' => 200, 'msg' => 'Aluno removido com sucesso.']);
        else
            return response()->json(['staus' => 500, 'msg' => 'Não foi possível remover o aluno.']);
    }
}
