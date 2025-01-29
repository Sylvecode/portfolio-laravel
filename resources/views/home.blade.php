@extends('layout')

@section('title', 'Portfolio Sylvain Périé')

@section('content')

<div id="welcome" class="dark:text-white transition-colors duration-300 ease-in-out"></div>

<script>
    const message = @json(__('welcome')); // Récupère la clé de traduction
    const target = document.getElementById("welcome");
    let index = 0;

    // Fonction pour afficher la phrase progressivement
    function typeWriter() {
        if (index < message.length) {
            target.textContent += message[index];  // Ajouter une lettre à la fois
            index++;

            // Vérifier si le mode sombre est activé
            if (document.documentElement.classList.contains('dark')) {
                target.style.color = 'white'; // Appliquer la couleur blanche pour le mode sombre
            } else {
                target.style.color = 'black'; // Appliquer la couleur noire pour le mode clair
            }

            setTimeout(typeWriter, 70); // Délai entre chaque lettre (70ms)
        }
    }

    // Lancer l'animation au chargement de la page
    typeWriter();

    // Observer les changements du mode (toggle dark mode)
    const observer = new MutationObserver(() => {
        if (document.documentElement.classList.contains('dark')) {
            target.style.color = 'white'; // Appliquer la couleur blanche en mode sombre
        } else {
            target.style.color = 'black'; // Appliquer la couleur noire en mode clair
        }
    });

    observer.observe(document.documentElement, {
        attributes: true,  // Observer les changements d'attributs (toggle dark mode)
        attributeFilter: ['class'], // Observer uniquement les changements de la classe
    });
</script>

<div class="flex sm:flex sm:justify-center sm:items-center  flex-col">
    <div class="p-6 lg:p-8">
        <div class="flex justify-center">
            <img src="{{ asset('images/profile_pic_sylvain.webp') }}"
                class="imgSylv rounded-full border-10 border-white"
                style="width: 220px; height: 220px; border: 2px solid white; object-fit:cover; object-position: 50% 20%; margin-top:20px;">
        </div>
        <div class="flex justify-center dark:text-white" style="margin-top: 40px">
            <p>{{__('description')}}</p>
        </div>
    </div>

    <div class="flex justify-center m-50 p-6 lg:p-8">
        <div class="mt-16 flex sm:flex sm:justify-center">
            <div class="flex gap-8">
                <div
                    class="w-[350px] h-[200px] scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <a href="{{ url(app()->getLocale() . '/projects') }}">
                        <div class="flex flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="flex justify-start bi bi-book dark:text-white" viewBox="0 0 16 16">
                                <path
                                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                            </svg>
                            <h2 class="flex justify-center mt-3 text-xl font-semibold text-gray-900 dark:text-white">
                                {{__('my projects')}}
                            </h2>

                            <p
                                class="flex justify-center mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Aperçu des projets web que j’ai réalisés
                            </p>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="stroke-red-500 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>

                    </a>
                </div>


                <div
                    class="w-[350px] h-[200px] scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <a href="{{ url(app()->getLocale() . '/about') }}">
                        <div class="flex flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="flex justify-start bi bi-three-dots dark:text-white" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                            </svg>
                            <h2 class="flex justify-center mt-3 text-xl font-semibold text-gray-900 dark:text-white">
                                {{__('about')}}
                            </h2>

                            <p
                                class="flex justify-center mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Pour en savoir plus sur mon parcours
                            </p>
                            <div class="mt-6 flex justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="stroke-red-500 w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>

                        </div>
                    </a>
                </div>


                <div
                    class="w-[350px] h-[200px] scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <a href="{{ url(app()->getLocale() . '/skills') }}">
                        <div class="flex flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="flex justify-start bi bi-boxes dark:text-white" viewBox="0 0 16 16">
                                <path
                                    d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z" />
                            </svg>

                            <h2 class="flex justify-center mt-3 text-xl font-semibold text-gray-900 dark:text-white">
                                {{__('skills')}}
                            </h2>

                            <p
                                class="flex justify-center mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Bagage technique & savoir faire
                            </p>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="stroke-red-500 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>

                    </a>
                </div>

                <div
                    class="w-[350px] h-[200px] scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <a href="{{ url(app()->getLocale() . '/contact') }}">
                        <div class="flex flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="flex justify-start bi bi-envelope dark:text-white" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                            </svg>
                            <h2 class="flex justify-center mt-3 text-xl font-semibold text-gray-900 dark:text-white">
                                {{__('contact')}}
                            </h2>

                            <p class="flex justify-center mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Pour me contacter, c'est ici
                            </p>
                        </div>

                        
                        <div class="mt-6 flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="stroke-red-500 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection