<?php
require_once "vendor/autoload.php";

$hello = new Ken\Hello\Greet();
echo $hello->hello();

$you = new Ken\Hello\Greet("You");
echo $you->hello();

echo "\n";

// $hiGirl = new Saktibuana\Hello\Hello('My Goddess');
// echo $hiGirl->hello();