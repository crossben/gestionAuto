@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col s12">

                <h1>AJOUTER UN CHAUFFEUR</h1>
                <hr>

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
                <form Action={{ route('ajouter_chauffeur_traitement') }} method="POST" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label for="Prénom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="Prénom" name="prenom">
                    </div>

                    <div class="form-group">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tel" class="form-label">Tel</label>
                        <input type="text" class="form-control" id="tel" name="tel">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" class="form-control" id="experience" name="experience">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="num_permis" class="form-label">Numero permis</label>
                        <input type="text" class="form-control" id="num_permis" name="num_permis">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="date_expiration" class="form-label">Date expiration</label>
                        <input type="text" class="form-control" id="date_expiration" name="date_expiration">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="date_emsission" class="form-label">Date emsission</label>
                        <input type="text" class="form-control" id="date_emsission" name="date_emission">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="categorie_permis" class="form-label">Categorie permis</label>
                        <input type="text" class="form-control" id="categorie_permis" name="categorie_permis">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-secondary">AJOUTER UN CHAUFFEUR</button>
                    <br> <br>
                    <a href="/chauffeurs" class="btn btn-danger">Revenir à la liste des chauffeurs</a>
                </form>
                <hr>
            </div>
        </div>
    </div>
@endsection
