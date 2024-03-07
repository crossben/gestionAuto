@extends('layout.app')

@section('content')
    <div class ="container">
        <div class="jumbotron jumbotron-fluid bd-danger">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-4">VEHICULES</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ url('vehicules/' . $vehicules->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Marque: </label>
                            <input type="text" name="marque" class="form-control" value="{{ $vehicules->marque }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Couleur: </label>
                            <input type="text" name="couleur" class="form-control" value="{{ $vehicules->couleur }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Matricule: </label>
                            <input type="text" name="matricule" class="form-control" value="{{ $vehicules->matricule }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Modele: </label>
                            <input type="text" name="modele" class="form-control" value="{{ $vehicules->modele }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Carburant: </label>
                            <input type="text" name="carburant" class="form-control" value="{{ $vehicules->carburant }}">
                            <br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Type: </label>
                            <input type="text" name="type" class="form-control" value="{{ $vehicules->type }}">
                            <br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Assurance: </label>
                            <input type="text" name="assurances" class="form-control"
                                value="{{ $vehicules->assurances }}"> <br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Numero assurance: </label>
                            <input type="text" name="numassurances" class="form-control"
                                value="{{ $vehicules->numassurances }}"> <br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Nombre places: </label>
                            <input type="text" name="nombreplaces" class="form-control"
                                value="{{ $vehicules->nombreplaces }}"> <br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Kilométrage: </label>
                            <input type="text" name="kilometrage" class="form-control"
                                value="{{ $vehicules->kilometrage }}"> <br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label> Puissance: </label> <br>
                            <input type="text" name="puissance" class="form-control" value="{{ $vehicules->puissance }}">
                            <br><br>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-danger "> Modifier </button>
                            <br> <br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
