<?php

require_once "data/Programmer.php";

$compay = new Company();
$compay->programmer = new Programmer("Christian");
var_dump($compay);

$compay->programmer = new BackendProgrammer("Christian");
var_dump($compay);

$compay->programmer = new FrontendProgrammer("Christian");
var_dump($compay);

sayHelloProgrammer(new Programmer("Tian"));
sayHelloProgrammer(new BackendProgrammer("Tian"));
sayHelloProgrammer(new FrontendProgrammer("Tian"));