<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use http\Params;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    /**
     * Liste des terrains
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function lister(){
        $terrains = Terrain::paginate(5);
        return view('lister', ['terrains' => $terrains]);
        // return Terrain::all(); --------- REST_API ---------------
    }

    /**
     * Creer un terrain
     * @param Request $request
     * @return int
     */
    public function creer(Request $request){
        // Valider les donnees entrantes
        $inputValidate = $request->validate([
            'longueur' => 'required|numeric',
            'largeur' => 'required|numeric',
            'type_papier' => 'required:Bail,Titre foncier',
        ]);

        // Creation d'un objet de Terrain
        $terrain = new Terrain();
        $terrain->longueur = $inputValidate['longueur'];
        $terrain->largeur  = $inputValidate['largeur'];
        $terrain->type_papier = $inputValidate['type_papier'];

        // Persistence de l'objet
        $terrain->save();
        return redirect()->route('terrains.lister')->with('success', 'Terrain créé avec succès.');
        //return response()->json($terrain); ----- REST_API ---------
    }

    /**
     * Supprimer
     * @param $id
     * @return void
     */
    public function supprimer($id){
        Terrain::destroy($id);
        return redirect()->route('terrains.lister')->with('success', 'Terrain modifié avec succès.');
        //return response()->json(['message' => 'Suppression effectuee'],200); ----- REST_API ---------
    }

    /**
     * Modifier terrains
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function modifier(Request $request, $id){
        $inputValidate = $request->validate([
            'longueur' => 'required|numeric',
            'largeur' => 'required|numeric',
            'type_papier' => 'required|in:Bail,Titre foncier',
        ]);
        $terrain = Terrain::findOrFail($id);
        $terrain->longueur = $inputValidate['longueur'];
        $terrain->largeur  = $inputValidate['largeur'];
        $terrain->type_papier = $inputValidate['type_papier'];
        $terrain->save();
        return redirect()->route('terrains.lister')->with('success', 'Terrain modifié avec succès.');
        //return response()->json($terrain); ---------- REST_API ----------------
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     * Formulaire de creatipon
     */
    public function formulaire(){
        return view('creer');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     * Formulaire de modification
     */
    public function form($id){
        $terrain = Terrain::findOrFail($id);
        return view('modifier',['terrain' => $terrain]);
    }

}
