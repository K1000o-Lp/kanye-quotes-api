<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Developer

Name: Camilo López
Email: camiloalfonsolopezparra@gmail.com

# kanye-quotes-api

1. Run containers with command:
    `./vendor/bin/sail up`
   
3. Copy and modify .env.example
4. Generate a new key app:
    `./vendor/bin/sail artisan generate:key`
5. Run Commands:
    `./vendor/bin/sail artisan migrate --seed`
   or
     `./vendor/bin/sail artisan migrate:fresh --seed`

# API endpoints

### GET /quotes/{times}

This endpoint response an array with length equals to 'times' parameter.

### POST /favorite

This endpoint recieve an request and save quotes in favorite.




