<?php
include_once 'config.php';
session_start();
if(isset($_SESSION['uid']) && isset($_POST['submitVideo'])){
    $emailid=$_SESSION['uid'];
    $sql="SELECT cid FROM teacher_course WHERE emailid='$emailid'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1){
        header("Location: ../index.php");
        exit();
    }
    $row=mysqli_fetch_assoc($result);
    $cname=$row['cid'];
    $day=$_POST["day"];
    $month=$_POST["month"];
    $week=$_POST["week"];
    $sql="SELECT * FROM course_content WHERE cid=1 AND month='$month' AND week='$week' AND day='$day'";
    $result=mysqli_query($conn,$sql);
    $no =mysqli_num_rows($result)+1;
    $file_name = $_FILES['fileToUpload']['name'];
        $file_tmp =$_FILES['fileToUpload']['tmp_name'];
        $file_ext=strtolower(end(explode('.',$file_name)));
        
        $extensions= array("mp4");
        
        if(in_array($file_ext,$extensions)=== true){
           $dir=$abs_dir.$cname."/Month".$month."/Week".$week."/Day".$day."/";
           if(!file_exists($dir)){
               mkdir($dir,0777,true);
           }
           if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $dir."$file_name")) {

            $sql="INSERT INTO course_content(cid,month,week,day,videono,videoname) VALUES (1,$month,$week,$day,'$no','$file_name')";
            mysqli_query($conn,$sql);
            header("Location: ../teacherhomepage.php?addedsuccessfully") ;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }   
}
?>