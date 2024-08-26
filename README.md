# Projet de Gestion de Jeux Vidéo

## But du Projet

Ce projet vise à développer une application web permettant aux utilisateurs de gérer leur collection de jeux vidéo. Ils pourront ajouter, consulter, modifier et supprimer des jeux tout en stockant des informations telles que le nom, la maison d'édition, une image associée et une note sur 10.

## Cadre de Développement

Ce projet a été réalisé dans le cadre du cursus de Bachelor 1 à Rennes Ynov Campus. Il s'agit d'un projet académique à rendre avant le 24/05/2024, réalisé en collaboration entre Enzo Turpin et Adrien Derrey.

## Stack Technique

- **Langage** : PHP (Backend)
- **Style** : CSS
- **Base de Données** : MySQL (local)

## Instructions d'Installation

Voici une version modifiée de votre texte :

1. **Pré-requis** : Assurez-vous d'avoir installé un serveur web local tel que XAMPP, WAMP, ou MAMP.
2. **Création de la base de données** : Avant d'importer, créez d'abord une base de données nommée `jeux_video` dans phpMyAdmin (ou un outil similaire) via votre serveur local.
3. **Importation de la base de données** : Une fois la base de données créée, importez-y le fichier SQL fourni dans le projet.
4. Clonez ce dépôt Git dans le dossier `htdocs` de votre installation XAMPP (ou le dossier approprié pour WAMP/MAMP) :
   ```bash
   git clone https://github.com/EnzoTurpin/Jeux-video.git
   ```
5. Assurez-vous que le dossier `img` existe dans le répertoire du projet et qu’il dispose des permissions adéquates (chmod 777 pour Unix/Linux).
6. Modifiez le fichier `db.php` dans le répertoire `config` pour qu'il corresponde à vos paramètres de connexion à la base de données locale.
7. Lancez votre serveur web et accédez à l'application via l'URL suivante : `http://localhost/<projet>/index.php`, en remplaçant `<projet>` par le nom du dossier contenant le projet dans `htdocs`.

## Utilisation de l'Application

Une fois sur la page d'accueil "My Video Game List", vous pouvez :

1. **Ajouter un nouveau jeu :**

   - Cliquez sur le bouton "Nouveau".
   - Remplissez les champs (nom, maison d'édition, image en local, et note sur 10).
   - Cliquez sur "Ajouter" pour sauvegarder le jeu dans la base de données.

2. **Modifier un jeu existant :**

   - Cliquez sur "Edit" à côté du jeu que vous souhaitez modifier.
   - Apportez les modifications nécessaires, puis cliquez sur "Update".

3. **Supprimer un jeu :**
   - Cliquez sur "Delete" à côté du jeu que vous souhaitez supprimer. **Attention** : Cette action est irréversible.

Dans de futures mises à jour, nous prévoyons d'ajouter des fonctionnalités de tri et de recherche pour faciliter la gestion de vos jeux.

Merci pour votre temps, nous espérons que vous apprécierez utiliser cette base de données.
