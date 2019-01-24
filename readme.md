# Medium App

This Project has Admin panel to post articles. Admin has ability to add one or more photos to the article, Tag Articles and Frontend to list and display article. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install.
```
# PHP 7.0
# Laravel 5.4
# NPM

```

### Installing

A step by step series of examples that tell you how to get a development env running

Install Dependencies
```
composer install
```

```
Create DB in Database
```

```
Set DB credentials in .env file.
```

Run Migrations
```
php artisan migrate
```

Import Data
```
php artisan db:seed
```

If you get an error about an encryption key
```
php artisan key:generate
```

Install JS Dependencies
```
npm install
```

Watch Files
```
npm run watch
```

Run Server
```
php artisan serve
```

Admin Link
```
http://127.0.0.1:8000/login
#username: rehman@msn.com
#password: creative123
```

Frontend Link
```
http://127.0.0.1:8000
```

## Built With

* PHP 7
* Laravel
* VueJS
* PHPUnit



## Authors

* **Syed Rehman Ghani**

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
