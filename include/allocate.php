<?php
include_once "config.php";
if(isset($_POST['accept'])){
    $emailid=$_POST['userid'];
    $cid=$_POST['course'];
    $sql="UPDATE student_admin_course SET status=1,isaccepted=1 WHERE emailid='$emailid' AND cid='$cid'";
    mysqli_query($conn,$sql);
    $sql="INSERT INTO student_course VALUES('$emailid','$cid')";
    mysqli_query($conn,$sql);
}else if(isset($_POST['reject'])){
    $emailid=$_POST['userid'];
    $cid=$_POST['course'];
    $sql="UPDATE student_admin_course SET status=1,isaccepted=0 WHERE emailid='$emailid' AND cid='$cid'";
    mysqli_query($conn,$sql);
}
header("Location: ../adminhomepage.php");
exit();
?>