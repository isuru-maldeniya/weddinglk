<?php

namespace controller;
 include_once '../model/authModel.php';
//use model\authModel;

class authController{
    public $model;
    public function __construct(){
        $this->model=new \model\authModel();
    }
////////start login part
    public function checkEmptyPass($password){
        if(!empty($password) && !$password=""){
            return true;
        }else{
            return false;
        }

    }
    public function checkEmptyUserName($username){
        if(!empty($username) && !$username=""){
            return true;
        }else{
            return false;
        }

    }
    public function checkUserNameAndPassword($username,$password){
        if($this->checkEmptyPass($password) && $this->checkEmptyUserName($username)){
            return true;
        }else{
            return false;
        }

    }
    public function login($username,$password){

        if (!$this->checkUserNameAndPassword($username,$password)){
            //send JS message that empty credential
            return;
        }

        if($this->model->login($username,md5($password))){
            header("Location: firstview.php");
        }else{
            return;
        }
    }
/////////////////////end of login part

////////////////////start of register part
    public function register(){
        header("Location: register.php");
    }

    public function fPassword(){
        header("Location: forgotPassword.php");
    }
}
