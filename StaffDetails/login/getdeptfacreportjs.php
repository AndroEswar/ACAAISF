<?php
   include('session.php');
   
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Reports </title>
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

<body>







<?php
$d = intval($_GET['deptId']);

$fdate = strval($_GET['fdate']);
$tdate = strval($_GET['tdate']);

$sqll = "SELECT user_id, user_type, first_name, last_name, status, dept_id, faculty_code, email_id, username, password, mobile_no ,profileId, userId, qualification, exp, industry, teaching, research, type,photo FROM user_tl u,Profile p where u.user_id=p.userId and u.dept_Id=$d ";
    $rsl = mysqli_query($db,$sqll);
	 $countl = mysqli_num_rows($rsl);
	 
	
	 
	if ($countl > 0) {
		while($rowl = $rsl->fetch_assoc()) {
			$q=$rowl['user_id'];
			$pt=$rowl['photo'];
			
			
			
	
?>
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
  <h2>Profile</h2>
<div class="rTable">
<div class="rTableRow">
<img src='uploads/photo/<?php echo $q;?>/<?php echo $pt;?>' height='150px' width='120px'/>

</div>
<div class="rTableRow">
<div class="rTableHead"><strong>Name</strong></div>
<div class='rTableCell' style="width: 30%;"><?php echo $rowl['first_name']; echo "  ";  echo $rowl['last_name'];?></div>
</div>
<div class="rTableRow">
<div class="rTableHead"><strong>Designation</strong></div>
<div class='rTableCell' style="width: 30%;"><?php echo $rowl['user_type']; echo "  ";?></div>

</div>
<?php
echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>Qualification</div>";
			echo"<div class='rTableCell' style='width: 30%;'>".$rowl["qualification"]."</div>";
			echo "</div>";
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>Experience</div>";
			echo"<div class='rTableCell' style='width: 30%;'>".$rowl["exp"]."</div>";
			echo "</div>";
			
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>industry</div>";
			echo"<div class='rTableCell' style='width: 30%;'>".$rowl["industry"]."</div>";
			echo "</div>";
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>teaching</div>";
			echo"<div class='rTableCell' style='width: 30%;'>".$rowl["teaching"]."</div>";
			echo "</div>";
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>industry</div>";
			echo"<div class='rTableCell' style='width: 30%;'>".$rowl["industry"]."</div>";
			echo "</div>";
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>research</div>";
			echo"<div class='rTableCell' style='width: 30%;'>".$rowl["research"]."</div>";
			echo "</div>";
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
  
	$sql = "SELECT journalid, type, title, name, pdate, pageno, valume, isbn, issnno, userid FROM journaltl where userid=$q  and date(pdate)>=date'$fdate'";
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

                
	<?php }}
	?>


</body>
</html>