<?php
namespace MVC\core;

class controller{
    // view class to call views and to send data to it through parameters
    public function view($path,$params){
        extract($params);
        require_once("VIEWS".$path.'.php');
    }
    
}