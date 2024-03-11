@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <h1>Afficahge des locatoins</h1>


<table class="table table-striped">
    @foreach ($location  as $location)
            <thead>
                <tr>
                    <th>lieu depart</th>
                    <th>lieu arrivee</th>
                    <th>date</th>
                    <th>heure debut</th>
                    <th>heure fin</th>
                </tr>
            </thead>
            <div class="tbody">
                <tr>
                    <td>{{$location->lieu_depart}}</td>
                    <td>{{$location->lieu_arrivee}}</td>
                    <td>{{$location->date}}</td>
                    <td>{{$location->heure_debut}}</td>
                    <td>{{$location->heure_fin}}</td>
                </tr>
            </div>
    @endforeach
</table>
    </div>
@endsection
