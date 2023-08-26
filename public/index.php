<?php

require_once(dirname(__FILE__) . '/../vendor/autoload.php');
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function(){   
    return "<h1>Home Page</h1>";
});

$app->router->get('/entrar', 'login');
$app->router->get('/registrar', 'register');


$app->run();