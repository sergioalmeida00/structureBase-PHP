<?php

namespace app;

use app\Model\User;

class Auth
{
    public static function attempt($attributes)
    {
        $user = User::find('email', $attributes['email']);
        var_dump($user->name);
    }
}
