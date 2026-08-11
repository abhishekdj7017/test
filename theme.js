// js/theme.js

// 1. Theme ko apply karne ka function
function applyTheme() {
    const savedTheme = localStorage.getItem('ht_factory_theme');
    if (savedTheme === 'light') {
        document.body.classList.add('light-theme');
    } else {
        document.body.classList.remove('light-theme');
    }
}

// 2. Button dabane par theme badalne ka function
function toggleTheme() {
    if (document.body.classList.contains('light-theme')) {
        localStorage.setItem('ht_factory_theme', 'dark');
    } else {
        localStorage.setItem('ht_factory_theme', 'light');
    }
    applyTheme();
}

// 3. Jaise hi page load ho, theme apply kar do
document.addEventListener('DOMContentLoaded', applyTheme);

// 4. Sabse Important: Dusre tab/page mein badlav ko turant detect karna
window.addEventListener('storage', (event) => {
    if (event.key === 'ht_factory_theme') {
        applyTheme();
    }
});
