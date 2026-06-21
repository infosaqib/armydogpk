# Army Dog Center - Laravel 11 Application

## Welcome! 👋

Your professional Laravel 11 web application for Army Dog Center is ready to run!

This guide will get you started in **3 simple steps**.

---

## 🎯 What You Have

A complete, production-ready Laravel 11 application with:

✅ **5 Public Pages** (Home, Services, About, Team, Contact)  
✅ **Admin Area** (Login, Register, Dashboard)  
✅ **Database Ready** (MySQL integration configured)  
✅ **Email Notifications** (Contact form with email)  
✅ **Modern UI** (Tailwind CSS + Vite)  
✅ **Authentication** (User login/registration)  
✅ **No Dependencies Missing** (All configured)  

---

## 🚀 Quick Start (3 Steps)

### Step 1: Install Dependencies (2 minutes)

```bash
cd /vercel/share/v0-project

# Install PHP dependencies
composer install

# Install JavaScript dependencies  
npm install
```

**Troubleshooting:** If these commands fail, ensure you have:
- PHP 8.2+
- Node.js 18+
- Composer installed

---

### Step 2: Setup Database (5 minutes)

```bash
# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate
```

**Now edit `.env` with your MySQL database info:**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=army_dog_center
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```

**Create the database:**

```bash
# Using MySQL command line
mysql -u root -p
CREATE DATABASE army_dog_center;
EXIT;
```

**Run migrations to create tables:**

```bash
php artisan migrate
```

---

### Step 3: Start Development (1 minute)

**Open 2 Terminal Windows:**

**Terminal 1 - Start Laravel Server:**
```bash
php artisan serve
```

You'll see: `Laravel development server started: http://127.0.0.1:8000`

**Terminal 2 - Start Frontend Assets:**
```bash
npm run dev
```

You'll see: `Local: http://localhost:5173`

---

## 🌐 Access Your Website

Visit in your browser:
```
http://localhost:8000
```

You should see the Army Dog Center homepage!

---

## 📖 Create Admin Account

### Option 1: Use the Registration Page

1. Visit: `http://localhost:8000/register`
2. Fill in your name, email, and password
3. Click "Create Account"
4. You'll be logged in automatically

### Option 2: Use Artisan Tinker

```bash
php artisan tinker
```

Then paste this (replace values):
```php
App\Models\User::create([
    'name' => 'Admin User',
    'email' => 'admin@example.com',
    'password' => Hash::make('password123')
])
```

Type `exit` to quit.

---

## 📱 Test the Website

After starting the servers, test these pages:

| Page | URL | What to Look For |
|------|-----|-----------------|
| Home | http://localhost:8000 | Hero section, stats animations |
| Services | http://localhost:8000/services | Service cards, pricing |
| About | http://localhost:8000/about | Company story |
| Team | http://localhost:8000/team | Team member cards |
| Contact | http://localhost:8000/contact | Contact form |
| Login | http://localhost:8000/login | Login form |
| Register | http://localhost:8000/register | Registration form |
| Dashboard | http://localhost:8000/dashboard | Admin dashboard (after login) |

---

## ⚙️ Useful Commands

```bash
# View all routes
php artisan route:list

# Clear cache
php artisan cache:clear

# Reset database
php artisan migrate:refresh

# Database shell (interactive)
php artisan tinker

# Stop server (Ctrl+C in terminal)
```

---

## 🛠️ File Locations for Customization

| What to Change | File |
|---|---|
| Company name/logo | `resources/views/components/header.blade.php` |
| Phone numbers | `resources/views/components/footer.blade.php` |
| Contact email | `.env` (CONTACT_EMAIL) |
| Services | `resources/views/services.blade.php` |
| Team members | `resources/views/team.blade.php` |
| Colors/styling | `resources/css/app.css` or `tailwind.config.js` |
| Add new page | Create `.blade.php` file + add route in `routes/web.php` |

---

## 📧 Contact Form & Email

The contact form on `/contact` sends emails to the admin.

**To receive emails locally (for testing):**

The system uses "log" driver, so emails are logged instead of sent. You can see them in:
```
storage/logs/laravel.log
```

**For production (real emails):**

Edit `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host.com
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-smtp-password
MAIL_ENCRYPTION=tls
```

---

## 🔒 Admin Dashboard

After logging in, visit `/dashboard` to see:
- System status
- Quick statistics
- Admin panel with links

This area is **protected** - only logged-in users can access it.

---

## 🚨 Troubleshooting

### "Command not found: composer"
Ensure Composer is installed: https://getcomposer.org

### "Port 8000 already in use"
```bash
php artisan serve --port=8001
```

### "Database connection failed"
1. Verify MySQL is running
2. Check `.env` database credentials
3. Ensure database exists: `CREATE DATABASE army_dog_center;`

### "npm command not found"
Ensure Node.js is installed: https://nodejs.org

### "Vite server won't start"
```bash
npm install
npm run dev
```

### Clear all caches
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

## 📚 Full Documentation

For detailed information, see:

- **README.md** - Complete project overview
- **SETUP.md** - Installation and deployment guide
- **Laravel Documentation** - https://laravel.com/docs/11.x

---

## 🔄 Development Workflow

### Normal Development:
1. Start Laravel: `php artisan serve`
2. Start Vite: `npm run dev`
3. Edit files in `resources/` or `app/`
4. Changes auto-reload in browser (HMR)

### Adding a Database Table:
```bash
php artisan make:migration create_table_name
# Edit database/migrations/... file
php artisan migrate
```

### Adding a New Controller:
```bash
php artisan make:controller MyController
```

### Adding a New Model:
```bash
php artisan make:model MyModel -m  # -m creates migration
```

---

## 📦 Production Deployment

When ready to deploy:

```bash
# Build frontend
npm run build

# Optimize Laravel
php artisan optimize
php artisan config:cache
php artisan route:cache

# Set production mode
APP_ENV=production
APP_DEBUG=false
```

Then upload files to your hosting provider.

---

## 🎨 Styling

The app uses **Tailwind CSS v3**. To customize styles:

1. Edit `resources/css/app.css`
2. Or modify `tailwind.config.js` for theme colors
3. Changes apply immediately with HMR

---

## ✨ Key Features Explained

| Feature | Location | How It Works |
|---------|----------|-------------|
| **Authentication** | `app/Http/Controllers/Auth/AuthController.php` | Login/register with bcrypt hashing |
| **Contact Form** | `resources/views/contact.blade.php` | Validates input, sends email via `ContactController` |
| **Database** | `database/migrations/` | Migrations create tables automatically |
| **Email** | `app/Mail/ContactMail.php` | Customizable email templates |
| **Routing** | `routes/web.php` | All URLs defined here |
| **Views** | `resources/views/` | HTML pages using Blade syntax |

---

## 🔗 Quick Links

| Link | Purpose |
|------|---------|
| http://localhost:8000 | Website homepage |
| http://localhost:8000/login | Admin login |
| http://localhost:8000/register | Create admin account |
| http://localhost:8000/dashboard | Admin dashboard (protected) |
| http://localhost:5173 | Vite dev server (if running separately) |

---

## 💡 Pro Tips

1. **Use Artisan Tinker for quick database testing:**
   ```bash
   php artisan tinker
   >>> User::all()
   >>> User::find(1)
   ```

2. **Watch logs in real-time:**
   ```bash
   tail -f storage/logs/laravel.log
   ```

3. **Use VS Code PHP Intelephense extension** for better PHP autocomplete

4. **Keep `.env.local` for local overrides** (already in .gitignore)

5. **Use `php artisan route:list`** to see all available routes

---

## 🎓 Next Steps

1. ✅ Install dependencies (`composer install` + `npm install`)
2. ✅ Configure database in `.env`
3. ✅ Run migrations (`php artisan migrate`)
4. ✅ Start servers (`php artisan serve` + `npm run dev`)
5. ✅ Visit http://localhost:8000
6. ✅ Create admin account at /register
7. ✅ Test contact form
8. ✅ Customize content as needed
9. 🚀 Deploy to production

---

## 📞 Support Resources

- **Laravel Docs:** https://laravel.com/docs/11.x
- **Tailwind Docs:** https://tailwindcss.com/docs
- **Blade Templating:** https://laravel.com/docs/11.x/blade
- **Eloquent ORM:** https://laravel.com/docs/11.x/eloquent

---

## 🎉 You're All Set!

Your Laravel 11 application is ready to go.

**Next: Follow Step 1, 2, and 3 above to get running!**

---

**Built with Laravel 11 • Tailwind CSS • MySQL • Vite**

Happy coding! 🚀
