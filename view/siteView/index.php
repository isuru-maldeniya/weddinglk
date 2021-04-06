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

    </style>
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
    <div></div>
</div>
</body>
</html>
