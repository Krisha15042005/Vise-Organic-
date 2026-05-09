# 🌱 Vise Organic

A comprehensive Laravel-based website for Vise Organic, an organic farming products company. Features a public-facing website with product catalog, blog, gallery, and contact forms, plus a full admin panel for content management.

## 🚀 Quick Start

### Prerequisites
- PHP 8.1+
- Composer
- MySQL 8.0+
- Node.js & NPM

### Installation
1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd viseorganic
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Set up environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure database in `.env` and run migrations:
   ```bash
   php artisan migrate
   ```

5. Build assets and start server:
   ```bash
   npm run build
   php artisan serve --host=127.0.0.1 --port=8000
   ```

## 📖 Usage

- **Frontend:** Visit `http://127.0.0.1:8000`
- **Admin Panel:** Visit `http://127.0.0.1:8000/admin`
  - Login: admin@example.com / password

## 📋 Documentation

For detailed documentation, see [WEBSITE_DOCUMENTATION.md](WEBSITE_DOCUMENTATION.md)

## 🛠️ Technologies

- Laravel 11
- MySQL
- Bootstrap 5
- Font Awesome

## 📄 License

This project is licensed under the MIT License.

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
