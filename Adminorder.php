<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sweet Desert♡ |Admin Orders</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            background: url("imgs/hhhhhh.jpg");
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
    box-sizing:border-box ;

}
.btn{
    width: 20px;
    height: 40px;
    display: inline-block;
    font-size: 1rem;
    color: black;
    border-radius:7px;
    border:0.1rem solid black;
    cursor: pointer;
    background: none;
    text-decoration: none;
    font-family: 'Great Vibes', cursive;

}
.btn:hover{
    background: powderblue;
    color: black;
    border:.1rem solid #4b3939;
    transition: 2s all ease-in-out;
}
table{
    width: 50%;
    position: absolute;
    top:400px;
    transition:all 0.3s linear;
    left: 25%
}
table,td,th{ border-radius:6px;
    padding: 20px;
    border: 1px solid lightgray;
    border-collapse: collapse;
    text-align: center;
    cursor: pointer;
    width: 300px;
    box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);
    border:.1rem solid #4b3939;
    transition: 1s all ease-in-out;


}
td{
    font-size: 18px;

}
th{
    background-color: #ff6d84;
    color: black;

}
tr:nth-child(odd){
    background-color:pink;
}
tr:nth-child(odd):hover{
    background-color: #ff6d84;
    color: white;
    transform: scale(1.1);
    transition:transform 300ms ease-in;
}
tr:nth-child(even){
    background-color: white;
}
tr:nth-child(even):hover{
    background-color: indianred;
    color: white;
    transform: scale(1.1);
    transition:transform 300ms ease-in;
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
           text-decoration: none; color: #ff6d84;
           color: black;
           font-family: 'Arial Rounded MT Bold', cursive;
        }
        .h:hover{
            background:white;
            color: black;
            border:.1rem solid #4b3939;
            transition: 1s all ease-in-out;
        }
        .delorder{
            font-family: 'Great Vibes', cursive;
            text-align: center;
            font-size:20px;
            color: #4b3939;
            background-color: transparent;
            font-weight: 700;
            padding: 10px;
            border: #4b3939 2px solid;
            margin: 10px;
        }
        .delorder:hover{
            color: lightblue;
            transition: all 1s ease-in-out;
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
                <li><a href="Admin(order).php">Orders</a></li>
                <li><a href="Logout.php">Log out</a></li>
            </ul>
        </li>
    </ul></div>
</div>
<div class="big" style="width: 100%; height:900px;z-index: -100"></div>
<a class="h">Customer Orders </a>
<table border="2" class="table">
    <tr>

        <th>Full Name</th>
        <th>Sweet Name</th>
        <th>Address</th>
        <th>Mobile Phone</th>
        <th>Order status</th>
        <th>Delete</th>
    </tr>

    <?php
    $conn = mysqli_connect('localhost','root','','sweetdesert');
    $records ="select * from `orders`"; // fetch data from database
    $result = mysqli_query($conn, $records);
    while($row = mysqli_fetch_array($result))
    {
        $orderid = $row['id'];

       echo "
        <form action='' method='post'> 
        <tr>

        <th>".$row['username']."</th>
        <th>".$row['sweetsname']."</th>
        <th>".$row['address']."</th>
        <th>".$row['mobile']."</th>
        <th>".$row['mode']."</th>

         <td> 
         <input type='hidden' name='id' id='id'value='$orderid' >
            <button class='delorder' name='delete-order' id='delete-order'>Delete</button>
        </form>
        </tr>
         ";
        }
    ?>



    <?php
    $conn = mysqli_connect('localhost','root','','sweetdesert');
    if(!$conn){
        die("<script>alert('connection failed')</script>");
    }else{
        if(isset($_POST['delete-order'])){
            $qry="DELETE FROM orders WHERE id='$orderid'";
            $res=mysqli_query($conn, $qry);
            if($res){echo"<script>alert('Order Is Deleted!');</script>";}
            else{echo"<script>alert('Order Is NOT Deleted!');</script>";}
        }
    }
    ?>




</table>

</body>

</html>