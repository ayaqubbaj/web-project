<!-- Sign up-->
<?php
$conn = mysqli_connect('localhost','root','','sweetdesert');
if(!$conn){
    die("<script>alert('connection failed')</script>");
}else{
    if(isset($_POST['signup'])){



    }
}

?>
<!-- log in -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Waffle Your Day!</title>
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
        div.nbar ul li a.activee{color: #ff6d84;}

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

        div.slider{ position: relative; top:30px; left: 10px;  width:100%; overflow: hidden;}
        div.slides{width: 600%; height: 700px; display: flex;}
        div.slides input{display: none;}
        div.slide{width: 20%; transition: 2s; position:relative;z-index: -1; }
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


        div.bar ul li ul{ position: absolute; left:70%; width: 270px; background-color:rgba(255, 244, 232, 1); display: none}
        div.bar ul li:focus-within > ul,div.bar ul li:hover > ul{display: block}
        div.bar ul li ul li {width:100%; border-top: 1px solid #4b3939; float: left}
        div.bar ul li ul li a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear; z-index=100;}
        div.bar ul li ul li #login a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear;}

        div.box{
            z-index: 0;
            width:600px; height:300px;
            position:absolute; margin:4% auto;
            top:20%;
            left:30%;
            background: #ffe6f2; opacity:85%;
            color: padding: 5px;
            border-radius:55px;
            overflow: hidden;
        }
        div.box h3{
            position: relative;
            left:50px;
            top: 15px;
            font-family: 'Great Vibes', cursive;
            color: #4b3939;
            font-size:30px;
            font-weight: bold;
            font-weight: 700;
        }
        div.box h5{
            position: relative;
            left:50px;
            top: 15px;
            font-family: 'Great Vibes', cursive;
            color: #4b3939;
            font-size:20px;
            font-weight: bold;
            font-weight: 700;
        }
        div.box input{
            position: relative;
            left:50px;

            outline: none; background:transparent;
            border-left: 0; border-top: 0; border-right: 0;
            border-bottom: #ff6d84 3px solid;
        }
        div.box button{
            position: relative;
            right:200px;
            top:70px;
            font-family: 'Great Vibes', cursive;
            font-size:20px;
            border: #4b3939 4px solid;
            background-color: #4b3939;
            color: #ff6d84;
            font-weight: bold;
            font-weight: 700;
            padding:5px;
            margin: 4px;


        }
        div.box button:hover{
            background-color: #ff6d84;
            color: #4b3939;
            transition: all 1s ease-in-out;
        }
        .inputGroup{
            z-index: 1;
            top: 200px; left:45px; position: absolute;
            width: 280px; transition: 0.5s;
        }


        #login{left: 50px;}


    </style>
</head>





<body>
<div class="header">
    <img src="imgs/header.png" alt="">
    <div class="bar"><ul>
            <li><a  href="sweetP1.php">Home</a></li>
            <li><a href="sweetP1.php#aboutus" >About</a></li>
            <li><a href="#">Menu</a>
                <ul>
                    <li><a href="wafflemenu.php">Waffles</a></li>
                    <li><a href="crepesmenu.php">Crepes</a></li>
                </ul>
            </li></ul>
    </div>
    <div class="nbar">
        <ul>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="makeyousweet.php">Make your sweet</a></li>
            <li><a class="activee" href="#">Account</a>
                <ul>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Log In/Register</a></li>
                </ul>

            </li>
        </ul></div>
</div>

<div class="signn">
    <form action="pass-res-code.php" method="post" >
    <div class="box">
        <h3>♥ Reset Password ♥</h3>
        <h5>Email</h5>
        <input type="text" name="email" placeholder="Enter your email..." required size="40">
        <button name="pass-reset" type="submit">Send Password Reset Link</button>
    </div>
    </form>

</div>


</body>
</html>
