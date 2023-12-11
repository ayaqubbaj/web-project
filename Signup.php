<!-- Sign up-->
<?php
$conn = mysqli_connect('localhost','root','','sweetdesert');
if(!$conn){
    die("<script>alert('connection failed')</script>");
}else{
 if(isset($_POST['signup'])){
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password =sha1( $_POST['password']);
     $statement = "SELECT * FROM users WHERE email='$email'
                   OR username='$username'";
     $result = mysqli_query($conn, $statement);
     if(!$result -> num_rows > 0){
         $statement = "INSERT INTO users (username,email,password) 
                   value('$username','$email','$password')";
         $result = mysqli_query($conn,$statement);
         if($result){echo "<script>alert('You have signed up to Sweet Desert ♡!')</script>";

         } else{echo "<script>alert('Woops! Something is wrong.')</script>";}

     }else{
         echo "<script>alert('Already Taken.')</script>";
     }


 }
}

?>
<!-- log in -->
<?php
$conn = mysqli_connect('localhost','root','','sweetdesert');
session_start();
$wrong = '';


  if(!$conn){
      die("<script>alert('connection failed')</script>");
  }else{
      if(isset($_POST['login'])){


        if(isset($_POST['usernamelogin'])&&isset($_POST['passwordlogin'])){

            $user = $_POST['usernamelogin'];
            $pass = sha1($_POST['passwordlogin']);

            if($user == "leenmeera" && $pass == "51a91b2c5ece2027c5c7b99cb2d1de4ea8da51e2"){
                header("location:Admin.php");
            } else {
                $sql = "SELECT * FROM users WHERE username='$user'
                    AND password= '$pass'";
                $res = $conn->query($sql);
                $count= mysqli_num_rows($res);
                $row = mysqli_fetch_array($res);
                $flag=0;


                for ($i = 0; $i < $count; $i++){

                    if($user === $row['username'] && $pass === $row['password']){
                        //$quey= "SELECT id FROM user WHERE WHERE
                        //  username=$user ";
                        //$ress = $conn ->query($quey);
                        //$r = $ress ->fetch_assoc();
                        //$userid = $row['id'];
                        $_SESSION['id']=$row['id'];
                        $_SESSION['user']=$row['username'];
                        $flag=1;
                        //echo "$user you id is : $userid";
                        header("location: homeal.php");

                    }
                }
            }
            if(!$flag){
                echo "<script>alert('You Are Not Logged In Sign up First Please.')</script>";

            }
            }

    }
}
$conn->commit();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ | Register</title>
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
            width: 380px; height:510px;
            position:relative; margin:4% auto;
            background: #ffe6f2; opacity:85%;
            color: padding: 5px;
            border-radius:55px;
            overflow: hidden;
        }

        div.buttonS{
            width: 220px; margin:6% auto;
            position:relative; top: 15%;
            box-shadow: 0 0 30px 10px snow; border-radius: 30px;
        }
        button.toggle{
            padding: 10px 30px; cursor:pointer;
            background: transparent; border: 0;
            outline: none; position: relative;
        }
        #btn{
            top: 0px; left: 0px;
            position: absolute; width:110px; height: 100%;
            background:linear-gradient(to right,#cce6ff,#ff6d84); border-radius: 30px;
            transition: 0.5s;
        }
        .inputGroup{
            z-index: 1;
            top: 200px; left:45px; position: absolute;
            width: 280px; transition: 0.5s;
        }
        .username{ z-index: 1;
            width: 100%; padding: 10px 0;
            margin: 5px 0;
            border-left: 0; border-top: 0; border-right: 0;
            border-bottom: 1px solid #4b3939;
            outline: none; background: transparent;
        }
        .password{ z-index: 1;
            width: 100%; padding: 10px 0;
            margin: 5px 0;
            border-left: 0; border-top: 0; border-right: 0;
            border-bottom: 1px solid #4b3939;
            outline: none; background: transparent;
        }
        .email{
            width: 100%; padding: 10px 0;
            margin: 5px 0;
            border-left: 0; border-top: 0; border-right: 0;
            border-bottom: 1px solid #4b3939;
            outline: none; background: transparent;
        }
        .submit-login{
            width: 85%; padding: 10px 30px;
            cursor: pointer; display: block; margin: auto;
            margin-top:35px;
            background: linear-gradient(to right,#cce6ff,#ff6d84);
            border: 0; outline: none; border-radius: 35px;
        }
        a.forpass{
            text-decoration: none;
            color: #4b3939;
            position: relative;
            top: 17px;
            left:57px;
            margin: 7px;
            align-items: center;
        }
        .forpass:hover{
            color: #ff6d84;
            text-decoration: underline;
        }
        #login{left: 50px;}
        #signup{left: 450px;}

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
    <img style="width: 100%; height:100%; opacity: 50%; z-index: -100;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
    background-position:center; position:absolute; top:60px;
background-size: cover; background-attachment: fixed;
    background-repeat: no-repeat"
         src="imgs/sign1.jpg" alt="">
    <div class="box">
        <div class="buttonS">
            <div id="btn"></div>
            <button type="button" class="toggle" onclick="login()">Log In</button>
            <button type="button" class="toggle" onclick="signup()">Sign Up</button>
        </div>
        <form id="login" action="" method="post" class="inputGroup">
            <?php if(isset($_GET['error'])){
                ?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
            <input type="text" class="username" placeholder="username" required name="usernamelogin">
            <input type="password" class="password" placeholder="password" required name="passwordlogin">
            <a class="forpass" href="password-reset.php">Forgot your password?</a>
             <button type="submit" name="login" class="submit-login">Log In</button>
        </form>
        <form id="signup" action="" method="post" class="inputGroup">
            <input type="text" class="username" placeholder="username" required name="username">
            <input type="email" class="email" placeholder="Email" required name="email">
            <input type="password" class="password" placeholder="password" required name="password">
            <button type="submit" name="signup" class="submit-login">Sign Up</button>
        </form>
    </div>

</div>
<script>
    let x = document.getElementById("login");
    let y = document.getElementById("signup");
    let z = document.getElementById("btn");
    function signup(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
    }
    function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
    }
</script>

</body>
</html>
