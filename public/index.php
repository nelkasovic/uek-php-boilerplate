<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Example;

$example = new Example();

$example->setGreeting('Hello World!');

echo $example->getGreeting();