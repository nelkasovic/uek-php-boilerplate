# PHP Package Boilerplate / Example Project

This repository shows a basic setup for a PHP package or application in PHP.

PHP is a general-purpose server-side scripting language primarily used in web development. Originally created by Rasmus Lerdorf in 1994, it is now by The PHP Development Team. PHP originally stood for "Personal Home Page", but now stands for "PHP: Hypertext Preprocessor".

## Getting Started

PHP 8.0 or above and Composer is expected to be installed on our system.

### Installing Composer

PHP packages were traditionally installed via PEAR (PHP Extension and Application Repository), but more recently the standard package and dependency management tool is Composer.

Composer lets us run install commands to add packages to our system, for example `composer require phpunit` would add the unit testing framework PHPUnit to our system.

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).

### Installing

After cloning this repository, change into the newly created directory and run

```bash
composer install
```

or if you have installed Composer locally in your current directory

```bash
php composer.phar install
```

This will install all dependencies needed for the project.

### Dependency Management

Managing dependencies manually is time-consuming, fortunately Composer can automate this.

We can list our dependencies in a `composer.json` file and run `composer install` to bring these into our project.

An example `composer.json` file looks like this:

```json
{
    "name": "example-project",
    "require": {
        "twig/twig": "^3.0"
    },
    "require-dev": {
        "phpunit/phpunit": "^8.4"
    }
}
```

The "require" block tells Composer that the Twig templating package is required for production use and can install Twig with a version of 3.x.x (ie. up to, but not including, version 4).

The "require-dev" block tells Composer that PHPUnit is required in development, but not in production.

Dependencies can be added to `composer.json` by

```bash
composer require author/package-name
```

Development dependencies can be added by

```bash
composer require author/package-name --dev
```

Dependencies can be updated to their latest maximum version by running

```bash
composer update
```

Composer will also generate a `composer.lock` file on each `composer update` and the initial `composer install`. This is not meant to be edited directly, it tells Composer to use specific versions of packages - particularly useful when hyhou want your development dependencies to match what you will push to production.

## Running the Tests

All tests can be run by executing

```bash
vendor/bin/phpunit
```

`phpunit` will automatically find all tests inside the `test` directory and run them based on the configuration in the `phpunit.xml` file.

### Testing Approach

The test for the class `Example` verifies that the methods returns the correct values.

## Directory Structure

A typical directory structure for a PHP project consists of a `src` directory that contains all source files and a `tests` directory that includes all tests. For web applications the publicly accessible files (eg. `index.php`) would reside in a `public` directory which would then be your webservers document root.

Another common convention is having a `bin` directory that may contain executable files to start your application.

- src/
- test/
- public/
- composer.json
- composer.lock

### Naming Conventions

Directory names are in lower case. Class and interface files should be in upper case and match the class or interface names.
Configuration, routes, and publicly accessible files should be in lower case.

For example the class `Example` should be contained in file `Example.php`, the publicly accessible route to the application should be `index.php`.

Tests match their production code file names with a `Test` suffix, e.g. tests for code in `src/Example.php` should be written in `test/ExampleTest.php`.

## Example Project

The main application consists of basically two files:

- `public/index.php` is the main executable that instantiates and runs:
  - `src/Example.php` contains the main application.

### Running the Tests

All tests can be run by executing

```bash
vendor/bin/phpunit
```

`phpunit` will automatically find all tests inside the `test` directory and run them based on the configuration in the `phpunit.xml` file.

### Running the Application

PHP has an in-built server for local development. To run this change into the directory `public` and run

```bash
php -S localhost:8000 
```

You also can start outside the public directory with

```bash
php -S localhost:8000 -t public
```

Then open your browser at `http://localhost:8000` and sou should see the text "Hello World" being printed.

## Further Material

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [PHPUnit](https://phpunit.de/)
- [php.net/docs.php](https://secure.php.net/docs.php)
- [phptherightway.com](http://www.phptherightway.com/)
- [learn-php.org](http://www.learn-php.org/)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Testing Tools

There are a number of testing tools available for PHP. The most popular one is [PHPUnit](https://phpunit.de/). PHPUnit follows the classic xUnit approach.

[Behat](http://behat.org/en/latest/) is the most popular behaviour-driven development (BDD) testing framework.

[Codeception](http://codeception.com/) is a framework combining BDD, unit testing, and integration testing, and is cross-compatible with PHPUnit.

In this guide we will be using PHPUnit as the testing framework.