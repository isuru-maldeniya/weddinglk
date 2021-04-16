<?php

include_once '../../controller/staffAuthenticationContoller/authController.php';
$auth= new \staffAuthenticationContoller\authController();
// $auth->logn();

//use controller\Authenticationmod;
//$auth=new Authenticationmod();

if(isset($_POST['login'])){
    $auth->login($_POST['username'],$_POST['password']);
}
if (isset($_POST['register'])){
    $auth->register();
}

if (isset($_POST['fPassword'])){
    $auth->fPassword();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lato&display=swap" rel="stylesheet">

    <title>staff Login</title>
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

        .btnreg{
            position: relative;
            top: 10px;
            /*left: 0;*/
            right: 0;
            width: 130px;
            height: 30px;
            border-radius: 30px;
            margin-left: 87%;
            text-align: center;
            alignment: left;
            display: inline;
            background: transparent;
            border: 2px solid #00ff00;
            color: #00ff00;
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

        .centerDiv{
            position: relative;
            display: inline-block;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            width: 100%;
            height: 100%;

        }
        .filler{
            position: relative;
            width: 100%;
            height: 100px;
        }
        .btnlogin{
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
        .lab{
            text-align: center;
            position: relative;
            display: block;
            width: 100%;
            left: 0;
            right: 0;
            margin: auto;
        }
        .fgBtn{
            background: transparent;
            color: #009879;
        }
        .headerdiv{

        }
        .fgBtn:hover{
            color: #50afa2;
        }
        .fgBtn:focus{
            cursor: pointer;
            border: none;
            outline: none;
            color: #00ff00;
        }
        .btnlogin:hover{
            cursor: pointer;
            -webkit-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
        }
        .btnlogin:focus{
            border: none;
            outline: none;
            background-image: linear-gradient(to right, #65d2c3, #5fddb3, #71e699, #93ec77, #bdee4e);
        }
        .btnreg:focus{
            /*border: none;*/
            outline: none;
            border: 2px solid #50afa2;
            color: #50afa2;
        }
        .btnreg:hover{
            -webkit-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
        }
        .txtField:hover{
            border-bottom: 2px solid #50afa2;
        }
        .txtField::placeholder{
            /*text-align: center;*/
        }
        .warn{
            position: relative;
            margin: 0;
            width: 100%;
            text-align: center;
            color: #ED4337;
            font-size: 15px;
        }
        .warn p{
            margin-top: 0;
        }
        .txtField:focus{
            outline: none;
        }
    </style>
</head>
<body style="background-color: #1c1c1c">
<div class="tempBody">

    <form action="index.php" method="post">
        <div class="headerdiv">

            <input type="submit" value="register" class="btnreg" name="register"><br>

        </div>


        <div class="centerDiv">
            <div class="filler"></div>
            <h1>Staff Login</h1>

            <label class="lab">welcome to the WeddingsLk!did you forget<br> the password? <input type="submit" value="click here to reset" class="fgBtn" name="fPassword"><br><br></label>
            <div class="warn"><?php $auth->setMsg(); ?></div>
            <input type="text" name="username" class="txtField" placeholder="username">
            <br><br>
            <input type="password" name="password" class="txtField" placeholder="password">
            <br><br>
            <input type="submit" value="login" class="btnlogin" name="login"><br>
        </div>


    </form>

</div>
</body>
</html>
