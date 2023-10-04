<?php

namespace MVC\core;


class app{
    private $controller;
    private $method;
    private $params;
    public function __construct()
    {
        $this->url();
        $this->render();
    }
    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            // split array by separator
            $url=explode('/',$_SERVER['QUERY_STRING']);
            // set this controller
            $this->controller= (!empty($url[0])) ? $url[0]."Controller" : "homeController";
            // echo $this->controller;die;
            // set this method
            $this->method= (!empty($url[1])) ? $url[1] : "index";
            // remove first and second elements form $url array
            unset($url[0],$url[1]);
            // set this params and make the index starting from 0
            $this->params=array_values($url);
        }else{
            $this->controller='homeController';
            $this->method='index';
        }
    }
    private function render(){
        $controller="MVC\controllers\\".$this->controller;
        if(class_exists($controller)){
            $controller= new $controller;
            if(method_exists($controller,$this->method)){
                // call method of controller
                $this->params=[];
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                echo "method not exist";
            }
        }else{
            echo "class not exist";
        }
    }

}