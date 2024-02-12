# Contenu

    - Une archive des fichiers du site.
    - La base de données "mvc" au format SQL prête à être importée.

# Structure

## 1. Racine

    - Le routeur index.php
    - La règle de réécriture pour index.php dans le .htaccess
    - Le fichier mvc.sql (à supprimer ou déplacer après usage)
    - Le fichier readme.md (à supprimer ou déplacer après usage)

## 2. app

Ce répertoire contient les deux classes de base du Model View Controller.
En premier lieu Controller.php qui s'occupe d'appler le modèle et la vue.
En second, Model.php qui s'occupe de la connexion à la BdD et récupère les éléments dans la base individuellement ou collectivement.

## 3. controllers

Vous trouverez ici l'ensemble des contrôleurs du site qui gèrent les particularités de chacune des catégories d'éléments que le site affiche : articles, le carousel humoristique ainsi que la page d'arrivée sur le site.

## 4. models

Ce répertoire contient toutes les adaptations nécessaires à chaque modèle utilisé par les différents contrôleurs.
Il y a Article et Carousel dans notre cas. Chacun précise par exemple la table dans laquelle se trouve les informations à renvoyer au contrôleur pour la vue.

## 5. views

Cette fois-ci on y trouve l'ensemble des vues et des "render" appelés par le contrôleur selon ce que le routeur a indiqué. On retrouve donc dans chaque répertoire associé à un contrôleur, un index pour l'affichage par défaut puis pour chaque méthode spécifique un afficheur dédié. Par exemple lire pour afficher un article tout seul.

### 5.1 main
    
    C'est un sous-répertoire pour l'affichage de la page principale de notre site.

### 5.2 layout

    Ce répertoire contient toute l'ossature du site, à savoir les entêtes HTML, les inclusions de styles, scripts, header, footer, que l'on retrouve partout sur le site.
    Les méthodes render des contrôleurs remplissent à ce stade une variable ** $content ** qui est utilisée par layout pour afficher le contenu de la vue active.

## 6. media

C'est là qu'on met toutes les images, vidéos, sons et autres médias utiles à notre site.
