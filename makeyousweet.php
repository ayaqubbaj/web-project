<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ | Design </title>
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
            width:1100px; height:660px;
            position:absolute; margin:9% auto;
            background:#ffe6f2; opacity:80%;
            background:linear-gradient(to right,#ffe6f2,#cce6ff);
            color: padding: 5px;
            border-radius:55px;
            top: 20%;
            left:15%


        }
        div.big{
            height:500px;
            background: url("imgs/pexels-klaus-nielsen-6294402.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
        }
        form.makesweet div.check-box{
            position: absolute;
            align-items: center;
            top:10%; left:12%;
            width: 100%;
            transition: 1s;
        }
        .btn{
            position:absolute; top:600px; left:320px;
            margin-top:1rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            border-radius: 9px;
            border:.2rem solid #4b3939;
            color:#ff6d84;
            cursor: pointer;
            background: #4b3939;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;
            font-weight: bold;
            font-weight: 700;
        }
        .btn:hover{
            color:#4b3939;
            background:#ff6d84;
            border:.2rem solid #4b3939;
            transition: 1s all ease-in-out;

        }
        .chec{margin:15px}
        span{
            color:#ff6d84; font-family: 'Great Vibes', cursive;
            font-size:27px; font-weight:600;


        }
        .check-box{top:10%}
        .check-box h3{
            color:#4b3939; font-family: 'Great Vibes', cursive;
            font-size:30px;

        }


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
            <li><a href="">Cart</a></li>
            <li><a class="activee href="#">Make your sweet</a></li>
            <li><a " href="#">Account</a>
                <ul>
                    <li><a href="Signup.php">Log In/Register</a></li>
                </ul>

            </li>
        </ul></div>
</div>
<div class="big" style="width: 100%; height:900px;z-index: -100"></div>

<div class="signn">
    <!--<img style="width: 100%; height:100%; opacity: 50%; z-index: -100;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
    background-position:center; position:absolute; top:25%;
    background-size: cover; background-attachment: fixed;
    background-repeat: no-repeat"
         src="" alt=""> -->
    <div class="box">
        <form id="design" action="" method="post" class="makesweet">
            <div class="check-box">
                <h3>Base: ♥ 7₪ ♥</h3>
                <input type="radio" class="chec" id="waffle" name="sweetype" value="waffle"><span>Waffle</span>
                <input type="radio" class="chec" id="crepe" name="sweetype" value="crepe"><span>Crepe</span>

                <h3>Flavour: ♥ 4₪ ♥</h3>
                <input type="radio" class="chec" id="waffle" name="fla" value="Carrot"><span>Carrot</span>
                <input type="radio" class="chec" id="crepe" name="fla" value="Lemon"><span>Lemon</span>
                <input type="radio" class="chec" id="crepe" name="fla" value="Banana"><span>Banana</span>
                <input type="radio" class="chec" id="crepe" name="fla" value="Real Cacao"><span>Real Cacao</span>

                <h3>Toppings: ♥ 2₪/each ♥</h3>
                <input type="checkbox" class="chec" id="waffle" name="topi[]" value="Raisins"><span>Raisins</span>
                <input type="checkbox" class="chec" id="crepe" name="topi[]" value="Oats"><span>Oats</span>
                <input type="checkbox" class="chec" id="crepe" name="topi[]" value="Berries"><span>Berries</span>
                <input type="checkbox" class="chec" id="crepe" name="topi[]" value="Nuts $ Seeds Crunch"><span>Nuts & Seeds crunch</span>

                <h3>Syrups Alternatives: ♥ 3₪/each ♥</h3>
                <input type="checkbox" class="chec" id="waffle" name="surp[]" value="Yogurt"><span>Yoghurt</span>
                <input type="checkbox" class="chec" id="crepe" name="surp[]" value="Peanut Butter"><span>Peanut Butter</span>
                <input type="checkbox" class="chec" id="waffle" name="surp[]" value="Jam"><span>Jam</span>
                <input type="checkbox" class="chec" id="waffle" name="surp[] " value="Maple Syrup"><span>Maple Syrup</span>

                <br>
                <div><button onclick="warnn()" class="btn" type="submit" href="#">Order My Design</button></div>
            </div>



        </form>

    </div>




</div>

<script type="text/javascript">
    function warnn(){
        alert("You Have to Log in to Sweet Desert First To Buy This Yummy Sweet")
    }
</script>
</body>
</html>
