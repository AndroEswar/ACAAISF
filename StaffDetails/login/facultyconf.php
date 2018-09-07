<?php
   include('session.php');
   $user_check = $_SESSION['login_user'];
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $conference = mysqli_real_escape_string($db,$_POST['conference']);
      $agency = mysqli_real_escape_string($db,$_POST['agency']); 
	  $title = mysqli_real_escape_string($db,$_POST['title']); 
	  $cdate = mysqli_real_escape_string($db,$_POST['cdate']); 
      $todate = mysqli_real_escape_string($db,$_POST['todate']); 
	  $days = mysqli_real_escape_string($db,$_POST['days']); 
	   $addInfo = mysqli_real_escape_string($db,$_POST['addInfo']); 
	   $role = mysqli_real_escape_string($db,$_POST['role']);
	   $place = mysqli_real_escape_string($db,$_POST['place']);
	   
      $sql = "insert into conferencestl(agencyname, title, cdate, role, days, todate, additionalinfo, type,userid,place)values('$agency','$title','$cdate','$role','$days','$todate','$addInfo','$conference',$user_check,'$place')";
      $result = mysqli_query($db,$sql);
      
		
      if($result == TRUE) {
         
        
        
         header("location: facultyviewconf.php?msg=successfully added");
      }else {
         $error = "Not inserted";
      }
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Conference </title>
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

<script src='/google_analytics_auto.js'></script>


<script   src="date/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<link href="date/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script type="text/javascript" src="date/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="date/bootstrap-datepicker3.min.css">
<script>
$( document ).ready(function() {
    $(".from-datepicker").datepicker({ 
        format: 'yyyy-mm-dd'
    });
	 $(".from-datepicker").datepicker({ 
        format: 'yyyy-mm-dd'
    });
   
}); 
</script>
</head>

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
			    <li><a href="facultyprofile.php">Profile</a></li>
               
			   <li class="active"><a href="facultyconf.php">Add Conferences</a></li>
			   <li><a href="facultyviewconf.php">Conferences</a></li>
			 
			
			 <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research Work <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie"><a href="facultyresearch.php">Research Work</a></li>
					<li class="kopie"><a href="addfacultyresearch.php">Add Research Work</a></li>
					</ul>
				</li>
				  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workshop <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie"><a href="facultyworkshop.php">Workshop</a></li>
					<li class="kopie"><a href="addfacultyworkshop.php">Add Workshop</a></li>
					</ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Journals <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie"><a href="facultyjournals.php">Journals</a></li>
					<li class="kopie"><a href="addfacultyjournal.php">Add Journal</a></li>
					</ul>
				</li>
			
			<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patents <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie"><a href="facultypatents.php">Patents</a></li>
					<li class="kopie"><a href="addfacultypatent.php">Add Patent</a></li>
					</ul>
				</li>
			
               
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

<form method="post" action="">
<div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
 
			
			    <select  class="form-control" placeholder="Type of conference" name="conference">
					<option value="">Select Conference</option>
					<option value="National">National</option>
					<option value="International">International</option>
				</select>
                <select  class="form-control" placeholder="Name of the agency" name="agency">
					<option value="">Select Agency</option>
					<option value="UGC">UGC</option>
					<option value="AICTE">AICTE</option>
					<option value="DST">DST</option>
					<option value="Others">Others</option>
				</select>
              
				  <input required type="text" class="form-control" placeholder="Title" name="title">
				   <select  class="form-control" placeholder="Role" name="role">
					<option value="">Select Role</option>
					<option value="Conducted">Conducted</option>
					<option value="Attended">Attended</option>
					
				</select>
			
			   <input required type="text"  class="form-control from-datepicker" placeholder="Start Date" name="cdate" >
			   <input required type="text" class="form-control from-datepicker" placeholder="End Date" name="todate" >
			   <input required type="text" class="form-control" placeholder="Days" name="days">
			   <input required type="text" class="form-control" placeholder="Place" name="place">
			    <TEXTAREA required type="text" class="form-control" placeholder="Additional Information" name="addInfo"></TEXTAREA>
				 <button type="submit" class="btn btn-success" name="Submit">Add</button>
			   
			   
			  
			  
			
		   
               
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