<?php

namespace app;

use app\Model\User;
use app\shared\Session;

class Auth
{
    public static function attempt($attributes)
    {
        $user = User::find('email', $attributes['email']);
        Session::set('name', $user->name);
        var_dump($_SESSION);
    }
}
