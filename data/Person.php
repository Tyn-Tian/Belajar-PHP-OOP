<?php

class Person
{
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(string $nama)
    {
        echo "Hello $nama" . PHP_EOL;
    }
}
