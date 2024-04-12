<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest 
{
    public string $name;
    public string $address;
    public string $email;
}

$register = new RegisterUserRequest();

ValidationUtil::validateReflection($register);