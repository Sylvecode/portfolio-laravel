<header
    class="bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white transition-all">
    <nav class="flex justify-between items-center px-6 py-4">
        <ul class="flex items-center">
            <li>
                <a href="{{ url(app()->getLocale() . '/') }}" class="text-xl font-bold dark:text-white">Portfolio
                    Sylvain Périé</a>
            </li>
        </ul>

        <ul class="flex items-center space-x-10">
            <li><a target="_blank" href="{{ url('https://www.linkedin.com/in/sylvain-p%C3%A9ri%C3%A9-1ba98088/') }}"
                    class="hover:text-blue-500 dark:text-white">LinkedIn</a></li>
            <li><a href="{{ url(app()->getLocale() . '/contact') }}"
                    class="hover:text-blue-500 dark:text-white">{{__('contact')}}</a></li>
        </ul>

        <ul class="flex space-x-10">
            <li><a href="{{ url('/fr') }}"><img src="{{ asset('images/france_flag.png') }}"
                        class="p-1 size-10 rounded-full hover:scale-110 {{ app()->getLocale() === 'fr' ? 'border border-solid border-gray-800 dark:border-white' : '' }}"></a>
            </li>
            <li><a href="{{ url('/en') }}"><img src="{{ asset('images/uk_flag.png') }}"
                        class="p-1 size-10 rounded-full hover:scale-110 {{ app()->getLocale() === 'en' ? 'border border-solid border-gray-800 dark:border-white' : '' }}"></a>
            </li>
            <li><a href="{{ url('/th') }}"><img src="{{ asset('images/th_flag.png') }}"
                        class="p-1 size-10 rounded-full hover:scale-110 {{ app()->getLocale() === 'th' ? 'border border-solid border-gray-800 dark:border-white' : '' }}"></a>
            </li>
            <li>
                <button id="theme-toggle">
                    <!-- Icône de la lune (mode sombre) -->
                    <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-moon-stars-fill text-gray-500 dark:hidden" viewBox="0 0 16 16">
                        <path
                            d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                        <path
                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                    </svg>
                    <!-- Icône du soleil (mode clair) -->
                    <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-sun text-yellow-500 dark:block hidden" viewBox="0 0 16 16">
                        <path
                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                    </svg>
                </button>
            </li>
        </ul>
    </nav>
</header>