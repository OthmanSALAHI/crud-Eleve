<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Club;
use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        $clubs = Club::select('id', 'nom')->get();
        return view('eleve.index', compact('eleves','clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::select('id', 'nom')->get();
        return view('eleve.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eleve=Eleve::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'club_id'=>$request->club,
            ]) ;
            return redirect()->route('eleves.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $activite = Activite::all();
        $club = Club::findOrFail($eleve->club_id);
        return view('eleve.show', compact('eleve','club','activite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $clubs = Club::all();
        return view('eleve.edit', compact('eleve','clubs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->club_id = $request->input('club');
        $eleve->save();
        return redirect()->route('eleves.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();
        return redirect()->route('eleves.index');
    }
}
