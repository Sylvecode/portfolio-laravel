@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="mb-20 mt-50 flex justify-center flex-row text-black dark:text-white">


    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <div class="flex flex-col ">
        <h1 class="mx-auto p-10 mt-10 mb-4 text-xl">Vous pouvez me contacter par ici</h1>
        <form action="{{ url(app()->getLocale() . '/send-mail') }}" method="POST"
            class="mx-auto mb-40 p-7 w-[500px] bg-gray-100 border-shadow dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            @csrf
            <label for="name" class="mb-2 text-lg">Nom</label>
            <input type="text" class="mb-10 p-2 bg-gray-300 rounded text-black" id="name" name="name" required>

            <label for="email" class="mb-2 text-lg">E-mail</label>
            <input type="email" class="mb-10 p-2 bg-gray-300 rounded text-black" id="email" name="email" required>

            <label for="message" class="mb-2 text-lg">Message</label>
            <textarea id="message" name="message" rows="5" cols="30"
                class="p-2 bg-gray-300 mb-10 text-lg rounded text-black" required></textarea>

            <button type="submit"
                class="p-2 bg-blue-500 dark:bg-blue-500 w-30 mx-auto m-8 p-2 rounded text-lg ">Envoyer</button>
        </form>
    </div>
    <div class="flex flex-row items-center m-20">
        <h1 class="text-xl m-10">Ou par là : </h1>
        <a href="mailto:sylvain.perie@hotmail.fr" class="text-xl">sylvain.perie@hotmail.fr</a>

    </div>



</div>
@endsection