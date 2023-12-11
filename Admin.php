<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ |Hello manager</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color:#4b3939;
        }
        div.header img{
                     position: relative;
                     width: 100%;
                     height: 170px;
                     margin: 0;
                     padding: 0;
                     z-index: -1;
                 }
        div.bar{position: absolute; top:30px; left:5%;}
        div.bar ul{ margin: 0; padding: 0; list-style: none; text-align: right; padding-top: 40px;}
        div.bar ul li {float: none; display: inline-block;}
        div.bar ul li:nth-child(1) {float: left;}
        div.bar ul li:nth-child(2) {float: left;}
        div.bar ul li:nth-child(3) {float: left;}
        div.bar ul li:nth-child(4) {float: right;}
        div.bar ul li a{color: black; font-size: 33px; font-family: 'Great Vibes', cursive; text-decoration: none; display: block;
            padding: 10px 30px; }
        div.bar ul li a.active{color: #ff6d84;}
        div.nbar{position: absolute; top:30px; left:65%;}
        div.nbar ul{ margin: 0; padding:0; list-style: none; text-align: left; padding-top: 40px;}
        div.nbar ul li {float: none; display: inline-block;}
        div.nbar ul li:nth-child(1) {float: right;}
        div.nbar ul li:nth-child(2) {float: right;}
        div.nbar ul li:nth-child(3) {float: right;}
        div.nbar ul li a{color: black; font-size: 33px; font-family: 'Great Vibes', cursive; text-decoration: none; display: block;
            padding: 10px 30px; }
        div.bar ul li a:hover{ color: #ff6d84; transition: all 0.5s linear;  }
        div.nbar ul li a:hover{ color: #ff6d84; transition: all 0.5s linear;  }

        div.slider{ position: relative; top:30px; left: 10px;  width:100%; overflow: hidden; z-index: -1;}
        div.slides{width: 600%; height: 700px; display: flex; }
        div.slides input{display: none;}
        div.slide{width: 20%; transition: 2s; position:relative;z-index: -1;  }
        div.slide img{width:1200px; height:550px; margin-left: 133px; margin-top:40px; z-index: -1; }
        div.nav-manual-start{margin: 5px; display: flex; justify-content: center;}
        div.nav-manual-start label{ width:10px; height:10px;  border: 3px solid #ffe6f2; padding:3px;  border-radius: 10px; cursor: pointer; transition: all 0.5s ease; margin: 5px;}
        label.manualB:hover{background: #ffe6f2;}
        #radio1:checked ~ .first{margin-left: 0}
        #radio2:checked ~ .first{margin-left: -20%}
        #radio3:checked ~ .first{margin-left: -40%}
        #radio4:checked ~ .first{margin-left: -60%}
        #radio5:checked ~ .first{margin-left: -80%}
        div.autoNav{position: absolute; display:flex; width:1200px; justify-content:center; margin-top:707px; margin-left:9%;}
        div.autoNavv div{border:#ffe6f2 3px solid;width:9px; height:9px; padding:3px; margin: 5px; border-radius:10px; transition:2s; justify-content: center;  }
        div.autoNav div:not(:last-child){}
        #radio1:checked~ .autoNav .navB1{background: #ffe6f2;}
        #radio2:checked~ .autoNav .navB2{background: #ffe6f2;}
        #radio3:checked~ .autoNav .navB3{background: #ffe6f2;}
        #radio4:checked~ .autoNav .navB4{background: #ffe6f2;}
        #radio5:checked~ .autoNav .navB5{background: #ffe6f2;}
        div.nbar ul li ul{ position: absolute; left: 0; width: 270px; background-color:rgba(255, 244, 232, 1); display: none}
        div.nbar ul li:focus-within > ul,div.nbar ul li:hover > ul{display: initial}
        div.nbar ul li ul li {width:100%; border-top: 1px solid #4b3939;}
        div.nbar ul li ul li a:hover{z-index:1; background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear}
        div.bar ul li ul li #crepe a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear; z-index=1;}


        div.bar ul li ul{ position: absolute; left:70%; width: 300px; background-color:rgba(255, 244, 232, 1); display: none}
        div.bar ul li:focus-within > ul,div.bar ul li:hover > ul{display: block}
        div.bar ul li ul li {width:100%; border-top: 1px solid #4b3939; float: left}
        div.bar ul li ul li a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear; z-index=1;}
        div.bar ul li ul li #login a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear; z-index=1;}

        div.container{
            margin-top: 35px;
            width:100%;
            height: 700px;
            border: 3px solid #cce6ff;
            background-color:rgba(255, 244, 232, 1) ;
        }
        div.def h2{
            text-align: center;
            margin-top: 20px;
            color: #ff6d84;
            font-family: 'Great Vibes', cursive;
            font-size: 50px;
        }
        div.def #firstt{
            text-align: center;
            margin-top: 20px;
            color: #4b3939;
            font-family: "Arial Nova Light";
            font-size: 20px;

        }
        div.def #second{
            text-align: center;
            margin-top: 10px;
            color: #4b3939;
            font-family: "Arial Nova Light";
            font-size: 20px;
            margin-bottom: 30px;

        }
        div.def pre{
            text-align: center;
        }
        div.container table.wcm {
            width: 100%;
            position: relative;
            top:80px;
        }
        div.container table.wcm h2{color: #ff6d84;
            font-family: 'Great Vibes', cursive;
            text-align: center;
            font-size: 30px;}
        div.container table.wcm h2 a{
            text-decoration: none; color: #ff6d84;
        }
        div.container table.wcm p{
            color: #4b3939;
            font-family: "Arial Nova Light";
            font-size: 15px;}
        div.container table.wcm h2 a:hover{
            color: #4b3939;
            transition:all 0.5s linear;

        }

    </style>
</head>

<body>
<div class="header">
    <img src="imgs/header.png" alt="">
    <div class="bar"><ul>
            <li><a class="active" href="Admin.php">Home</a></li>
            <li><a href="#">Menu</a>
                <ul>
                    <li><a href="Add_Delete_Waffle2.php">Add/Delete Waffle</a></li>
                    <li id="crepe"><a href="Add_Delete_crepe2.php">Add/Delete Crepe</a></li>
                </ul>
            </li></ul>
    </div>
    <div class="nbar">
        <ul>
            <li><a href="Admin(make).php">Make your sweet</a></li>
            <li><a href="#">Account</a>
                <ul>
                    <li><a href="Adminorder.php">Orders</a></li>
                    <li><a href="Logout.php">Log out</a></li>
                </ul>

            </li>
        </ul></div>
</div>
<div class="slider">
    <div class="slides">
        <input type="radio" name="radioB" id="radio1">
        <input type="radio" name="radioB" id="radio2">
        <input type="radio" name="radioB" id="radio3">
        <input type="radio" name="radioB" id="radio4">
        <input type="radio" name="radioB" id="radio5">

        <div class="slide first"><img width=100% src="imgs/S1.jpg" alt=""></div>
        <div class="slide"><img width=100% src="imgs/s2.jpg" alt=""></div>
        <div class="slide"><img width=100% src="imgs/s3.png" alt=""></div>
        <div class="slide"><img width=100% src="imgs/s4.jpg" alt=""></div>
        <div class="slide"><img width=100% src="imgs/s5.png" alt=""></div>

        <div class="autoNav">
            <div class="navB1"></div>
            <div class="navB2"></div>
            <div class="navB3"></div>
            <div class="navB4"></div>
            <div class="navB5"></div>
        </div>
    </div>
    <div class="nav-manual-start">
        <label for="radio1" class="manualB" ></label>
        <label for="radio2" class="manualB" ></label>
        <label for="radio3" class="manualB" ></label>
        <label for="radio4" class="manualB" ></label>
        <label for="radio5" class="manualB" ></label>
    </div>
    <script type="text/javascript">
        var counter=1;
        setInterval(function(){
            document.getElementById('radio'+counter).checked =true;
            counter++;
            if(counter > 5){counter=1;}
        },4000);
    </script>
</div>
<div class="container"><div class="def">
        <h2>Hello, We are Sweet you day </h2>
        <pre>❀―――――❁ ❁ ❁ ❁ ―――――❀ </pre>
        <p id="firstt">Ordering from our yummy waffles and crepes will make you ask for more and more</p>
        <p id="second">you can also make your own healthy sweetish snack</p>

    </div >
    <table class="wcm">
        <tr>
            <td><div class="waffle"><h2><a href="#">Yummy Waffle!</a></h2> <p>
                    <pre>
                    In Waffle Your Day we have so many yummy waffles
                     order you favourite now!
                    </pre></p></div></td>
            <td><div class="crepe"><h2><a href="#">Delicious Crepes!</a></h2> <p>
                    <pre>
                    Here we Have different types of great crepes
                     order you favourite now!
                    </pre></p></div></td>
            <td><div class="make"><h2><a href="#">Healthy? Make your Sweet</a></h2><p>
                    <pre>
                    Walking on a healthy life style make your own yummy and
                     healthy waffle or crepe now with us
                    </pre></p></div></td>
        </tr>
    </table>
</body>
          </html>


