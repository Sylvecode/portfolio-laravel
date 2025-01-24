@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="flex justify-center flex-col text-black dark:text-white">
<h1 class="mx-auto">Formulaire de Contact</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/send-mail" method="POST" class="mx-auto">
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