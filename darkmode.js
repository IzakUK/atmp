
        function openNav() {
            document.getElementById("terminusSide").style.width = "20vh";
        }
        function closeNav() {
            document.getElementById("terminusSide").style.width = "0";
        }
        document.addEventListener('DOMContentLoaded', function() {
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;

    // Set default theme to dark mode
    body.classList.add('dark-mode');
    updateThemeToggleButton(true);

    themeToggle.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        const isDarkMode = body.classList.contains('dark-mode');
        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
        updateThemeToggleButton(isDarkMode);
    });

    function updateThemeToggleButton(isDarkMode) {
        themeToggle.textContent = isDarkMode ? '☀️' : '🌙';
        themeToggle.setAttribute('aria-label', isDarkMode ? 'Switch to light mode' : 'Switch to dark mode');
    }

});
