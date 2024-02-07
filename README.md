# budgetAccount

Income / Expenses Calculator

Problems:

# no server connection after git clone - .env file missing

## solution

    - In this tutorial you will learn how to setup Laravel project after cloning from git in very simple way.

    First thing first, clone your Laravel project from git then put it into your local server. Make sure your local server is running. Open your project in terminal then run composer install command.

        composer install or
        composer i (In short)

    After composer installation create .env file in your project root folder & copy everything from .env.example file into .env file. then run php artisan key:generate command in your terminal. it will generate APP_KEY in .env file for you.

        php artisan key:generater or
        php artisan key:gen (In short)

    Then setup your DB_DATABASE, DB_USERNAME & DB_PASSWORD in .env file. After setup your database run php artisan serve in your terminal. it will run your project in your localhost at port 8000 by default. you can run project in any port you want by using port flag.

        php artisan serve or
        php artisan ser (In short)
        php artisan serve — port=8080

    All set! You are ready to fly.

    -------------------------------------------------------------------------
