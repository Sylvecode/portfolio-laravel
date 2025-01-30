<footer class="flex flex-row justify-center dark:bg-gray-800 dark:border-none">
    <p class="dark:text-gray-200 mr-10">&copy; {{ date('Y') }} Sylvain Périé. {{__('copyright')}}.</p>
    <ul class="flex items-center space-x-10">
            <li><a target="_blank" href="{{ url('https://www.linkedin.com/in/sylvain-p%C3%A9ri%C3%A9-1ba98088/') }}"
                    class="hover:text-blue-500 dark:text-white"><img src="{{ asset('images/logo_linkedin.png') }}"
                        alt="logo LinkedIn" class="w-6 h-6 hover:scale-110" title="LinkedIn"></a></li>
            <li><a target="_blank" href="https://github.com/Sylvecode"><img
                        src="{{ asset('images/logo_githubwhite.png') }}" alt="github logo"
                        class="w-6 h-6 hover:scale-110 dark:block hidden" title="Github"><img
                        src="{{ asset('images/logo_github.png') }}" alt="github logo"
                        class="block dark:hidden w-6 h-6 hover:scale-110"></a></li>
            <li><a target="_blank" href="https://gitlab.com/Sylvecode"><img src="{{ asset('images/logo_gitlab.png') }}"
                        alt="gitlab logo" class="w-6 h-6 hover:scale-110" title="GitLab"></a></li>
            <li><a href="{{ url(app()->getLocale() . '/contact') }}"
                    class="hover:text-blue-500 dark:text-white">{{__('contact')}}</a></li>
        </ul>
</footer>
