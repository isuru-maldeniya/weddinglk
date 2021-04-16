<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../commonCSS/normalize.css">
    <link rel="stylesheet" href="CSS/indexCSS.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <script src="siteJS/jquey.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .head{
            left: 0;
            right: 0;
            margin: auto;
            padding: 0;
            position: relative;
            width: 80%;
            height: 70px;
            background-image: linear-gradient(to bottom, #f83ffc, #ee53f5, #e563ee, #dc6fe6, #d379de);
            /*background-color: #ffb0e1;*/
        }
        .verSep{

            /*border-top: 2px;*/
            top: 8px;
            bottom: 10px;
            margin: auto;
            border-left: 3px solid #ffffff;
            /*height: 42px;*/
            position:absolute;
            left: 37%;
            height: 62px;
            display: inline-block;
            bottom: 2px;
        }
        .headTopic{

            position: absolute;
            font-size: 25px;
            font-family: 'Courgette', cursive;
            top: 12px;
            text-shadow: -2px 4px 1px rgba(255,255,255,0.68);
            color: #E5179F;
            width: 35%;
            left: 1%;
            display: inline-block;
            alignment: right;
            height: 50px;

        }
        .topic{
            text-align: right;
            margin-bottom: 0px;


        }
        .headQuote{
            /*padding-bottom: 1rem;*/
            /*padding-top: 1rem;*/
            top: 30px;
            position: absolute;
            color: #ffffff;
            right: 1%;
            width: 61%;
            display: inline-block;
            text-shadow: -2px 3px 3px rgba(255,255,255,0.5);
            /*font-family: 'Sue Ellen Francisco', cursive;*/
            font-family: 'Sofia', cursive;
        }
        .headerList{
            list-style-type: none;
        }
        .hl{
            display: inline-block;
            width: 13.9%;
            text-align: center;
            padding-top: 0.5em;
        }
        .hlContainer{
            position: relative;
            margin-top: 5px;
            height: 35px;
            width: 100%;
            border-top: 2px solid #485855;
            border-bottom: 2px solid #485855;
        }
        .innerhlcontainer{
            position: relative;
            width: 80%;
            left: 0;
            right: 0;
            height: 34px;
            margin: auto;
        }
        .headerLink{
            text-decoration: none;
            text-decoration-color: gray;
        }
        .headerLink:link {
            color: green;
            background-color: transparent;
            text-decoration: none;
        }

        .headerLink:visited {
            color: pink;
            background-color: transparent;
            text-decoration: none;
        }

        .headerLink:hover {
            color: red;
            background-color: transparent;
            text-decoration: underline;
        }

        .headerLink:active {
            color: yellow;
            background-color: transparent;
            text-decoration: underline;
        }
        .imgDiv{
            position: relative;
            width: 100%;
            height: 500px;
            /*background-color: #0e7d8b;*/

            background-image: url("images/choice3-1500310473.jpg");
            /*background-position: center; !* Center the image *!*/
            /*background-repeat: no-repeat; !* Do not repeat the image *!*/
            background-size: cover; /* Resize the background image to cover the entire container */
        }

        .quoteByeditor{
            top: 35px;
            left: 4%;
            position: absolute;
            width: 400px;
            height: 400px;
            background-color: #dddddd;
            opacity: 0.8;
            border-radius: 20%;
            border: 4px solid hotpink;
        }
        .loginDiv{
            position: absolute;
            top: 45px;
            right: 4%;
            width: 400px;
            height: 400px;
            background-color: #ffffff;
            border-radius: 20%;
            border: 4px solid hotpink;
            /*opacity: 0.5;*/
        }
        .txtField{
            /*position: absolute;*/
            width: 200px;
            left: 85px;
            margin: 15px 15px 0px 15px;
            height: 25px;
            position: relative;
            border: 1px solid hotpink;
            border-radius: 30px;
            text-align: center;
            color: hotpink;
            caret-color: auto;


        }
        .form_header{
            position: relative;
            color: hotpink;
            text-align: center;
            width: 200px;
            left: 100px;
        }

        .txtField::placeholder{
            color: hotpink;
            text-align: center;
            opacity: 0.1;
        }
        .txtField:focus{
            /*border: 1px;*/
            outline: pink;
        }
        .fromdiv{
            position: absolute;

        }
        .btn{
            width: 150px;
            margin: 15px 0px 0px 0px;
            position: relative;
            left: 125px;
        }
        .lab{
            position: relative;
            alignment: center;
            width: 200px;
            left: 100px;
        }
    </style>
    <script src="siteJS/index.js"></script>
</head>
<body>
<div id="mBody">
    <div>
        <div class="head">
            <div class="headTopic"><h2 class="topic">Weddingslk....</h2></div>
            <div class="verSep"></div>
            <div class="headQuote"><h5>Colourful life with <br> unbelievable Creativity</h5></div>
        </div>
    </div>
    <div class="hlContainer">
        <div class="innerhlcontainer">

            <ul class="headerList">
                <li class="hl"><a class="headerLink" href="">Home</a></li>
                <li class="hl"><a class="headerLink" href="">service</a></li>
                <li class="hl"><a class="headerLink" href="">Companies</a></li>
                <li class="hl"><a class="headerLink" href="">Teams</a></li>
                <li class="hl"><a class="headerLink" href="">Galleries</a></li>
                <li class="hl"><a class="headerLink" href="">press</a></li>
                <li class="hl"><a class="headerLink" href="">contact</a></li>

            </ul>
        </div>
    </div>
    <div class="imgDiv">
        <div class="quoteByeditor"></div>
        <div class="loginDiv">
            <div class="fromdiv">
                <form action="index.php" method="post">
                    <h1 class="form_header">login</h1>
                    <br>
                    <input class="txtField" type="text" placeholder="username"><br>
                    <label class="lab">label</label><br>
                    <input type="password" class="txtField" placeholder="password"><br>
                    <label class="lab">label</label><br>
                    <input type="submit" class="btn logBtn" value="login">
                    <br>
                    <button type="button" class="btn signupbtn">sign up</button>
                    <br>
                    <button type="button" class="btn forgPass">forgot password</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
