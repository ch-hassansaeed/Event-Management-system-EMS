# Event Management system - EMS

A Event Management system - EMS build with Laravel and Vuejs

## Installation guide

Clone the repository

```sh
git clone my-repo-link ems
cd ems
```

Install PHP dependencies:

```sh
composer install
```

Copy example environment file to a new .env file:

```sh
cp .env.example .env
```

open .env file and set your mysql db settings

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ems_backend
DB_USERNAME=root
DB_PASSWORD=

Add application key:

```sh
php artisan key:generate
```

Create your database and change the .env variable accordingly

Run database migrations:

```sh
php artisan migrate
```

Seed the database:

```sh
php artisan db:seed
```

Create a storage sym link so you can access images from the public folder:

```sh
php artisan storage:link
```

Run the artisan serve command to spin up a dev server:

```sh
php artisan serve
```

supportive commands:-
To Create new Model(i.e users) and make its migrate(by -m) for new DB table as users

```sh
php artisan make:model users -m
```

For each new model or migration file changes (call all migration up methods)

```sh
php artisan migrate
```

For delete/drop all Tables by using migration files (call all migration down methods)

```sh
php artisan migrate:reset
```

## Backend libs/packages and tech stacks

-   [Laravel 8](https://laravel.com/)
-   [lodash](https://lodash.com/) (for common utility functions)
-   [Sanctum](https://laravel.com/docs/8.x/sanctum) (For authentication)

## Backend APIS Endpoints

-   host-url/login //Login and get the Bearer token response (verb:Post)
-   host-url/register //Register a new user/admin (verb:Post)
-   host-url/createnewevent //for create a new event (verb:Post)
-   host-url/createnewticket //customer buy new ticket (verb:Post)
-   host-url/gettrendingevents //Get the top 6 trending events
-   host-url/geteventdata/{id} //Get details of specific event by id
-   host-url/getsportsevents //Get all events which has sports category
-   host-url/getfunevents //Get all events which has fun category
-   host-url/getsalesoverview //Get the report of the sales by Tickets Types
-   host-url/getsalesdetails //Get the report of the sales by Events
-   host-url/getbookingdetails //Get the report of the sales by customers ticket purchases

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
