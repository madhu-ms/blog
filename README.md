# Laravel Blog
It is a demo project for Laravel Blog. Version:7.0

## What's inside
- Adminpanel with default one admin user (admin@blog.com/password).
- Inserted Roles (Administrator , Editor, Author, Contributor, Subscriber ).

## How to use
- Clone the repository with git clone
- Copy .env.example file to .env and edit database credentials there
- Run composer install
- Run php artisan key:generate
- Run php artisan migrate --seed (it has some seeded data for your testing)
- That's it: launch the main URL or go to /login and login with default credentials admin@blog.com - password

## License

Basically, feel free to use and re-use any way you want.