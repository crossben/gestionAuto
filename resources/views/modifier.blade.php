@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col s12">
                <h1>MODIFIER UN CHAUFFEUR</h1>
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
                <form Action="/modifier/traitement" method="POST" class="form-group">
                    @csrf
                    <input type="text" name="id" style="diplay: none;" value="{{ $changer->id }}">
                    <div class="form-group">
                        <label for="Prénom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="Prénom" name="prenom"
                            value="{{ $changer->prenom }}">
                    </div>
                    <div class="form-group">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom"
                            value="{{ $changer->nom }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary">MODIFIER UN CHAUFFEUR</button>
                    <br> <br>
                    <a href="/chauffeurs" class="btn btn-danger">Revenir à la liste des chauffeur</a>
                </form>
                <hr>
            </div>
        </div>
    </div>
    </div>
@endsection
