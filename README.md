# Medium Clone

A full-stack, Medium-like blogging platform built with Laravel, Vite, and Tailwind CSS. This project replicates core
features of Medium, providing a clean and modern interface for reading and writing articles.

## About The Project

This repository contains a web application inspired by the popular blogging platform, Medium. It is built using the
Laravel framework for the backend and styled with Tailwind CSS for the frontend, with assets compiled by Vite. The
primary goal is to demonstrate a robust, full-stack application with essential blogging functionalities.

### Built With

* **Backend:** PHP, Laravel 12
* **Frontend:** Vite, Tailwind CSS, Alpine.js
* **Authentication:** Laravel Breeze
* **Database:** SQLite (default), MySQL, PostgreSQL

## Key Features

* **User Authentication:** Secure user registration, login, email verification, and password reset functionality.
* **Profile Management:** Users can update their profile information, including name, username, bio, and avatar/profile
  picture.
* **Post Management (CRUD):**
    * Create, read, and publish articles.
    * A rich text editor for writing content.
    * Ability to upload a feature image for each post.
* **Categorization:** Assign categories to posts for better organization and discovery.
* **Dynamic Feed:** A main dashboard that displays a paginated feed of all published posts.
* **SEO-Friendly URLs:** Clean, Medium-style URLs for user profiles and posts (e.g., `/@username/post-slug`).
* **Read Time Calculation:** Automatically calculates and displays the estimated reading time for each article.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing
purposes.

### Prerequisites

Make sure you have the following installed on your system:

* PHP 8.2+
* Composer
* Node.js & NPM

### Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/SkyLestor/medium-clone.git
   ```

2. **Navigate to the project directory:**
   ```sh
   cd medium-clone
   ```

3. **Install PHP dependencies:**
   ```sh
   composer install
   ```

4. **Create your environment file:**
   ```sh
   cp .env.example .env
   ```

5. **Generate an application key:**
   ```sh
   php artisan key:generate
   ```

6. **Configure your `.env` file:**
   Set up your database connection. By default, the application is configured to use SQLite. To use it, simply create
   the database file:
   ```sh
   touch database/database.sqlite
   ```

7. **Run database migrations and seed the database:**
   This will create the necessary tables and populate the database with initial categories and a test user.
   ```sh
   php artisan migrate --seed
   ```

8. **Install JavaScript dependencies:**
   ```sh
   npm install
   ```

9. **Build frontend assets:**
   ```sh
   npm run build
   ```

10. **Link the storage directory:**
    This makes uploaded files (like avatars and post images) publicly accessible.
    ```sh
    php artisan storage:link
    ```

## Usage

To start the local development server, along with the Vite server for hot-reloading and the queue listener, you can use
the `dev` script from `composer.json`.

```sh
composer run dev
```

This will concurrently run:

* The Laravel development server (default: `http://127.0.0.1:8000`)
* The Vite development server for frontend assets.
* The Laravel queue listener.

You can now access the application in your browser. A default user is created by the seeder with the following
credentials:

* **Email:** `test@example.com`
* **Password:** `password`

You can also find another user, created by the seeder. This one is an author of all posts seeded into the database.
Credentials are following:

* **Email:** `creator@example.com`
* **Password:** `password`
