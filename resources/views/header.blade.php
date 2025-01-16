<header
    class="bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <nav class="flex justify-between items-center px-6 py-4">
        <ul class="flex items-center">
            <li>
                <a href="{{ url(app()->getLocale() . '/') }}" class="text-xl font-bold">Portfolio Sylvain Périé</a>
            </li>
        </ul>

        <ul class="flex items-center space-x-10">
            <li><a href="{{ url('https://www.linkedin.com/in/sylvain-p%C3%A9ri%C3%A9-1ba98088/') }}"
                    class="hover:text-blue-500">LinkedIn</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-blue-500">{{__('contact')}}</a></li>

        </ul>
        <ul class="flex space-x-10 gap-10>">
            <li><a href="{{ url('/fr') }}" class="{{ app()->getLocale() === 'fr' ? 'underline' : '' }}"><img
                        src="france_flag.png" class="size-8"></a></li>
            <li><a href="{{ url('/en') }}" class="{{ app()->getLocale() === 'en' ? 'underline' : '' }}"><img
                        src="uk_flag.png" class="size-8"></a></li>
            <li><a href="{{ url('/th') }}" class="{{ app()->getLocale() === 'th' ? 'underline' : '' }}"><img
                        src="th_flag.png" class="size-8"></a></li>

        </ul>
    </nav>
</header>