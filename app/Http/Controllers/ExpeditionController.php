<?php

namespace App\Http\Controllers;

use App\Enums\SecteurActivites;
use App\Enums\StatutExpedition;
use App\Http\Requests\Requests\expe\ExpeditionRequest;
use App\Models\expeditions;
use Illuminate\Http\Request;

class ExpeditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->societe->secteur_activites!==SecteurActivites::EXPEDITION->value){
            abort(403);
        }
        $expeditions=auth()->user()->societe->expeditions;
        return view('pages.expedition.liste', compact('expeditions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.expedition.nouvelle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpeditionRequest $request)
    {

         expeditions::create([
            'id_societe'=>$request->user()->id_societe,
            'adresse_de_depart'=>$request->lieu_depart,
            'adresse_de_livraison'=>$request->lieu_livraison,
            'type_de_marchandise'=>$request->type_marchandise,
            'date_de_depart'=>$request->date_depart,
            'date_de_livraison'=>$request->lieu_livraison,
            'prix'=>$request->prix_expedition,
            'numero_de_serie'=>$request->numero_serie,
            'status'=>StatutExpedition::EN_ATTENTE->value
        ]);
        return redirect()->route('expedition.index')->with('success', 'Expedition soumise avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $expedition = expeditions::find($id);
        return view('pages.expedition.detail', compact('expedition'));
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
}
