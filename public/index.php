<?php require __DIR__ . '/../vendor/autoload.php'; ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>Hello World</title>
</head>
<body>
<!-- Start PHP code -->
<?php

use App\Example;

$example = new Example();

$example->setGreeting('Hello World!');

echo '<h1>' . $example->getGreeting() . '</h1>';

echo Example::sayHello();

?>
<script src="./dist/bundle.js"></script>
</body>
</html>
