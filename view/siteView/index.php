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
            width: 100%;
            min-height: 300px;
            background-color: #ffcff4;
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

    </div>
</body>
</html>