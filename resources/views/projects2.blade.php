@extends('layout')

@section('title', 'Mes projets')

@section('content')

<body
    class="antialiased bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="flex flex-col justify-center">
        <div class="flex flex-row m-20">
            <div class="bg-amber-100 dark:bg-amber-100 h-50 w-96 gap-10 m-20 p-20">
                <img src="{{ asset('images/logo_kotlin.png') }}" alt="logo kotlin" style="scale: 10%;">
                <h1>Pixhub</h1>
                <p>app calendrier de film et de séries</p>
                <img>
                <img>
            </div>
            <div class="bg-gray-100 dark:bg-gray-100 h-80 w-96 gap-10 m-20 p-20">
                <h1>Pixhub</h1>
                <p>app de mise a jour de score de matches de foot</p>
                <img>
                <img>
            </div>
        </div>
    </div>


</body>
@endsection