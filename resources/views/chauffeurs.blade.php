@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col s12">
                <h1 class="text-center">
                    <p>LISTES DES CHAUFFEUR</p>
                </h1>
                <hr>
                <div class="text-center">
                    <a href="/ajouter" class=" btn btn-secondary ">Ajouter un chauffeur</a>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}

                    </div>
                @endif
                <table class="table table-responsive table-striped-columns" style="border: 1px solid black">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>tel</th>
                            <th>experience</th>
                            <th>numero permis</th>
                            <th>categorie permis</th>
                            <th>date emission</th>
                            <th>date expiration</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($afficher as $chauffeur)
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $chauffeur->prenom }}</td>
                                <td>{{ $chauffeur->nom }}</td>
                                <td>{{ $chauffeur->adresse }}</td>
                                <td>{{ $chauffeur->tel }}</td>
                                <td>{{ $chauffeur->experience }}</td>
                                <td>{{ $chauffeur->num_permis }}</td>
                                <td>{{ $chauffeur->categorie_permis }}</td>
                                <td>{{ $chauffeur->date_emission }}</td>
                                <td>{{ $chauffeur->date_expiration }}</td>
                                <td>
                                    <a href="/modifier_chauffeur/{{ $chauffeur->id }}" class="btn btn-success">Modifier</a>
                                    <a href="/supprimer_chauffeur/{{ $chauffeur->id }}" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            @php
                                $ide += 1;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
