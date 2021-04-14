<?php
//include_once '../controller/regiController.php';
//include_once '../controller/forotPasswordController.php';
include_once '../../controller/staffAuthenticationContoller/forotPasswordController.php';
//$regcon=new \controller\regiController();
$reccon2=new \staffAuthenticationContoller\forotPasswordController();


if(isset($_POST['confir'])){
//    $regcon->stablishPass($_POST['otp'],$_POST['pass'],$_POST['cPass']);
    $reccon2->stablishPass($_POST['otp'],$_POST['pass'],$_POST['cPass']);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
    <style>
        *{
            border: 0px;
            padding: 0px;
        }
        .tempBody{
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url("image/pexels-flo-dahm-458917.jpg ");
        }
        h1{
            text-align: center;
            font-family: 'Dela Gothic One', cursive;
            font-family: 'Dela Gothic One', cursive;
            font-family: 'Lato', sans-serif;
        }
        .txtField{
            height: 30px;
            display: block;
            position: relative;
            border: none;
            background: transparent;
            border-bottom: 2px solid #009879;
            width: 300px;
            /*alignment: center;*/
            left: 0;
            right: 0;
            margin: auto;
        }

        .txtField:hover{
            border-bottom: 2px solid #50afa2;
        }

        .txtField:focus{
            outline: none;
        }
        .regiBtn{
            position: relative;
            left: 0;
            right: 0;
            width: 250px;
            height: 40px;
            border-radius: 10px;
            margin: auto;
            text-align: center;
            alignment: center;
            display: block;
            /*background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);*/
            background-image: linear-gradient(to right, #50afa2, #3ac299, #49d381, #73e15b, #a8eb12);

        }

        .regiBtn:hover{
            cursor: pointer;
            -webkit-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
        }

        .regiBtn:focus{
            border: none;
            outline: none;
            background-image: linear-gradient(to right, #65d2c3, #5fddb3, #71e699, #93ec77, #bdee4e);
        }
        .msg{
            position: relative;
            margin: 0;
            width: 100%;
            text-align: center;
            color: #ED4337;
            font-size: 15px;
        }
        .msg p{
            margin-top: 0;
        }
        .filler{
            position: relative;
            width: 100%;
            height: 100px;
        }
    </style>
</head>
<body>
<div class="tempBody">
    <form action="enterOtp.php" method="post">
        <div class="filler"></div>

        <h1>You are in new password</h1>
        <div class="msg"><?php $reccon2->addfog2();?></div>
        <input class="txtField" type="text" name="otp" placeholder="otp">
        <br>
        <br>


        <input class="txtField" type="password" name="pass" placeholder="new password">
        <br>
        <br>


        <input class="txtField" type="password" name="cPass" placeholder="confirm new password">
        <br>
        <br>

        <input class="regiBtn" type="submit" value="confirm" name="confir">
    </form>
</div>
</body>
</html>
