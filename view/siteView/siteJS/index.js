$(document).ready(function () {
    $('.forgPass').click(function (event) {
        $('.fromdiv').load('forget.php');
        }
    );

    $('.signupbtn').click(function () {
        $('.fromdiv').load('register.php');
    });
});
