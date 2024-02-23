@extends('layout.app')

@section('content')
    <div class="container mt- pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <img class="img-fluid" src="{{ asset('images/sign_up.png') }}" alt="sign up illustration">
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" aria-describedby="nom"
                            onkeyup="return fnom();" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="prenom"
                            onkeyup="return fprenom();" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Addresse Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email"
                            onkeyup="return femail();" required>
                        <div id="email" class="form-text">Walahi jamais on va utiliser votre email</div>
                    </div>
                    <div class="mb-3">
                        <label for="addresse" class="form-label">Addresse</label>
                        <input type="address" class="form-control" name="addresse" id="addresse"
                            aria-describedby="addresse" onkeyup="return faddresse();" required>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Tel</label>
                        <input type="tel" class="form-control" name="tel" id="tel" aria-describedby="tel"
                            onkeyup="return ftel();" required>
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="motdepasse" id="motdepasse" aria-describe
                            required="motdepasse" onkeyup="return fmotdepasse();" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-md-6">Vous avez deja un compte ? <a href="{{ route('clientlogin') }}">clikez ici</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const nom = document.querySelector("#nom");
        const prenom = document.querySelector("#prenom");
        const email = document.querySelector("#email");
        const addresse = document.querySelector("#addresse");
        const tel = document.querySelector("#tel");
        const motdepasse = document.querySelector("#motdepasse");
        fnom = () => {
            const nomValue = nom.value.trim();
            if (/^[A-Za-z]{2,}$/.test(nomValue)) {
                nom.setAttribute('class', 'form-control is-valid');
            } else {
                nom.setAttribute('class', 'form-control is-invalid');
            }
        }
        fprenom = () => {
            const prenomValue = prenom.value.trim();
            if (/^[A-Za-z]{2,}$/.test(prenomValue)) {
                prenom.setAttribute('class', 'form-control is-valid');
            } else {
                prenom.setAttribute('class', 'form-control is-invalid');
            }
        }
        femail = () => {
            const emailValue = email.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailPattern.test(emailValue)) {
                email.setAttribute('class', 'form-control is-valid');
            } else {
                email.setAttribute('class', 'form-control is-invalid');
            }
        }

        faddresse = () => {
            const addresseValue = addresse.value.trim();
            const addressePattern = /^[A-Za-z0-9\s]+$/;
            if (addressePattern.test(addresseValue)) {
                addresse.setAttribute('class', 'form-control is-valid');
            } else {
                addresse.setAttribute('class', 'form-control is-invalid');
            }
        }
        ftel = () => {
            const telValue = tel.value.trim();
            const telPattern = /^(\d{2}\s){3}\d{2}$/;
            if (telPattern.test(telValue)) {
                tel.setAttribute('class', 'form-control is-valid');
            } else {
                tel.setAttribute('class', 'form-control is-invalid');
            }
        }
        fmotdepasse = () => {
            const motdepasseValue = motdepasse.value.trim();
            const motdepassePattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            if (motdepassePattern.test(motdepasseValue)) {
                motdepasse.setAttribute('class', 'form-control is-valid');
            } else {
                motdepasse.setAttribute('class', 'form-control is-invalid');
            }
        }
    </script>
@endsection
