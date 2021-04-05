<?php
$toAddress=$_POST['to'];
$name=$_POST['name1'];

//if(!isset($_SESSION['otp'])){
////    session_destroy();
//    session_start();
//    $_SESSION['otp']=rand(10000,99999);
//}


if(session_id()==""){
//    session_destroy();
    session_start();

}
$_SESSION['otp']=rand(10000,99999);



$otp=$_SESSION['otp'];
$msg="Hi ".$name." , You are welcome to the weddinglk. '$otp' is the opt to verify your account";
$headers = "From: mailer@weddinglk.com" . "\r\n" .
    "CC: ";
mail("$toAddress","Account Verification",$msg,$headers);
echo "'$name' , '$toAddress'";