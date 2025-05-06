# 📝 Laravel Blogging Platform

A personal project built with Laravel to deepen my understanding of modern PHP web development. This platform allows users to register, log in, and manage blog posts with full CRUD functionality, role-based access control, and search features.

## 🚀 Features

- User registration and login
- Role-based authentication and authorization
- Create, edit, delete, and view blog posts
- Post categorization and search functionality
- Responsive UI using Bootstrap
- Eloquent ORM for managing database relationships
- MySQL for efficient data storage and querying
- Git and GitHub for version control

## 🛠️ Tech Stack

- **Framework:** Laravel
- **Database:** MySQL
- **ORM:** Eloquent
- **Authentication:** Laravel Auth 
- **Version Control:** Git + GitHub

## 📸 Screenshots

> *(Optional: Add screenshots of the UI, like login page, dashboard, post editor, etc.)*

## 📂 Setup Instructions

```bash
# Clone the repository
git clone https://github.com/Vsollery/Blog-It.git

# Navigate to project directory
cd Blog-It

# Install dependencies
composer install

# Create environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure your .env database credentials

# Run migrations
php artisan migrate

# Serve the application
php artisan serve
