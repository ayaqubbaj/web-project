<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ |Admin Designed Orders</title>
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
            background: url("imgs/sh.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
        }
        *{
            margin: 0;
            padding: 0;
            font-family: Arial;
            font-size: 15px;
            box-sizing:border-box ;

        }
        table{
            width: 40%;
            position: absolute;
            top:400px;
            left: 30%
        }
        table,td,th{
            border-radius:3px;
            padding: 20px;
            border: 1px solid lightgray;
            border-collapse: collapse;
            text-align: center;
            cursor: pointer;
            width: 100px;
            box-shadow: -1px 6px 6px -6px rgba(0,0,0,0.5);
            border:.1rem solid #4b3939;


        }
        td{
            font-size: 20px;

        }
        th{
            background-color: #ff6d84;
            color: black;

        }
        tr:nth-child(odd){
            background-color:pink;
        }
        tr:nth-child(odd):hover{
            background-color:#ff6d84;
            color: white;

        }
        tr:nth-child(even){
            background-color: white;
        }
        tr:nth-child(even):hover{
            background-color:#ff6d84;
            color: white;
        }
        .h {
            width: 100%;
            position: absolute;
            top:300px;
            transition:all 0.5s linear;
            left: 40%
            font-family: 'Great Vibes', cursive;
            text-align: center;
            font-size: 50px;
            text-decoration: none; color:#ff6d84;
            color:black;
            font-family: 'Arial Rounded MT Bold', cursive;
        }
        .h:hover{
            background:#1b1e21;
            color:#ff6d84;
            border:.1rem solid #4b3939;
            transition: 2s all ease-in-out;
        }

    </style>
</head>
<body>
<div class="header">
    <img src="imgs/header.png" alt="">
    <div class="bar"><ul>
            <li><a  href="Admin.php">Home</a></li>
            <li><a href="#">Menu</a>
                <ul>
                    <li><a href="Add_Delete_Waffle2.php">Add/Delete Waffle</a></li>
                    <li><a href="Add_Delete_crepe2.php">Add/Delete Crepe</a></li>
                </ul>
            </li></ul>
    </div>
    <div class="nbar">
        <ul>
            <li><a  href="Admin(make).php">Make your sweet</a></li>
            <li><a " href="#">Account</a>
                <ul>
                    <li><a href="Adminorder.php">Orders</a></li>
                    <li><a href="Logout.php">Log out</a></li>
                </ul>
            </li>
        </ul></div>
</div>
<div class="big" style="width: 100%; height:900px;z-index: -100"></div>
<a class="h">Customer's Sweet </a>

<table>

    <table border="2">
        <tr>

            <th>Full Name</th>
            <th>Base</th>
            <th>Flavour</th>
            <th>Toppings </th>
            <th>Syrups Alternatives</th>
</tr>

            <?php
        $conn =new mysqli('localhost','root','','sweetdesert');
        $records = mysqli_query($conn,"select * from `makesweet`"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
            ?>
            <tr>

                <th><?php echo $data['username']; ?></th>
                <th><?php echo $data['base']; ?></th>
                <th><?php echo $data['flavours']; ?></th>
                <th><?php echo $data['toppings']; ?></th>
                <th><?php echo $data['syrups']; ?></th>
            </tr>
            <?php
        }
        ?>

        <?php mysqli_close($conn); // Close connection ?>


    </table>


</body>
</html>