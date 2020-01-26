<?php
  if(isset($_POST['register-btn'])){
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      include_once 'config.php';
      $sql="INSERT INTO role VALUES('$email','$password','stu')";
      mysqli_query($conn,$sql);
      $sql="INSERT INTO users VALUES('$fname','$lname','$email')";
      mysqli_query($conn,$sql);
      header("Location: ../Login.php");
      exit();
    }
?>