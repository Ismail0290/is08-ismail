<header class="bg-primary dark:bg-gray-900 py-6 shadow-lg">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            
            <div>
                <a href="{{ url('/') }}" class="text-2xl font-bold text-white dark:text-white hover:text-secondary transition-colors">
                    {{ config('site.name') }}
                </a>
            </div>
           
            <div>
                <ul class="flex space-x-8">
                    <li>
                        <a href="{{ url('/') }}" class="text-white hover:text-secondary transition-colors dark:text-gray-300">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-white hover:text-secondary transition-colors dark:text-gray-300">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/projects') }}" class="text-white hover:text-secondary transition-colors dark:text-gray-300">Projects</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-white hover:text-secondary transition-colors dark:text-gray-300">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <button id="dark-mode-toggle" class="text-white dark:text-gray-300">
                    Change Theme
                </button>
            </div>

            

        </div>
    </nav>
    @vite('resources/css/app.css')
</header>


