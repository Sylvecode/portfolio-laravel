<header
    class="bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <nav class="flex justify-between items-center px-6 py-4">
        <ul class="flex items-center">
            <li>
                <a href="{{ url(app()->getLocale() . '/') }}" class="text-xl font-bold">Portfolio Sylvain Périé</a>
            </li>
        </ul>

        <ul class="flex items-center space-x-10">
            <li><a target="_blank" href="{{ url('https://www.linkedin.com/in/sylvain-p%C3%A9ri%C3%A9-1ba98088/') }}"
                    class="hover:text-blue-500">LinkedIn</a></li>
            <li><a href="{{ url(app()->getLocale() . '/contact') }}" class="hover:text-blue-500">{{__('contact')}}</a>
            </li>

        </ul>
        <ul class="flex space-x-10">
            <li><a href="{{ url('/fr') }}"><img src="{{ asset('images/france_flag.png') }}"
                        class="p-1 size-10 rounded-full hover:scale-110 {{ app()->getLocale() === 'fr' ? 'border border-solid border-gray-800' : '' }}"></a>
            </li>
            <li><a href="{{ url('/en') }}"><img src="{{ asset('images/uk_flag.png') }}"
                        class="p-1 size-10 rounded-full hover:scale-110 {{ app()->getLocale() === 'en' ? 'border border-solid border-gray-800' : '' }}"></a>
            </li>
            <li><a href="{{ url('/th') }}"><img src="{{ asset('images/th_flag.png') }}"
                        class="p-1 size-10 rounded-full hover:scale-110 {{ app()->getLocale() === 'th' ? 'border border-solid border-gray-800' : '' }}"></a>
            </li>
        </ul>
    </nav>
</header>