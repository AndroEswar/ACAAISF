<?php
   include('session.php');
?>
<?php
   
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
			echo "<img src='uploads/photo/".$q."/".$pt."' height='150' width='150'/>";
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

<script src='/google_analytics_auto.js'></script>




<script>
function showFacReport() {
	
	var facId=document.getElementById("facId").value;
	var fdate=document.getElementById("fdate").value;
	var tdate=document.getElementById("tdate").value;
	
    if (facId == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }else  if (fdate == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }else  if (tdate == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
	

	else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getfacultyidreport.php?facId="+facId+"&fdate="+fdate+"&tdate="+tdate,true);
        xmlhttp.send();
    }
}
</script>

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
               <li ><a href="adminhome.php">Home</a></li>
               <li><a href="admindept.php">Departments</a></li>
			    <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculty <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie"><a href="adminfaculty.php">Faculty</a></li>
					<li class="kopie"><a href="adminaddfaculty.php">AddFaculty</a></li>
					</ul>
				</li>
				<li class="dropdown active">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie"><a href="adminreports.php">All Reports </a></li>
					<li class="kopie"><a href="adminfacreport.php">Faculty Reports

</a></li>
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
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
 <form method="post" action="">
 
 <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>

   <input required type="text" class="form-control from-datepicker" placeholder="From Date" name="fdate" id="fdate">
				 <input required type="text" class="form-control from-datepicker" placeholder="To Date" name="tdate" id="tdate">
              
			   <input required type="text" class="form-control" placeholder="Faculty Id" name="facId" id="facId" onblur="showFacReport()">
					 
          
              

</form>
<br>



</div>
<div class="row">
 <div class="col-md-12  col-xs-12 ">
		<div id="txtHint" ></div>
			</div>            
  </div>
  </div>
  
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