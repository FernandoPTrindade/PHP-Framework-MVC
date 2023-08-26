<?php

namespace app\core;

class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Response $response;

    function __construct($root_path){
        self::$ROOT_DIR = $root_path;
        $this->router = new Router();
        $this->response = new Response();
    }

    public function run(){
        echo $this->router->resolve();
    }
}