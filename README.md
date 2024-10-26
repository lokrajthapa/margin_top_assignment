# Laravel Application Setup Guide

This guide will walk you through setting up and running a Laravel application on your local machine.

## Prerequisites

Make sure the following software is installed on your system:

- [PHP 8.2+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://www.mysql.com/downloads/) (or another database supported by Laravel)
- [Node.js and npm](https://nodejs.org/en/download/)

## Installation Steps

Follow these steps to set up the Laravel project locally:

### 1. Clone the Repository

Clone this repository to your local machine.

```bash
git clone https://github.com/lokrajthapa/margin_top_assignment.git

2. Navigate into the Project Directory

->cd margin_top_assignment

3. Install Composer Dependencies

->composer install

4. Copy the Environment File

->cp .env.example .env

5. Generate an Application Key

php artisan key:generate

6. Configure the Environment Variables
Open the .env file and update the following variables to match your local setup:

DB_CONNECTION: The type of database (e.g., mysql)
DB_HOST: The host of your database (usually 127.0.0.1)
DB_PORT: The port for your database (default for MySQL is 3306)
DB_DATABASE: The name of your database
DB_USERNAME: Your database username
DB_PASSWORD: Your database password

7. Set Up the Database
Create a new database in MySQL (or your chosen DBMS) for the application:


Then run the following command to migrate the database tables:


php artisan migrate



php artisan db:seed
8. Install Node Dependencies

npm install
9. Build Assets

npm run dev


