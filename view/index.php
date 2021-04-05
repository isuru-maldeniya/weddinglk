<?php

include_once '../controller/authController.php';
$auth= new \controller\authController();
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
    <title>Document</title>
</head>
<body>
<div>
<?//echo 'checking'. var_dump(file_exists($ENGINE."/controller/authController.php"));?><!--    -->
</div>


    <form action="index.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" placeholder="username">
        <br><br>
        <label for="password">password</label>
        <input type="text" name="password" placeholder="password">
        <br><br>

        <input type="submit" value="login" name="login"><br>
        <input type="submit" value="register" name="register">
        <input type="submit" value="forgot password" name="fPassword">

    </form>
</body>
</html>