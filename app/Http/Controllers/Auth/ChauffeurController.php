<?php

namespace App\Http\Controllers\Auth;

use App\Models\Chauffeur;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.add_chauffeur');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'], 
            'prenom' => ['required', 'string', 'max:255'], 
            'adresse' => ['required', 'string', 'max:255',],
            'experience' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:255'],
            'num_permis' => ['required', 'string', 'max:255'],
            'date_emission' => ['required', 'string', 'max:255'],
            'date_expiration' => ['required', 'string', 'max:255'],
            'categorie_permis' => ['required', 'string', 'max:255'],
        ]);

        $user = Chauffeur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'experience' => $request->experience,
            'tel' => $request->tel,
            'num_permis' => $request->num_permis,
            'date_emission' => $request->date_emission,
            'date_expiration' => $request->date_expiration,
            'categorie_permis' => $request->categorie_permis,
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chauffeur $chauffeur)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chauffeur $chauffeur)
    {
        //
    }
}
