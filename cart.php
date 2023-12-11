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
    <title>Sweet Desert♡ | My Cart </title>
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

        div.header img{
            position: absolute;
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

        div.cart{

            width:1000px;
            position:absolute; margin:9% auto;
            background:#ffe6f2; opacity:80%;
            background:rgba(255, 244, 232, 1); opacity:90%;
            color: padding: 5px;
            border-radius:55px;
            top: 23%;
            left:17%;
            color: padding: 5px; border: #ff6d84 2px solid;
            padding: 10px;


        }
        .cart-items img{
            width:150px; height:150px;
            object-fit: cover;
            border-radius:40px;

        }
        div.big{
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
        div.cartt{
            position:absolute; margin:4% auto;
            top:110px; right: 10px;
            background:rgba(255, 244, 232, 1); opacity:90%;
            color: padding: 5px; border: #ff6d84 2px solid;
            align-items: center;
            font-family: 'Great Vibes', cursive;
            color: #4b3939; font-size: 20px;
            overflow: hidden;
            padding: 10px;width:300px;transition: all 1s ease-in-out;
            transform: rotateY(-360deg);
        }
        .cart-items{border-bottom: #4b3939 4px solid;padding: 5px;height: 220px; justify-content: center}
        .item-title{position: relative;
            left:500px; top:-70px;font-family: 'Great Vibes', cursive;font-size:30px; font-weight:800  }
        .item-title {}
        .cart-item button{display: none}
        .cart-item-delete i{color: #ff6d84; position: relative; left:200px; transition: all 1s ease-in-out;
             width: 30px; height: 50px}
        .cart-item-delete i:hover{transform: scale(2); color: #4b3939}
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



    </style>
</head>





<body >
<div class="container" id="blur" style="display: flex;justify-content: center;align-items: center;width: 100%;
transition: 1s">

<div class="header">
    <img src="imgs/header.png" alt="" style="width: 100%">
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
            <li><a class="activee" href="#">Cart</a></li>
            <li><a  href="makeyousweet.php">Make your sweet</a></li>
            <li><a " href="#">Account</a>
                <ul>
                    <li><a href="sweetP1.php">Log Out</a></li>
                </ul>

            </li>
        </ul></div>
</div>
<div class="big" style="width: 100%;z-index: -100"></div>

<div class="signn">
    <!--<img style="width: 100%; height:100%; opacity: 50%; z-index: -100;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
    background-position:center; position:absolute; top:25%;
    background-size: cover; background-attachment: fixed;
    background-repeat: no-repeat"
         src="" alt=""> -->
    <div class="box">
        <div class="cart ">

            <?php
            $conn = mysqli_connect('localhost','root','','sweetdesert');

            $output = "";
            $total=0;
            $swnames="";
            $user= $_SESSION['id'];
            if(!$conn){
                die("<script>alert('connection failed')</script>");
            }else{
                $query = "SELECT id,sweetid,image,name,price FROM cart WHERE
                      userid = '$user'";
                $result = mysqli_query($conn ,$query);
                if(mysqli_num_rows($result) < 1){
                    echo "<h1>Your Cart is Empty</h1>";
                }else{
                    $sweetid=0;
                    while($row = mysqli_fetch_array($result)){
                        $sweetid = $row['sweetid'];
                        $img=$row['image'];
                        $name=$row['name'];
                        $price=$row['price'];
                        $id=$row['id'];


                        echo"<div class='cart-items' >
                <form action='cart.php' method='post'>
                <img src='imgs/".$row['image']."' alt=''>
                <div class='item-title' style='justify-content: center'>
                    <p id='item'>".$row['name']."</p>
                    <span class='price'>".$row['price']."</span><span>₪</span>
             <input type='hidden' name='hidden-name' id='hidden-name' value='".$row['name']."'>
             <input type='hidden' name='hidden-price' id='hidden-price' value='".$row['price']."'>
             <input type='hidden' name='hidden-sid' id='hidden-sid' value='".$sweetid."'>
             <input type='hidden' name='hidden-image' id='hidden-image' value='".$row['image']."'>
             <input type='hidden' id='hidden-id' name='hidden-id' value='".$row['id']."'>
             
                    <!--<button name='delete-sweet' id='delete-sweet' 
                      class='cart-item-delete'><i class='fas fa-trash'></i></button>-->
           <a href='#' id='".$row['id']."' name='delete-sweet' class='cart-item-delete'>
           <button style='display: inline; width:0px; height: 0'  onclick='viewid($id)' name='delete-sweet' id='delete-sweet'>
           <i class='fas fa-trash'></i></button></a>
           <!--<a href='#' id='".$row['id']."' name='delete-sweet' class='cart-item-delete'>
           <i class='fas fa-trash'></i></a>-->
                        </div>
                        </form>
                        </div>";
                        $total+=$row['price'];
                        $sname = $row['name'];
                        $swnames .= " | $sname";
                        $_SESSION['total']=$total;
                        $_SESSION['sweetid']=$sweetid;
                        $_SESSION['sweetname']=$swnames;
                    }
                    $conn = mysqli_connect('localhost', 'root', '', 'sweetdesert');

                    if (!$conn) {
                        die("<script>alert('connection failed')</script>");
                    } else{if (isset($_POST['delete-sweet'])) {
                        $sid = $_POST['hidden-sid'];
                        $img = $_POST['hidden-image'];
                        $name = $_POST['hidden-name'];
                        $price = $_POST['hidden-price'];
                        $id=$_POST['hidden-id'];
                        $query = "DELETE FROM cart WHERE id='$id'";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            //echo "<script>window.alert('Sweet Deleted From Your Cart ♡.');</script>";
                            echo "<script>window.open('cart.php','_self')</script>";
                            //$_SESSION['sweetid']=$sid;
                            //header("location: cart.php");

                        }else{echo "<script>window.alert('Sweet Not Deleted ♡.');</script>";
                            }
                    }
                    }
                }
            }
            ?>
            <script type="text/javascript">
                function viewid($id){
                    let cartid = $id;
                    //alert(cartid)
                    //document.cookie= "sweet =" + sweet;
                    //document.cookie= "sweet ="+ $sweetid;
                }
            </script>

            <div class="checkclearb">
                <form action="" method="post">
                <h3><span class="total">Total</span>
                    <?php echo "<span class='summ'>$total</span>";?><span>₪</span></h3>
                <button class="btn btn1" type="submit" name="delete"
                   id="delete">Clear Cart</button>
                <!--<button class="btn btn2" type="submit" onclick="order()">Check Out</button>-->
                <a class="btn btn2" href="order.php">Check Out</a>
            </form>
            </div>
        </div>
    </div>

<?php
$conn = mysqli_connect('localhost','root','','sweetdesert');
if(!$conn){
    die("<script>alert('connection failed')</script>");
}else{
    if(isset($_POST['delete'])){
        $qry="DELETE FROM CART WHERE userid=$userid";
        $res=mysqli_query($conn, $qry);
        if($res){echo"<script>alert('You Have Cleared Your Cart');</script>";}
    }
}
?>


</div>
</div>

</body>
</html>
