# Symfony

[Symfony Doc](https://symfony.com/doc/current/index.html)

Entrer dans notre container php : `symfony exec -it symfony-php bash`

Lister toutes les routes de votre application symfony : `symfony console debug:router`

Installation du **maker-bundle** : `composer require symfony/maker-bundle`

Création d'un **controller** avec **maker-bundle** : `symfony console make:controller` ou `composer bin/console make:controller`

[Twig Docs](https://twig.symfony.com/)

- Démarrer le server symfony : `symfony.exe server:start`
- Démarrer le server symfony en tache de fond : `symfony.exe server:start -d`
- Arreter le server symfony : `symfony.exe server:stop`
- Lister les servers symfony lancés : `symfony.exe server:list`


composer install
symfony console doctrine:database:create
symfony console doctrine:migration:make
symfony console doctrine:fixtures:load