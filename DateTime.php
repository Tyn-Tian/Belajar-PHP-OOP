<?php

$dateTime = new DateTime();
$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));

$dateTime->setDate(2003, 12, 28);
$dateTime->setTime(18, 29, 54);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$string = $dateTime->format("Y-m-d H:i:s");
echo "Waktu saat itu : $string" . PHP_EOL;


$date = DateTime::createFromFormat("Y-m-d H:i:s", "2024-04-12 20:11:49", new DateTimeZone("Asia/Jakarta"));
var_dump($date);