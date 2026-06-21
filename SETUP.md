# Army Dog Center - Laravel 11 Setup Guide

## Prerequisites

- PHP 8.2 or higher
- MySQL 5.7+
- Node.js 18+ and npm/pnpm
- Git

## Installation Steps

### 1. Install PHP Dependencies

```bash
composer install
```

### 2. Install Node Dependencies

```bash
npm install
# or
pnpm install
```

### 3. Set Up Environment File

Copy the example environment file and generate the app key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Update Database Configuration

Edit `.env` and set your MySQL database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=army_dog_center
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Run Database Migrations

```bash
php artisan migrate
```

### 6. Start Development Servers

In separate terminal windows:

**Terminal 1 - Laravel Backend:**
```bash
php artisan serve
```

**Terminal 2 - Frontend Assets with Vite:**
```bash
npm run dev
```

The application will be available at `http://localhost:8000`

## Building for Production

```bash
npm run build
php artisan optimize
```

## Key Features

✅ **Blade Templates** - Server-side rendering with Blade  
✅ **Tailwind CSS** - Utility-first CSS framework  
✅ **Vite** - Fast asset bundling and HMR  
✅ **Authentication** - Built-in Laravel authentication  
✅ **Email** - Contact form with email sending  
✅ **Database** - MySQL integration ready  

## Project Structure

```
army-dog-center/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Models/               # Eloquent models
│   └── Mail/                 # Mailable classes
├── routes/
│   └── web.php              # Web routes
├── resources/
│   ├── views/               # Blade templates
│   ├── css/app.css          # Tailwind styles
│   └── js/app.js            # Frontend JavaScript
├── database/
│   └── migrations/          # Database migrations
├── config/                  # Configuration files
├── public/                  # Public assets
└── storage/                 # Cache and logs
```

## Important Files

- **`.env`** - Environment configuration (database, mail, etc)
- **`routes/web.php`** - Application routes
- **`config/app.php`** - Application configuration
- **`config/database.php`** - Database configuration
- **`tailwind.config.js`** - Tailwind CSS configuration
- **`vite.config.js`** - Vite build configuration

## Troubleshooting

### "Class not found" errors
```bash
composer dump-autoload
```

### Database connection issues
- Verify MySQL is running
- Check `.env` database credentials
- Ensure database exists: `CREATE DATABASE army_dog_center;`

### Vite not starting
```bash
npm install
npm run dev
```

### Port already in use
```bash
php artisan serve --port=8001
# or
npm run dev -- --port 5174
```

## Mail Configuration

The contact form sends emails using Laravel Mail. Configure in `.env`:

```env
MAIL_MAILER=log  # Use 'log' for development
MAIL_FROM_ADDRESS=contact@armydogcenter.services
CONTACT_EMAIL=admin@armydogcenter.services
```

Change to `MAIL_MAILER=smtp` for production with proper SMTP credentials.

## Creating Admin Account

After running migrations, create admin account:

```bash
php artisan tinker
>>> App\Models\User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => Hash::make('password')])
>>> exit
```

Or register through `/register` page.

## Next Steps

1. Update contact email in `.env`
2. Update company details in views
3. Add any custom styling to `resources/css/app.css`
4. Create MySQL database
5. Run migrations
6. Test contact form
7. Deploy!
