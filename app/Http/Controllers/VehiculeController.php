<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listvehicules = Vehicule::all();
        return view('auth.vehicules.index', ['vehicules' => $listvehicules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.vehicules.add_vehicule");
    }
    //Search vehicules 
    public function search(Request $request)
    {

        $search = $request->get('search');
        $vehicules = DB::table('vehicules')->where('name', 'like', '%' . $search . '%')->paginate(5);
        return view('auth.vehicules.index', ['vehicules' => $vehicules]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicules = new Vehicule();
        $vehicules->marque = $request->input('marque');
        $vehicules->couleur = $request->input('couleur');
        $vehicules->matricule = $request->input('matricule');
        $vehicules->modele = $request->input('modele');
        $vehicules->carburant = $request->input('carburant');
        $vehicules->type = $request->input('type');
        $vehicules->assurances = $request->input('assurances');
        $vehicules->numassurances = $request->input('numassurances');
        $vehicules->nombreplaces = $request->input('nombreplaces');
        $vehicules->kilometrage = $request->input('kilometrage');
        $vehicules->puissance = $request->input('puissance');
        if ($request->hasFile('photos')) {
            $vehicules->photos = $request->photos->store('image');
        }
        try {
            $vehicules->save();
            session()->flash('success', 'La voiture est créée!!');
            return redirect('vehicules');
        } catch (\Exception $e) {
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $listvehicules = Vehicule::all();
        return view('auth.vehicules.detail', ['vehicules' => $listvehicules]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicules = Vehicule::find($id);

        return view('auth.vehicules.edit_vehicule', ['vehicules' => $vehicules]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicules = Vehicule::find($id);
        $vehicules->marque = $request->input('marque');
        $vehicules->couleur = $request->input('couleur');
        $vehicules->matricule = $request->input('matricule');
        $vehicules->modele = $request->input('modele');
        $vehicules->carburant = $request->input('carburant');
        $vehicules->type = $request->input('type');
        $vehicules->assurances = $request->input('assurances');
        $vehicules->numassurances = $request->input('numassurances');
        $vehicules->nombreplaces = $request->input('nombreplaces');
        $vehicules->kilometrage = $request->input('kilometrage');
        $vehicules->puissance = $request->input('puissance');
        try {
            $vehicules->save();
            session()->flash('success', 'La voiture est crée!!');
            return redirect('vehicules');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function supprimer($id)
    {
        try{
            $vehicules = Vehicule::find($id);
            $vehicules->delete();
            return redirect('vehicules');
        }catch(\Exception $e){
            ddd($e);
        }
    }
}
