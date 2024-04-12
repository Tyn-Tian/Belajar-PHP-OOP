<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$LoginRequest = new LoginRequest();
$LoginRequest->username = "  ";
$LoginRequest->password = "  ";

try {
    validateLoginRequest($LoginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());
} finally {
    echo "Error atau pun tidak akan dieksekusi" . PHP_EOL;
}