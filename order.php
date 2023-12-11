<?php
session_start();
$userid=$_SESSION['id'];
$user=$_SESSION['user'];
$total=$_SESSION['total'];
$sweetid=$_SESSION['sweetid'];
$sweetname=$_SESSION['sweetname'];
//echo "<script>alert('your total is $sweetname');</script>";
//echo "$un";
//echo "<script>alert('your total is $total');</script>";
$conn = mysqli_connect('localhost','root','','sweetdesert');
if(!$conn){
    die("<script>alert('connection failed')</script>");
}else{
    if(isset($_POST['submitorder'])){
        //if($radiobutton == "takeaway")
        //{$radio="takeaway";}else{$radio="Delivery";}
        $mode=$_POST['deli'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $money=$total;
        $query="INSERT INTO orders (userid,username,mode,sweetsname,name,address,mobile,money)
                values ('$userid','$user','$mode','$sweetname','$name',
                        '$address','$mobile','$money')";
        $result = mysqli_query($conn, $query);
        $qry="DELETE FROM CART WHERE userid=$userid";
        $res=mysqli_query($conn, $qry);
        if($result){echo"<script>alert('your order is submited');</script>";}
        echo "<script>window.open('order.php','_self')</script>";

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ | Order</title>
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
            width:600px; height:660px;
            position:absolute; margin:9% auto;
            background:#ffe6f2; opacity:80%;
            background:linear-gradient(to right,#ffe6f2,#e9dbc8);
            color: padding: 5px;
            border-radius:55px;
            top: 20%;
            left:30%


        }
        div.big{
            height:500px;
            background: url("imgs/orders.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
            opacity: 60%;
        }
        form.makesweet div.check-box{
            position: absolute;
            align-items: center;
            top:10%; left:12%;
            width: 100%;
            transition: 1s;
        }
        .btn{
            position:absolute; top:600px; left:180px;
            margin-top:1rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            border-radius: 9px;
            border:.2rem solid #ffe6f2;
            color:#4b3939;
            cursor: pointer;
            background:#ff6d84;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;
            font-weight: bold;
            font-weight: 700;
        }
        .btn:hover{
            color:#ff6d84;
            background:#4b3939;
            border:.2rem solid #ffe6f2;
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
            font-size:40px;
            font-weight:800;

        }
        .inputGroup{
            top: 200px; left:45px; position: absolute;
            width: 280px; transition: 0.5s;
            z-index: 1;}
        .oform{
            width: 100%; padding: 10px 0;
            margin:10px 0;
            border-left: 0; border-top: 0; border-right: 0;
            border-bottom: 1px solid #4b3939;
            outline: none; background: transparent;
        }



    </style>
</head>





<body>
<div class="header">
    <img src="imgs/header.png" alt="">
    <div class="bar"><ul>
            <li><a  href="homeal.php">Home</a></li>
            <li><a href="homeal.php#aboutus" >About</a></li>
            <li><a href="#">Menu</a>
                <ul>
                    <li><a href="waffleal.php">Waffles</a></li>
                    <li><a href="crepeal.php">Crepes</a></li>
                </ul>
            </li></ul>
    </div>
    <div class="nbar">
        <ul>
            <li><a href="cart.php">Cart</a></li>
            <li><a  href="makesweetAL.php">Make your sweet</a></li>
            <li><a " href="#">Account</a>
                <ul>
                    <li><a href="Signup.php">Log Out</a></li>
                </ul>

            </li>
        </ul></div>
</div>
<div class="big" style="width: 100%; height:900px;z-index: -100"></div>

<div class="signn">

    <div class="box">
        <form id="design" action="order.php" method="post" class="makesweet">
            <div class="check-box">
                <h3>Order Form:</h3>
                <input type="radio" class="chec" id="takeaway" name="deli" value="Take Away"><span>Take Away</span>
                <input type="radio" class="chec" id="delivery" name="deli" value="Delivery"><span>Delivery</span>

                <div class="inputGroup">
                    <input type="text" class="oform" id="waffle" id="name" name="name"  required placeholder="Full name">
                    <input type="text" class="oform" id="waffle" id="address" name="address" required placeholder="Address">
                    <input type="tel" class="oform" id="waffle" id="mobile" name="mobile" required placeholder="mobile phone">

                </div>
        <!--<input type="submit" name="submitorder" id="submit" class="btn">-->
                <button  name="submitorder" id="submitorder"
                class="btn">Submit</button>
            </div>

        </form>
    </div>




</div>


</body>
</html>
