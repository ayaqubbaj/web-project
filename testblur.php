<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Waffle Your Day!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        body{
            margin: 0;
            padding: 0;
            background-color:#4b3939;
            box-sizing: border-box;

        }
        .container{position: relative; width: 100%;
            display: flex;justify-content: center;align-items: center;
            background-color: #4b3939;transition: 1s;
        }
        .container#blur.active{
            filter: blur(20px);
        }
        div.header{width: 100%}
        div.header img{
            position:absolute;
            width:1500px;
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

        div.cart{

            width:1000px;
            position:absolute; margin:9% auto;
            background:#ffe6f2; opacity:80%;
            background:rgba(255, 244, 232, 1); opacity:90%;
            color: padding: 5px;
            border-radius:55px;
            top:170px;
            left:17%;
            color: padding: 5px; border: #ff6d84 2px solid;
            padding: 10px;


        }
        .cart-items img{
            width:150px; height:150px;
            object-fit: cover;
            border-radius:40px;

        }

        .cart-items{border-bottom: #4b3939 4px solid;padding: 5px;height: 220px; justify-content: center}
        .item-title{position: relative;
            left:500px; top:-70px;font-family: 'Great Vibes', cursive;font-size:30px; font-weight:800  }
        .item-title {}
        .cart-item-delete i{color: #ff6d84; position: relative; left:200px; transition: all 1s ease-in-out;}
        .cart-item-delete i:hover{transform: scale(1.3); color: #4b3939}
        .btn{margin-top:1rem;
            margin-left:50px;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            border-radius: 9px;
            color:#ff6d84;
            background:#4b3939;
            border:.2rem solid #ffe6f2;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;
            font-weight: 800;
        }
        .btn:hover{
            border:.2rem solid #ffe6f2;
            color:#4b3939;
            background:#ff6d84;
            transition: 1s all ease-in-out;}
        .btn1{
            position: relative;
            top:100%;
            left:50%;
            padding: 15px;
        }
        .btn2{
            position: relative;
            top:100%;
            left:3%;
            padding: 15px;
        }
        .total{
            position: relative;
            top: 100%; font-family: 'Great Vibes', cursive;
            font-size:40px;

        }
        .summ{margin-left:20px; font-size: 30px}
        .checkclearb{

            align-items: center;

        }

        #blur :active{
            backdrop-filter: blur(100px);
            pointer-events: none;
            user-select: none;
        }



    </style>
</head>





<body >
<div class="container" id="blur" >

    <div class="header">
        <img src="imgs/header.png" alt="" style="width: 100%">
        <div class="bar"><ul>
                <li><a  href="sweetP1.php">Home</a></li>
                <li><a href="#aboutus" >About</a></li>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="wafflemenu.php">Waffles</a></li>
                        <li><a href="crepesmenu.php">Crepes</a></li>
                    </ul>
                </li></ul>
        </div>
        <div class="nbar">
            <ul>
                <li><a class="activee" href="#">Cart</a></li>
                <li><a  href="makeyousweet.php">Make your sweet</a></li>
                <li><a " href="#">Account</a>
                    <ul>
                        <li><a href="#">Orders</a></li>
                        <li><a href="Signup.php">Log In/Register</a></li>
                    </ul>

                </li>
            </ul></div>
    </div>

        <div class="box">
            <div class="cart ">
                <div class="cart-items" >
                    <img src="imgs/cinnamonwaffleswithberries.jpg" alt="">
                    <div class="item-title" style="justify-content: center">
                        <p id="item">Cart Item</p>
                        <span>₪</span>
                        <span class="price">23</span>
                        <a href="#" class="cart-item-delete"><i class="fas fa-trash"></i></a>

                    </div>

                </div>

                <div class="cart-items" >
                    <img src="imgs/crepecakes.jpg" alt="">
                    <div class="item-title" style="justify-content: center">
                        <p id="item">Cart Item</p>
                        <span>₪</span>
                        <span class="price">35</span>
                        <a href="#" class="cart-item-delete"><i class="fas fa-trash"></i></a>

                    </div>

                </div>

                <div class="cart-items" >
                    <img src="imgs/crepecakes.jpg" alt="">
                    <div class="item-title" style="justify-content: center">
                        <p id="item">Cart Item</p>
                        <span>₪</span>
                        <span class="price">35</span>
                        <a href="#" class="cart-item-delete"><i class="fas fa-trash"></i></a>

                    </div>

                </div>

                <div class="checkclearb">
                    <h3><span class="total">Total</span><span class="summ">48</span><span>₪</span></h3>
                    <button class="btn btn1" type="submit">Clear Cart</button>
                    <!--<button class="btn btn2" type="submit" onclick="order()">Check Out</button>-->
                    <a class="btn btn2" href="#" onclick="toggle()">Check Out</a>
                </div>
            </div>
        </div>





</div>




<script type="text/javascript">
    function toggle(){
        let blur = document.getElementById('blur');
        blur.classList.toggle(`active`);
    }
</script>

</body>
</html>
