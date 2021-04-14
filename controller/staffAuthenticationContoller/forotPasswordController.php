<?php


namespace staffAuthenticationContoller;
//use model\fogModel;

include_once '../../model/staffAuthenticationModel/fogModel.php';

class forotPasswordController
{
    private $fogMod;
    private $fog2;
    public function __construct()
    {


        session_start();
        if(!isset($_SESSION['username'])){
            header("location: index.php");
        }


        $this->fogMod=new \staffAuthenticationModel\fogModel();
        $this->fog2="";
    }
    public function addfog2(){
        echo "<p>".$this->fog2."</p>";
    }

    private function otpCheck($otp){
//        session_start();
        if($_SESSION['otp']==$otp){
            return true;
        }else{
            return false;
        }
    }


    private function equalCheck($pass,$cPass){
        if($pass==$cPass){
            return true;
        }else{
            return false;
        }
    }

    private function checkEmpty($str){
        if(!empty($str) && $str!=""){
            return true;
        }else{
            return false;
        }
    }
    public function stablishPass($otp,$pass,$cPass){
//        echo $otp.", ".$pass.", ".$cPass;
        if(!$this->otpCheck($otp)){
            $this->fog2="otp is not valid";
            return;
        }
        if(!$this->equalCheck($pass,$cPass)){
            $this->fog2="passwords are not matching";
            return;
        }
        if (!$this->checkEmpty($pass)){
            $this->fog2="password field is empty";
            return;
        }

        if (!$this->checkEmpty($cPass)){
            $this->fog2="confirm password field is empty";
            return;
        }

        if (!$this->checkEmpty($otp)){
            $this->fog2="otp field is empty";
            return;
        }
        $this->fogMod->updatePassword($_SESSION['username'],md5($pass));
        session_destroy();
        header("location: index.php");
    }


}