<?php

namespace staffAuthenticationContoller;
 use staffAuthenticationModel\authModel;

 include_once '../../model/staffAuthenticationModel/authModel.php';
//use model\authModel;

class authController{
    private $message;
    public $model;
    public function __construct(){
        $this->message="";
        $this->model=new \staffAuthenticationModel\authModel();
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
        if(!$this->checkEmptyPass($password)){
            $this->message="password field is empty";
            return;
        }
        if(!$this->checkEmptyPass($username)){
            $this->message="username field is empty";
            return;
        }

        if (!$this->checkUserNameAndPassword($username,$password)){
            //send JS message that empty credential
            $this->message="incorrect details";
            return;
        }

        if($this->model->login($username,md5($password))){
            header("Location: firstview.php");
        }else{
            $this->message="incorrect details";
            return;
        }
    }
    public function setMsg(){
        echo "<p>".$this->message."</p>";
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
