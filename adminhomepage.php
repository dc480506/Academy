<?php
session_start();
 if(!isset($_SESSION['uid']) || $_SESSION['type']!='adm'){
     header("Location: index.php");
     exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" type = "text/css" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

     <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="adminlogin.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="#"><?php echo $_SESSION['uid']?></a> <a href="#"> || </a> <a href="include/logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ##### Header Area End ##### -->



    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div style="margin-top: 100px;"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### body Area Start ##### -->
     <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-12">
                    <div class="academy-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Show Applications</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Accepted Applications</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Rejected Applications</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <?php
                                    include_once "include/config.php";
                                    $sql="SELECT * FROM student_admin_course WHERE status=0";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo '    
                                    <form action="include/allocate.php" method="post">
                                    <input type="hidden" name="userid" value="'.$row['emailid'].'">
                                    <input type="hidden" name="course" value="'.$row['cid'].'">
                                    <div class="academy-tab-text">
                                        <span>
                                        '.$row['emailid']."  &emsp;&emsp;  ".$row['cid'].'
                                        </span>&emsp;&emsp;<button class="btn academy-btn" type="submit" name="accept">Accept</button>
                                        <button class="btn academy-btn" type="submit" name="reject">Reject</button>
                                        
                                    </div>
                                </form>';
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        <?php
                                    include_once "include/config.php";
                                    $sql="SELECT * FROM student_admin_course WHERE status=1 AND isaccepted=1";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo '    
                                    <div class="academy-tab-text">
                                        <p>
                                        '.$row['emailid']."  &emsp;&emsp;  ".$row['cid'].'
                                        </p>
                                        </div>';
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                    <?php
                                    include_once "include/config.php";
                                    $sql="SELECT * FROM student_admin_course WHERE status=1 AND isaccepted=0";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo '    
                                    <div class="academy-tab-text">
                                        <p>
                                        '.$row['emailid']."  &emsp;&emsp;  ".$row['cid'].'
                                        </p>
                                        </div>';
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    <!-- ##### body Area End ##### -->



    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>