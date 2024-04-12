<?php

$matches = [];
$result = preg_match_all("/chris|an/i", "Christian", $matches);

var_dump($result);
var_dump($matches);


$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "Chistian adalah programmer website");
var_dump($result);