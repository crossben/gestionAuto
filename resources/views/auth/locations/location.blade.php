@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <form action="{{ route('location_traitement') }}" method="post">
            @csrf
            <h1>Ajouter une location</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="lieu_depart" class="form-label">Lieu depart</label>
                        <input type="text" name="lieu_depart" id="lieu_depart" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="lieu_arrivee" class="form-label">Lieu arrivee</label>
                        <input type="text" name="lieu_arrivee" id="lieu_arrivee" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="date" class="form-label">Date</label>
                        <input type="text" name="date" id="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="heure_debut" class="form-label">Heure debut</label>
                        <input type="text" name="heure_debut" id="heure_debut" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="heure_fin" class="form-label">Heure fin</label>
                        <input type="text" name="heure_fin" id="heure_fin" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3 pt-3">
                <button type="submit" class="btn btn-primary">valider</button>
            </div>
        </form>
    </div>
@endsection
