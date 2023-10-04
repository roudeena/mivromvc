<?php

namespace MVC\core;

class helpers{
    static public function redirect($path){
        header("LOCATION:DOMAIN_NAME".$path);
    }
}