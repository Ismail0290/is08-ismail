document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const body = document.body;

    // Toggle the dark class on the body when the button is clicked
    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark');
        
        // Save the theme in localStorage
        if (body.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // On page load, apply the theme based on localStorage value
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark');
    } else {
        body.classList.remove('dark');
    }
});

