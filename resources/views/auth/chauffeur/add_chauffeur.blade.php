{{-- Formulaire d' Ajout de Chauffeur --}}

<x-guest-layout>
    <form method="POST" action="{{ route('add_chauffeur') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="prenom" :value="__('Prenom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Adresse')" />

            <x-text-input id="adresse" class="block mt-1 w-full"
                            type="text"
                            name="adresse"
                            required autocomplete="adresse" />

        </div>

        <!-- Tel -->
        <div class="mt-4">
            <x-input-label for="tel" :value="__('Tel')" />

            <x-text-input id="tel" class="block mt-1 w-full"
                            type="tel"
                            name="tel" required autocomplete="tel" />

            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>

         <!-- Experience -->
         <div>
            <x-input-label for="experience" :value="__('Expérience')" />
            <x-text-input id="experience" class="block mt-1 w-full" type="text" name="experience" :value="old('experience')" required autofocus autocomplete="experience" />
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>

         <!-- Date emission -->
         <div>
            <x-input-label for="date_emission" :value="__('Date emission')" />
            <x-text-input id="date_emission" class="block mt-1 w-full" type="date" name="date_emission" :value="old('date_emission')" required autofocus autocomplete="date_emission" />
            <x-input-error :messages="$errors->get('date_emission')" class="mt-2" />
        </div>

         <!-- date Expiration -->
         <div>
            <x-input-label for="date_expiration" :value="__('Date Expiration')" />
            <x-text-input id="date_expiration" class="block mt-1 w-full" type="text" name="date_expiration" :value="old('date_expiration')" required autofocus autocomplete="date_expiration" />
            <x-input-error :messages="$errors->get('date_expiration')" class="mt-2" />
        </div>

         <!--Categorie Permis -->
         <div>
            <x-input-label for="categorie_permis" :value="__('Categorie Permis')" />
            <x-text-input id="categorie_permis" class="block mt-1 w-full" type="text" name="categorie_permis" :value="old('categorie_permis')" required autofocus autocomplete="categorie_permis" />
            <x-input-error :messages="$errors->get('categorie_permis')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('add_chauffeur') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


