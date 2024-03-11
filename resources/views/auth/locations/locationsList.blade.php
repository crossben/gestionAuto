@extends('layout.app')

@section('content')
    <div class="container mt-5 pt-5">
        <h1>Afficahge des locatoins</h1>


        <table class="table table-striped">
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
                    <td>Dakar</td>
                    <td>Rufisque</td>
                    <td>le 12 mars 2013</td>
                    <td>12:45 PM</td>
                    <td>15:45 PM</td>
                </tr>
            </div>
            <tfoot>
                <tr>
                    <th>lieu depart</th>
                    <th>lieu arrivee</th>
                    <th>date</th>
                    <th>heure debut</th>
                    <th>heure fin</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
