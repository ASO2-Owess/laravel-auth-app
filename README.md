Voici le contenu du README pour le Projet 1.

Ouvre `README.md` à la racine du projet et remplace tout le contenu par ceci :

````markdown
# Laravel Auth App

Application web d'authentification complète construite avec Laravel 11.
Projet 1 d'une série de 4 projets Laravel couvrant les fonctionnalités
les plus demandées en entretien d'embauche.

## Fonctionnalités

- Inscription avec validation et confirmation de mot de passe
- Connexion avec gestion des erreurs
- Déconnexion sécurisée
- Page protégée par middleware auth
- Messages flash de succès et d'erreur
- Interface responsive en CSS pur

## Stack technique

- PHP 8.2+
- Laravel 11
- MySQL
- Blade (moteur de templates)
- CSS pur (sans framework)

## Prérequis

- PHP 8.2 ou supérieur
- Composer
- MySQL (XAMPP ou Laragon)
- Git

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/ASO2-Owess/laravel-auth-app.git
cd laravel-auth-app
```
````

### 2. Installer les dépendances

```bash
composer install
```

### 3. Configurer l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Ouvre `.env` et configure ta base de données :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_auth_app
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Créer la base de données

Crée une base de données appelée `laravel_auth_app` dans phpMyAdmin
ou via la commande :

```bash
mysql -u root -e "CREATE DATABASE laravel_auth_app"
```

### 5. Lancer les migrations

```bash
php artisan migrate
```

### 6. Démarrer le serveur

```bash
php artisan serve
```

L'application est accessible sur `http://localhost:8000`.

## Structure du projet

```
laravel-auth-app/
├── app/
│   └── Http/
│       └── Controllers/
│           └── AuthController.php   # Logique auth complète
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Layout principal
│       ├── auth/
│       │   ├── login.blade.php      # Page de connexion
│       │   └── register.blade.php   # Page d'inscription
│       └── dashboard.blade.php      # Page protégée
├── routes/
│   └── web.php                      # Toutes les routes
└── database/
    └── migrations/                  # Migration users
```

## Routes disponibles

| Méthode | URL        | Description            | Protection |
| ------- | ---------- | ---------------------- | ---------- |
| GET     | /login     | Page de connexion      | Public     |
| POST    | /login     | Traitement connexion   | Public     |
| GET     | /register  | Page d'inscription     | Public     |
| POST    | /register  | Traitement inscription | Public     |
| POST    | /logout    | Déconnexion            | Auth       |
| GET     | /dashboard | Tableau de bord        | Auth       |

## Concepts couverts

**Routing** — Routes GET et POST, nommage des routes, redirection.

**Controller** — Validation des données, Auth::attempt(), Hash::make(),
gestion de session.

**Middleware** — Protection des routes avec le middleware `auth` intégré
de Laravel 11.

**Blade** — Layout avec @extends et @yield, directives @auth, @csrf,
messages flash, old().

**Sécurité** — Mots de passe chiffrés en bcrypt, protection CSRF,
régénération de session, invalidation à la déconnexion.

## Projets de la série

| #   | Projet       | Dépôt    | Concepts                      |
| --- | ------------ | -------- | ----------------------------- |
| 1   | Auth App     | ce dépôt | Auth, Session, Middleware     |
| 2   | Products App | bientôt  | Relations, Upload, Pagination |
| 3   | Tasks App    | bientôt  | Policy, Scopes, Enum          |
| 4   | Blog App     | bientôt  | Rôles, Slugs, Commentaires    |

## Auteur

AKPA SALOMON OWESS
