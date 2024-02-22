<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="header"><button class="btn btn-lg btn-primary " type="submit" style="margin-left:94%">Login</button>
    </div>
    <div class="container " style="margin-top: 10%; margin-right:1%; margin-left:30%">
        <form class="form-signin " style="width: 50%;">
            {{-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> --}}
            <h1 class="h3 mb-3 font-weight-normal"><b>Sign in</b></h1>

            <label for="inputName" class="sr-only">Nom</label>
            <input type="text" id="inputName" name="nom" class="form-control" placeholder="Nom" required autofocus>
            <br>
            <label for="inputPrenom" class="sr-only">Prenom</label>
            <input type="text" id="inputPrenom" name="prenom" class="form-control" placeholder="Prenom" required autofocus>
            <br>
            <label for="inputAdress" class="sr-only">Adresse</label>
            <input type="text" id="inputAddress" name="adresse" class="form-control" placeholder="Adresse" required autofocus>
            <br>
            <label for="inputTel" class="sr-only">Tel</label>
            <input type="number" id="inputTel" name="tel" class="form-control" placeholder="Numéro de Téléphone" required
                autofocus>
            <br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <br>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023-2024 </p>
        </form>
    </div>
</body>

</html>
