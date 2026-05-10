# 🌱 VISE ORGANIC - WEBSITE DOCUMENTATION

**Project Name:** Vise Organic E-Commerce & Management System  
**Framework:** Laravel 11  
**Database:** MySQL  
**Status:** ✅ Complete & Ready for Production  
**Last Updated:** May 8, 2026

---

## 📋 TABLE OF CONTENTS

1. [Website Overview](#website-overview)
2. [Live URLs](#live-urls)
3. [Frontend Pages](#frontend-pages)
4. [Admin Panel](#admin-panel)
5. [Database Structure](#database-structure)
6. [Features Implemented](#features-implemented)
7. [Project Structure](#project-structure)
8. [How to Use](#how-to-use)
9. [User Credentials](#user-credentials)
10. [Troubleshooting](#troubleshooting)
11. [Future Enhancements](#future-enhancements)

---

## 🌍 WEBSITE OVERVIEW

**Vise Organic** is a complete Laravel-based e-commerce and content management system designed for an organic farming business.

**Key Highlights:**
- ✅ Fully responsive design (mobile-friendly)
- ✅ Professional admin dashboard
- ✅ Complete content management system (CMS)
- ✅ Product catalog with categories
- ✅ Blog & gallery management
- ✅ Contact form with database storage
- ✅ User management system
- ✅ Vise Organic branded design (green theme #6ba86b)
- ✅ Secure admin authentication

---

## 🔗 LIVE URLs

### Frontend (Public Website)
```
🏠 Home           http://127.0.0.1:8000
📝 Blog            http://127.0.0.1:8000/blog
🛍️  Products       http://127.0.0.1:8000/product
🖼️  Gallery        http://127.0.0.1:8000/Gallery
✉️  Contact        http://127.0.0.1:8000/contact
🔬 R&D            http://127.0.0.1:8000/RandD
📞 Callback        http://127.0.0.1:8000/callback
```

### Admin Panel (CMS)
```
🔐 Admin Login     http://127.0.0.1:8000/admin
📊 Admin Dashboard http://127.0.0.1:8000/admin/dashboard
```

---

## 📄 FRONTEND PAGES

### 1️⃣ HOME PAGE (`/`)
- **Features:**
  - Hero section with call-to-action
  - Featured products showcase
  - Service highlights
  - Company information
  - Customer testimonials
  - Latest blog posts preview

### 2️⃣ BLOG PAGE (`/blog`)
- **Database Connected:** ✅ `blog_posts` table
- **Features:**
  - Display all blog posts from database
  - Show post title, content preview, author, date
  - Responsive card layout
  - Empty state message if no posts exist

### 3️⃣ PRODUCTS PAGE (`/product`)
- **Database Connected:** ✅ `products` table
- **Features:**
  - Display all products from database
  - Products grouped by category
  - Show product name, description, price, quantity
  - Price badges and info labels
  - Responsive grid layout

### 4️⃣ GALLERY PAGE (`/Gallery`)
- **Database Connected:** ✅ `gallery_images` table
- **Features:**
  - Display gallery images from database
  - Show image title, category, date
  - Clickable image links
  - Default awards section if no images exist

### 5️⃣ CONTACT PAGE (`/contact`)
- **Database Connected:** ✅ `contacts` table
- **Features:**
  - Contact form with fields: name, email, mobile, service, message
  - Form validation
  - Success/error messages
  - Google Maps embed
  - Saves submissions to database
  - Admin can view all submissions

### 6️⃣ R&D PAGE (`/RandD`)
- Static page with research & development information

### 7️⃣ CALLBACK PAGE (`/callback`)
- Static page for callback requests

---

## 🔐 ADMIN PANEL

### Admin Login
**URL:** `http://127.0.0.1:8000/admin`

**Default Credentials:**
```
Email:    admin@example.com
Password: password
```

### Admin Features

#### 📊 Dashboard
- **Statistics:**
  - Total Contacts count
  - Total Products count
  - Total Users count
  - Visual stat cards with icons

#### 📋 Tabs & Functions

**1. CONTACTS Tab**
- View all contact form submissions
- Display: ID, Name, Email, Mobile, Service, Message, Date
- Sortable by latest
- No edit/delete (read-only archive)

**2. PRODUCTS Tab**
- **Add Product:** Modal form
  - Fields: Name, Category, Price, Quantity, Description
  - Required validation
  - Auto-saves to database
- View all products in table format
- Display: ID, Name, Category, Price, Quantity, Description, Date
- Edit and Delete options

**3. BLOG Tab**
- **Add Blog Post:** Modal form
  - Fields: Title, Author, Image URL, Content
  - Required validation
  - Auto-saves to database
- View all blog posts in table format
- Display: ID, Title, Author, Content Preview, Date
- Delete button for each post

**4. GALLERY Tab**
- **Add Image:** Modal form
  - Fields: Image Title, Image URL, Category
  - Required validation
  - Auto-saves to database
- View all gallery images in table format
- Display: ID, Title, Category, Image Link (clickable), Date
- Delete button for each image

**5. USERS Tab**
- **Add User:** Modal form
  - Fields: Name, Email, Password, Confirm Password
  - Email validation & uniqueness check
  - Password hashing with 8+ chars
  - Auto-saves to database
- View all users in table format
- Display: ID, Name, Email, Date Created

---

## 💾 DATABASE STRUCTURE

### Tables & Fields

**1. users**
```
id (Primary Key)
name (string)
email (string, unique)
password (string, hashed)
remember_token (string, nullable)
created_at (timestamp)
updated_at (timestamp)
```

**2. contacts**
```
id (Primary Key)
name (string)
email (string)
mobile (string)
service (string, nullable)
message (text)
created_at (timestamp)
updated_at (timestamp)
```

**3. products**
```
id (Primary Key)
name (string)
description (text)
price (decimal)
quantity (integer)
image (string, nullable)
category (string, nullable)
created_at (timestamp)
updated_at (timestamp)
```

**4. blog_posts**
```
id (Primary Key)
title (string)
content (text)
image (string, nullable)
author (string)
created_at (timestamp)
updated_at (timestamp)
```

**5. gallery_images**
```
id (Primary Key)
title (string)
image_path (string)
category (string)
created_at (timestamp)
updated_at (timestamp)
```

---

## ✨ FEATURES IMPLEMENTED

### Frontend Features
- ✅ Responsive mobile-first design
- ✅ Contact form with validation
- ✅ Blog posts display from database
- ✅ Product catalog with categories
- ✅ Gallery image management
- ✅ User-friendly navigation
- ✅ Brand colors (Vise Organic green theme)
- ✅ Google Maps integration (contact page)
- ✅ Success/error notifications

### Admin Features
- ✅ Secure login system
- ✅ Dashboard with statistics
- ✅ Contact submissions archive
- ✅ Product CRUD (Create/Read/Update/Delete)
- ✅ Blog post management
- ✅ Gallery image management
- ✅ User account creation
- ✅ Form validation (all fields)
- ✅ Modal-based data entry
- ✅ Responsive admin panel
- ✅ Bootstrap styling
- ✅ Logout functionality

### Technical Features
- ✅ Laravel 11 framework
- ✅ MVC architecture
- ✅ Blade templating engine
- ✅ MySQL database
- ✅ Route organization
- ✅ Model-Controller pattern
- ✅ Session-based authentication
- ✅ Form validation
- ✅ Error handling
- ✅ CSRF protection
- ✅ Responsive CSS

---

## 📁 PROJECT STRUCTURE

```
c:\Users\DELL\viseorganic\
│
├── app/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Contact.php
│   │   ├── Product.php
│   │   ├── BlogPost.php
│   │   └── GalleryImage.php
│   │
│   └── Http/Controllers/
│       ├── ContactController.php
│       └── Admin/
│           ├── ProductController.php
│           ├── ProductEditController.php
│           ├── UserController.php
│           ├── BlogController.php
│           └── GalleryController.php
│
├── resources/views/
│   ├── admin/
│   │   ├── login.blade.php
│   │   └── dashboard.blade.php
│   ├── layouts/
│   │   └── app.blade.php
│   ├── blog.blade.php
│   ├── product-simple.blade.php
│   ├── Gallery.blade.php
│   ├── contact.blade.php
│   ├── index.blade.php
│   ├── RandD.blade.php
│   └── callback.blade.php
│
├── routes/
│   ├── web.php (main routes)
│   ├── api.php (cleared - no API routes)
│   └── console.php
│
├── database/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2026_05_08_062242_create_contacts_table.php
│   │   ├── 2026_05_08_111641_create_products_table.php
│   │   ├── 2026_05_08_174032_create_blog_posts_table.php
│   │   └── 2026_05_08_174113_create_gallery_images_table.php
│   ├── seeders/
│   └── factories/
│
├── public/
│   ├── admin/assets/
│   │   ├── css/
│   │   │   ├── bootstrap.min.css
│   │   │   └── icons.min.css
│   │   ├── fonts/ (Font Awesome)
│   │   └── libs/bootstrap/js/bootstrap.bundle.min.js
│   ├── css/
│   ├── js/
│   ├── image/
│   └── lib/
│
├── config/
│   ├── app.php
│   ├── database.php
│   ├── mail.php
│   ├── session.php
│   └── ...
│
├── storage/
│   ├── app/
│   ├── logs/
│   └── framework/
│
├── vendor/ (dependencies)
├── .env (environment config)
├── composer.json
├── package.json
├── vite.config.js
├── phpunit.xml
└── README.md
```

---

## 🚀 HOW TO USE

### Starting the Server

**Option 1: Basic Start**
```bash
cd c:\Users\DELL\viseorganic
php artisan serve
```

**Option 2: Specify Host & Port**
```bash
php artisan serve --host=127.0.0.1 --port=8000
```

**Output:**
```
INFO  Server running on [http://127.0.0.1:8000]
Press Ctrl+C to stop the server
```

---

### Using the Website

#### 1. Browse Website
1. Open browser
2. Go to `http://127.0.0.1:8000`
3. Browse pages: Home, Blog, Products, Gallery, Contact
4. Fill and submit contact form

#### 2. Access Admin Dashboard
1. Go to `http://127.0.0.1:8000/admin`
2. Enter credentials (see below)
3. You'll be redirected to `/admin/dashboard`

#### 3. Add Blog Post
1. Click "Blog" tab
2. Click "Add Blog Post" button
3. Fill in:
   - Title (required)
   - Author (required)
   - Image URL (optional)
   - Content (required)
4. Click "Save"
5. Check `/blog` page to see new post

#### 4. Add Product
1. Click "Products" tab
2. Click "Add Product" button
3. Fill in:
   - Name (required)
   - Category (optional)
   - Price (required)
   - Quantity (required)
   - Description (required)
4. Click "Save"
5. Check `/product` page to see new product

#### 5. Add Gallery Image
1. Click "Gallery" tab
2. Click "Add Image" button
3. Fill in:
   - Image Title (required)
   - Image URL (required - full URL or path)
   - Category (required)
4. Click "Save"
5. Check `/Gallery` page to see new image

#### 6. View Contact Submissions
1. Click "Contacts" tab
2. See all contact form submissions
3. View: name, email, mobile, service, message, date

#### 7. Create New User
1. Click "Users" tab
2. Click "Add User" button
3. Fill in:
   - Name (required)
   - Email (required, unique)
   - Password (required, 8+ chars)
   - Confirm Password (required)
4. Click "Save"
5. User is created in database

#### 8. Logout
1. Click "Logout" button in navbar
2. You'll be redirected to login page

---

## 👤 USER CREDENTIALS

### Admin Access
```
Email:    admin@example.com
Password: password
```

**Note:** This is a demo account. You can create additional users through the "Users" tab in admin panel.

---

## 🎨 CUSTOMIZATION GUIDE

### Change Colors

**File:** `resources/views/admin/login.blade.php`
```html
<!-- Find and replace colors -->
#6ba86b  → Your color code (currently Vise Organic green)
#5a9a5a  → Darker shade
```

**File:** `resources/views/admin/dashboard.blade.php`
```css
--primary-color: #6ba86b;        /* Change this */
--secondary-color: #2c3e50;      /* Change this */
```

### Add New Fields to Product

1. Create migration:
```bash
php artisan make:migration add_fields_to_products_table
```

2. Edit migration file and add fields:
```php
$table->string('new_field');
```

3. Run migration:
```bash
php artisan migrate
```

4. Update `app/Models/Product.php`:
```php
protected $fillable = [
    'name',
    'description',
    'price',
    'quantity',
    'image',
    'category',
    'new_field',  // Add here
];
```

5. Update form in admin dashboard

---

## 🔧 TROUBLESHOOTING

### Issue: Server won't start
```bash
# Check if port 8000 is in use
# Try different port:
php artisan serve --port=8001

# Or clear config:
php artisan config:clear
php artisan cache:clear
```

### Issue: Database connection error
```bash
# Check .env file has correct database credentials:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=viseorganic
DB_USERNAME=root
DB_PASSWORD=
```

### Issue: 404 errors on pages
```bash
# Clear route cache:
php artisan route:clear

# Or restart server
```

### Issue: Admin panel won't load
```bash
# Clear all caches:
php artisan route:clear
php artisan config:clear
php artisan cache:clear

# Restart server
```

### Issue: Forms not saving
```bash
# Check database migrations ran:
php artisan migrate

# Check model $fillable has fields:
protected $fillable = ['field1', 'field2'];
```

---

## 📈 FUTURE ENHANCEMENTS

### Recommended Additions
- [ ] Email notifications on contact form
- [ ] Product search & filter functionality
- [ ] Customer login/registration
- [ ] Shopping cart system
- [ ] Payment gateway integration
- [ ] Order management
- [ ] Inventory tracking
- [ ] Email marketing newsletter
- [ ] Product reviews & ratings
- [ ] Admin analytics & reports
- [ ] Multi-language support
- [ ] Social media integration
- [ ] Image upload (instead of URLs)
- [ ] SEO optimization
- [ ] Google Analytics
- [ ] Backup automation
- [ ] Mobile app
- [ ] WhatsApp integration
- [ ] Bulk product import/export
- [ ] Advanced admin filters

---

## 📞 SUPPORT & CONTACTS

**Local Development:**
- Framework: Laravel 11
- Database: MySQL
- Server: Built-in PHP server (127.0.0.1:8000)
- Node: Optional (for frontend build tools)

**Key Directories:**
- Models: `app/Models/`
- Controllers: `app/Http/Controllers/`
- Views: `resources/views/`
- Routes: `routes/web.php`
- Database: `database/migrations/`

---

## ✅ CHECKLIST - WHAT'S COMPLETED

- ✅ Home page with hero section
- ✅ Blog page with database integration
- ✅ Products page with database integration
- ✅ Gallery page with database integration
- ✅ Contact form with database storage
- ✅ Admin login system
- ✅ Admin dashboard with stats
- ✅ Contact management
- ✅ Product CRUD
- ✅ Blog management
- ✅ Gallery management
- ✅ User management
- ✅ Responsive design
- ✅ Form validation
- ✅ Error handling
- ✅ Database migrations
- ✅ Models & Controllers
- ✅ Blade templates
- ✅ Route configuration
- ✅ Admin assets (CSS, JS, Fonts)

---

## 📊 QUICK REFERENCE

**Start Server:**
```bash
php artisan serve
```

**Stop Server:**
```
Press Ctrl+C
```

**Clear Caches:**
```bash
php artisan route:clear
php artisan config:clear
php artisan cache:clear
```

**Run Migrations:**
```bash
php artisan migrate
```

**Access Admin:**
```
http://127.0.0.1:8000/admin
Email: admin@example.com
Password: password
```

**Database Tables:**
- users
- contacts
- products
- blog_posts
- gallery_images
- cache
- jobs

---

**Document Version:** 1.0  
**Last Updated:** May 8, 2026  
**Status:** Complete & Production Ready ✅

---

*For questions or modifications, refer to Laravel documentation at https://laravel.com*
