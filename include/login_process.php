<?php
if(isset($_POST['login-btn'])){
    include_once 'config.php';
    $uid=$_POST['uid'];
    $password=$_POST['password'];
    $sql="SELECT * FROM users where emailid='$uid' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1){
        header("Location: ../Login.php?login=error");
        exit();
    }else{
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['uid']=$row['emailid'];
        header("Location: ../homepage.php");
        exit();
    }
}
?>