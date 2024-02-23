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
                        <label for="email" class="form-label">Addresse Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email"
                            onkeyup="return femail();" required>
                        <div id="email" class="form-text">Walahi jamais on va utiliser votre email</div>
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="motdepasse" id="motdepasse"
                            aria-describe required="motdepasse" onkeyup="return fmotdepasse();" required autofocus>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-md-8">Vous n'avez pas de compte ? <a href="{{ route('clientsignin') }}">clikez ici</a></div>
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

        femail = () => {
            const emailValue = email.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailPattern.test(emailValue)) {
                email.setAttribute('class', 'form-control is-valid');
            } else {
                email.setAttribute('class', 'form-control is-invalid');
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
