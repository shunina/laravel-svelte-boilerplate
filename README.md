# Laravel Svelte Boilerplate

A modern full-stack application boilerplate using Laravel 13, Svelte 5, and Inertia.js with Tailwind CSS.

### Product todos

Live backlog and priority live in Notion (IndieHacking → **Product Todos**):
https://www.notion.so/b53bade479aa410590fe29fa5a599230

Product Manager owns grooming (Now / Next / Later). There is no live product checklist in git — Notion only. Implementation follows the next *spec’d* item Product sends, not the whole Notion list or GitHub issues.

## Features

-   🚀 Laravel 13 - PHP's leading web framework
-   ⚡ Svelte 5 - The magical disappearing UI framework
-   🔄 Inertia.js - Modern monolithic applications without the complexity
-   🎨 Tailwind CSS - Utility-first CSS framework
-   📦 Vite - Next generation frontend tooling
-   🗄️ Database migrations and seeding
-   🔍 Basic user model and factory
-   📱 Responsive layout with modern UI components

## Requirements

-   PHP 8.3 or higher
-   Node.js 20.19+ (or 22.12+) and npm
-   Composer
-   SQLite (default) or your preferred database

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/laravel-svelte-boilerplate.git
cd laravel-svelte-boilerplate
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install Node.js dependencies:

```bash
npm install
```

4. Copy the environment file and generate application key:

```bash
cp .env.example .env
php artisan key:generate
```

5. Create the database:

```bash
touch database/database.sqlite
```

6. Run database migrations:

```bash
php artisan migrate
```

7. Build assets:

```bash
npm run build
```

## Development

To start the development server:

```bash
composer dev
```

This will start:

-   Laravel development server
-   Vite dev server with HMR
-   Queue worker
-   Laravel Pail for log monitoring

## Testing

```bash
php artisan test
```

## Deployment

1. Configure your production environment variables in `.env`
2. Build frontend assets:

```bash
npm run build
```

3. Run migrations:

```bash
php artisan migrate --force
```

When upgrading an existing deployment across framework versions, also clear compiled caches (`php artisan optimize:clear`). A stale Blade view cache from before an Inertia upgrade renders a blank page with no server error.

## Features in Detail

### Database

-   SQLite configured by default
-   Easy configuration for MySQL, PostgreSQL, or other databases
-   Database migrations for users and other essential tables
-   User factory for testing and seeding

### Frontend

-   Svelte components with TypeScript support
-   Inertia.js for seamless SPA-like experience
-   Tailwind CSS for utility-first styling
-   Vite for rapid development and optimized builds

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

-   [Laravel](https://laravel.com)
-   [Svelte](https://svelte.dev)
-   [Inertia.js](https://inertiajs.com)
-   [Tailwind CSS](https://tailwindcss.com)
