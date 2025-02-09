@extends('layout')

@section('title', 'Foot Passion')

@section('content')
<div class="100vh mx-auto">
    <h1 class="flex justify-center text-black dark:text-white text-3xl m-20">Foot Passion</h1>
    <h2 class="italic flex justify-center text-black dark:text-white m-20">Architecture : MVVM</h2>
    <p class="flex justify-center text-black dark:text-white m-10">Foot Passion est une application mobile android développée en Kotlin qui permet de créer un match, modifier le score, terminer le match et afficher l'historique des matches terminés. Cette app fait appel à mon webservice qui intéragit avec une base de donnée mysql.</p>
    <div
        class="flex flex-row justify-center gap-20 p-10 text-black dark:text-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 100-vh">
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_android_studio.png') }}" alt="logo kotlin"
                class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">Android Studio</p>
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