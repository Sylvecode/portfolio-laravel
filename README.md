Lancer le projet en mode développement
Pour démarrer le projet, exécutez les commandes suivantes dans deux terminaux séparés :

Lancer le serveur Laravel :
Cette commande démarre le serveur backend de Laravel :

php artisan serve

Par défaut, l'application sera accessible à l'adresse suivante :
http://127.0.0.1:8000



Lancer le serveur de développement Vite :
Cette commande démarre le serveur de développement pour le front-end (CSS et JavaScript) :

npm run dev
Cela permet à Vite de compiler et injecter les styles et scripts automatiquement dans la page.

Accéder à l'application
Une fois les deux serveurs lancés, ouvrez votre navigateur et rendez-vous sur :
http://127.0.0.1:8000

Les modifications apportées aux fichiers Blade, CSS, ou JavaScript seront automatiquement appliquées grâce à Vite.