<?php

require_once "data/Person.php";

$tyn = new Person("Tyn", "pangkalpinang");
$tyn->sayHello("Christian");

$budi = new Person("Budi", "Jakarta");
$budi->sayHello(null);

$tyn->info();
$budi->info();