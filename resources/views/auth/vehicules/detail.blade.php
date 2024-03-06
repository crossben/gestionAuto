@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif <br> <br> <br>
                <h1> Caractéristiques de la voiture </h1> <br> <br> <br>
                <div class="pull-right">
                    <table class="table">

                        <head>
                            <tr>
                                <th>Marque</th>
                                <th>Matricule</th>
                                <th>Carburant</th>
                                <th>Type</th>
                                <th>Assurance</th>
                                <th>Numéro assurance</th>
                                <th>Kilométrage</th>
                                <th>Nombre de places</th>
                                <th>Puissance</th>
                                <th>Date de création</th>
                                <th>Action</th>
                            </tr>
                        </head>

                        <body>
                            @foreach ($vehicules as $vehicules)
                                <tr>
                                    <td>{{ $vehicule->marque }} </td>
                                    <td>{{ $vehicule->matricule }} </td>
                                    <td>{{ $vehicule->carburant }} </td>
                                    <td>{{ $vehicule->type }} </td>
                                    <td>{{ $vehicule > assurances }} </td>
                                    <td>{{ $vehicule->numassurances }} </td>
                                    <td>{{ $vehicule->kilometrage }} </td>
                                    <td>{{ $vehicule > nombreplaces }} </td>
                                    <td>{{ $vehicule->puissance }} </td>
                                    <td>{{ $vehicule->created_at }} </td>
                                    <td>
                                        <form action="{{ url('vehicules/' . $vehicule->id) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('vehicules.edit', $vehicule->id) }}"class="btn btn-default">Editer
                                            </a>
                                            <button href="{{ url('vehicules/detail') }}" type="submit"
                                                class="btn btn-danger">Supprimer </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
