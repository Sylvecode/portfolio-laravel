@extends('layout')

@section('title', 'Mes projets')

@section('content')
<div class="mt-10 flex flex-col justify-center p-6 lg:p-8 gap-10">
    <div class="flex flex-wrap justify-center gap-10">
        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/pixhub') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_kotlin.png') }}" alt="logo kotlin" class="w-10 h-10">
                        <img src="{{ asset('images/logo_springboot.png') }}" alt="logo springboot" class="w-10 h-10">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">Pixhub</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">{{__('pixhub_description')}}</p>
                <div class="mt-4 mx-auto">
                    <img src="{{ asset('images/screen_pixhub.jpg') }}" class="w-[150px] h-[300px] rounded-md border-solid border-2">
                </div>
            </a>
        </div>

        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/footpassion') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_kotlin.png') }}" alt="logo kotlin" class="w-10 h-10">
                        <img src="{{ asset('images/logo_springboot.png') }}" alt="logo springboot" class="w-10 h-10">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">Foot Passion</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">Application mobile android de mise à jour de matches de foot.</p>
                <div class="mt-4 mx-auto">
                    <img src="{{ asset('images/screen_foot_passion.webp') }}" class="w-[450px] h-[300px] object-cover rounded-md">
                </div>
            </a>
        </div>
    </div>

    <div class="flex flex-wrap justify-center gap-10">
        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/sylvainperie') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_php.png') }}" alt="logo php" class="w-13 h-10">
                        <img src="{{ asset('images/logo_laravel.svg') }}" alt="logo laravel" class="w-11 h-11">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">sylvainperie.com</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">Mon portfolio en ligne</p>
                <div class="mt-4">
                    <img src="{{ asset('images/screen_portfolio.png') }}" class="w-full h-[300px] object-cover rounded-md">
                </div>
            </a>
        </div>

        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/animalin') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_wordpress.png') }}" alt="logo wordpress" class="w-14 h-14">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">Animalin</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">Boutique en ligne fictive de vente de chiens et chats de race.</p>
                <div class="mt-4">
                    <img src="{{ asset('images/screen_animalin.jpg') }}" class="w-full h-[300px] object-cover rounded-md">
                </div>
            </a>
        </div>
    </div>

    <div class="flex flex-wrap justify-center gap-10">
        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/frequencies') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_react.png') }}" alt="logo react" class="w-11 h-10">
                        <img src="{{ asset('images/logo_typescript.png') }}" alt="logo typescript" class="w-10 h-10">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">Frequencies</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">Participation au développement du site Frequencies lors de mon stage de fin d'études chez Frequencies</p>
                <div class="mt-4">
                    <img src="{{ asset('images/screen_frequencies.jpg') }}" class="w-full h-[300px] object-cover rounded-md">
                </div>
            </a>
        </div>

        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/easyupload') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_php.png') }}" alt="logo php" class="w-13 h-10">
                        <img src="{{ asset('images/logo_js.png') }}" alt="logo js" class="w-13 h-11">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">EasyUpload</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">Participation au projet open source EasyUpload. Site de transfert de fichiers.</p>
                <div class="mt-4">
                    <img src="{{ asset('images/screen_easyupload.jpg') }}" class="w-full h-[300px] object-cover rounded-md">
                </div>
            </a>
        </div>
    </div>

    <div class="flex flex-col gap-10 justify-center items-center">
        <div class="flex flex-col w-full sm:w-[700px] md:w-[650px] lg:w-[700px] h-[500px]">
            <a href="{{ url(app()->getLocale() . '/') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="h-16 w-full flex items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('images/logo_js.png') }}" alt="logo js" class="w-13 h-10">
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center">PokéCodes</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">Bot Discord affichant les codes pokémon actuellement en distribution. Script Javascript de webscrapping</p>
                <div class="flex mt-4 justify-center items-center">
                    <img src="{{ asset('images/screen_pokecodes.jpg') }}" class="w-[400px] h-[300px] object-cover rounded-md">
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
