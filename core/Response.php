<?php

namespace app\core;

class Response{
    function setStatusCode($code){
        http_response_code($code);
    }
}