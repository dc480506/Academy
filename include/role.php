<?php
if(isset($_POST['login-btn'])){
    include_once 'config.php';
    $uid=$_POST['uid'];
    $password=$_POST['password'];
    $sql="SELECT * FROM role where emailid='$uid' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1){
        header("Location: ../Login.php?login=error");
        exit();
    }else{
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['uid']=$row['emailid'];
        $_SESSION['type']=$row['role'];
        if($_SESSION['type']=="stu"){
        header("Location: ../homepage.php");
        }elseif($_SESSION['type']=="adm"){
            header("Location: ../adminhomepage.php");
        }elseif($_SESSION['type']=="fac"){
            header("Location: ../teacherhomepage.php");
        }
        exit();
    }
}
?>