<?php
   include("config.php");
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

<script src='/google_analytics_auto.js'></script></head>
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
  	border: 1px solid #999999;
  	float: left;
  	height: 27px;
  	overflow: hidden;
  	padding: 2px 1.8%;
  	width: 18%;
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

<body>




<h2>Faculty Details</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead" style="width:8%;"><strong>SNO</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">FacullyId</span></div>
<div class="rTableHead"><span style="font-weight: bold;">Name</span></div>
<div class="rTableHead"><span style="font-weight: bold;">Email</span></div>
<div class="rTableHead"><span style="font-weight: bold;">Mobile No</span></div>
<div class="rTableHead">Designation</div>



<?php
$q = intval($_GET['q']);
	$sql = "SELECT u.user_id as userId,u.faculty_code,u.user_type as userType,u.first_Name as firstName,u.last_Name as lastName,u.email_Id as emailId,u.mobile_No as mobileNo,u.userName as userName,u.dept_id as deptId,d.dept_Name as deptName FROM user_tl u,dept_tl d where u.dept_id=d.dept_id  and u.dept_id=$q";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 $sno=0;
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell' style='width:8%;'>".++$sno."</div>";
			echo "<div class='rTableCell'>".$row["faculty_code"]."</div>";
			echo "<div class='rTableCell'><a href='viewstaff.php?fid=".$row["userId"]."'>".$row["firstName"]." ".$row["lastName"]."</a></div>";
			echo "<div class='rTableCell'>".$row["emailId"]."</div>";
			echo "<div class='rTableCell'>".$row["mobileNo"]."</div>";
			echo "<div class='rTableCell'>".$row["userType"]."</div></div>";
			
		}
	}
	
	

?>



</div>
                
      


</body>
</html>