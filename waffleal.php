<?php
            $conn = mysqli_connect('localhost','root','','sweetdesert');
            session_start();
            $userid=$_SESSION['id'];
            $user=$_SESSION['user'];
            echo "$userid";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ | Waffle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href=imgs/rsz_1rsz_1logo.png"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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


        div.bar ul li ul{ position: absolute; left:70%; width: 270px; background-color:rgba(255, 244, 232, 1); display: none}
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
            font-size:40px;
            text-align: center;
            margin-left:40px;
        }
        div.adver p{
            color:whitesmoke;
            font-family: 'Great Vibes', cursive;
            font-size:40px;
            text-align: center;
            font-weight: 500;
        }
        div.adver pre{
            position:absolute;
            top:40%;
            left:1%;
            color: bisque;
            font-family: "Arial Nova Light";
            font-size:33px;
            font-weight: 600;
            text-shadow: #4b3939 3px 3px ;

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

        :root{

            --outlinebox:.2rem solid bisque;
        }
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
            border: lightblue 4px dotted;

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
        :root{
            --black:#ff6d84;
            --outline:.1rem solid rgba(0,0,0,.1);
            --outline-hover:.2rem solid var(--black) ;
        }
        section.features div.box-container div.box:hover{
            outline: thick;
            outline-offset: 0rem;
            box-shadow: 0 0 15px rgba(247,245,231,0.4),15px 15px rgba(247,245,231,0.4);
            transition: transform 2s;
            transform: scale(1.1);
            outline: var(--outline-hover);
            outline-offset: 0rem;

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
        section.features div.box-container div.box span{
            font-weight: 400;
            position: relative;
            bottom:77px;
            left:91px;
        }
        section div.ending{
            height:500px;
            background: url("imgs/endingwaffle.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
            opacity: 60%;
        }
        div.mwl{text-align: center;
            padding:2rem 0;
            padding-bottom: 3rem;
            font-size: 3.5rem;
            color:#ff6d84;
            font-family: 'Great Vibes', cursive;
            position:relative;
            left:-10%;
            top: 10%;
        }
        div.mwl span{
            background: #ffe6f2;
            display: inline-block;
            padding:.5rem 3rem;
            border: antiquewhite 2px solid;
            clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
        }


    </style>

</head>





<body>
<div class="header">
    <img src="imgs/header.png" alt="">
    <div class="bar"><ul>
            <li><a  href="homeal.php">Home</a></li>
            <li><a href="homeal.php#aboutus" >About</a></li>
            <li><a class="active" href="#">Menu</a>
                <ul>
                    <li><a class="active" href="#">Waffles</a></li>
                    <li><a href="crepeal.php">Crepes</a></li>
                </ul>
            </li></ul>
    </div>
    <div class="nbar">
        <ul>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="makesweetAL.php">Make your sweet</a></li>
            <li><a  href="#">Account</a>
                <ul>
                    <li><a href="sweetP1.php">Log Out</a></li>
                </ul>

            </li>
        </ul></div>
</div>
<!--waffle wallpaper-->
<div class="big" style="width: 100%; height:900px;z-index: -100">
</div>
<!--end of waffle wallpaper-->
<div class="adver">
    <pre>
        Waffles are battercake which is cooked in an iron form that gives it
         a deep grid pattern. An example of a waffle is a square cake eaten for
          for breakfast with grooves that hold butter and maple syrup.
    </pre>
    <p>Hurry up order now and</p>
    <h2> Waffle Your Day</h2>
</div>
<!--our store-->
<div class="ourstore" style="background-color: #ffe6f2; width: 100%; height:200px;">
    <h2 class="os"> our <strong>Store</strong></h2>
    <pre>❀―――――❁ ❁ ❁ ❁ ―――――❀ </pre>
</div>
<!-- end of our store-->

<!--menu-->

    <section class="features" id="features">
        <div class="box-container">
            <!--single item-->

            <?php
            $conn = mysqli_connect('localhost','root','','sweetdesert');

            $output = "";
            if(!$conn){
                die("<script>alert('connection failed')</script>");
            }else{
                $query = "SELECT id,image,name,price FROM sweets WHERE
                      type = 'waffle'";
                $result = mysqli_query($conn ,$query);

                if(mysqli_num_rows($result) < 1){
                    echo "<h1>There is no waffles</h1>";
                }else{
                    $i=0;
                    $sweetid=0;

                    while($row = mysqli_fetch_array($result)){
                        $sweetid=$row['id'];
                        $img=$row['image'];
                        $name=$row['name'];
                        $price=$row['price'];
                        $i++;
                        echo"<div id='sweeet' class='box'>
                <form action='waffleal.php#sweeet' method='post'>
            <img src='imgs/".$row['image']."' alt=''>
            <h3>".$row['name']."  </h3>
            <h3>".$row['price']."</h3><span>₪</span>
            <!--<h3>".$row['id']."  </h3>-->
            <input type='hidden' name='hidden-name' value='".$row['name']."'>
            <input type='hidden' name='hidden-price' value='".$row['price']."'>
            <input type='hidden' name='hidden-id' value='".$sweetid."'>
            <input type='hidden' name='hidden-image' value='".$row['image']."'>
            <input type='hidden' id='hidden-id' name='hidden-id' value='".$row['id']."'>
            <button onclick='addcart($sweetid)' type='submit' value='addtoCart' class='buttonbuy' name='add-to-cart' 
            href='#' id='add-to-cart'
               id='".$row['id']."'>Buy Sweet</button>
               </form>
            </div>";

                    }

                    $conn = mysqli_connect('localhost', 'root', '', 'sweetdesert');

                    if (!$conn) {
                        die("<script>alert('connection failed')</script>");
                    } else {
                        if (isset($_POST['add-to-cart'])) {
                            $sid = $_POST['hidden-id'];
                            $img = $_POST['hidden-image'];
                            $name = $_POST['hidden-name'];
                            $price = $_POST['hidden-price'];
                            //$sql= "SELECT image,name,price FROM sweets WHERE id=$sweetid";
                            $query = "INSERT INTO cart (sweetid,userid,image,name,price) 
                      value('$sid','$userid','$img','$name','$price')";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                echo "<script>window.alert('Sweet Added To Your Cart ♡.')</script>";
                                //header("location: waffleal.php");
                            }

                        }
                    }


                }
            }
            ?>
            <script type="text/javascript">
                function addcart($sweetid){
                    let sweet = $sweetid;
                    //alert(sweet)
                    //document.cookie= "sweet =" + sweet;
                    //document.cookie= "sweet ="+ $sweetid;
                    <?php
                    //$rt= $_GET['hidden-id'];
                     //$rt=$_COOKIE['sweet'];
                    //echo "<script>alert('$rt')</script>";
                    //$rt="<script>document.writeln(sweet);</script>";
                    // echo "<script>alert('$rt')</script>";
                    ?>



                }
            </script>
            <!-- end of single menue item/end of waffle menue-->
            <!--<script type="text/javascript">
            function addcart(){
                <?php
            /*$conn = mysqli_connect('localhost','root','','sweetdesert');
            session_start();
            $user= $_SESSION['usernamelogin'];
            $res = $conn->query($conn);
            $row = $res->fetch_assoc();
            $sweetid=$row['id'];
            $sweetimg=$row['image'];
            $sweetname=$row['name'];
            $sweetprice=$row['price'];
            //$sweet= $_SESSION['sweet-id'];

            if(!$conn){
                die("<script>alert('connection failed')</script>");
            }else{
                if(isset($_POST['add-to-cart'])){
                    if(isset($_SESSION['usernamelogin'])){
                        $item_array_id= array_column($_SESSION['usernamelogin'],"sweet-id");
                        if(! in_array($_GET['id'],$item_array_id)){
                            $count = count($_SESSION['']);

                        }
                        //$query = "INSERT INTO cart(swee-id,user-id,image,name,price) where user-id=
                        // '$user'And sweet-id='' ";
                        $query = "INSERT INTO cart(swee-id,user-id,image,name,price)
                              value($sweetid,$user,$sweetimg,$sweetname,$sweetprice)";
                    }
                }
            }
            $conn->commit();
            $conn->close();*/
            ?>
            }
        </script> -->


        </div>
    </section>

<!--End of form -->
<!--End of menu part -->
<!--break-->
<section>
    <div style="background:#4b3939; width: 100%; height:90px"></div>
</section>
<!--End of break-->
<!--Ending-->
<section>
    <div class="ending" style="width: 100%; height:900px;z-index: -100">

    </div>
    <div style="background: #ff6d84;width: 100%; height:10px; border-top: #4b3939 4px solid"></div>
</section>
<div class="mwl"><h1><span>Made with Love</span></h1><i class="fas fa-trash"></i></div>
<div style="background-color: #4b3939; height: 90px; align-items: center;">
    <p style="color: #ffe6f2; font-weight: 400; font-size:20px">Cantact/Follow us on :</p>
    <div style="position: relative; left: 30%">
        <i style="color: #ff6d84; margin: 10px; font-size:30px" class="fas fa-phone-square-alt"></i> <span style="color: #ffe6f2">0594127536</span></div>
    <div style="position: relative; left: 30%">
        <i style="color: #ff6d84; margin: 10px; font-size:30px" class="fas fa-map-marked-alt"></i> <span style="color: #ffe6f2">Nablus - Rafeedia Street</span></div>
    <div style="position: relative; left: 30%">
        <i style="color: #ff6d84; margin: 10px; font-size:30px" class="fab fa-facebook"></i> <span style="color: #ffe6f2"> Sweet Desert </span></div>
    <div style="position: relative; left: 30%">
        <i style="color: #ff6d84; margin: 10px;font-size:30px" class="fab fa-instagram"></i> <span style="color: #ffe6f2"> Sweet.Desert</span></div>

</div>

</body>
</html>
