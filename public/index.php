<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
use app\Auth;

require "../vendor/autoload.php";

$attributes = [
    "email" => "sergioalmeidaa00@gmail.com",
    "password" => "123456"
];


Auth::attempt($attributes);
