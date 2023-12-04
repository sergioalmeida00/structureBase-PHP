<?php

namespace app\shared;

class Session
{
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function hasSession($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function getSession($key)
    {
        if (self::hasSession($key)) {
            return $_SESSION[$key];
        }
    }

    public static function removeSession($key)
    {
        if (self::hasSession($key)) {
            unset($_SESSION[$key]);
        }
    }

    public static function flash($key, $value)
    {
        $_SESSION['__flash'][$key] = $value;
    }

    public static function removeFlash()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && self::hasSession('__flash')) {
            unset($_SESSION['__flash']);
        }
    }
}
