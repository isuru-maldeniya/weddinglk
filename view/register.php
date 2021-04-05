<?php

include_once '../controller/regiController.php';
$auth=new \controller\regiController();
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
</head>
<body>

<?php
//include_once 'toast/toastdiv.php';
//$auth->showToast();
?>
<form action="register.php" method="post">

    <?php $auth->setMessage(); ?>

    <h1>you are in registration form</h1>

    <label for="name">name</label>
    <input type="text" onclick="" placeholder="jhone When" name="name" id="name">
    <br>
    <br>

    <label for="username">username</label>
    <input type="text" placeholder="username" name="username">
    <br>
    <br>

    <label for="email">email</label>
    <input type="text" placeholder="anyname@anymail,com" name="email" id="email">
    <button class="btn" id="sendOtp" type="button">send otp</button>

    <br>
    <br>

    <label for="otp">otp</label>
    <input type="text" placeholder="otp" name="otp">

    <br>
    <br>

    <label for="tel">Contact number</label>
    <input type="text" placeholder="contact" name="tel">
    <br>
    <br>

    <select id = "roll" name="roll" >
        <option value="" selected disabled>select a roll</option>
        <option value="1"> admin </option>
        <option value="2"> cordinator </option>
    </select>
    <br>
    <br>

    <label for="">Password</label>
    <input type="password" placeholder="password" name="pass">
    <br>
    <br>

    <label for="cPass">Confirm password</label>
    <input type="password" placeholder="confirm password" name="cPass">
    <br>
    <br>
    <input type="submit" name="register" value="register">


<!--    <script>-->
<!--        function favTutorial(){-->
<!--            var listId=document.getElementById("myList");-->
<!---->
<!--        }-->
<!--    </script>-->

    <script src='js/otp.js'></script>
</form>
</body>
</html>
