document.addEventListener('DOMContentLoaded', function() {
    //Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;

    const existingTheme = getTheme('theme');
    if (existingTheme === 'light') {
        body.classList.remove('dark-mode');
        updateThemeToggleButton(false);
    } else {
        // Set default theme to dark mode
        body.classList.add('dark-mode');
        updateThemeToggleButton(true);
    }

    themeToggle.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        const isDarkMode = body.classList.contains('dark-mode');
        timeTheme('theme', isDarkMode ? 'dark' : 'light', 1);
        updateThemeToggleButton(isDarkMode);
    });

    function updateThemeToggleButton(isDarkMode) {
        themeToggle.textContent = isDarkMode ? '☀️' : '🌙';
        themeToggle.setAttribute('aria-label', isDarkMode ? 'Switch to light mode' : 'Switch to dark mode');
    }

    function timeTheme(name, value, hours) {
        const date = new Date();
        date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); 
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getTheme(name) {
        name = name + "=";
        const decodedCookie = decodeURIComponent(document.cookie);
        const cookieArr = decodedCookie.split(';');
        for (let i = 0; i < cookieArr.length; i++) {
            let c = cookieArr[i].trim();
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
});
