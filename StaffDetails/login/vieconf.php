<?php
   include("config.php");
   $name="profile";
   ?>
     
<!DOCTYPE html>
<html lang="en">
<head>
<title>FacultyConferences </title>
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

<style>
	.rTable {
  	display: block;
  	width: 100%;
}
.rTableHeading, .rTableBody, .rTableFoot, .rTableRow{
  	clear: both;
}
.rTableHead, .rTableFoot{
  	background-color: #DDD;
  	font-weight: bold;
}
.rTableCell, .rTableHead {
  	border: 0px solid #999999;
  	float: left;
  	height: 27px;
  	overflow: hidden;
  	padding: 2px 1.8%;
  	width: 25%;
}
.rTable:after {
  	visibility: hidden;
  	display: block;
  	font-size: 0;
  	content: " ";
  	clear: both;
  	height: 0;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>
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
            <div class="navbar-collapse  collapse" >
              <ul class="nav navbar-nav navbar-right">
               <li ><a href="index.php">Home</a></li>
                <li><a href="http://jntua.ac.in/aboutus.php" target="blank">About JNTU</a></li>
                <li class="active"><a href="staff.php">Faculty</a></li>         
               
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->








<div class="container">
<div class="spacer">
<div class="row ">
  <div class="col-lg-1 col-lg-offset-1 col-sm-1 col-sm-offset-1 col-xs-1 ">
  <?php
  $c = intval($_GET['cid']);
  $sql = "SELECT userId FROM conferencestl where confid=$c";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 $q=0;
	 $sno=0;
	 
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
	$q = $row['userId'];
		}
	}
$sql = "select photo from profile where userId=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			$pt=$row["photo"];
			echo "<img src='uploads/photo/".$q."/".$pt."' height='150px' width='120px'/>";
		}
	}

  ?>
  </div>
    <div class="col-xs-6 ">
<div class="row register">
  <div class="col-lg-12 col-lg-offset-12 col-sm-12 col-sm-offset-2 col-xs-12 ">
<div class="rTable">


<?php

	$sql = "SELECT u.user_id as userId,u.faculty_code,u.user_type as userType,u.first_Name as firstName,u.last_Name as lastName,u.email_Id as emailId,u.mobile_No as mobileNo,u.userName as userName,u.dept_id as deptId,d.dept_Name as deptName FROM user_tl u,dept_tl d where u.dept_id=d.dept_id  and u.user_id=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 $sno=0;
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			 $name=$row["firstName"];
			
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Name</strong></div><div class='rTableCell'> ".$row["firstName"]." ".$row["lastName"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Dept Name</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["deptName"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Email</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["emailId"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>MobileNo </strong></div><div class='rTableCell'> ".$row["mobileNo"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Designation </strong></div><div class='rTableCell'> ".$row["userType"]."</div></div>";
			
		}
	}
	
	$sql = "select profileId, userId, qualification, exp, industry, teaching, research, type from profile where userId=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			
		
		
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Qualification</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["qualification"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Total Exp</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["exp"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Industry </strong></div><div class='rTableCell'> ".$row["industry"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Teaching </strong></div><div class='rTableCell'> ".$row["teaching"]."</div></div>";
				echo "<div class='rTableRow'><div class='rTableHead'><strong>research </strong></div><div class='rTableCell'> ".$row["research"]."</div></div>";
			
		}
	}
	
	
	

?>
</div>
</div>
</div>
</div>
</div>

<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h2>Conference</h2>


<?php
   
	$sql = "SELECT confid, agencyname, title, cdate, role, days, todate, additionalinfo, type ,place FROM conferencestl where confid=$c";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			
			echo "<div class='rTableRow'><div class='rTableHead'><strong>AgencyName</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["agencyname"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Title</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["title"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Role</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["role"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Place</strong></div><div class='rTableCell' style='width: 60%'>  ".$row["place"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Start Date</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["cdate"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>End Date</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["todate"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Days</strong></div><div class='rTableCell' style='width: 50%'>  ".$row["days"]."</div></div>";
			echo "<div class='rTableRow'><div class='rTableHead'><strong>Additionalinfo</strong></div><div class='rTableCell' style='width: 70%'>  ".$row["additionalinfo"]."</div></div>";
			
		}
	}

?>




                
        </div>
  
</div>
           

</div>
  
  
</div>

</div>
</div>




<div class="footer" >

<div class="container" style=" background-color: skyblue; ">



<div class="row" style=" background-color: skyblue; ">
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

 