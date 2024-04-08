<?php

class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first, 
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth
        ];
        
        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}