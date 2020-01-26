<?php
 session_start();
 if(isset($_SESSION['uid'])){
     include_once "config.php";
     $email=$_SESSION['uid'];
     $sql="INSERT INTO student_admin_course (emailid,cid) VALUES('$email',1)";
     mysqli_query($conn,$sql);
     header("Location: ../homepage.php");
 }
?>