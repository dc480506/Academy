<?php
  session_start();
  if(!isset($_SESSION['uid'])){
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
    <title>Academy</title>

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

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="#"><?php echo $_SESSION['uid']?></a> <a href="#"> || </a> <a href="include/logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <!--<li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                        </li>
                                    -->
                                    <li><a href="#">Courses</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-3">
                                                <li><a href="#"><b>Post-Graduate Program</b></a></li>
                                                <br>
                                                <li><a href="#">Accounting</a></li>
                                                <li><a href="#">Business Administration</a></li>
                                                <li><a href="#">Marketing</a></li>
                                                <li><a href="#">Computer Science</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-3">
                                                <li><a href="#"><b>Diploma Program</b></a></li>
                                                <br>
                                                <li><a href="#">Supply-Chain Management</a></li>
                                                <li><a href="#">Analytics</a></li>
                                                <li><a href="#">IT-Management</a></li>
                                                <li><a href="#">Nutrition</a></li>
                                            </ul>
                                         
                                            <div class="single-mega cn-col-3">
                                                <img src="img/bg-img/bg-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="course.html">Course</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+91 9987007044"><i class="icon-telephone-2"></i> <span>(+91) 9987 007 044</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Computer Science</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">
                            <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">

                             <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" name="m1">Month-1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                                <!-- ##### Tabs ##### -->
                                                <br>
                <div class="col-12 col-lg-8">
                    <div class="academy-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false" name="m1_w1">Week 1</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false" name="m1_w2">Week 2</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true" name="m1_w3">Week 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true" name="m1_w4">Week 4</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">

                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        <!-- ##### Accordians ##### -->
               <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseDOne" data-toggle="collapse" data-parent="#accordion" href="#collapseDOne" name="m1_w1_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseDOne" class="accordion-content collapse show">

                                <br>
                                        <!-- Day 1 -->
                                        <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=1 AND day=1";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>
                                        <!-- <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_1.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_2.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_3.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video> -->

                                        <br><br>
                                        <a href="#">Notes</a><br>
                                        <a href="#">Notes</a>


                                        
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseDTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseDTwo" name="m1_w1_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseDTwo" class="accordion-content collapse">

                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=1 AND day=2";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>
                                <!-- <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_1.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_2.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_3.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video> -->

                                         <br><br>
                                        

                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseDThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseDThree" name="m1_w1_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseDThree" class="accordion-content collapse">
                                        <!-- <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_1.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_2.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video> -->
                                        <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=1 AND day=3";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>

                                         <br><br>

                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseDfour" data-parent="#accordion" data-toggle="collapse" href="#collapseDfour" name="m1_w1_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseDfour" class="accordion-content collapse">
                                        <!-- <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_1.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_2.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_1.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>

                                        <br>
                                        
                                        <video id="video" controls="" preload="none" poster="none">
                                        <source id="mp4" src="Tutorials\week1\m1_w1_d1_2.mp4" type="video/mp4">
                                            <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video> -->
                                        <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=1 AND day=4";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>

                                        <br><br>

                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseDfive" data-parent="#accordion" data-toggle="collapse" href="#collapseDfive" name="m1_w1_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseDfive" class="accordion-content collapse">
                                        
                                        <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=1 AND day=5";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>
                                        <br><br>
                                        
                            </div>
                        </div>


                    </div>
                </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseD2One" data-toggle="collapse" data-parent="#accordion" href="#collapseD2One" name="m1_w2_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseD2One" class="accordion-content collapse show">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=2 AND day=1";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD2Two" data-parent="#accordion" data-toggle="collapse" href="#collapseD2Two" name="m1_w2_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD2Two" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=2 AND day=2";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>     
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseD2Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseD2Three" name="m1_w2_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseD2Three" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=2 AND day=3";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                               </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD2four" data-parent="#accordion" data-toggle="collapse" href="#collapseD2four" name="m1_w2_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD2four" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=2 AND day=4";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                               </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD2five" data-parent="#accordion" data-toggle="collapse" href="#collapseD2five" name="m1_w2_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD2five" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=2 AND day=5";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                               </div>
                        </div>

                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseD3One" data-toggle="collapse" data-parent="#accordion" href="#collapseD3One" name="m1_w3_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseD3One" class="accordion-content collapse show">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=3 AND day=1";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                               </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD3Two" data-parent="#accordion" data-toggle="collapse" href="#collapseD3Two" name="m1_w3_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD3Two" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=3 AND day=2";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                              </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseD3Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseD3Three" name="m1_w3_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseD3Three" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=3 AND day=3";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                              </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD3four" data-parent="#accordion" data-toggle="collapse" href="#collapseD3four"  name="m1_w3_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD3four" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=3 AND day=4";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                              </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD3five" data-parent="#accordion" data-toggle="collapse" href="#collapseD3five"  name="m1_w3_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD3five" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=3 AND day=5";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                              </div>
                        </div>

                    </div>
                </div>
                             </div>           
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseD4One" data-toggle="collapse" data-parent="#accordion" href="#collapseD4One"  name="m1_w4_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseD4One" class="accordion-content collapse show">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=4 AND day=1";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                              </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD4Two" data-parent="#accordion" data-toggle="collapse" href="#collapseD4Two" name="m1_w4_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD4Two" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=4 AND day=2";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                                  </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseD4Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseD4Three" name="m1_w4_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseD4Three" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=4 AND day=3";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                                  </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD4four" data-parent="#accordion" data-toggle="collapse" href="#collapseD4four" name="m1_w4_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD4four" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=4 AND day=4";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                                  </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseD4five" data-parent="#accordion" data-toggle="collapse" href="#collapseD4five" name="m1_w4_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseD4five" class="accordion-content collapse">
                            <?php
                                          include_once 'include/config.php';
                                          $sql="SELECT * FROM course_content WHERE cid=1 AND month=1 AND week=4 AND day=5";
                                          $result=mysqli_query($conn,$sql);
                                          if(mysqli_num_rows($result)<1){
                                              echo "No videos available at this moment!! Check back later!!";
                                          }else{
                                              while($row=mysqli_fetch_assoc($result)){
                    
                                                  echo '
                                                  <video id="video" controls="" preload="none" poster="none">
                                                  <source id="mp4" src="'.$base_dir.$row['cid']."/Month".$row['month']."/Week".$row['week']."/Day".$row['day']."/".$row['videoname'].'" type="video/mp4">
                                                      <p>Your user agent does not support the HTML5 Video element.</p>
                                                  </video>
          
                                                  <br>
                                                  ';
                                              }
                                          }

                                        ?>                                  </div>
                        </div>

                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" name="m2">Month-2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <br>
                <!-- Month 2 content Start -->

                <div class="col-12 col-lg-8">
                    <div class="academy-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false" name="m2_w1">Week 1</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false" name="m2_w2">Week 2</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true" name="m2_w3">Week 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true" name="m2_w4">Week 4</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">

                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        <!-- ##### Accordians ##### -->
               <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseEOne" data-toggle="collapse" data-parent="#accordion" href="#collapseEOne" name="m2_w1_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseEOne" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseETwo" data-parent="#accordion" data-toggle="collapse" href="#collapseETwo" name="m2_w1_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseETwo" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseEThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseEThree" name="m2_w1_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseEThree" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseEfour" data-parent="#accordion" data-toggle="collapse" href="#collapseEfour" name="m2_w1_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseEfour" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseEfive" data-parent="#accordion" data-toggle="collapse" href="#collapseEfive" name="m2_w1_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseEfive" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>


                    </div>
                </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseE2One" data-toggle="collapse" data-parent="#accordion" href="#collapseE2One" name="m2_w2_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseE2One" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE2Two" data-parent="#accordion" data-toggle="collapse" href="#collapseE2Two" name="m2_w2_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE2Two" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseE2Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseE2Three" name="m2_w2_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseE2Three" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE2four" data-parent="#accordion" data-toggle="collapse" href="#collapseE2four" name="m2_w2_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE2four" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE2five" data-parent="#accordion" data-toggle="collapse" href="#collapseE2five" name="m2_w2_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE2five" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseE3One" data-toggle="collapse" data-parent="#accordion" href="#collapseE3One" name="m2_w3_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseE3One" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE3Two" data-parent="#accordion" data-toggle="collapse" href="#collapseE3Two" name="m2_w3_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE3Two" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseE3Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseE3Three" name="m2_w3_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseE3Three" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE3four" data-parent="#accordion" data-toggle="collapse" href="#collapseE3four" name="m2_w3_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE3four" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE3five" data-parent="#accordion" data-toggle="collapse" href="#collapseE3five" name="m2_w3_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE3five" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                    </div>
                </div>
                             </div>           
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseE4One" data-toggle="collapse" data-parent="#accordion" href="#collapseE4One" name="m2_w4_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseE4One" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE4Two" data-parent="#accordion" data-toggle="collapse" href="#collapseE4Two" name="m2_w4_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE4Two" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseE4Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseE4Three" name="m2_w4_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseE4Three" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE4four" data-parent="#accordion" data-toggle="collapse" href="#collapseE4four" name="m2_w4_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE4four" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseE4five" data-parent="#accordion" data-toggle="collapse" href="#collapseE4five" name="m2_w4_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseE4five" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Month 2 content End -->

    
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree" name="m3">Month - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <br>
                <!-- Month 3 content Start -->

                            <div class="col-12 col-lg-8">
                    <div class="academy-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false" name="m3_w1">Week 1</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false" name="m3_w2">Week 2</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true" name="m3_w3">Week 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true" name="m3_w4">Week 4</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">

                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        <!-- ##### Accordians ##### -->
               <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseFOne" data-toggle="collapse" data-parent="#accordion" href="#collapseFOne" name="m3_w1_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseFOne" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseFTwo" name="m3_w1_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseFTwo" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseFThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFThree" name="m3_w1_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseFThree" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFfour" data-parent="#accordion" data-toggle="collapse" href="#collapseFfour" name="m3_w1_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseFfour" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFfive" data-parent="#accordion" data-toggle="collapse" href="#collapseFfive" name="m3_w1_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseFfive" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>


                    </div>
                </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseF2One" data-toggle="collapse" data-parent="#accordion" href="#collapseF2One" name="m3_w2_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseF2One" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF2Two" data-parent="#accordion" data-toggle="collapse" href="#collapseF2Two" name="m3_w2_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF2Two" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseF2Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseF2Three" name="m3_w2_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseF2Three" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF2four" data-parent="#accordion" data-toggle="collapse" href="#collapseF2four" name="m3_w2_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF2four" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF2five" data-parent="#accordion" data-toggle="collapse" href="#collapseF2five" name="m3_w2_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF2five" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseF3One" data-toggle="collapse" data-parent="#accordion" href="#collapseF3One" name="m3_w3_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseF3One" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF3Two" data-parent="#accordion" data-toggle="collapse" href="#collapseF3Two" name="m3_w3_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF3Two" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseF3Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseF3Three" name="m3_w3_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseF3Three" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF3four" data-parent="#accordion" data-toggle="collapse" href="#collapseF3four" name="m3_w3_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF3four" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF3five" data-parent="#accordion" data-toggle="collapse" href="#collapseF3five" name="m3_w3_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF3five" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                    </div>
                </div>
                             </div>           
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                         <div class="col-12 col-lg-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseF4One" data-toggle="collapse" data-parent="#accordion" href="#collapseF4One" name="m3_w4_d1">Day - 1
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseF4One" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF4Two" data-parent="#accordion" data-toggle="collapse" href="#collapseF4Two" name="m3_w4_d2">Day - 2
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF4Two" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseF4Three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseF4Three" name="m3_w4_d3"> Day - 3
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseF4Three" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF4four" data-parent="#accordion" data-toggle="collapse" href="#collapseF4four" name="m3_w4_d4">Day - 4
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF4four" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseF4five" data-parent="#accordion" data-toggle="collapse" href="#collapseF4five" name="m3_w4_d5">Day - 5
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseF4five" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Month 3 content End -->

                            </div>
                        </div>

                            </div>
                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="CS-dashboard1.html">01</a></li>
                                <li class="page-item"><a class="page-link" href="CS-dashboard2.html">02</a></li>
                                <li class="page-item"><a class="page-link" href="CS-dashboard3.html">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categories</h5>
                            <ul>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-1.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Courses for you</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>A great way to start</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-3.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Courses for you</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-4.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Start your training</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p>Academy provides access to the best education, to offer courses online.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/gallery1.jpg" alt=""></a>
                                <a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/gallery2.jpg" alt=""></a>
                                <a href="img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/gallery3.jpg" alt=""></a>
                                <a href="img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/gallery4.jpg" alt=""></a>
                                <a href="img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/gallery5.jpg" alt=""></a>
                                <a href="img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Mahatma Gandhi Road, Kolivery Village, Vidya Nagari, Kala Ghoda, Fort, Mumbai, Maharashtra 400032</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: +91 9987 007 044 <br>Office:022 203-808-8648</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>rutvik@academy.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved | 
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

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