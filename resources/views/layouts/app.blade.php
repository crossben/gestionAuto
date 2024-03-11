<!DOCTYPE html>
<html>
  <head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">YOBALEMA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('app') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Mes Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('add_location_form') }}">Nouvelle Location</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="map"></div>
    <div class="container">
      <h2>My Rides</h2>
      {{-- <table class="table">
        <thead> --}}
          {{-- <tr>
            <th>Date</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="ride-list">
         <tr>
            <td>18/09/2016</td>
            <td>12:45  AM - Station A</td>
            <td>15:56 PM  - Station B</td>
            <td>En cours</td>
         </tr>
         <tr>
            <td>18/09/2016</td>
            <td>12:45  AM - Station A</td>
            <td>15:56 PM  - Station B</td>
            <td>En cours</td>
         </tr>
         <tr>
            <td>18/09/2016</td>
            <td>12:45  AM - Station A</td>
            <td>15:56 PM  - Station B</td>
            <td>En cours</td>
         </tr>
         <tr>
            <td>18/09/2016</td>
            <td>12:45  AM - Station A</td>
            <td>15:56 PM  - Station B</td>
            <td>En cours</td>
         </tr>
        </tbody>
      </table> --}}

      <div class="container mt-4">
    <div class="d-flex flex-wrap">
        @foreach ($Chauffeur as $chauffeur)
            <div class="card mr-5 mb-3">
                <h5 class="card-title"></h5>
                <div class="card-body bg-info text-white" style="border-radius: 79px; width: 20rem;">
                        <div class="col-md-4 text-center">
                            <img style="width: 12rem; box-shadow: 3px 3px 3px gray; border-radius: 100px" class="card-img-top"
                                src="{{ asset('photos/' . $chauffeur->photo) }}"
                                alt="{{ $chauffeur->nom }}"
                                class="img-fluid rounded-circle" style="max-width: 100%; height:auto;">
                        </div>
                        
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"><h3><strong>{{$chauffeur->prenom}}  {{$chauffeur->nom}}</strong> </h3> </p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"><strong>Adresse:</strong> {{$chauffeur->adresse}} </p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"><strong>Téléphone:</strong> {{$chauffeur->tel}}</p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"> <strong>Expérience:</strong> {{ $chauffeur->experience}}  </p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"> <strong>Numéro Permis</strong> {{ $chauffeur->num_permis}}  </p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"> <strong>Date Emission</strong> {{ $chauffeur->date_emission}}  </p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"> <strong>Date Expiration:</strong> {{ $chauffeur->date_expiration}}  </p>
                    <p class="card-text" style="text-shadow: 3px 3px 3px black"> <strong>Catégorie Permis:</strong> {{ $chauffeur->categorie_permis}}  </p>


                </div>
            </div>
        @endforeach
    </div>
</div>
    </div>
  </body>
</html>