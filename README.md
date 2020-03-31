## Récupérer le projet  Git
git clone ou download direct

## Créer une base de données :
create database _bddname_  
character set utf8  
collate utf8_general_ci;

## Copier le fichier .env.dev.dist vers .env.dev
et modifier les données.
 (connexion base de données et url du cas et de l'application)

## Lignes de commande
à la racine du projet, exécuter les commandes suivantes :
##### $ composer install
##### $ composer dump-env dev
##### $ php bin/console doctrine:migrations:migrate

## Ajouter votre login dans la table utilisateur de la bdd (laisser l'utilisateur 'test')