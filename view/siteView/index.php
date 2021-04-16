<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        nav{
            width: 100%;
            height: 75px;
            /*background-color: #0e7d8b;*/
        }
        nav h1{
            font-size: 30px;
            padding: 10px;
            display: inline;
            float: left;
        }
        nav ul{
            float: left;
        }
        nav ul li{
            padding: 20px;
            float: left;
            list-style: none;
            position: relative;
        }
        nav ul li a{
            display: block;
            text-decoration: none;
            color: #1c1c1c;
        }
        nav ul li a:hover{
            color: #ff00c3;
        }
        nav ul li ul{
            background-color: #ffffff;
            display: none;
            /*text-decoration: none;*/
            position: absolute;
            padding: 10px;
            border-radius: 0px 0px 20px 20px;
        }

        nav ul li:hover ul{
            display: block;
            /*text-decoration: none;*/
            position: absolute;
            padding: 0px;
        }

        nav ul li ul li a{
            padding: 0px 4px;
            color: #1c1c1c;
        }

        nav ul li ul li{
            width: 180px;
            padding: 8px 14px;
        }
        nav ul li ul li a:hover{
            color: #ff00c3;
        }

        .authContainer{
            position: relative;
            float: right;
            /*margin: 20px;*/
        }
        .wall{

            background-image: url("images/NewProject.png");
            width: 100%;
            height: 500px;
        }
        .btn{
            position: relative;
            border: 2px solid #2e99ff ;
            width: 70px;
            border-radius: 3px;
            background-color: #daefff;
            top: 22px;
            /*bottom: 0;*/
            margin: auto;
        }
        .pProf{
            position: relative;
            top: 15px;
            border-radius: 90%;
            width: 40px;
            height: 40px;
            background-color: #0e7d8b;
            float: right;
            margin: 0px 10px 40px 10px;
            background-image: url("images/profile-user.png");
            background-size: cover;
            /*margin-left: 10px;*/
        }
        .quote{
            color: #a8888e;
            /*float: right;*/
            width: 100%;
            margin-right: 20px;
            text-align: right;
            float: right;
        }
        .filler{
            height: 300px;
        }
        .butDiv{
            text-align: center;
            /*alignment: center;*/
        }
        .hostBtn{
            /*width: 40px;*/
            height: 40px;
            width: 250px;
            border-radius: 7px;
            background-color: #ea6fb4;
            color: #f392e6;
            font-size: 20px;
            border: 1px solid #eacdca;
            opacity: 0.8;
        }
        .quat{
            text-align: center;
            color: #dddddd;
        }
        .hostBtn:focus{
            /*border: none;*/
            outline: none;
            background-color: #eacdca;

        }
        .guide{
            margin: 20px 0px 20px 0px;
            text-align: center;
        }
        .roadMap{
            margin: 0px 30px 20px 30px;
            /*width: 100%;*/
            min-height: 300px;
            background-color: #ffcff4;
            border: 3px solid #b6a0a0;
            border-radius: 30px;
        }
        .nev h2{
            position: relative;
            top: 5px;
            /*bottom: 0;*/
            /*margin: auto;*/
            display: inline-block;
            color: #ffffff;
            padding-left: 10px;
            padding-right: 10px;
            /*padding-bottom: 10px;*/

        }
        .nev{
            position: relative;
            padding-bottom: 20px;
            height: 20px;
            display: inline-block;
            background-color: #ff34cf;
            border-radius: 8px;
            margin: 20px;

        }
        .num1{

            display: inline-block;
            position: relative;
            top: 10px;
            margin-left: 10px;
            /*bottom: 0;*/
            /*margin: auto;*/
            width: 24px;
            height: 24px;
            background-image: url("images/number1.png");
            background-size: cover;
            /*margin-top: 10px;*/
        }
        .num2{

            display: inline-block;
            position: relative;
            top: 10px;
            margin-left: 10px;
            /*bottom: 0;*/
            /*margin: auto;*/
            width: 24px;
            height: 24px;
            background-image: url("images/number2.png");
            background-size: cover;
            /*margin-top: 10px;*/
        }
        .num3{

            display: inline-block;
            position: relative;
            top: 10px;
            margin-left: 10px;
            /*bottom: 0;*/
            /*margin: auto;*/
            width: 24px;
            height: 24px;
            background-image: url("images/number3.png");
            background-size: cover;
            /*margin-top: 10px;*/
        }
        .num4{

            display: inline-block;
            position: relative;
            top: 10px;
            margin-left: 10px;
            /*bottom: 0;*/
            /*margin: auto;*/
            width: 24px;
            height: 24px;
            background-image: url("images/number4.png");
            background-size: cover;
            /*margin-top: 10px;*/
        }
        .num5{

            display: inline-block;
            position: relative;
            top: 10px;
            margin-left: 10px;
            /*bottom: 0;*/
            /*margin: auto;*/
            width: 24px;
            height: 24px;
            background-image: url("images/number5.png");
            background-size: cover;
            /*margin-top: 10px;*/
        }
        .num6{

            display: inline-block;
            position: relative;
            top: 10px;
            margin-left: 10px;
            /*bottom: 0;*/
            /*margin: auto;*/
            width: 24px;
            height: 24px;
            background-image: url("images/number6.png");
            background-size: cover;
            /*margin-top: 10px;*/
        }
        .arrow{
            position: relative;
            width: 32px;
            height: 32px;
            background-image: url("images/down-arrow.png");
        }
        .nev1{
            margin-left: 50px;
        }
        .nev2{
            margin-left: 200px;
        }
        .arr1{
            margin-left: 220px;
        }
        .nev3{
            margin-left: 380px;
        }
        .arr2{
            margin-left: 400px;
        }
        .nev4{
            margin-left: 410px;
        }
        .arr3{
            margin-left: 500px;
        }
        .arr4{
            margin-left: 460px;
        }
        .nev5{
            margin-left: 390px;
        }
        .arr5{
            margin-left: 400px;
        }
        .nev6{
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <nav>
        <h1>WeddingLk...</h1>
        <ul>
            <li><a href="#">Planning</a>
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Wedding Plans</a></li>
                    <li><a href="#">Company Bunches</a></li>
                    <li><a href="#">Outside Plans</a></li>
                    <li><a href="#">Flexi Plans</a></li>
                </ul>
            </li>
            <li><a href="#">Vendors</a>

            </li>
            <li><a href="#">Galerries</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a>
<!--                <ul>-->
<!--                    <li><a href="#">Our Shops</a></li>-->
<!--                    <li><a href="#">Venues</a></li>-->
<!--                    <li><a href="#">Decorations</a></li>-->
<!--                    <li><a href="#">Wears</a></li>-->
<!--                    <li><a href="#">Boutiques</a></li>-->
<!--                    <li><a href="#">Stationaries</a></li>-->
<!--                </ul>-->
            </li>
            <li><a href="#">Service</a>
                <ul>
<!--                    <li><a href="#"></a></li>-->
                    <ul>
                        <li><a href="#">Venue</a></li>
                        <li><a href="#">Decorations</a></li>
                        <li><a href="#">Wears</a></li>
                        <li><a href="#">Bouquets</a></li>
                        <li><a href="#">Stationaries</a></li>
                        <li><a href="#">Beauticians</a></li>
                        <li><a href="#">Requirements</a></li>
                        <li><a href="#">Cakes</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Transport</a></li>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">Planning</a></li>
                    </ul>
                </ul>
            </li>
        </ul>
        
        <div class="authContainer">
            <form action="index.php" method="post">
                <input class="btn" type="submit" value="Sign up">
                <input class="btn" type="submit" value="Sign in">
                <div class="pProf"></div>
            </form>

        </div>
    </nav>
    <div class="wall">
        <div class="filler"></div>
        <div class="quote">
            <h3>I appreciate you getting this to me, so quickly</h3>
<!--            <br>-->
            <h3>I have time to enjoy my life.</h3>
<!--            <br>-->
            <h3>-Kasun-</h3>
        </div>
        <br>
        <div class="butDiv">
            <input type="button" class="hostBtn" value="Host Your Wedding">
        </div>
        <br>
        <div class="quat"><h5>comfortably plan the most valuable day of your lif with us.</h5></div>
    </div>

    <div class="guide">
        <h2>How you can Plan Your Wedding, Learn it step by step</h2>
    </div>
    <div class="roadMap">
        <div class="nev nev1">
            <div class="num1"></div>
            <h2>sign up and login</h2>
        </div>
        <div class="arrow arr1"></div>
        <div class="nev nev2">
            <div class="num2"></div>
            <h2>Check out our services, Vendors and our Wedding Plans</h2>
        </div>
        <div class="arrow arr2"></div>
        <div class="nev nev3">
            <div class="num3"></div>
            <h2>Meet your wedding organizer</h2>
        </div>
        <div class="arrow arr3"></div>
        <div class="nev nev4">
            <div class="num4"></div>
            <h2>Confirm and buy services and vendors</h2>
        </div>
        <div class="arrow arr4"></div>
        <div class="nev nev5">
            <div class="num5"></div>
            <h2>Manage your service and vendors</h2>
        </div>
        <div class="arrow arr5"></div>
        <div class="nev nev6">
            <div class="num6"></div>
            <h2>View the progress of your wedding</h2>
        </div>



    </div>
</body>
</html>