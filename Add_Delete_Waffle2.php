<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Sweet Desert♡ |Add/Delete Waffle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href=imgs/rsz_1rsz_1logo.png"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #4b3939;
            z-index: -200;
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


        div.bar ul li ul{ position: absolute; left:70%; width: 320px; background-color:rgba(255, 244, 232, 1); display: none}
        div.bar ul li:focus-within > ul,div.bar ul li:hover > ul{display: block}
        div.bar ul li ul li {width:100%; border-top: 1px solid #4b3939; float: left}
        div.bar ul li ul li a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear; z-index=100;}
        div.bar ul li ul li #login a:hover{background-color:#4b3939; margin:4px;  color: #ff6d84; transition:0.5s linear;}

        div.big{
            height:500px;
            background: url("imgs/waffle2.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
        }
        div.adver h2{
            position:absolute;
            top: 50%;
            left:70%;
            align-items: center;

        }
        div.adver p{
            position:absolute;
            top:55%;
            left:70%;

        }
        div.adver h2{
            color: #ff6d84;
            font-family: 'Great Vibes', cursive;
            font-size:35px;
            text-align: center;
        }
        div.adver p{
            color:whitesmoke;
            font-family: 'Great Vibes', cursive;
            font-size:40px;
            text-align: center;
        }
        div.adver pre{
            position:absolute;
            top:40%;
            left:2%;
            color:antiquewhite;
            font-family: "Arial Nova Light";
            font-size:27px;

        }
        div.ourstore{
            position: relative;
            top:1px;
            align-items: center;
        }

        div.ourstore h2.os{color:#4b3939;
            position: relative; top:20%;
            font-family: 'Great Vibes', cursive;
            font-size:55px;
            text-align: center;  }
        div.ourstore h2.os strong{
            color: #ff6d84;
            font-family: 'Great Vibes', cursive;
            font-size:80px;
            text-align: center;  }
        div.ourstore pre{text-align: center; line-height:15px; }

        section.features div.box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(30rem,1fr));
            gap:10rem; box-sizing: border-box;}

        section.features div.box-container div.box{
            width:310px; height:510px;
            padding: 3rem 2rem;
            border-radius:30px;
            outline: #cce6ff;
            outline-offset: -1rem;
            background:#ffe6f2;
            text-align: center;
            margin-top:100px;
            margin-left:150px;
            box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
            opacity:95%;

        }
        #btn{ right:  25%;
            margin-top:5rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            color: #ff6d84;
            border-radius: 9px;
            border:0.2rem solid black;
            cursor: pointer;
            background: none;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;

        }
        #btn:hover{
            background: #ff6d84;
            color: black;
            border:.2rem solid #4b3939;
            transition: 1s all ease-in-out;
        }
        #dd{ position:relative;
            margin-top:1rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            color: #ff6d84;
            border-radius: 9px;
            border:0.2rem solid black;
            cursor: pointer;
            background: none;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;

        }
        #dd:hover{
            background: #ff6d84;
            color: black;
            border:.2rem solid #4b3939;
            transition: 1s all ease-in-out;
        }

        .buttonbuy{
            margin-top:1rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            border-radius: 9px;
            border:.2rem solid #4b3939;
            color:#ff6d84;
            cursor: pointer;
            background: none;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;
        }

        .buttonbuy:hover{
            color:#4b3939;
            background:#ff6d84;
            border:.2rem solid #4b3939;
            transition: 1s all ease-in-out;

        }

        section.features div.box-container div.box:hover{
            outline: thick;
            outline-offset: 0rem;
            box-shadow: 0 0 15px rgba(247,245,231,0.4),15px 15px rgba(247,245,231,0.4);
            transition: transform 2s;
            transform: scale(1.1);

        }
        section.features div.box-container div.box img{
            margin:1rem -1rem;
            height:330px;
            width: 330px;
            object-fit: cover;
        }
        section.features div.box-container div.box h3{
            font-family: "Berlin Sans FB";
            color: #4b3939;
            font-size:20px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            box-sizing: border-box;
            width: 100%;
        }
    </style>

</head>

<body>
<?php

?>
<div class="header">
    <img src="imgs/header.png" alt="">
    <div class="bar"><ul>
            <li><a  href="Admin.php">Home</a></li>
            <li><a class="active" href="#">Menu</a>
                <ul>
                    <li><a href="Add_Delete_Waffle2.php">Add/Delete Waffle</a></li>
                    <li><a href="Add_Delete_crepe2.php">Add/Delete Crepe</a></li>
                </ul>
            </li></ul>
    </div>
    <div class="nbar">
        <ul>
            <li><a href="Admin(make).php">Make your sweet</a></li>
            <li><a class="active" href="#">Account</a>
                <ul>
                    <li><a href="Adminorder.php">Orders</a></li>
                    <li><a href="Logout.php">Log out</a></li>
                </ul>

            </li>
        </ul></div>
</div>

<div class="big" style="width: 100%; height:900px;z-index: -100">
</div>

<div class="adver">
    <pre>
        Waffles are battercake which is cooked in an iron form that gives it
            a deep grid pattern. An example of a waffle is a square cake eaten for
               breakfast with grooves that hold butter and maple syrup.
    </pre>
    <p>Hurry up order now and</p>
    <h2> Waffle Your Day</h2>
</div>

<div class="ourstore" style="background-color: #ffe6f2; width: 100%; height:200px;">
    <h2 class="os"> our <strong>Store</strong></h2>
    <pre>❀―――――❁ ❁ ❁ ❁ ―――――❀ </pre>
</div>
<form action="Add_Delete.php" method="post">

<div align="left">
    <input id="btn" style="cursor: pointer;padding-top: 10px;padding-bottom:10px;display: inline-block;width: 200px; font-weight: bold; font-size: 20px; color: black; margin-left: 40%; background-color:#ff6d84;border-color: black;border-radius: 50px" type="submit" value="Add Waffle" name="submit" ;">
</div>
<div align="left" >
    <input id="dd" style="cursor: pointer;padding-top: 10px;padding-bottom:10px;display: inline-block;width: 200px; font-weight: bold; font-size: 20px; color: black; margin-left: 40%; background-color:#ff6d84;border-color: black;border-radius: 50px" type="submit" value="Delete Waffle" name="submit" ;">
</div>
</form>
<section class="features" id="features">



    <div class="box-container">
        <!--single item-->
        <?php
        $conn =new mysqli('localhost','root','','sweetdesert');
        $records = mysqli_query($conn,"select * from `sweets`"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
            if($data['type']=='waffle'){
            ?>
            <div class="box">
                <img src="<?php echo 'imgs/'.$data['image']; ?>" alt="">
                <h3><?php echo $data['name'].' ' .$data['price'].'₪'; ?></h3>
                <p></p>
                <a class="buttonbuy" href="#">Buy Sweet</a>
            </div>
            <?php
        }}
        ?>

        <?php mysqli_close($conn); // Close connection ?>
<!--        <div class="box">-->
<!--            <img src="imgs/cinnamonwaffleswithberries.jpg" alt="">-->
<!--            <h3>Cinnamon & strawberries waffle  23₪</h3>-->
<!--            <p></p>-->
<!--            <a class="buttonbuy" href="#">Buy Sweet</a>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="imgs/wafflewithbnana.jpg" alt="">-->
<!--            <h3>Banana waffle   20₪</h3>-->
<!--            <p></p>-->
<!--            <a class="buttonbuy" href="#">Buy Sweet</a>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="imgs/wafflenutella.jpg" alt="">-->
<!--            <h3>Nutella Waffle  17₪</h3>-->
<!--            <p></p>-->
<!--            <a class="buttonbuy" href="#">Buy Sweet</a>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="imgs/icecreamewaffle.jpg" alt="">-->
<!--            <h3>Ice cream Waffle  20₪</h3>-->
<!--            <p></p>-->
<!--            <a class="buttonbuy" href="#">Buy Sweet</a>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="imgs/chocoletfudge%20wuffle.jpg" alt="">-->
<!--            <h3>Chocalet fudge Waffle  25₪</h3>-->
<!--            <p></p>-->
<!--            <a class="buttonbuy" href="#">Buy Sweet</a>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="imgs/taiyaki.jpg" alt="">-->
<!--            <h3>Taiyaki Japannese waffles 21₪</h3>-->
<!--            <p></p>-->
<!--            <a class="buttonbuy" href="#">Buy Sweet</a>-->
<!--        </div>-->
<!--        <!--end of single item-->-->
 </div>
</section>

<section>
    <div style="background:#4b3939; width: 100%; height:90px"></div>
</section>

</body>
</html>

