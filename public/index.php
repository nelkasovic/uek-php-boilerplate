<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Example;

$example = new Example();

$example->setGreeting('Hello World!');

echo '<h1>' . $example->getGreeting() . '</h1>';

echo Example::sayHello();