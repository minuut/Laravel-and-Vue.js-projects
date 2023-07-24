## Web app waar particulieren hun woning(en) te koop kunnen aanbieden. (vergelijkbaar met funda) Dit is een demo project wat ik in mijn vrije tijd uitbouw voor het vergroten van mijn Laravel kennis.
- Je kan een account registreren en ermee inloggen en woningen te koop aanbieden. 
- Een gebruiker kan alleen zijn of haar eigen geplaatste woningen wijzigen, updaten en verwijderen. 
- Profielen van andere gebruikers kunnen bezocht worden via het klikken op een link in de advertentie. 
- Een gebruiker kan alleen zijn of haar eigen 'profiel pagina' gegevens aanpassen.

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

