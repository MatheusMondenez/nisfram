<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Professores';
        $professores = Professor::get();

        return view('professores', compact('title', 'professores'));
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
        $save = Professor::create($request->all());

        if($save)
            return response()->json(['status' => 200, 'msg' => 'Professor registrado com sucesso.']);
        else
            return response()->json(['status' => 500, 'msg' => 'Não foi possível registrar o professor.']);
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
        $professores = new Professor();
        $professor = $professores->find($id);
        $update = $professor->update($request->all());

        if($update)
            return response()->json(['status' => 200, 'msg' => 'Professor alterado com sucesso.']);
        else
            return response()->json(['status' => 500, 'msg' => 'Não foi possível alterar o professor.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Professor::destroy($id);

        if($delete)
            return response()->json(['status' => 200, 'msg' => 'Professor removido com sucesso.']);
        else
            return response()->json(['status' => 500, 'msg' => 'Não foi possível remover o professor.']);
    }
}
