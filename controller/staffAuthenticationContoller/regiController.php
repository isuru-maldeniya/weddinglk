<?php


namespace staffAuthenticationContoller;
//use model\regiModel;

//use staffAuthenticationModel\regiModel;

include_once '../../model/staffAuthenticationModel/regiModel.php';

class regiController
{
    private $fog2;
    private $regMod;
    private $regModms;
    private $fog1;
    public function __construct()
    {
        $this->regMod=new \staffAuthenticationModel\regiModel();
        session_start();
        $this->regModms="";
        $this->fog1="";
        $this->fog2="";
    }

    private function lenCheck($pass){
        if(strlen($pass)>=6){
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

    private function numLen($tel){
        if(strlen($tel)>=10 && strlen($tel)<=12){
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

    private function checkRoll($roll){
        if($roll==='' || empty($roll)){
            return true;
        }else{
            return false;
        }
    }

    private function otpCheck($otp){
        session_start();
        if($_SESSION['otp']==$otp){
            return true;
        }else{
            return false;
        }
    }

    private function generteMsg($msg,$msgClass){}

    public function showToast(){
        if(isset($_SESSION['msg']) && isset($_SESSION['msgClass'])){
                        echo " <script> notification.show(' ".$_SESSION['msg']." ','".$_SESSION['msgClass']."') </script>";
                        unset($_SESSION['msg']);
                        unset($_SESSION['msgClass']);
        }
    }


    public function setMessage(){
        echo "<p>".$this->regModms."</p>";
    }

    public function register($name,$username,$email,$tel,$pass,$cPass,$roll,$otp){
//        echo "in the register\n";



        if(!$this->checkEmpty($pass)){
            //send notification pass field is empty
            $this->regModms="pass field is empty";
//            $this->generteMsg("pass field is empty","danger");
//            <script></script>
//            echo " <script> alert('password field id empty'); </script>";
            return;
        }
//        echo "in the register2\n";

        if(!$this->checkEmpty($cPass)){
            //send notification cPass field is empty
//            $this->generteMsg("cPass field is empty","danger");
            $this->regModms="cPass field is empty";
            return;
        }
//        echo "in the register3\n";
        if(!$this->lenCheck($pass)){
            //send notification pass lenght is not enough
            $this->regModms="please enter password at least 6 charactors.";
//            $this->generteMsg("please enter password at least 6 charactors.","danger");
            return;
        }
//        echo "in the register4\n";
        if(!$this->equalCheck($pass,$cPass)){
            //send notification pass!= cPass
//            $this->generteMsg("password not match","danger");
//            echo " <script> notification.show(' password not matching  ',' danger ') </script>";
            $this->regModms="password not matching ";
            return;
        }
//        echo "in the register5\n";
        if(!$this->numLen($tel)){
//            $this->generteMsg("contact number is not valid","danger");
            //send notification number length is not enough
            $this->regModms="contact number is not valid ";
            return;
        }
//        echo "in the register6\n";
        if(!$this->checkEmpty($name)){
            //send notification name field is empty
//            $this->generteMsg("name is empty","danger");
            $this->regModms="name is empty ";
            return;
        }
//        echo "in the register7\n";
        if(!$this->checkEmpty($username)){
//            $this->generteMsg("username field is empty","danger");
            //send notification name field is empty
            $this->regModms="username is empty ";
            return;
        }
//        echo "in the register8\n";
        if(!$this->checkEmpty($name)){
            //send notification name field is empty
            return;
        }
//        echo "in the register9\n";
        if($this->regMod->userNameRepititionCheck($username)){
//            $this->generteMsg("username is not available","danger");
            //send notification username is in use
            $this->regModms="username is not available";
            return;
        }
//        echo "in the register10\n";
//        if(!$this->checkRoll($roll)){
//            //send notification name field is empty
//            echo "roll not added\n";
//        }
//        echo "in the register11\n";
//        echo "at the end of there";
//        echo "this is roll $roll   ";
        if($roll==10){
//            $this->generteMsg("select a role","danger");
            //send notification that port role has not set
//            echo "return from null checking";
            $this->regModms="select a role";
            return;
        }

        if (!$this->checkEmpty($otp)){
//            $this->generteMsg("enter the otp","danger");
            //otp is empty
            $this->regModms="enter the otp";
            return;
        }

        if (!$this->otpCheck($otp)){
            //otp is not matching
//            $this->generteMsg("otp is not matching","danger");
            $this->regModms="otp is not matching";
            return;
        }

        $user_id=$this->regMod->register($name,$username,$email,$tel,md5($pass));
//        echo $user_id;


        $this->regMod->addRoll($user_id,$roll);


        header("Location: firstview.php");
//        echo $roll;
        }



    private function sendOtp($emails){
        $_SESSION['otp']=rand(10000,99999);
        $otp=$_SESSION['otp'];
        $msg="Hi ".$emails['name'].", We are weddinglk. You have requested to reset your password. ".$otp." is the opt to verify your account";
        $headers = "From: weddinglk.noreply@gmail.com" . "\r\n" .
            "BCC: ";
        mail($emails['email'],"Password Reset",$msg,$headers);
        echo $emails['name']." ,".$emails['email'];

    }

//    public function stablishPass($otp,$pass,$cPass){
//        if(!$this->otpCheck($otp)){
//            $this->fog2="otp is not valid";
//            return;
//        }
//        if(!$this->equalCheck($pass,$cPass)){
//            $this->fog2="passwords are not matching";
//            return;
//        }
//        $this->regMod->updatePassword($_SESSION['username'],md5($pass));
//        session_destroy();
//        header("location: index.php");
//    }

//    public function addfog2(){
//        echo "<p>".$this->fog2."</p>";
//    }
    public function setMessagefog1(){
        echo "<p>".$this->fog1."</p>";
    }

    public function forgNext($username){
        if(!$this->checkEmpty($username)){
            $this->fog1="enter your username";
            return;
        }
        if (!$this->regMod->userNameRepititionCheck($username)){
            $this->fog1="username is not available";
            return;
        }
        $emails=$this->regMod->getEmail($username);
//        echo "this is the email ".$email[0];
//        echo "this is the email ".$emails['email']."<br>";
//        echo "this is the name ".$emails['name'];
//        $orEmail="";
//
//            echo "this is the email ".$emails;
        $this->sendOtp($emails);
        $_SESSION['username']=$username;
//        echo $orEmails;
//        session_destroy();
        header("location: enterOtp.php");
    }
}