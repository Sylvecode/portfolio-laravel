@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="flex justify-center flex-col text-black dark:text-white">
<h1 class="mx-auto">Formulaire de Contact</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/send-mail" method="POST" class="mx-auto p-6 bg-gray-400 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    @csrf
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

    <button type="submit" class="bg-blue-500 dark:bg-blue-500">Envoyer</button>
</form>

</div>
@endsection