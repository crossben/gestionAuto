<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.locations.location");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lieu_depart' => 'required',
            'lieu_arrivee' => 'required',
            'date' => "required",
            'heure_debut' => "required",
            'heure_fin' => "required",
        ]);

        $location = new Location();
        $location->lieu_depart = $request->nom;
        $location->lieu_arrivee = $request->prenom;
        $location->date = $request->adresse;
        $location->heure_depart = $request->tel;
        $location->heure_fin = $request->experience;
        $location->save();
        return redirect('/locations')->with('status : ', 'la location a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view("auth.locations.locationList");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location = Location::find($id);
        return view('auth.locations.edit_location', ['locations' => $location]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $location = Location::find($id);
        $location = new Location();
        $location->lieu_depart = $request->nom;
        $location->lieu_arrivee = $request->prenom;
        $location->date = $request->adresse;
        $location->heure_depart = $request->tel;
        $location->heure_fin = $request->experience;
        $location->save();

        try {
            $location->save();
            session()->flash('success', 'la location a ete modifier!!');
            return redirect('/locations');
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
            $location = Location::find($id);
            $location->delete();
            return redirect('/locations');
        }catch(\Exception $e){
            ddd($e);
        }
    }
}
