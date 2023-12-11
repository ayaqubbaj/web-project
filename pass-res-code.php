<?php
$conn = mysqli_connect('localhost','root','','sweetdesert');
if(!$conn){
    die("<script>alert('connection failed')</script>");
}else if(isset($_POST['pass-reset'])){

    $selector = bin2hex(\Sodium\randombytes_buf(8));
    $token = \Sodium\randombytes_buf(32);
    $url = "";
} else {
    header ("location: Signup.php");
}

?>