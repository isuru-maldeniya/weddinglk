<?php

include_once '../../controller/staffAuthenticationContoller/regiController.php';
$auth=new \staffAuthenticationContoller\regiController();
if(isset($_POST['register'])){
    $roll=isset($_POST['roll']) ? $_POST['roll']: 10;
    $auth->register($_POST['name'],$_POST['username'],$_POST['email'],$_POST['tel'],$_POST['pass'],$_POST['cPass'],$roll,$_POST['otp']);
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
    <script src="js/jquey.js"></script>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lato&display=swap" rel="stylesheet">

    <script>
        $(document).ready(function (){
            $(".btn").click(function (event) {
                let email=document.getElementById("email").value;
                let name=document.getElementById("name").value;
                // event.preventDefault();
                console.log(email,name);
                $.post("ajax/emailOtp.php",{to:email,name1:name}, function (data, status) {
                    console.log(data);
                });

            });

        });

    </script>
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
        .emailfield{

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

        .otpBtn{
            position: relative;
            left: 0;
            right: 0;
            width: 250px;
            height: 40px;
            border-radius: 10px;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            alignment: center;
            display: block;
            /*background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);*/

            background-image: linear-gradient(to right, #ee1d2e, #f34051, #f45b71, #f1758c, #eb8ca4);
        }

        .otpBtn:hover{
            cursor: pointer;
            -webkit-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
            box-shadow: -7px 26px 133px 0px rgba(0,0,0,0.75);
        }

        .otpBtn:focus{
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
    </style>
</head>
<body>

<?php
//include_once 'toast/toastdiv.php';
//$auth->showToast();
?>
<div class="tempBody">
    <div class="centerDiv">
        <form action="register.php" method="post">



            <h1>Staff Registration</h1>
            <div class="msg"><?php $auth->setMessage(); ?></div>

            <input type="text" onclick="" class="txtField" placeholder="Your Name" name="name" id="name">
            <br>



            <input type="text" class="txtField" placeholder="Username" name="username">
            <br>



            <input type="text" class="txtField emailfield" placeholder="Email" name="email" id="email">
            <button class="btn otpBtn" id="sendOtp" type="button">send otp</button>

            <br>


            <input type="text" class="txtField" placeholder="Otp" name="otp">

            <br>


            <input type="text" class="txtField" placeholder="Contact" name="tel">
            <br>

            <select id = "roll" name="roll"  class="txtField">
                <option value="" selected disabled>select a roll</option>
                <option value="1"> admin </option>
                <option value="2"> cordinator </option>
            </select>
            <br>


            <input type="password" class="txtField" placeholder="Password" name="pass">
            <br>


            <input type="password" class="txtField" placeholder="Confirm Password" name="cPass">
            <br>
            <input type="submit" name="register"  class="regiBtn" value="register">


            <!--    <script>-->
            <!--        function favTutorial(){-->
            <!--            var listId=document.getElementById("myList");-->
            <!---->
            <!--        }-->
            <!--    </script>-->

            <script src='js/otp.js'></script>
        </form>
    </div>
</div>
</body>
</html>
