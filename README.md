
# Blog en PHP (Flat PHP avec MySQL)

Un projet simple de blog développé en PHP utilisant une architecture **MVC** minimale. Ce blog permet d'afficher, créer, modifier et supprimer des articles. Il utilise **MySQL** pour la base de données et **Bootstrap 5** pour un design moderne et responsive.

## Fonctionnalités

- Afficher une liste des articles.
- Afficher un article spécifique.
- Ajouter un nouvel article.
- Modifier un article existant.
- Supprimer un article avec confirmation.
- Design responsive grâce à Bootstrap.

---

## Prérequis

- PHP >= 7.4
- Serveur Web (Apache, Nginx, etc.)
- MySQL >= 5.7
- PHPMyAdmin (optionnel)
- Navigateur moderne

---

## Installation

1. **Cloner le projet** :

   ```bash
   git clone https://github.com/nom-utilisateur/nom-projet.git
   cd nom-projet
   ```

2. **Créer la base de données** :

   - Importez le fichier SQL pour créer la base de données et la table :

     ```sql
     CREATE DATABASE blog;
     USE blog;

     CREATE TABLE posts (
         id INT AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255) NOT NULL,
         content TEXT NOT NULL,
         created_at DATETIME DEFAULT CURRENT_TIMESTAMP
     );

     INSERT INTO posts (title, content) VALUES
     ('First Post', 'This is the content of the first post.'),
     ('Second Post', 'This is the content of the second post.');
     ```

   - Vous pouvez importer ce fichier via **PHPMyAdmin** ou en ligne de commande.

3. **Configurer les informations de connexion** :

   Modifiez les paramètres de connexion à la base de données dans `model.php` :

   ```php
   $host = 'localhost';
   $dbname = 'blog';
   $username = 'root';
   $password = '';
   ```

4. **Démarrer le serveur** :

   Utilisez le serveur PHP intégré pour tester le projet :

   ```bash
   php -S localhost:8000
   ```

   Accédez ensuite au blog via `http://localhost:8000`.

---

## Structure du projet

```plaintext
.
├── index.php            # Front controller (routeur principal)
├── model.php            # Accès à la base de données (couche modèle)
├── controllers.php      # Actions pour les différentes pages
├── templates/           # Fichiers de présentation (HTML avec Bootstrap)
│   ├── layout.php       # Layout principal (header, footer)
│   ├── list.php         # Page listant tous les articles
│   ├── show.php         # Page affichant un article spécifique
│   ├── create.php       # Formulaire pour ajouter un article
│   └── edit.php         # Formulaire pour modifier un article
└── README.md            # Documentation du projet
```

---

## Routes disponibles

- **`/list` ou `/`** : Affiche la liste des articles.
- **`/show/{id}`** : Affiche un article spécifique.
- **`/create`** : Permet d'ajouter un nouvel article.
- **`/edit/{id}`** : Permet de modifier un article existant.
- **`/delete/{id}`** : Supprime un article après confirmation.

---

## Dépendances

- **[Bootstrap 5](https://getbootstrap.com/)** : Utilisé pour le design.

Les styles et scripts Bootstrap sont chargés directement depuis un CDN, aucune installation supplémentaire n'est nécessaire.

---

## Fonctionnalités futures (Roadmap)

- Ajouter une pagination pour la liste des articles.
- Implémenter une barre de recherche pour filtrer les articles.
- Intégrer un système d'authentification pour protéger les actions d'ajout, modification et suppression.

---

## Contributions

Les contributions sont les bienvenues ! Veuillez soumettre une **pull request** avec une description claire de vos modifications.

---

## Auteur

- **Nom de l'auteur** : ClementRollin
- **Email** : clemrollin01@gmail.com
- **GitHub** : https://github.com/ClementRollin
