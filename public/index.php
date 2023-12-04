<?php
session_start();
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
use app\Auth;
use app\shared\Session;

require "../vendor/autoload.php";

$attributes = [
    "email" => "sergioalmeidaa00@gmail.com",
    "password" => "123456"
];

// Session::flash('error','Não foi possivel cadastrar');
Session::removeFlash();
var_dump($_SESSION);

// Auth::attempt($attributes);
