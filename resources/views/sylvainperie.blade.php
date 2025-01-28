@extends('layout')

@section('title', 'sylvainperie.com')

@section('content')
<div class="100vh mx-auto">
    <h1 class="flex justify-center text-black dark:text-white text-3xl m-20">sylvainperie.com</h1>
    <h2 class="italic flex justify-center text-black dark:text-white m-20">Architecture : MVC</h2>
    <p class="flex  text-black dark:text-white m-10">Portfolio en ligne</p>

    <ul class="m-[30px] flex justify-center flex-col text-black dark:text-white">
        <li>Mise en place Mode Clair & Sombre</li>
        <li>Traductions en 3 langues différentes</li>
        <li>Formulaire de contact & config serveur SMTP</li>
    </ul>
    <div
        class="flex flex-row justify-center gap-20 p-10 text-black dark:text-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 100-vh">
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_php.png') }}" alt="logo php" class="justify-center w-13 h-11 mb-2">
            <p class="flex justify-center">PHP</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_laravel.svg') }}" alt="logo laravel" class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">Laravel</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_vite.png') }}" alt="logo vite" class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">Vite</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_js.png') }}" alt="logo js" class="justify-center w-11 h-11 mb-2">
            <p class="flex justify-center">Javascript</p>
        </div>
        <div class="flex flex-col m-4 items-center justify-center hover:scale-110">
            <img src="{{ asset('images/logo_tailwindcss.png') }}" alt="logo kotlin"
                class="justify-center w-12 h-10 mb-2">
            <p class="flex justify-center">Tailwind CSS</p>
        </div>
    </div>

</div>
@endsection