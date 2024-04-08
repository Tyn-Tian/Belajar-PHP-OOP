<?php

class SocialMedia 
{
    public string $name;

    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

final class Facebook extends SocialMedia
{
    // Error
    // public function login(string $username, string $password): bool 
    // {
    //     return false;
    // }
}

// Error
// class FakeFacebook extends Facebook 
// {

// }
