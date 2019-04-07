<?php

namespace samaJob\Http\Controllers;

use Illuminate\Http\Request;
use samaJob\Annonce;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::get();
        return view('annonces.listAnnonces', compact('annonces'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.addAnnonces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domaine = $request->domaine;
        $mission = $request->mission;
        $profil = $request->profil;
        $niveau = $request->niveau;
        $debut = $request->debut;
        $duree = $request->duree;
        $remuneration = $request->remuneration;
        $localisation = $request->localisation;

        Annonce::create(['domaine' => $domaine, 'mission' => $mission, 'profil' => $profil, 'niveau' => $niveau,
                        'debut' => $debut, 'duree' => $duree, 'remuneration' => $remuneration, 'localisation' => $localisation]);

        return redirect()->route('add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonces = Annonce::where('id', $id) -> get();

        return view('annonces.seeAnnonces', compact('annonces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonces = Annonce::where('id', $id) -> get();

        return view('annonces.editAnnonces', compact('annonces'));
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
        $domaine = $request->domaine;
        $mission = $request->mission;
        $profil = $request->profil;
        $niveau = $request->niveau;
        $debut = $request->debut;
        $duree = $request->duree;
        $remuneration = $request->remuneration;
        $localisation = $request->localisation;

        Annonce::where('id', $id)->update(['domaine' => $domaine, 'mission' => $mission, 'profil' => $profil,
                        'niveau' => $niveau, 'debut' => $debut, 'duree' => $duree, 'remuneration' => $remuneration,
                        'localisation' => $localisation]);

        return redirect()->route('show', ['id', $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Annonce::where('id', $id)->delete();

        return redirect()->route('add');
    }
}
