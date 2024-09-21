<x-layout>
    <div class="text-center py-20 bg-gray-50 dark:bg-gray-800">
        <h1 class="text-5xl font-bold mb-8 text-gray-900 dark:text-white">
            Welcome to Ismail Sheikh's Portfolio
        </h1>
        <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
            This is the personal website of Ismail Sheikh. Here you can find information about me, my projects, and how to get in touch. I 'm a software developer with a passion for building innovative solutions.  I 'm always looking for new challenges and opportunities to learn and grow. 
        </p>
        <a href="{{ url('/projects') }}" class="mt-6 inline-block bg-primary hover:bg-secondary text-white font-semibold py-2 px-4 rounded-full transition-all">
            View My Projects
        </a>

    </div>
    @vite('resources/css/app.css')
</x-layout>



