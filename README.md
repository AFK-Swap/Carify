# Carify 🚗
**Car Rental & Marketplace Platform**

A comprehensive full-stack car rental and marketplace platform built with Laravel 11 and React 18, featuring advanced car management, user authentication, and marketplace functionality.

## 🚀 **Live Demo**
*Add your live demo link here*

## 📋 **Table of Contents**
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Installation](#installation)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [Academic Context](#academic-context)

## ✨ **Features**

### **User Management**
- 🔐 Secure user registration and authentication with Laravel Breeze
- 👤 Comprehensive user profile management
- 🔑 Password reset and email verification
- 👥 Role-based access control (User/Admin)

### **Car Marketplace**
- 🚗 Complete car listing and browsing system
- 💰 Buy and sell functionality with price management
- 🔍 Advanced search and filtering options
- 📸 Multiple image upload and gallery management
- 📊 Car comparison tool for side-by-side analysis

### **Personal Features**
- ❤️ Wishlist management for favorite cars
- 📚 Browsing history tracking
- 🔔 Real-time notifications (read/unread status)
- 💬 Comment and review system for cars

### **Admin Dashboard**
- 👨‍💼 Comprehensive admin control panel
- 📊 User management and oversight
- 📈 Platform analytics and reporting
- 🚗 Car listing moderation and management
- 📧 Notification system management

### **Advanced Features**
- 🤖 Car suggestion algorithm based on user preferences
- 📱 Responsive design for all devices
- ⚡ Real-time updates and notifications
- 📊 Advanced analytics and reporting

## 🛠️ **Technology Stack**

### **Backend**
- **Laravel 11** - Latest Laravel framework with PHP 8.2
- **PHP 8.2** - Modern PHP with latest features
- **Laravel Breeze** - Authentication scaffolding
- **MySQL** - Relational database management
- **Eloquent ORM** - Database abstraction layer

### **Frontend**
- **React 18** - Modern React with concurrent features
- **Alpine.js 3.4.2** - Lightweight JavaScript framework
- **Bootstrap 5.2.3** - Responsive CSS framework
- **Tailwind CSS** - Utility-first CSS framework
- **Sass** - CSS preprocessor

### **Development Tools**
- **Vite** - Fast build tool and development server
- **Pest PHP** - Testing framework
- **Composer** - PHP dependency management
- **npm** - JavaScript package management

### **Architecture**
- **Three-tier MVC** - Model-View-Controller architecture
- **React Components** - Modular frontend components
- **RESTful APIs** - Clean API design
- **Database Migrations** - Version-controlled database schema

## 🚀 **Installation**

### **Prerequisites**
- PHP 8.2 or higher
- Composer
- Node.js (v18 or higher)
- MySQL
- Git

### **Clone Repository**
```bash
git clone https://github.com/AFK-Swap/Carify.git
cd Carify
```

### **Backend Setup**
```bash
# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=carify
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### **Database Setup**
```bash
# Run database migrations
php artisan migrate

# Seed database with sample data (optional)
php artisan db:seed
```

### **Frontend Setup**
```bash
# Install JavaScript dependencies
npm install

# Build assets for development
npm run dev
```

## 🎮 **Usage**

### **Development Mode**
```bash
# Start Laravel development server
php artisan serve

# Start Vite development server (in new terminal)
npm run dev
```

### **Production Build**
```bash
# Build assets for production
npm run build

# Optimize Laravel for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📡 **API Documentation**

### **Authentication Endpoints**
- `POST /register` - User registration
- `POST /login` - User login
- `POST /logout` - User logout
- `POST /password/reset` - Password reset

### **Car Management**
- `GET /api/cars` - List all cars with pagination
- `GET /api/cars/{id}` - Get specific car details
- `POST /api/cars` - Add new car listing
- `PUT /api/cars/{id}` - Update car information
- `DELETE /api/cars/{id}` - Remove car listing

### **User Features**
- `GET /api/wishlist` - Get user wishlist
- `POST /api/wishlist/{car_id}` - Add car to wishlist
- `DELETE /api/wishlist/{car_id}` - Remove from wishlist
- `GET /api/notifications` - Get user notifications
- `PUT /api/notifications/{id}/read` - Mark notification as read

### **Marketplace Features**
- `POST /api/cars/{id}/purchase` - Purchase car
- `GET /api/cars/compare` - Compare multiple cars
- `POST /api/cars/{id}/comments` - Add comment to car
- `GET /api/suggestions` - Get personalized car suggestions

## 🏗️ **Project Structure**

```
Carify/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Providers/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── js/
│   │   ├── Components/
│   │   └── Pages/
│   ├── views/
│   └── css/
├── routes/
│   ├── web.php
│   └── api.php
├── tests/
└── package.json
```

## 🧪 **Testing**

```bash
# Run PHP tests
php artisan test

# Run specific test
php artisan test --filter CarManagementTest

# Run tests with coverage
php artisan test --coverage
```

## 📊 **Key Features Implementation**

### **Car Suggestion Algorithm**
- User behavior analysis
- Preference-based recommendations
- Machine learning integration for better suggestions

### **Three-tier Architecture**
- **Presentation Layer**: React components and Blade views
- **Business Logic Layer**: Laravel controllers and services
- **Data Layer**: Eloquent models and MySQL database

### **Real-time Notifications**
- Event-driven notification system
- Real-time updates using Laravel Echo (optional)
- Email and in-app notifications

## 🎓 **Academic Context**

**Course**: CSE470 - Software Engineering  
**Institution**: BRAC University  
**Semester**: [Add semester information]  
**Focus**: Practical application of software engineering methodologies

### **Learning Outcomes**
- Full-stack web development with modern frameworks
- Database design and management
- User authentication and authorization
- RESTful API development
- Testing and quality assurance
- Version control and collaborative development

## 🤝 **Contributing**

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 **License**

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 **Author**

**Fahmidur Iqbal Swapnil**
- GitHub: [@AFK-Swap](https://github.com/AFK-Swap)
- Email: fahmidur.i.swapnil@gmail.com
- University: BRAC University
- Student ID: 22101227

## 🙏 **Acknowledgments**

- BRAC University CSE Department
- Laravel and React communities
- Course instructors and teammates

---

*Developed as part of CSE470 Software Engineering coursework at BRAC University* 🎓
