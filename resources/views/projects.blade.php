@extends('layout')

@section('title', 'Mes projets')

@section('content')
<body class="antialiased bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">

            <div class="mt-16 h-20 bg-black">
                <div class="">
                    <div class="Pixhub" style="height: 200px; width:200px; margin:50px;">
                    <a href="{{ url('/projects') }}"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full m-10">
                                <img src="logo_kotlin.png" alt="logo kotlin" style="scale: 70%;">
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Pixhub</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                App mobile android calendrier des sorties cinéma, séries, jv, anime.
                            </p>
                            <img src="screen_frequencies.jpg" style="scale: 50%; margin: 20px">
                            <img src="logo_github.png" class="flex justify-end "
                                style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                    </div>
                    

                    <a href="https://laracasts.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="logo_kotlin.png" alt="logo kotlin" style="scale: 70%;">
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Foot Passion</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Application mobile android de mise à jour de matches de foot.
                            </p>
                            <img src="screen_foot_passion.jpg" style="scale: 100%; margin: 20px">
                            <img src="logo_github.png" class="flex justify-end "
                                style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laracasts.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="logo_php.png" alt="logo kotlin" style="scale: 90%;">
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Exercices PHP</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Exercices CRUD en php. Session, cookies, bootstap.
                            </p>
                            <img src="logo_github.png" class="flex justify-end "
                                style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laravel-news.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="logo_wordpress.png">
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Animalin</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Site wordpress fictif d'une boutique de vente en ligne de chiens et chats de race.
                            </p>
                            <img src="screen_animalin.jpg" style="scale: 110%; margin: 20px">
                            <img src="logo_github.png" class="flex justify-end "
                                style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>



                    <a href="https://easyupload.jedeploiemonappli.com/"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="logo_php.png" alt="logo kotlin" style="scale: 90%;">
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">EasyUpload</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Participation au projet collaboratif EasyUpload, site de transfert de fichiers.
                            </p>
                            <img src="screen_easyupload.jpg" style="scale: 110%; margin: 20px">
                            <img src="logo_github.png" href="https://github.com/Sylvecode/EasyUpload"
                                class="flex justify-end " style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://frequencies.fr/"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="logo_react.png" alt="logo kotlin" style="scale: 90%;">
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Frequencies.fr</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Participation au développement du site web Frequencies.fr lors de mon stage de fin
                                d'études.
                            </p>
                            <img src="screen_frequencies.jpg" style="scale: 110%; margin: 20px">
                            <img src="logo_github.png" class="flex justify-end "
                                style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laravel-news.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="logo_js.png" alt="logo kotlin" style="scale: 90%;">
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Discord Bot Pokémon
                            </h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Bot discord qui donne les codes de distribution Pokémon. Script Javascript de
                                webscrapping de page Poképédia.
                            </p>
                            <img src="screen_pokecodes.jpg" style="scale: 110%; margin: 20px">
                            <img src="logo_github.png" class="flex justify-end "
                                style="width: 40px; height: 40px; opacity: 90%; margin: 20px">
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection