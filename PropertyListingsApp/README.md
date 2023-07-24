## Web app where individuals can offer their house(s) for sale. (similar to Funda) This is a demo project that I am building in my free time to enhance my knowledge of Laravel.

- You can register an account, log in, and offer houses for sale.
- A user can only edit, update, and delete their own listed houses.
- Profiles of other users can be visited by clicking a link in the advertisement.
- A user can only modify their own 'profile page' information.


## Getting Started

Follow the steps below to get the project up and running on your local machine.

### Prerequisites

- PHP (>= 7.4)
- Composer
- MySQL or any other compatible database
- Git

### Clone the Repository

First, clone this repository to your local machine using the following command:

```bash
git clone https://github.com/minuut/Laravel-and-Vue.js-course-projects/PropertyListingsApp.git
```

### Install Dependencies
Navigate to the project directory and install the required dependencies using Composer:
```bash
cd laravel-lister-app
composer install
```
### Set Up Environment Configuration
Create a copy of the .env.example file and save it as .env:
```bash
cp .env.example .env
```
### Generate Application Key
Generate the application key using the artisan command:
```bash
php artisan key:generate
```
### Run Migrations
Run the database migrations to create the required tables:
```bash
php artisan migrate
```
### Link Storage
To make sure uploaded files are accessible publicly, you need to create a symbolic link to the public/storage directory:
```bash
php artisan storage:link
```
### Serve the Application
Finally, serve the application using the built-in development server:
```bash
php artisan serve
```

