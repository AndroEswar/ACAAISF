<?php
   include('session.php');
   $user_check = $_SESSION['login_user'];
   $sql = "SELECT profileId from profile where userId=$user_check";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	
	if ($count > 0) {
		header("location: facultyviewprofile.php");
	}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $qualification = mysqli_real_escape_string($db,$_POST['qualification']);
      $experience = mysqli_real_escape_string($db,$_POST['experience']); 
	  $industry = mysqli_real_escape_string($db,$_POST['industry']); 
	  $teaching = mysqli_real_escape_string($db,$_POST['teaching']); 
      $research = mysqli_real_escape_string($db,$_POST['research']); 
	    if(!file_exists("uploads/photo/".$user_check."/"))
	 {
		 mkdir("uploads/photo/".$user_check."/");
	 }
	  $uploaddir = "uploads/photo/".$user_check."/";
	$uploadfile = $uploaddir . basename($_FILES['cfile']['name']);


					if (move_uploaded_file($_FILES['cfile']['tmp_name'], $uploadfile)) {
						$cfileName=$_FILES['cfile']['name'];
      $sql = "insert into profile(userId, qualification, exp, industry, teaching, research,photo)values($user_check,'$qualification','$experience','$industry','$teaching','$research','$cfileName')";
	  echo $sql;
      $result = mysqli_query($db,$sql);
      
		
      if($result == TRUE) {
         
        
        
         header("location: facultyviewprofile.php?msg=successfully added");
      }else {
         $error = "Not inserted";
      }
   }else {
         $error = "Not inserted";
   }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Home </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<script src='/google_analytics_auto.js'></script></head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation" style=" background-color: skyblue; ">
		<nav class="navbar navbar-default navbar-static-top" style=" background-color: skyblue; "> <div class="container"> <div class="row" style=" padding-top:5px;"> <div class="col-xs-12 col-sm-1 rit"><img src="images/jntua.png" alt="JNTUA" width="60px" height="70px" /> </div> <div class="col-xs-12 col-sm-5"> <span class="text-primary myh1">J.N.T.U.A.College of Engineering</span><span class="text-primary myh2">, Anantapuramu-515002</span><br /> <span class="text-primary myh1">University Faculty Activities Information System</span> </div> <div class="col-xs-12 col-sm-6 rit" >  </div> </div>  </div> </nav>  
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>



             <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li ><a href="facultyhome.php">Home</a></li>
			    <li class="active"><a href="facultyprofile.php">Profile</a></li>
               
			   <li><a href="facultyconf.php">Add Conferences</a></li>
			   <li><a href="facultyviewconf.php">Conferences</a></li>
			   <li><a href="facultyresearch.php">Research Work</a></li>
			
				<li><a href="facultybooks.php">Books</a></li>
               
				<li><a href="logout.php">Logout</a></li>
              
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">


<!-- #Header Starts -->
</div><!-- banner -->

<!-- banner -->


<div class="container">
<div class="spacer">

<form method="post" action="" enctype="multipart/form-data">
<div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
 
			
			    <input required type="text" class="form-control" placeholder="Qualification" name="qualification">
               
              
				  <input required type="text" class="form-control" placeholder="Experience" name="experience">
			
			   <input required type="text" class="form-control" placeholder="Industry" name="industry">
			   <input required type="text" class="form-control" placeholder="teaching" name="teaching">
			   <input required type="text" class="form-control" placeholder="research" name="research">
			   <input required type="file" name="cfile" id="cfile" class="form-control" placeholder="Photo">
				 <button type="submit" class="btn btn-success" name="Submit">Profile</button>
			   
			   
			  
			  
			
		   
               
 </form>

</div>
</div>




<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html">About JNTU</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="staff.html">Staff</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.html">Student Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest news in jntu.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                 
<span class="glyphicon glyphicon-map-marker"></span> Jawaharlal Nehru Technological University Anantapur <br>
<span class="glyphicon glyphicon-envelope"></span> jntua@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> 08554-242438</p>
            </div>
        </div>
<p class="copyright">Copyright 2017. All rights reserved.	</p>


</div></div>





</body>
</html>