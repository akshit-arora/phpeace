<<<<<<< HEAD
# phpeace
A package to display peace quotes in the application
=======

# PHPeace

A package to retrieve peace quotes in your application.




[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)


## Description

The idea generated from a discussion on X (formerly Twitter):

**_As a community, we should support peace. How about supporting #PHPeace?_**

**_PHP is one of the most widely used languages in the world, we can spread the message worldwide easily._**


## Installation

Install my-project with composer

```bash
  composer require akshitarora/phpeace
```

## Documentation

Get the peace quotes using Artisan commands

```
php artisan phpeace
```

You can also use the quotes in your application as per your needs using the PHPeace Facade:

```php
use AkshitArora\PHPeace\Facades\PHPeace;

PHPeace::getQuote() //Get the peace quote
```
## Authors

- [@akshit-arora](https://github.com/akshit-arora)


## Contributing

Contributions are always welcome!

You are invited to add your favorite peace quotes in the list.

Just add them to `quotes()` function in `src/PHPeace/PHPeace.php` file and submit PR.
## Feedback

If you have any feedback, please reach out to me on X at [akshitarora0907](https://twitter.com/akshitarora0907)

>>>>>>> Add README
