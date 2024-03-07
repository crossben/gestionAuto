@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>MODIFIER UN CHAUFFEUR</h1>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                <form Action="/modifier/traitement" method="POST" class="form-group">
                    @csrf
                    <input type="text" name="id" class="form-control text-center" readonly
                        value="{{ $changer->id }}">
                    <div class="form-group">
                        <label for="Prénom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="Prénom" name="prenom"
                            value="{{ $changer->prenom }}">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom"
                            value="{{ $changer->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse"
                            value="{{ $changer->adresse }}">
                    </div>
                    <div class="form-group">
                        <label for="tel class="form-label">Tel</label>
                        <input type="text" class="form-control" id="tel" name="tel"
                            value="{{ $changer->tel }}">
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">experience</label>
                        <input type="text" class="form-control" id="experience" name="experience"
                            value="{{ $changer->experience }}">
                    </div>
                    <div class="form-group">
                        <label for="num_permis" class="form-label">Numero permis</label>
                        <input type="text" class="form-control" id="num_permis" name="num_permis"
                            value="{{ $changer->num_permis }}">
                    </div>
                    <div class="form-group">
                        <label for="date_emission" class="form-label">Date emission</label>
                        <input type="text" class="form-control" id="date_emission" name="date_emission"
                            value="{{ $changer->date_emission }}">
                    </div>
                    <div class="form-group">
                        <label for="date_expiration" class="form-label">Date expiration</label>
                        <input type="text" class="form-control" id="date_expiration" name="date_expiration"
                            value="{{ $changer->date_expiration }}">
                    </div>
                    <div class="form-group">
                        <label for="categorie_permis" class="form-label">Categorie permis</label>
                        <input type="text" class="form-control" id="categorie_permis" name="categorie_permis"
                            value="{{ $changer->categorie_permis }}">
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary">MODIFIER UN CHAUFFEUR</button>
                        <br> <br>
                        <a href="/chauffeurs" class="btn btn-danger">Revenir à la liste des chauffeur</a>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
    </div>
@endsection
