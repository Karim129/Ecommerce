**Ecommerce Website Project**
==========================

**Overview**
------------

This project is a Laravel-based e-commerce platform designed to provide a seamless online shopping experience. It includes core functionalities such as product and category management, user roles, and order processing, making it ideal for small to medium-sized businesses.

## Features
------------

* **User registration and login**
* **Product browsing and searching**
* **Shopping cart and checkout**
* **Payment gateway integration** 
* **Order management** 
* **User Roles:** Different levels of access for admins and customers.

## Technologies Used

- **Framework:** Laravel (PHP)
- **Frontend:** Blade Templating Engine
- **Database:** MySQL
- **Version Control:** Git


**Getting Started**
-------------------

### Prerequisites

* PHP 7.4 or higher
* MySQL 5.7 or higher
* Composer installed on your system

### Installation

1. Clone the repository using the following command:
```bash
git clone https://github.com/Karim129/Ecommerce
```
2. Navigate to the project directory:
```bash
cd ecommerce-website
```
3. Install the dependencies using Composer:
```bash
composer install
```
4. Copy the `.env.example` file to `.env` and update the database credentials:
```bash
cp .env.example .env
```
5. Generate the application key:
```bash
php artisan key:generate
```
6. Run the migration command to create the database tables:
```bash
php artisan migrate
```
7. Seed the database with sample data:
```bash
php artisan db:seed
```
8. Start the development server:
```bash
php artisan serve
```
9. Open your web browser and navigate to `http://localhost:8000` to access the website.

**Login Credentials**
--------------------

* Username: `admin@localhost`
* Password: `password`

**Setup**
--------

1. Create a new database and update the `.env` file with the database credentials.
2. Run the migration command to create the database tables.
3. Seed the database with sample data.
4. Start the development server.

**Troubleshooting**
------------------

* If you encounter any issues during installation, please check the Laravel documentation for troubleshooting guides.
* If you have any questions or need further assistance, please open an issue on this repository.

**License**
----------

This project is licensed under the MIT License. See the `LICENSE` file for details.

**Contributing**
--------------

Contributions are welcome! Please open an issue or submit a pull request to contribute to this project.

