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







<?php
$f = strval($_GET['facId']);
$q=0;
$name="";
 $sql = "SELECT user_type,user_id,status,u.first_Name as firstName,u.last_Name as lastName FROM User_tl u WHERE faculty_code ='$f'";
      
	   $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	
	 
    if ($count > 0) {
		if($row = $rs->fetch_assoc()){
		
      $q=$row['user_id'];
	  $name=$row['firstName'];
$fdate = strval($_GET['fdate']);
$tdate = strval($_GET['tdate']);
	
?>


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
   
	$sql = "SELECT confid, agencyname, title, cdate, role, days, todate, additionalinfo, type FROM conferencestl where userid=$q and date(cdate)>=date'$fdate' and date(todate)<=date'$tdate'";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	 
	 $sno=0;
	 
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			$sno=$sno+1;
			echo "<div class='rTableRow'>";
			echo"<div class='rTableCell'>".$sno."</div>";
			echo "<div class='rTableCell'>".$row["title"]."</div>";
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
  
	$sql = "SELECT researchid, spagency, title, worth, sandate, status, additionalinfo, userid FROM researchtl where userid=$q and date(sandate)>=date'$fdate' ";
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
 
	$sql = "SELECT workshopid, title, spagency, wdate, tdate, days, role, type, userid, additionalinfo FROM workshoptl where userid=$q  and date(wdate)>=date'$fdate' and date(tdate)<=date'$tdate'";
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
<form name="export_form" action="adminfacreport" method="post">
	    <input type="hidden" name="fid" value="<?php echo($q);?>"  />
		  <input type="hidden" name="name" value="<?php echo($name);?>"  />
      <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" /> 
    </form>


</div>
</div>
</div>
                
      <?php
	}}else
	{
	  ?>
	  <div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 "><font color="red"><strong align="center" >Invalid FacultyId</strong></font></div></div>

	   <?php
	
	}
	  ?>

</body>
</html>