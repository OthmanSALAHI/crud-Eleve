<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActiviteController extends Controller
{
    
    public function index() {
        $activite = Activite::all();
        return view('activite.index',compact('activite'));
    }

    public function show($id){
        $activite = Activite::findOrFail($id);
        return view('activite.show', compact('activite'));
    }
    
    public function eleveActivite () {
        $eleves = Eleve::all();
        $activites = Activite::all();
        return view('activite.eleveActivite', compact('eleves','activites'));
    }
    public function eleveActiviteStore(Request $request) {
        $request->validate([
            'eleve_id' => 'required|integer|exists:eleves,id',
            'activite_id' => 'required|integer|exists:activites,id',
        ]);

        DB::table('activite_eleve')->insert([
            'eleve_id' => $request->input('eleve_id'),
            'activite_id' => $request->input('activite_id'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('activite.index');




    }

}
