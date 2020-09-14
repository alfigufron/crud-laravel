# Simple CRUD Laravel

## Installation

First clone repository, by running this command from Terminal
```
 git clone https://github.com/alfigufron/crud-laravel.git 
```

Change directory
```
 cd crud-laravel 
```

Copy file .env.example file to .env, Then set the environment
```
 copy .env.example .env
```

Let's install all packages
```
 composer install 
```

Generate Application Key
```
 php artisan key:generate
```

Let's do some migration
```
 php artisan migrate 
```

And run the web server
```
 php artisan serve 
```

Now, visit http://localhost:8000 to try demo