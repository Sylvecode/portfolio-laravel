@extends('layout')

@section('title', 'Mes projets')

@section('content')

<body
    class="antialiased bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="mt-10 flex flex-col justify-center p-6 lg:p-8 gap-10">
        <div class="flex flex-row gap-10 justify-center">
            <div class="flex flex-row gap-10">
                <a href="{{ url(app()->getLocale() . '/projects') }}"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-[700px] h-[500px]">
                    <div class="h-16 w-full flex items-center">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/logo_kotlin.png') }}" alt="logo kotlin" class="w-10 h-10">
                            <img src="{{ asset('images/logo_springboot.png') }}" alt="logo springboot"
                                class="w-10 h-10">
                        </div>
                        <div class="flex ml-auto">
                            <img src="{{ asset('images/logo_github.png') }}" alt="GitHub Logo"
                                class="flex w-10 h-10 opacity-90">
                        </div>
                    </div>

                    <h2 class="flex text-xl font-semibold text-gray-900 dark:text-white justify-center">Pixhub</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                        Application mobile android calendrier des sorties cinéma, séries, jv, anime.
                    </p>
                    <div class="mt-4 mx-auto">
                        <img src="{{ asset('images/screen_pixhub.jpg') }}" class="w-[150px] h-[300px] rounded-md">
                    </div>

                </a>
            </div>
            <div class="flex flex-row gap-10 justify-center">
                <a href="{{ url(app()->getLocale() . '/projects') }}"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-[700px] h-[500px]">
                    <div class="h-16 w-full flex items-center">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/logo_kotlin.png') }}" alt="logo kotlin" class="w-10 h-10">
                            <img src="{{ asset('images/logo_springboot.png') }}" alt="logo springboot"
                                class="w-10 h-10">
                        </div>
                        <div class="flex ml-auto">
                            <img src="{{ asset('images/logo_github.png') }}" alt="GitHub Logo"
                                class="w-10 h-10 opacity-90">
                        </div>
                    </div>

                    <h2 class="flex text-xl font-semibold text-gray-900 dark:text-white justify-center">Foot Passion
                    </h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                        Application mobile android de mise à jour de matches de foot.
                    </p>

                    <div class="mt-4">
                        <img src="{{ asset('images/screen_foot_passion.jpg') }}"
                            class="w-full h-[300px] object-cover rounded-md">
                    </div>

                </a>

            </div>
        </div>
        <div class="flex flex-row gap-10 justify-center">
            <div class="flex flex-row gap-10">
                <a href="{{ url(app()->getLocale() . '/projects') }}"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-[700px] h-[500px]">
                    <div class="h-16 w-full flex items-center">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/logo_wordpress.png') }}" alt="logo kotlin" class="w-14 h-14">
                        </div>
                        <div class="flex ml-auto">
                            <img src="{{ asset('images/logo_github.png') }}" alt="GitHub Logo"
                                class="flex w-10 h-10 opacity-90">
                        </div>
                    </div>

                    <h2 class="flex text-xl font-semibold text-gray-900 dark:text-white justify-center">Animalin</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                        Boutique en ligne fictive de vente de chiens et chats de race.
                    </p>
                    <div class="mt-4">
                        <img src="{{ asset('images/screen_animalin.jpg') }}"
                            class="w-full h-[300px] object-cover rounded-md">
                    </div>

                </a>
            </div>
            <div class="flex flex-row gap-10 justify-center">
                <a href="{{ url(app()->getLocale() . '/projects') }}"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-[700px] h-[500px]">
                    <div class="h-16 w-full flex items-center">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/logo_react.png') }}" alt="logo kotlin" class="w-11 h-10">
                            <img src="{{ asset('images/logo_typescript.png') }}" alt="logo springboot"
                                class="w-10 h-10">
                        </div>
                        <div class="flex ml-auto">
                            <img src="{{ asset('images/logo_github.png') }}" alt="GitHub Logo"
                                class="w-10 h-10 opacity-90">
                        </div>
                    </div>

                    <h2 class="flex text-xl font-semibold text-gray-900 dark:text-white justify-center">Frequencies
                    </h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                        Participation au développement du site Frequencies lors de mon stage de fin d'études chez
                        Frequencies
                    </p>

                    <div class="mt-4">
                        <img src="{{ asset('images/screen_frequencies.jpg') }}"
                            class="w-full h-[300px] object-cover rounded-md">
                    </div>

                </a>

            </div>
        </div>
        <div class="flex flex-row gap-10 justify-center">
            <div class="flex flex-row gap-10">
                <a href="{{ url(app()->getLocale() . '/projects') }}"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-[700px] h-[500px]">
                    <div class="h-16 w-full flex items-center">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/logo_php.png') }}" alt="logo kotlin" class="w-13 h-10">
                            <img src="{{ asset('images/logo_js.png') }}" alt="logo springboot" class="w-11 h-11">
                        </div>
                        <div class="flex ml-auto">
                            <img src="{{ asset('images/logo_github.png') }}" alt="GitHub Logo"
                                class="flex w-10 h-10 opacity-90">
                        </div>
                    </div>

                    <h2 class="flex text-xl font-semibold text-gray-900 dark:text-white justify-center">EasyUpload</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                        Participation au projet open source EasyUpload. Site de transfert de fichiers.
                    </p>
                    <div class="mt-4">
                        <img src="{{ asset('images/screen_easyupload.jpg') }}"
                            class="w-full h-[300px] object-cover rounded-md">
                    </div>

                </a>
            </div>
            <div class="flex flex-row gap-10 justify-center">
                <a href="{{ url(app()->getLocale() . '/projects') }}"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-[700px] h-[500px]">
                    <div class="h-16 w-full flex items-center">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/logo_js.png') }}" alt="logo kotlin" class="w-11 h-11">
                        </div>
                        <div class="flex ml-auto">
                            <img src="{{ asset('images/logo_github.png') }}" alt="GitHub Logo"
                                class="w-10 h-10 opacity-90">
                        </div>
                    </div>

                    <h2 class="flex text-xl font-semibold text-gray-900 dark:text-white justify-center">PokéCodes
                    </h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                        Bot Discord distribuant les codes pokémon actuellement en distribution. Script JS de
                        webscrapping
                    </p>

                    <div class="mt-4">
                        <img src="{{ asset('images/screen_pokecodes.jpg') }}"
                            class="w-full h-[300px] object-cover rounded-md">
                    </div>

                </a>

            </div>
        </div>
</body>
@endsection