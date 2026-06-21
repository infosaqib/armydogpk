# Army Dog Center Website

A professional, modern website for Army Dog Center built with **Laravel 11**, **MySQL**, **Tailwind CSS**, and **Vite**.

## Features

- **Modern Architecture**: Built on Laravel 11 with Blade templates
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Authentication**: Secure admin login and registration
- **Contact Forms**: Email notifications for inquiries
- **Fast Development**: Vite HMR for instant updates
- **Database Ready**: MySQL integration with migrations
- **Professional UI**: Modern, clean interface matching the Army Dog Center branding

## Tech Stack

| Technology | Purpose |
|-----------|---------|
| **Laravel 11** | PHP web framework |
| **MySQL** | Database |
| **Tailwind CSS** | Styling |
| **Vite** | Asset bundling |
| **Blade** | Templating |
| **PHP** | Backend logic |

## Quick Start

### 1. Clone Repository
```bash
git clone <repository-url>
cd army-dog-center
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` with your database credentials:
```env
DB_DATABASE=army_dog_center
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Setup Database
```bash
php artisan migrate
```

### 5. Start Development
**Terminal 1:**
```bash
php artisan serve
```

**Terminal 2:**
```bash
npm run dev
```

Visit: `http://localhost:8000`

## Pages

- **Home** (`/`) - Landing page with stats and services overview
- **Services** (`/services`) - Detailed service offerings and pricing
- **About** (`/about`) - Company story, mission, vision, values
- **Team** (`/team`) - Meet the expert trainers and staff
- **Contact** (`/contact`) - Contact form with validation
- **Dashboard** (`/dashboard`) - Admin dashboard (protected)
- **Login** (`/login`) - Admin authentication
- **Register** (`/register`) - Create admin account

## File Structure

```
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/AuthController.php
│   │       └── ContactController.php
│   ├── Models/User.php
│   └── Mail/ContactMail.php
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── resources/
│   ├── views/
│   │   ├── layout.blade.php
│   │   ├── index.blade.php
│   │   ├── services.blade.php
│   │   ├── about.blade.php
│   │   ├── team.blade.php
│   │   ├── contact.blade.php
│   │   ├── dashboard.blade.php
│   │   ├── auth/
│   │   │   ├── login.blade.php
│   │   │   └── register.blade.php
│   │   ├── components/
│   │   │   ├── header.blade.php
│   │   │   └── footer.blade.php
│   │   └── emails/contact.blade.php
│   ├── css/app.css
│   └── js/app.js
│
├── database/
│   └── migrations/
│
├── config/
│   ├── app.php
│   ├── database.php
│   ├── auth.php
│   └── mail.php
│
├── .env.example
├── .gitignore
├── tailwind.config.js
├── vite.config.js
└── package.json
```

## Configuration

### Database Setup

Edit `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=army_dog_center
DB_USERNAME=root
DB_PASSWORD=
```

Create database:
```bash
mysql -u root -p
CREATE DATABASE army_dog_center;
EXIT;
```

### Email Configuration

Update `.env` for contact form emails:
```env
MAIL_MAILER=log
MAIL_FROM_ADDRESS=contact@armydogcenter.services
CONTACT_EMAIL=admin@armydogcenter.services
```

For production, use SMTP:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
```

## Development Commands

```bash
# Install dependencies
composer install
npm install

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate

# Start servers
php artisan serve          # Backend (port 8000)
npm run dev                # Frontend (port 5173)

# Production build
npm run build
php artisan optimize

# Tinker shell (database interaction)
php artisan tinker

# View routes
php artisan route:list
```

## Creating Admin User

### Via Artisan Tinker
```bash
php artisan tinker
>>> App\Models\User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => Hash::make('password')])
>>> exit
```

### Via Registration
Visit `/register` and create account manually.

## Customization

### Update Company Details
- Edit contact info in `resources/views/components/footer.blade.php`
- Update email in `.env` (CONTACT_EMAIL, MAIL_FROM_ADDRESS)
- Modify services in `resources/views/services.blade.php`
- Update team members in `resources/views/team.blade.php`

### Styling
- Tailwind CSS: Edit `resources/css/app.css`
- Colors defined in `tailwind.config.js`
- Custom components in CSS file

### Add Pages
1. Create view: `resources/views/page-name.blade.php`
2. Add route in `routes/web.php`
3. Link in header: `resources/views/components/header.blade.php`

## Deployment

### Production Build
```bash
npm run build
php artisan optimize
php artisan config:cache
php artisan route:cache
```

### Production Environment
```bash
APP_ENV=production
APP_DEBUG=false
```

### Hosting Requirements
- PHP 8.2+
- MySQL 5.7+
- 256MB+ RAM
- SSL Certificate (HTTPS)

## Security

- Input validation on all forms
- CSRF protection (built-in)
- Password hashing with bcrypt
- SQL injection prevention (Eloquent)
- XSS protection with Blade escaping

## Support & Troubleshooting

### Database Issues
```bash
# Reset database
php artisan migrate:refresh
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Composer Issues
```bash
composer dump-autoload
composer update
```

## License

This project is proprietary software for Army Dog Center.

## Contact

For inquiries about this website or services:
- Phone: 0300-5454631
- Email: info@armydogcenter.pk
- Hours: 24/7 Emergency | 8 AM - 6 PM (Mon-Fri)

---

**Built with ❤️ for Army Dog Center**

Last Updated: 2024
