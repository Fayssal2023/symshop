# symshop - Backend

Ce document fournit les instructions nécessaires pour configurer et exécuter le backend du projet.

## Description

Ce backend, développé avec Symfony, sert de base pour gérer les interactions serveur nécessaires pour une application front-end.

## Pour commencer

### Prérequis

Assurez-vous d'avoir installé PHP et Composer sur votre machine avant de continuer. Pour les versions spécifiques, référez-vous au fichier `composer.json`.

### Installation

1. **Cloner le dépôt :**  
   Utilisez la commande suivante pour cloner le dépôt Git :

   git clone https://github.com/Fayssal2023/symshop.git

Naviguez dans le dossier du projet :

cd symshop

2. **Installer les dépendances :**  
Ouvrez un terminal dans le dossier du projet et exécutez :

composer install

### Lancement du serveur

Pour lancer le serveur de développement local de Symfony, exécutez la commande suivante dans le répertoire du projet :

php -S localhost:8000 -t public

Cela démarrera le serveur sur `http://localhost:8000`, où l'API sera accessible pour les requêtes.

## Utilisation

### Routes API

#### Récupérer les produits
- **URL** : `/api/products`
- **Méthode** : `GET`
- **Description** : Cette route permet de récupérer la liste des produits depuis une API externe et de renvoyer les données au format JSON.

### Exécution des tests

Pour exécuter les tests unitaires et s'assurer que l'API fonctionne comme prévu, utilisez la commande suivante :

php ./bin/phpunit

Cette commande lancera les tests définis dans `tests/Controller/ProductControllerTest.php`, qui vérifient la réponse réussie de la route `/api/products`.