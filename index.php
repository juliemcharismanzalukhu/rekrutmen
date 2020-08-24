<?php 

session_start();

require_once "systems/Config.php";
require_once "systems/Database.php";
require_once "systems/Controller.php";
require_once "systems/Model.php";
require_once "systems/Views.php";
require_once "systems/Routes.php";
require_once "systems/Redirect.php";
require_once "systems/Sessions.php";

$databaseConfig = new Config('database');

function view($name, $data = []) {
    return (new Views())->view($name, $data);
}

function config($name = []) {
    $name_arr   = explode('.', $name);
    $config     = new Config($name_arr[0]);
    return $config->get($name_arr[1]);
}

function base_url($name = '') {
    return config('url.base_url') . $name;
}

function model($name) {
    require_once 'app/models/' . $name  . '.php';
}

function session() {
    return new Sessions();
}

(new Routes)->run($_GET);
