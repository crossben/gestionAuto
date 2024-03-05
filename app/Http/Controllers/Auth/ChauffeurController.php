<?php

namespace App\Http\Controllers\Auth;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChauffeurController extends Controller
{
    public function index()
    {
        $afficher = Chauffeur::all();
        return view('chauffeurs',compact('afficher'));
    }
    public function ajouter_chauffeur()
    {
        return view('ajouter');
    }
    public function ajouter_chauffeur_traitement(Request $request)
    {
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'adresse'=> "required",
            'tel'=> "required",
            'experience'=> "required",
            'num_permis'=> "required",
            'date_emission'=> "required",
            'date_expiration'=> "required",
            'categorie_permis'=> "required"
        ]);

        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->adresse = $request->adresse;
        $chauffeur->tel = $request->tel;
        $chauffeur->experience = $request->experience;
        $chauffeur->num_permis = $request->num_permis;
        $chauffeur->date_emission = $request->date_emission;
        $chauffeur->date_expiration = $request->date_expiration;
        $chauffeur->categorie_permis = $request->categorie_permis;
        $chauffeur->save();

        return redirect('/ajouter')->with('status : ','le chauffeur a été ajouté avec succès.');

    }
    public function rechercher()
    {
        
    }

    public function modifier_chauffeur($id) {
        $changer = Chauffeur::find($id);

        return view('modifier',compact('changer'));
    }
    public function modifier_chauffeur_traitement(Request $request){
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'addresse'=> "required",
            'tel'=> "required",
            'experience'=> "required",
            'num_permis'=> "required",
            'date_expiration'=> "required",
            'date_emsission'=> "required",
            'categorie_permis'=> "required"
        ]);

        
        $chauffeur = Chauffeur::find($request->id);
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->addresse = $request->addresse;
        $chauffeur->tel = $request->tel;
        $chauffeur->experience = $request->experience;
        $chauffeur->num_permis = $request->num_permis;
        $chauffeur->date_expiration = $request->date_expiration;
        $chauffeur->date_emission = $request->date_emission;
        $chauffeur->categorie_permis = $request->categorie_permis;
        $chauffeur->update();

        return redirect('/chauffeurs')->with('status : ','le chauffeur a été modifié avec succès.');

    }
    public function supprimer_apprenant($id){
        $enlever = Chauffeur::find($id);
        $enlever-> delete();
        
        return redirect('/chauffeurs')->with('status : ','le chauffeurs a bien été supprimé.');
    }




}