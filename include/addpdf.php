<?php
include_once 'config.php';
session_start();
if(isset($_SESSION['uid']) && isset($_POST['submitPdf'])){
    $emailid=$_SESSION['uid'];
    $sql="SELECT cid FROM teacher_course WHERE emailid='$emailid'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1){
        header("Location: ../index.php");
        exit();
    }
    $row=mysqli_fetch_assoc($result);
    $cname=$row['cid'];
    $day=$_POST["day2"];
    $month=$_POST["month2"];
    $week=$_POST["week2"];
    $sql="SELECT * FROM course_pdf WHERE cid=1 AND month='$month' AND week='$week' AND day='$day'";
    $result=mysqli_query($conn,$sql);
    $no =mysqli_num_rows($result)+1;
    $file_name = $_FILES['fileToUpload2']['name'];
        $file_tmp =$_FILES['fileToUpload2']['tmp_name'];
        $file_ext=strtolower(end(explode('.',$file_name)));
        
        $extensions= array("pdf");
        
        if(in_array($file_ext,$extensions)=== true){
           $dir=$abs_dir.$cname."/Month".$month."/Week".$week."/Day".$day."/";
           if(!file_exists($dir)){
               mkdir($dir,0777,true);
           }
           if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $dir."$file_name")) {

            $sql="INSERT INTO course_pdf(cid,month,week,day,pdfno,pdfname) VALUES (1,$month,$week,$day,'$no','$file_name')";
            mysqli_query($conn,$sql);
            header("Location: ../teacherhomepage.php?addedsuccessfully") ;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }   
}
?>