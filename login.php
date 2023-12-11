<?php
$conn = mysqli_connect('localhost','root','','sweetdesert');
session_start();
$wrong = '';


if(!$conn){
    die("<script>alert('connection failed')</script>");
}else{
    if(isset($_POST['login'])){
        $user = $_POST['usernamelogin'];
        $pass = sha1($_POST['passwordlogin']);
        $sql = "SELECT username,password FROM users ";
        $res = $conn->query($sql);
        $row = $res ->fetch_assoc();
        $flag=1;
        for ($i = 0; $i < $res->num_rows ; $i++){
            $userlogin = $row['username'];
            $passwordlogin = $row['password'];
            if($user == $userlogin && $pass == $passwordlogin){
                //$quey= "SELECT id FROM user WHERE WHERE
                  //  username=$user ";
                //$ress = $conn ->query($quey);
                //$r = $ress ->fetch_assoc();
                $userid = $row['id'];
                $_SESSION['id']=$userid;
                $_SESSION['user']=$user;
                $flag=0;
                header("location: homeal.php");
                //echo "<script>alert('You Are Not Logged In Sign up First Please.')</script>";

            }
        }

         if($flag){
             echo "<script>alert('You Are Not Logged In Sign up First Please.')</script>";
             header("location: Signup.php");
         }



       }
}
$conn->commit();
$conn->close();
?>
