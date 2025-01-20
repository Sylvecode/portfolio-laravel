import './bootstrap';

    const themeToggleButton = document.getElementById('theme-toggle');
    const currentTheme = localStorage.getItem('theme');
    
    // Si un thème est déjà stocké, on l'applique
    if (currentTheme) {
        document.documentElement.classList.add(currentTheme);
    }

    // Fonction pour basculer entre les thèmes
    themeToggleButton.addEventListener('click', () => {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light'); // Sauvegarde le mode clair
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark'); // Sauvegarde le mode sombre
        }
    });
