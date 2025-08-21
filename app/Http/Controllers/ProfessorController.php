<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
        public function index()
    {
        $professor = Professor::all();
        return view('professor.index', compact('professor'));
    }

    public function create(){
        return view('professor.create');
    }

    public function store(Request $request){
        Professor::create($request->all());
        return redirect()->route('professor.index');
    }

    public function edit(Professor $professor){
        return view('professor.edit', compact('professor'));
    }
    function update(Request $request,Professor $professor){
        $professor->update($request->all());
        return redirect()->route('professor.index');
    }

    public function destroy(Professor $professor){
        $professor->delete();
        return redirect()->route('professor.index');

    }
}
