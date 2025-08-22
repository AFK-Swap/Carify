# Carify 🚗
**CSE470 Software Engineering Project**

## Overview
Carify is a comprehensive car management and rental platform developed as part of the CSE470 Software Engineering course at BRAC University. The project demonstrates modern web development practices and software engineering principles.

## 🎯 Project Objectives
- Apply software engineering methodologies in a real-world scenario
- Create a user-friendly car rental and management system
- Implement secure authentication and booking systems
- Practice team collaboration and version control

## 🛠️ Technology Stack
- **Backend Framework:** Laravel (PHP)
- **Frontend:** Blade templating engine
- **Database:** MySQL
- **Authentication:** Laravel Auth
- **Styling:** CSS/Bootstrap

## ✨ Features
- **User Registration & Authentication**
- **Car Listing & Search**
- **Booking Management**
- **Admin Dashboard**
- **Rental History**
- **Payment Integration** *(if implemented)*

## 🏗️ System Architecture
```
┌─────────────────┐    ┌──────────────────┐    ┌─────────────────┐
│     Frontend    │    │     Backend      │    │    Database     │
│   (Blade/CSS)   │◄──►│    (Laravel)     │◄──►│     (MySQL)     │
└─────────────────┘    └──────────────────┘    └─────────────────┘
```

## 🚀 Installation & Setup

### Prerequisites
- PHP 7.4+
- Composer
- MySQL
- Node.js & npm

### Steps
```bash
# Clone the repository
git clone https://github.com/AFK-Swap/Carify.git
cd Carify

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Setup environment file
cp .env.example .env
php artisan key:generate

# Configure database in .env file
# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

## 📱 Screenshots
*(Add screenshots of your application here)*

## 🎓 Academic Context
- **Course:** CSE470 - Software Engineering
- **Institution:** BRAC University
- **Focus:** Application of SDLC methodologies, team collaboration, and modern web development

## 👥 Team Members
*(Add your team members if it was a group project)*

## 📧 Contact
- **Developer:** Fahmidur Islam Swapnil
- **Email:** fahmidur.i.swapnil@gmail.com

---
*Developed as part of Software Engineering coursework at BRAC University* 🎓
