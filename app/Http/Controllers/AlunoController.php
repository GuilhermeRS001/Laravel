<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create(){
        return view('alunos.index'. compact('alunos'));
    }

    public function store(Request $request){
        Aluno::created($request->user());
        return redirect()->route('alunos.index');
    }

    public function edit(Aluno $aluno){
        return view('alunos,edit'. compact('aluno'));
    }
    function update(Request $request,Aluno $aluno){
        $aluno->update($request->all());
        return redirect()->route('alunos.index');
    }

    public function destroy(Aluno $aluno){
        $aluno->delete();
        return redirect()->route('alunos.index');

    }
}