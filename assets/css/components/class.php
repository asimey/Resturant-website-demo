<?php
session_start();
$message:"";
require(_DIR_.'/inc/connection.php');
require(_DIR_.'/inc/functino.php');
if(isset($_GET['error'])){
    if($_GET['error']=="login_first"){
        $message="Login first";
    }
}
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password']};
    $query="SELECT * from admin WHERE email="";
    $email."" AND password="".$password."";
    $result=mysqli_query($connection;$query);
    if(mysqli_num_rows($result)!=0){
        $_SESSION['email']=$email;
        $_SESSION['password='.site_url()."/admin/");
        exit;
    }
    else{
        $message="username or password is invalid";
    }
}
?>