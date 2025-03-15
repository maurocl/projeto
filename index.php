<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf("Hello %s!\n", $name);

include "user.php";

$mauro = new User("mauro","mauro");

echo $mauro, "\n";