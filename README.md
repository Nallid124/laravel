# Laravel 11 – Authentification Personnalisée

Une application web développée avec Laravel 11, offrant un système d’authentification sécurisé et une gestion complète des utilisateurs. Ce projet inclut l’inscription, la connexion, la gestion du profil et la protection des sessions.

## ✨ Fonctionnalités

- 🔐 **Création de compte** avec validation des données
- 🔑 **Connexion sécurisée** avec gestion des sessions
- 👤 **Mise à jour du profil utilisateur**
- 📊 **Tableau de bord dynamique**
- 🛡️ **Protection CSRF et sécurité avancée**
- 🚪 **Déconnexion sécurisée** pour protéger les sessions

## 🏗️ Technologies Utilisées

- ⚡ **Laravel 11** – Framework PHP moderne
- 🐘 **PHP 8.1+** – Langage backend
- 🗄️ **MySQL / SQLite** – Gestion de la base de données
- 🎨 **Tailwind CSS** – Pour un design épuré
- 🚀 **ViteJS** – Optimisation du front-end

## 🚀 Installation & Configuration

### 🔻 Étape 1 : Cloner le projet

```bash
git clone https://github.com/utilisateur/mon-projet.git
cd mon-projet
```

### 🔻 Étape 2 : Installer les dépendances

```bash
composer install
npm install
```

### 🔻 Étape 3 : Configurer l’environnement

Créer un fichier `.env` basé sur l’exemple existant :

```bash
cp .env.example .env
```

Configurer la base de données :

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base
DB_USERNAME=root
DB_PASSWORD=
```

Si tu préfères SQLite, remplace par :

```ini
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 🔻 Étape 4 : Générer la clé d’application

```bash
php artisan key:generate
```

### 🔻 Étape 5 : Lancer les migrations

```bash
php artisan migrate
```

### 🔻 Étape 6 : Compiler les fichiers front-end

```bash
npm run build
```

### 🔻 Étape 7 : Démarrer le serveur

```bash
php artisan serve
```

Ton application est maintenant accessible sur [http://127.0.0.1:8000/](http://127.0.0.1:8000/) 🎉

## 🎯 Utilisation du Projet

- 📝 **Inscription** : Accède à `/register` pour créer un compte
- 🔑 **Connexion** : Connecte-toi via `/login`
- 📊 **Tableau de bord** : Interface utilisateur après connexion
- ⚙️ **Profil** : Modifier les informations personnelles sur `/profile`
- 🚪 **Déconnexion** : Sécuriser la session avec le bouton Logout