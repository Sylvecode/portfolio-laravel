@extends('layout')

@section('title', 'Pixhub')

@section('content')
<div class="100vh mx-auto">
    <h1 class="flex justify-center text-black dark:text-white text-3xl m-20">Pixhub</h1>
    <p class="flex justify-center text-black dark:text-white m-8">Pixhub est une application mobile android développée
        en Kotlin qui propose un calendrier de films, séries, jeux vidéos, anime au sein d'une même application</p>
    <p class="flex justify-center text-black dark:text-white m-8">Ce projet est découpé en deux parties, un client, qui fait appel à un webservice pour les insertions en base de données. Ce choix a été fait dans l'optique de développer ultérieurement une version web qui réutiliserait ce même webservice.</p>

    <div class="flex items-center gap-20 justify-center flex-row m-20">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/screen2_pixhub.gif') }}"
                class="flex justify-center w-[200px] h-[400px] rounded-md">
            <p class="flex text-black dark:text-white items-center justify-center mt-10">Connexion & Création de compte
            </p>
        </div>
        <div class="flex flex-col items-center mr-20">
            <img src="{{ asset('images/screen_pixhub.gif') }}"
                class="flex justify-center w-[200px] h-[400px] rounded-md">
            <p class="text-black dark:text-white items-center justify-center mt-10">Caroussel des sorties</p>
        </div>

        <div
            class="p-6 flex flex-col justify-center w-[400px] h-[600px] scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <p class="p-2 flex justify-start text-black dark:text-white ">Status : En cours de développement</p>
            <p class="p-2 flex justify-start text-black dark:text-white">Architecture : MVVM</p>
            <ul class="m-2">
                <p class="text-black dark:text-white">Fonctionnalités</p>
                <li class="text-lime-700 dark:text-lime-600">Créer un compte</li>
                <li class="text-lime-700 dark:text-lime-600">Se connecter</li>
                <li class="text-lime-700 dark:text-lime-600">Consulter les sorties films du mois</li>
                <li class="text-lime-700 dark:text-lime-600">Consulter un film</li>
                <li class="text-lime-700 dark:text-lime-600">Consulter un acteur</li>
                <li class="text-gray-600 dark:text-gray-600">Consulter les sorties séries du mois</li>
                <li class="text-gray-600 dark:text-gray-600">Consulter une série</li>
                <li class="text-gray-600 dark:text-gray-600">Consulter les sorties jeux vidéos du mois</li></li>
                <li class="text-gray-600 dark:text-gray-600">Consulter un jeu vidéo</li>
                <li></li>
            </ul>
            <div class="p-8 flex flex-row justify-between items-center">
                <p class="flex justify-start text-black dark:text-white">Github Pixhub Client</p>
                <a target="_blank" href="https://github.com/Sylvecode/PixhubAndroid" class=""><img
                        src="{{ asset('images/logo_githubwhite.png') }}" alt="github logo"
                        class="w-10 h-10 hover:scale-110 dark:block hidden" title="Github"><img
                        src="{{ asset('images/logo_github.png') }}" alt="github logo"
                        class="block dark:hidden w-10 h-10 hover:scale-110"></a>

            </div>
            <div class="p-8 flex flex-row justify-between items-center">
                <p class="flex text-black dark:text-white">Github Pixhub Webservice</p>
                <a target="_blank" href="https://github.com/Sylvecode/PixhubAPI" class=""><img
                        src="{{ asset('images/logo_githubwhite.png') }}" alt="github logo"
                        class="w-10 h-10 hover:scale-110 dark:block hidden" title="Github"><img
                        src="{{ asset('images/logo_github.png') }}" alt="github logo"
                        class="block dark:hidden w-10 h-10 hover:scale-110"></a>
            </div>
        </div>

    </div>



    <div
        class="flex flex-row justify-center gap-20 p-5 text-black dark:text-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 100-vh">
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_intellij.png') }}" alt="logo kotlin"
                class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">IntelliJ</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_android_studio.png') }}" alt="logo kotlin"
                class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">Android Studio</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_jetpackcompose.png') }}" alt="logo kotlin"
                class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">Jetpack Compose</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_kotlin.png') }}" alt="logo kotlin" class="justify-center w-10 h-10 mb-2">
            <p class="flex justify-center">Kotlin</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_springboot.png') }}" alt="logo springboot" class="w-10 h-10 mb-2">
            <p class="">Springboot</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_jpa.png') }}" alt="logo springboot" class="w-10 h-10 mb-2">
            <p class="">JPA</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_hibernate.png') }}" alt="logo springboot" class="w-10 h-10 mb-2">
            <p class="">Hibernate</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_mysql.png') }}" alt="logo springboot" class="w-10 h-10 mb-2">
            <p class="">MySQL</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_figma.svg') }}" alt="logo springboot" class="w-10 h-10 mb-2">
            <p class="">Figma</p>
        </div>

    </div>

</div>
@endsection