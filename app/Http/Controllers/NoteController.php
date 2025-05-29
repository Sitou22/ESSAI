<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
{
    $eleves = Eleve::with('notes.matiere')->get();
    return view('notes.index', compact('eleves'));
}

public function create()
{
    $eleves = Eleve::all();
    $matieres = Matiere::all();
    return view('notes.create', compact('eleves', 'matieres'));
}

public function store(Request $request)
{
    $request->validate([
        'eleve_id' => 'required|exists:eleves,id',
        'matiere_id' => 'required|exists:matieres,id',
        'valeur' => 'required|numeric|min:0|max:20',
    ]);

    Note::create($request->all());
    return redirect()->route('notes.index')->with('success', 'Note ajoutée.');
}
}
