<?php
//include_once '../controller/regiController.php';
include_once '../../controller/staffAuthenticationContoller/regiController.php';
$contro=new \staffAuthenticationContoller\regiController();
if(isset($_POST['next'])){
    $contro->forgNext($_POST['username']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquey.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lato&display=swap" rel="stylesheet">
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
            height: 200px;
        }
    </style>

</head>
<body>
<div class="tempBody">
<div class="filler"></div>
    <h1>you are in forgot password</h1>
    <div class="msg"><?php $contro->setMessagefog1();?></div>


    <form action="forgotPassword.php" method="post">
        <input type="text" onclick="" placeholder="username"  class="txtField" name="username" id="name">
        <br>
        <br>
        <input type="submit" class="regiBtn" name="next" value="next">
    </form>
</div>
</body>
</html>
