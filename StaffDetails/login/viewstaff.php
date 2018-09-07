<?php
   include("config.php");
   $name="profile";
   ?>
   <?php    


if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit_docs']) { // word output

$name=strval($_POST['name']);

  header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=$name.doc");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  
   

?>

<?php
   include("config.php");
   $name="profile";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	
</head>

<body>

<table >
	<tr>
		<td>
		<img src="images/jntua.png" alt="JNTUA" width="60px" height="70px" /> </td><td align="center"><h1>J.N.T.U.A.College of Engineering, Anantapuramu-515002<br> University Faculty Activities Information System</h1>
		</td>
	</tr>
</table>






<table >
<tr>
<td width="30%">
  <?php
  
	$q = intval($_POST['fid']);
$sql = "select photo from profile where userId=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			$pt=$row["photo"];
			echo "<img src='http://localhost/TEJA/jntufaculty/uploads/photo/".$q."/".$pt."' height='150' width='150'/>";
		}
	}

  ?>
  </td>
  <td>
 <table >


<?php

	$sql = "SELECT u.user_id as userId,u.faculty_code,u.user_type as userType,u.first_Name as firstName,u.last_Name as lastName,u.email_Id as emailId,u.mobile_No as mobileNo,u.userName as userName,u.dept_id as deptId,d.dept_Name as deptName FROM user_tl u,dept_tl d where u.dept_id=d.dept_id  and u.user_id=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 $sno=0;
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			 $name=$row["firstName"];
			
			echo "<tr><td><strong>Name</strong><td><td>".$row["firstName"]."".$row["lastName"]."</td></tr>";
			echo "<tr><td><strong>Dept Name</strong></td><td>  ".$row["deptName"]."</td></tr>";
			echo "<tr><td><strong>Email</strong></td><td>  ".$row["emailId"]."</td></tr>";
			echo "<tr><td><strong>MobileNo </strong></td><td> ".$row["mobileNo"]."</td></tr>";
			echo "<tr><td><strong>Designation </strong></td><td> ".$row["userType"]."</td></tr>";
			
		}
	}
	
	$sql = "select profileId, userId, qualification, exp, industry, teaching, research, type from profile where userId=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	if ($count > 0) {
		if($row = $rs->fetch_assoc()) {
			
		
		
			echo "<tr><td><strong>Qualification</strong></td><td> ".$row["qualification"]."</td></tr>";
			echo "<tr><td><strong>Total Exp</strong></td><td>  ".$row["exp"]."</td></tr>";
			echo "<tr><td><strong>Industry </strong></td><td> ".$row["industry"]."</td></tr>";
			echo "<tr><td><strong>Teaching </strong></td><td> ".$row["teaching"]."</td></tr>";
				echo "<tr><td><strong>research </strong></td><td> ".$row["research"]."</td></tr>";
			
		}
	}
	
	
	

?>
</table>
</td>
</tr>
</table>



  <h2>Conferences</h2>
<table border="1">
<tr>
<th><strong>SNO</strong></th>
<th><strong>Title</strong></th>
<th><strong>Agency</strong></th>
<th><strong>Conference Type</strong></th>
<th><strong>Role</strong></th>

<th><strong>Start Date</strong></th>
<th><strong>End Date</strong></th>
<th><strong>No Days</strong></th>
<th><strong>Additional Info</strong></th>
<th><strong>Place</strong></th>

</tr>

<?php
   
	$sql = "SELECT confid, agencyname, title, cdate, role, days, todate, additionalinfo, type ,place FROM conferencestl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			$cfid=$row["confid"];
			echo "<tr>";
			echo"<td>".$sno."</td>";
			echo "<td>".$row["title"]."</td>";
			echo "<td>".$row["agencyname"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "<td>".$row["role"]."</td>";
			echo "<td >".$row["cdate"]."</td>";
			echo "<td>".$row["todate"]."</td>";
			echo "<td>".$row["days"]."</td>";
			echo "<td>".$row["additionalinfo"]."</td>";
			echo "<td>".$row["place"]."</td>";
			
			echo"</tr>";
			
		}
	}

?>



</table>
                
        
           

  <h2>Research Projects</h2>
<table border="1">
<tr>
<th><strong>SNO</strong></th>
<th><strong>Title</strong></th>
<th><strong>Agency</strong></th>
<th><strong>Status</strong></th>
<th><strong>Price</strong></th>

<th><strong>SanctionDate</strong></th>

<th><strong>Additional Info</strong></th>

</tr>

<?php
  
	$sql = "SELECT researchid, spagency, title, worth, sandate, status, additionalinfo, userid  FROM researchtl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<tr>";
			echo"<td>".$sno."</td>";
			echo "<td>".$row["title"]."</td>";
			echo "<td>".$row["spagency"]."</td>";
			echo "<td>".$row["status"]."</td>";
			echo "<td>".$row["worth"]."</td>";
			echo "<td>".$row["sandate"]."</td>";
			
			echo "<td>".$row["additionalinfo"]."</td>";
			
			echo"</tr>";
			
		}
	}

?>



</table>
                
    
  <h2>Workshop</h2>
<table border="1">
<tr>
<th><strong>SNO</strong></th>
<th><strong>Title</strong></th>
<th><strong>Agency</strong></th>
<th><strong>Workshop Type</strong></th>
<th><strong>Role</strong></th>

<th><strong>Start Date</strong></th>
<th><strong>End Date</strong></th>
<th><strong>No Days</strong></th>
<th><strong>Additional Info</strong></th>
<th><strong>Place</strong></th>

</tr>

<?php
 
	$sql = "SELECT workshopid, title, spagency, wdate, tdate, days, role, type, userid, additionalinfo, place FROM workshoptl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<tr>";
			echo"<td>".$sno."</td>";
			echo "<td>".$row["title"]."</td>";
			echo "<td>".$row["spagency"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "<td>".$row["role"]."</td>";
			echo "<td>".$row["wdate"]."</td>";
			echo "<td>".$row["tdate"]."</td>";
			echo "<td>".$row["days"]."</td>";
			echo "<td>".$row["additionalinfo"]."</td>";
			echo "<td>".$row["place"]."</td>";
			
			echo"</tr>";
			
		}
	}

?>



</table>
                
       
  <h2>Journals</h2>
<table border="1">
<tr>
<th><strong>SNO</strong></th>
<th><strong>Title of The Publication</strong></th>
<th><strong>Type of Journal</strong></th>
<th><strong>Name of Journal</strong></th>
<th><strong>ISBN</strong></th>
<th><strong>ISSNO</strong></th>
<th><strong>Published Date</strong></th>
<th><strong>Volume</strong></th>
<th><strong>PageNo</strong></th>


</tr>

<?php
  
	$sql = "SELECT journalid, type, title, name, pdate, pageno, valume, isbn, issnno, userid FROM journaltl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<tr>";
			echo"<td>".$sno."</td>";
			echo "<td>".$row["title"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["isbn"]."</td>";
			echo "<td>".$row["issnno"]."</td>";
			echo "<td>".$row["pdate"]."</td>";
			echo "<td>".$row["valume"]."</td>";
			echo "<td>".$row["pageno"]."</td>";
			
			echo"</tr>";
			
		}
	}

?>



</table>
                
       
  <h2>Patents</h2>
<table border="1">
<tr>
<th><strong>SNO</strong></th>
<th><strong>Title of Patent</strong></th>
<th><strong>Issuing Authority</strong></th>
<th><strong>Patent No</strong></th>
<th><strong>Valid Period</strong></th>

</tr>

<?php
  
	$sql = "SELECT pentid, title, issauth, patentno, validperiod, userid FROM patenttl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<tr>";
			echo"<td>".$sno."</td>";
			echo "<td>".$row["title"]."</td>";
			echo "<td>".$row["issauth"]."</td>";
			echo "<td>".$row["patentno"]."</td>";
			echo "<td>".$row["validperiod"]."</td>";
			
			
			echo"</tr>";
			
		}
	}

?>

</table>




</body>
</html>

 

 <?php

  exit; // end of word output

}
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty </title>
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
  	width: 20%;
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
  
	$q = intval($_GET['fid']);
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
  <h2>Conferences</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead"><strong>SNO</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Title</span></div>
<div class="rTableHead">Agency</div>
<div class="rTableHead">Conference Type</div>
<div class="rTableHead">Role</div>
<!--
<div class="rTableHead">Start Date</div>
<div class="rTableHead">End Date</div>
<div class="rTableHead">No Days</div>
<div class="rTableHead">Additional Info</div>
-->
</div>

<?php
   
	$sql = "SELECT confid, agencyname, title, cdate, role, days, todate, additionalinfo, type FROM conferencestl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			$cfid=$row["confid"];
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>".$sno."</div>";
			echo "<div class='rTableCell'><a href='vieconf.php?cid=$cfid'>".$row["title"]."</a></div>";
			echo "<div class='rTableCell'>".$row["agencyname"]."</div>";
			echo "<div class='rTableCell'>".$row["type"]."</div>";
			echo "<div class='rTableCell'>".$row["role"]."</div>";
			/*echo "<div class='rTableCell'>".$row["cdate"]."</div>";
			echo "<div class='rTableCell'>".$row["todate"]."</div>";
			echo "<div class='rTableCell'>".$row["days"]."</div>";
			echo "<div class='rTableCell'>".$row["additionalinfo"]."</div>";*/
			
			echo"</div>";
			
		}
	}

?>



</div>
                
        </div>
  
</div>
           
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h2>Research Projects</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead"><strong>SNO</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Title</span></div>
<div class="rTableHead">Agency</div>
<div class="rTableHead">Status</div>
<div class="rTableHead">Price</div>
<!--
<div class="rTableHead">Start Date</div>
<div class="rTableHead">End Date</div>
<div class="rTableHead">No Days</div>
<div class="rTableHead">Additional Info</div>
-->
</div>

<?php
  
	$sql = "SELECT researchid, spagency, title, worth, sandate, status, additionalinfo, userid FROM researchtl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>".$sno."</div>";
			echo "<div class='rTableCell'>".$row["title"]."</div>";
			echo "<div class='rTableCell'>".$row["spagency"]."</div>";
			echo "<div class='rTableCell'>".$row["status"]."</div>";
			echo "<div class='rTableCell'>".$row["worth"]."</div>";
			/*echo "<div class='rTableCell'>".$row["cdate"]."</div>";
			echo "<div class='rTableCell'>".$row["todate"]."</div>";
			echo "<div class='rTableCell'>".$row["days"]."</div>";
			echo "<div class='rTableCell'>".$row["additionalinfo"]."</div>";*/
			
			echo"</div>";
			
		}
	}

?>



</div>
                
        </div>
  
</div>		   
      <div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h2>Workshop</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead"><strong>SNO</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Title</span></div>
<div class="rTableHead">Agency</div>
<div class="rTableHead">Workshop Type</div>
<div class="rTableHead">Role</div>
<!--
<div class="rTableHead">Start Date</div>
<div class="rTableHead">End Date</div>
<div class="rTableHead">No Days</div>
<div class="rTableHead">Additional Info</div>
-->
</div>

<?php
 
	$sql = "SELECT workshopid, title, spagency, wdate, tdate, days, role, type, userid, additionalinfo FROM workshoptl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>".$sno."</div>";
			echo "<div class='rTableCell'>".$row["title"]."</div>";
			echo "<div class='rTableCell'>".$row["spagency"]."</div>";
			echo "<div class='rTableCell'>".$row["type"]."</div>";
			echo "<div class='rTableCell'>".$row["role"]."</div>";
			/*echo "<div class='rTableCell'>".$row["cdate"]."</div>";
			echo "<div class='rTableCell'>".$row["todate"]."</div>";
			echo "<div class='rTableCell'>".$row["days"]."</div>";
			echo "<div class='rTableCell'>".$row["additionalinfo"]."</div>";*/
			
			echo"</div>";
			
		}
	}

?>



</div>
                
        </div>
  
</div>

<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h2>Journals</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead"><strong>SNO</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Title of The Publication</span></div>
<div class="rTableHead">Type of Journal</div>
<div class="rTableHead">Name of Journal</div>
<div class="rTableHead">ISBN</div>
<!--
<div class="rTableHead">Start Date</div>
<div class="rTableHead">End Date</div>
<div class="rTableHead">No Days</div>
<div class="rTableHead">Additional Info</div>
-->
</div>

<?php
  
	$sql = "SELECT journalid, type, title, name, pdate, pageno, valume, isbn, issnno, userid FROM journaltl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>".$sno."</div>";
			echo "<div class='rTableCell'>".$row["title"]."</div>";
			echo "<div class='rTableCell'>".$row["type"]."</div>";
			echo "<div class='rTableCell'>".$row["name"]."</div>";
			echo "<div class='rTableCell'>".$row["isbn"]."</div>";
			/*echo "<div class='rTableCell'>".$row["cdate"]."</div>";
			echo "<div class='rTableCell'>".$row["todate"]."</div>";
			echo "<div class='rTableCell'>".$row["days"]."</div>";
			echo "<div class='rTableCell'>".$row["additionalinfo"]."</div>";*/
			
			echo"</div>";
			
		}
	}

?>



</div>
                
        </div>
  
</div>
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h2>Patents</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead"><strong>SNO</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Title of Patent</span></div>
<div class="rTableHead">Issuing Authority</div>
<div class="rTableHead">Patent No</div>
<div class="rTableHead">Valid Period</div>
<!--
<div class="rTableHead">Start Date</div>
<div class="rTableHead">End Date</div>
<div class="rTableHead">No Days</div>
<div class="rTableHead">Additional Info</div>
-->
</div>

<?php
  
	$sql = "SELECT pentid, title, issauth, patentno, validperiod, userid FROM patenttl where userid=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>".$sno."</div>";
			echo "<div class='rTableCell'>".$row["title"]."</div>";
			echo "<div class='rTableCell'>".$row["issauth"]."</div>";
			echo "<div class='rTableCell'>".$row["patentno"]."</div>";
			echo "<div class='rTableCell'>".$row["validperiod"]."</div>";
			/*echo "<div class='rTableCell'>".$row["cdate"]."</div>";
			echo "<div class='rTableCell'>".$row["todate"]."</div>";
			echo "<div class='rTableCell'>".$row["days"]."</div>";
			echo "<div class='rTableCell'>".$row["additionalinfo"]."</div>";*/
			
			echo"</div>";
			
		}
	}

?>

<form name="export_form" action="<?php echo($_SERVER['PHP_SELF']);?>" method="post">
	    <input type="hidden" name="fid" value="<?php echo($_GET['fid']);?>"  />
		  <input type="hidden" name="name" value="<?php echo($name);?>"  />
      <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" /> 
    </form>

</div>
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

 