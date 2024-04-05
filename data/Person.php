<?php

class Person
{
    const AUTHOR = "Christian";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}
