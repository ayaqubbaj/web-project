<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Sweet Desert♡ |Waffle/Crepe</title>
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
            background: url("imgs/LE2.jpg");
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

        .h {
            width: 100%;
            position: absolute;
            top:1350px;
            transition:all 0.5s linear;
            left: 40%
            font-family: 'Great Vibes', cursive;
            text-align: center;
            font-size: 30px;
            text-decoration: none; color: #ff6d84;
            color: #ff6d84;
            font-family: 'Arial Rounded MT Bold', cursive;
        }
        .dd {
            width: 100%;
            position: absolute;
            top:1700px;
            transition:all 0.5s linear;
            left: 40%
            font-family: 'Great Vibes', cursive;
            text-align: center;
            font-size: 30px;
            text-decoration: none; color: #ff6d84;
            color: #ff6d84;
            font-family: 'Arial Rounded MT Bold', cursive;
        }

        #add{

            color: #ff6d84; width: 100%;
            height: 400px;
            margin-top:5rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            color: #ff6d84;
            border-radius: 9px;
            border:0.2rem solid #0a6ebd;
            cursor: pointer;
            background: none;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;
            border:.2rem solid #4b3939;

        }
        #delete{
            color: #ff6d84; width: 100%;
            height:600px;
            margin-top:-11rem;
            display: inline-block;
            padding:10px 10px;
            font-size: 1.7rem;
            color: #ff6d84;
            border-radius: 9px;
            border:0.2rem solid #0a6ebd;
            cursor: pointer;
            background: none;
            text-decoration: none;
            font-family: 'Great Vibes', cursive;
            border:.2rem solid #4b3939;

        }
        span{
            margin-left: 200px;
        }




    </style>



<body>
<script>
    function show2Name() {
        document.getElementById('l1').style.visibility = 'visible';
        document.getElementById('l1').style.transform = 'translateY(-30px)';
        document.getElementById('l1').style.transition = '0.5s';
        document.getElementById('gName').placeholder = "";
    }
</script>
<script>
    function show2p() {
        document.getElementById('l3').style.visibility = 'visible';
        document.getElementById('l3').style.transform = 'translateY(-30px)';
        document.getElementById('l3').style.transition = '0.5s';
        document.getElementById('trailer').placeholder = "";
    }

</script>
<script>
    function show2Delete() {
        document.getElementById('l4').style.visibility = 'visible';
        document.getElementById('l4').style.transform = 'translateY(-30px)';
        document.getElementById('l4').style.transition = '0.5s';
        document.getElementById('gdelete').placeholder = "";
    }

</script>
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
<div align="center" >
    <h2 class="h" href="#">❀ Add Sweet ❀</h2>
</div>
<section class="features" id="features">

</section>

<section>
    <div style="background:#4b3939; width: 100%; height:90px"></div>
</section>
<div id="add">

    <form action="Add_Delete.php" method="post" enctype="multipart/form-data">
    <span>  <label for="gName" style="position: relative;top: 6px;left: 62px;visibility:hidden;font-size: 20px;display: inline-block" id="l1" >Name</label>
        <input  placeholder="Name" id="gName" type="text" style="background-color: white;border-color: black;border-bottom:black 2px solid;color:black;outline: none"onkeydown="show2Name() ;"></span>
    <span> Menu: <select name="type" id="type" style="background-color:black;border:black 2px solid;color:#ff6d84;cursor: pointer" required>
            <option value="Waffle" >Waffle</option>
            <option value="Crepe">Crepe</option>
        </select>
    </span>
    <span> <label for="Price" style="position: relative;top: 6px;font-size: 20px;left: 100px;display: inline-block;visibility: hidden" id="l3">Price</label> <input required onkeydown="show2p();"type="text" placeholder="Price" name="trailer" id="price" style="background-color:white;border-color: black;border-bottom:black 2px solid;color: black;outline: none"></span>
    <br>
    <br>
    <span class="hh">Select image to upload:</span>
    <input required type="file" name="fileToUpload" id="fileToUpload" style="background-color:#ff6d84;border:black 2px solid;color:black"><br><br>
    <input id="addbutton" style="cursor: pointer;padding-top: 10px;padding-bottom:10px;display: inline-block;width: 200px; font-weight: bold; font-size: 20px; color:black; margin-left: 40%; background-color:#ff6d84;border-color: black;border-radius: 50px" type="submit" value="ADD" name="submit" ;">
    </form>
</div>

<div align="center" >
    <h2 class="dd" href="#">❀ Delete Sweet ❀</h2>
</div>
<div id="delete">
    <form action="Add_Delete.php" method="post">
        <label for="gdelete" style="display: inline-block;position: relative;top: 6px;left: 250px;font-size: 20px;visibility: hidden" id="l4">name of the Sweet to delete</label>
        <input onkeydown="show2Delete();" type="text" placeholder="name of the Sweet to delete" name="gdelete" id="gdelete"  style="width: 20%;background-color: white;border-color: black;border-bottom:black 2px solid;color: black;outline: none">
        <br>
        <br>
        <input id="del" style="border-color: black;padding-top: 10px;padding-bottom:10px;cursor: pointer;width: 200px; font-weight: bold; font-size: 20px; color:black; margin-left: 40%; background-color:#ff6d84;border-radius: 50px " type="submit" value="DELETE" name="submit2" ;">
    </form>
</div>
</body>
<?php
if(isset($_POST['gdelete'])){



    try{
        $db = new mysqli('localhost','root','','sweetdesert');

        $nameToD = $_POST['gdelete'];
?>
<script>
alert(<?php echo"$nameToD"; ?>)    ;
</script>
        <?php
        $s="select * from sweets where name ='".$nameToD."';";
        $re=$db->query($s);

        if($re->num_rows!=0) {

            ?>
            <script>

                if( confirm("are you sure you want to delete <?php echo "$nameToD";?> ?")) {

                    <?php

                    $s = "delete from sweets where name='" . $nameToD . "'; ";

                    $db->query($s);
                    $db->commit();
                    unset( $_POST['gdelete']);

                    ?>
                    alert("Deleted");
                }
            </script>
            <?php
        }
        else {
            ?>
            <script>
                alert("Sweet to delete dos not exist");
            </script>
            <?php

        }
        $db->close();
    }
    catch(Exception $e){

    }
}
?>

<?php

if (isset($_POST["submit"])) {
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    $uploadOk = 1;
} else {
    ?>
    <script>
        alert("file is not an img");
    </script>
    <?php

    $uploadOk = 0;
}






// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" &&$imageFileType!="jfif" ) {
    ?>
    <script>
        alert("Sorry, only JPG, JPEG, PNG, jfif & GIF files are allowed.");
    </script>
    <?php        $uploadOk = 0;
}


else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    }
}
}
if(true){

    try{
        $db=new mysqli('localhost','root','','sweetdesert');
        $s="select * from sweets;";
        $r=$db->query($s);
        for($i=0;$i<$r->num_rows;$i++){
            $roww=$r->fetch_assoc();

        }
        ?>
        <script>
            alert("Added");
        </script>
    <?php

 $str="INSERT INTO `sweets` ( `type`, `image`,`name`,`price`) VALUES ( '".$_POST['type']."', '"."uploads/". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) ."','".$_POST['gName']."','".$_POST['Price']."', )";
        $db->query($str);
        $db->commit();
        $db->close();
        global $uploadOk;
    if($uploadOk==1){
        ?>
        <script>
            alert("Added");
        </script>
    <?php
    }

    else{
    ?>
        <script>
            alert("USED");
        </script>
    <?php        }

    }
    catch (Exception $e){
    ?>
        <script>
            alert("invalid inputs");
        </script>
        <?php
    }
}
?>

</html>

