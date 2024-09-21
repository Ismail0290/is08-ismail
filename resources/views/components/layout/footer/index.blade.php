<footer class="bg-gray-800 dark:bg-gray-900 py-8">
    <div class="text-center text-gray-500 dark:text-gray-400">
        <div class="mb-2 text-white">
            © 2024 {{ config('site.name') }}. All rights reserved.
        </div>
        <div class="space-x-4">
            <a href="{{ config('site.facebook') }}" class="hover:text-accent transition-colors text-blue-500">Facebook</a>
            <a href="{{ config('site.linkedin') }}" class="hover:text-accent transition-colors text-blue-500">LinkedIn</a>
            <a href="{{ config('site.github') }}" class="hover:text-accent transition-colors text-blue-500">GitHub</a>
            <a href="{{ config('site.twitter') }}" class="hover:text-accent transition-colors text-blue-500">Twitter</a>
        </div>
    </div>
    @vite('resources/css/app.css')
</footer>
