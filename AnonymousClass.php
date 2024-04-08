<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("Christian") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
