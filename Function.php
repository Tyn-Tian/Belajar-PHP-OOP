<?php

require_once "data/Person.php";

$tyn = new Person();
$tyn->name = "Tyn";
$tyn->sayHello("Christian");

$budi = new Person();
$budi->name = "Budi";
$budi->sayHello(null);