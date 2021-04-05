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

</head>
<body>
<?php $contro->setMessagefog1();?>
<h1>you are in forgot password</h1>



<form action="forgotPassword.php" method="post">
    <label for="username">name</label>
    <input type="text" onclick="" placeholder="username" name="username" id="name">
    <br>
    <br>
    <input type="submit" name="next" value="next">
</form>
</body>
</html>
