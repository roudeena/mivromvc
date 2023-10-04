<?php

namespace MVC\models;

use MVC\core\model;

// class for table name
class User{
    public function getAllUsers(){
        //assign the return of database connection to variable
        $db=model::db();
        //select from database
        return $data=$db->rows("select * FROM `admins`");
    }
    public function getUser($email,$password){
        $db=model::db();
        $data=$db->row("select * FROM `admins` WHERE `email`= ? AND `password`= ?",[$email,$password]);
        return $data;
    }
    public function insertUser($name,$email,$password){
        $db=model::db();
        $data=$db->insert("`admins`",['name'=>$name,'email' => $email, 'password' => $password]);
        return $data;
    }
}