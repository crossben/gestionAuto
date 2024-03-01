<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Gestion auto') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous" defer>
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>YOBALEMA</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                GESTION CHAUFFEUR
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('add_chauffeur') }}">Ajouter Chauffeur</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>
    


    <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none"
                        href="/" aria-label="Chapiock">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2"
                            viewBox="0 0 118 94" role="img">
                            <title>Chapiock</title>
                            <path />
                        </svg>
                        <span class="fs-5">w3tech-vision</span>
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Toujours vers l'excelence</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Liens Utiles</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/main">Home</a></li>
                        <li class="mb-2"><a href="/Compte">Compte</a></li>
                        <li class="mb-2"><a href="/products">Nos produits</a></li>
                        <li class="mb-2"><a href="/wishlist">Wishlist</a></li>
                        <li class="mb-2"><a href="/auth/login">Login</a></li>
                        <li class="mb-2"><a href="/auth/signin">Signin</a></li>
                        <li class="mb-2"><a href="/setting">Parrametre</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/sitemap">SiteMap</a></li>
                        <li class="mb-2"><a href="/tourGuides">Tour guides</a></li>
                        <li class="mb-2"><a href="/nouveautes">Nouveautes</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Nos Rseaux sociaux</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Facebook</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Twitter</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Instagram</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Linkedin</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">WhatsApp</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Payement acceptes</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Visa</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">MasterCard</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Skrill</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">PayPal</a></li>
                        <li class="mb-2"><a href="contact@w3tech-vision.com" target="_blank"
                                rel="noopener">Bitcoin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div className='row'>
            <div className='col-md-12 text-center'>
                <p><a href="/aboutus" className='text-decoration-none nav-link'>w3tech-vision</a> &copy; Tout
                    Droits Reserves !</p>
            </div>
        </div>
    </footer>
</body>

</html>
