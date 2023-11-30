<?php

namespace app\Model;

use app\Database\Connection;

class User
{
    private $table = "user";

    public static function find($field, $value)
    {
        $connection = Connection::getConnection();
        $prepare = $connection->prepare("SELECT * FROM users WHERE {$field} = :{$field} ");
        $prepare->execute([
            'email'=> $value
        ]);

         return $prepare->fetchObject();
    }
}
