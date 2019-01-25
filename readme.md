# Medium App

This Project has Admin panel to post articles. Admin has ability to add one or more photos to the article, Tag Articles and Frontend to list and display article. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install.
```
# PHP 7.0
# Composer
# Laravel 5.4
# NPM

```
## Built With

* Laravel
* VueJS

### Installing Steps

A step by step series of examples that tell you how to get a development env running

1. Install Dependencies (If composer not installed in system then install it from here https://getcomposer.org/)
```
composer install 
```

```
2. Copy new .env file in case its not available. 
```

```
3. Create DB in Database
```

```
4. Set DB credentials in .env file.
```

5. Run Migrations
```
php artisan migrate
```

6. Import Data
```
php artisan db:seed
```

7. If you get an error about an encryption key
```
php artisan key:generate
```

8. Install JS Dependencies (If NPM not installed then download and install installer from https://nodejs.org/en/)
```
npm install
```

9. Watch Files
```
npm run watch
```

10. Run Server
```
php artisan serve
```

### Admin Credentials
```
http://127.0.0.1:8000/login
#username: rehman@msn.com
#password: creative123
```

### Frontend Link
```
http://127.0.0.1:8000
```

## Authors

* **Syed Rehman Ghani**

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
