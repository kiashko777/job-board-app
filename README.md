# Laravel Job Board Application

A modern job board platform built with Laravel 10, featuring job listings, employer profiles, and tag-based categorization. This application provides a clean, responsive interface for browsing job opportunities and managing employment listings.

![Laravel](https://img.shields.io/badge/Laravel-10.48-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-5.0-646CFF?style=for-the-badge&logo=vite&logoColor=white)

## 📋 Table of Contents

- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [Database Schema](#-database-schema)
- [Project Structure](#-project-structure)
- [API Routes](#-api-routes)
- [Development](#-development)
- [Testing](#-testing)
- [Deployment](#-deployment)
- [Contributing](#-contributing)
- [Roadmap](#-roadmap)
- [License](#-license)
- [Support](#-support)

## ✨ Features

### Current Features
- 📄 **Job Listings** - Browse paginated job opportunities with detailed information
- 🏢 **Employer Profiles** - View companies posting job opportunities
- 🏷️ **Tag System** - Categorize and filter jobs by tags
- 📱 **Responsive Design** - Mobile-first approach using Tailwind CSS
- 🎨 **Clean UI** - Modern, accessible interface with Blade components
- 📊 **Pagination** - Efficient browsing of large job datasets
- 🗄️ **Database Seeding** - Pre-populated sample data for testing

### Planned Features
- 🔐 User Authentication & Authorization
- 👤 User Profiles & Resumes
- 📝 Job Application System
- 🔍 Advanced Search & Filtering
- 💼 Employer Dashboard
- 📧 Email Notifications
- 💳 Payment Integration for Premium Listings
- 📈 Analytics Dashboard
- 🌐 API for Mobile Applications

## 🛠 Tech Stack

### Backend
- **Framework:** Laravel 10.48.14
- **Language:** PHP 8.1+
- **Database:** MySQL 5.7+ / MariaDB 10.3+
- **ORM:** Eloquent
- **Authentication:** Laravel Sanctum (ready for implementation)

### Frontend
- **Template Engine:** Blade
- **CSS Framework:** Tailwind CSS 3.0
- **Build Tool:** Vite 5.0
- **JavaScript:** Vanilla JS (with Axios for HTTP requests)

### Development Tools
- **Code Style:** Laravel Pint
- **Testing:** PHPUnit 10
- **Debugging:** Laravel Debugbar
- **Package Manager:** Composer & NPM
- **Version Control:** Git

## 📦 Requirements

- PHP >= 8.1
- Composer >= 2.0
- Node.js >= 18.0
- NPM >= 9.0
- MySQL >= 5.7 or MariaDB >= 10.3
- Git

### PHP Extensions
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/kiashko777/job-board-app.git
cd job-board-app
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Configure Database
Edit the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=job_board
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations
```bash
# Create database tables
php artisan migrate

# Run migrations with sample data
php artisan migrate:fresh --seed
```

### 7. Build Frontend Assets
```bash
# For development
npm run dev

# For production
npm run build
```

### 8. Start the Development Server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## ⚙️ Configuration

### Application Settings
Configure application settings in `.env`:
```env
APP_NAME="Job Board"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

### Mail Configuration
For email functionality (future feature):
```env
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Cache Configuration
```env
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

## 📖 Usage

### Accessing the Application

#### Home Page
- Visit `/` to see the landing page
- Clean introduction to the job board

#### Job Listings
- Navigate to `/jobs` to browse all available positions
- Paginated display (10 jobs per page)
- Shows job title, employer, and salary information

#### Job Details
- Click on any job or visit `/jobs/{id}` to view full details
- Displays complete job information
- Shows associated employer details
- Lists related tags (when implemented in views)

#### Contact Page
- Visit `/contact` for contact information

### Creating Sample Data

Generate test data using seeders:
```bash
# Run all seeders
php artisan db:seed

# Run specific seeder
php artisan db:seed --class=DatabaseSeeder
```

This creates:
- 1 test user (kiashko777@gmail.com)
- 100 sample job listings
- 10 sample employers

## 🗄️ Database Schema

### Tables Structure

#### `users`
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | varchar(255) | User's full name |
| email | varchar(255) | Unique email address |
| email_verified_at | timestamp | Email verification timestamp |
| password | varchar(255) | Hashed password |
| remember_token | varchar(100) | Remember me token |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

#### `job_listings`
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| employer_id | bigint | Foreign key to employers |
| title | varchar(255) | Job title |
| salary | varchar(255) | Salary information |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

#### `employers`
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | varchar(255) | Company name |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

#### `tags`
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | varchar(255) | Tag name |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

#### `job_tag` (Pivot Table)
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| job_listing_id | bigint | Foreign key to job_listings |
| tag_id | bigint | Foreign key to tags |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

### Model Relationships

```php
// Job Model
- belongsTo: Employer
- belongsToMany: Tags

// Employer Model
- hasMany: Jobs

// Tag Model
- belongsToMany: Jobs

// User Model
- Standard Laravel authentication relationships
```

## 📁 Project Structure

```
job-board-app/
├── app/
│   ├── Console/          # Console commands
│   ├── Exceptions/       # Exception handlers
│   ├── Http/
│   │   ├── Controllers/  # HTTP controllers (to be implemented)
│   │   ├── Middleware/   # HTTP middleware
│   │   └── Kernel.php    # HTTP kernel
│   ├── Models/           # Eloquent models
│   │   ├── Employer.php
│   │   ├── Job.php
│   │   ├── Tag.php
│   │   └── User.php
│   └── Providers/        # Service providers
├── bootstrap/            # Bootstrap files
├── config/               # Configuration files
├── database/
│   ├── factories/        # Model factories
│   │   ├── EmployerFactory.php
│   │   ├── JobFactory.php
│   │   ├── TagFactory.php
│   │   └── UserFactory.php
│   ├── migrations/       # Database migrations
│   └── seeders/          # Database seeders
│       └── DatabaseSeeder.php
├── public/               # Public assets
├── resources/
│   ├── css/              # CSS files
│   ├── js/               # JavaScript files
│   └── views/            # Blade templates
│       ├── components/   # Reusable components
│       │   ├── layout.blade.php
│       │   └── nav-link.blade.php
│       ├── contact.blade.php
│       ├── home.blade.php
│       ├── job.blade.php
│       └── jobs.blade.php
├── routes/
│   ├── api.php           # API routes
│   ├── channels.php      # Broadcast channels
│   ├── console.php       # Console routes
│   └── web.php           # Web routes
├── storage/              # Storage directory
├── tests/                # Test files
│   ├── Feature/          # Feature tests
│   └── Unit/             # Unit tests
├── .env.example          # Environment example
├── .gitignore            # Git ignore file
├── artisan               # Artisan CLI
├── composer.json         # PHP dependencies
├── package.json          # Node dependencies
├── phpunit.xml           # PHPUnit configuration
├── README.md             # This file
├── CLAUDE.md             # AI assistant configuration
└── vite.config.js        # Vite configuration
```

## 🛣️ API Routes

### Current Web Routes

| Method | URI | Description |
|--------|-----|-------------|
| GET | `/` | Home page |
| GET | `/jobs` | Job listings (paginated) |
| GET | `/jobs/{id}` | Single job details |
| GET | `/contact` | Contact page |

### Planned API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/jobs` | List all jobs |
| GET | `/api/jobs/{id}` | Get job details |
| POST | `/api/jobs` | Create new job |
| PUT | `/api/jobs/{id}` | Update job |
| DELETE | `/api/jobs/{id}` | Delete job |
| GET | `/api/employers` | List employers |
| GET | `/api/tags` | List tags |
| POST | `/api/applications` | Submit application |

## 🔧 Development

### Code Style
Format code using Laravel Pint:
```bash
./vendor/bin/pint
```

### Artisan Commands
```bash
# Clear all caches
php artisan optimize:clear

# Create a new model with migration and factory
php artisan make:model ModelName -mf

# Create a new controller
php artisan make:controller ControllerName

# Create a new middleware
php artisan make:middleware MiddlewareName

# List all routes
php artisan route:list

# Interactive shell
php artisan tinker
```

### Frontend Development
```bash
# Watch for changes
npm run dev

# Build for production
npm run build
```

### Database Management
```bash
# Rollback migrations
php artisan migrate:rollback

# Rollback and re-run migrations
php artisan migrate:refresh

# Drop all tables and re-run migrations
php artisan migrate:fresh

# Check migration status
php artisan migrate:status
```

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php artisan test

# Run tests in parallel
php artisan test --parallel

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run with coverage report
php artisan test --coverage
```

### Creating Tests
```bash
# Create a feature test
php artisan make:test JobListingTest

# Create a unit test
php artisan make:test JobModelTest --unit
```

### Test Database
Configure a separate test database in `phpunit.xml`:
```xml
<env name="DB_CONNECTION" value="sqlite"/>
<env name="DB_DATABASE" value=":memory:"/>
```

## 🚢 Deployment

### Production Optimization

1. **Environment Configuration**
```bash
# Set production environment
APP_ENV=production
APP_DEBUG=false
```

2. **Optimize Application**
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

3. **Build Assets**
```bash
npm run build
```

### Server Requirements
- Web server (Apache/Nginx)
- PHP-FPM
- MySQL/MariaDB server
- Redis (optional, for caching)
- Supervisor (for queue workers)

### Nginx Configuration Example
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/job-board-app/public;

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. **Fork the Repository**
2. **Create a Feature Branch**
```bash
git checkout -b feature/amazing-feature
```

3. **Commit Your Changes**
```bash
git commit -m 'Add some amazing feature'
```

4. **Push to the Branch**
```bash
git push origin feature/amazing-feature
```

5. **Open a Pull Request**

### Coding Standards
- Follow PSR-12 coding standards
- Use Laravel best practices
- Write tests for new features
- Update documentation as needed
- Use meaningful commit messages

### Pull Request Guidelines
- Describe your changes in detail
- Include screenshots for UI changes
- Reference any related issues
- Ensure all tests pass
- Update the README if needed

## 🗺️ Roadmap

### Phase 1: Foundation (Current)
- ✅ Basic job listings
- ✅ Employer relationships
- ✅ Tag system
- ✅ Responsive design

### Phase 2: User System
- ⏳ User authentication
- ⏳ User profiles
- ⏳ Role-based permissions
- ⏳ Password reset functionality

### Phase 3: Job Management
- ⏳ Job creation/editing interface
- ⏳ Admin panel
- ⏳ Job application system
- ⏳ Application tracking

### Phase 4: Advanced Features
- ⏳ Advanced search and filtering
- ⏳ Saved searches
- ⏳ Email notifications
- ⏳ Resume upload and parsing

### Phase 5: Monetization
- ⏳ Premium job listings
- ⏳ Featured employers
- ⏳ Payment integration
- ⏳ Subscription plans

### Phase 6: Analytics & API
- ⏳ Analytics dashboard
- ⏳ RESTful API
- ⏳ Mobile application
- ⏳ Third-party integrations

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support and questions:
- 📧 Email: kiashko777@gmail.com
- 🐛 Issues: [GitHub Issues](https://github.com/kiashko777/job-board-app/issues)
- 📚 Documentation: [Laravel Docs](https://laravel.com/docs)

## 🙏 Acknowledgments

- Laravel Framework and its contributors
- Tailwind CSS for the styling framework
- The open-source community for various packages and tools

---

<p align="center">
Built with ❤️ using Laravel
</p>