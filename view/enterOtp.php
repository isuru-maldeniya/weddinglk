<?php
include_once '../controller/regiController.php';
include_once '../controller/forotPasswordController.php';
//$regcon=new \controller\regiController();
$reccon2=new \controller\forotPasswordController();


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
</head>
<body>
<div>
    <form action="enterOtp.php" method="post">

        <?php $reccon2->addfog2();?>
        <h1>You are in new password</h1>
        <label for="otp">otp</label>
        <input type="text" name="otp" placeholder="otp">
        <br>
        <br>

        <label for="pass">new password</label>
        <input type="password" name="pass" placeholder="new password">
        <br>
        <br>

        <label for="cPass">confirm new password</label>
        <input type="password" name="cPass" placeholder="confirm new password">
        <br>
        <br>

        <input type="submit" value="confirm" name="confir">
    </form>
</div>
</body>
</html>
