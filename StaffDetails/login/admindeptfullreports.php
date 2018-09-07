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

<script src='/google_analytics_auto.js'></script>


<script>
function showDeptFac() {
	var deptId=document.getElementById("deptId").value;
	var fdate=document.getElementById("fdate").value;
	var tdate=document.getElementById("tdate").value;
	var type=document.getElementById("type").value;
	
    if (deptId == "") {
        document.getElementById("txtHintFac").innerHTML = "";
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
		if(type=="All")
		{
			xmlhttp.open("GET","getdeptfacreport.php?deptId="+deptId+"&fdate="+fdate+"&tdate="+tdate,true);
		}
		else if(type=="Conferences"){
			xmlhttp.open("GET","getdeptfacreportcf.php?deptId="+deptId+"&fdate="+fdate+"&tdate="+tdate,true);
		}
		else if(type=="Research Projects"){
			xmlhttp.open("GET","getdeptfacreportrp.php?deptId="+deptId+"&fdate="+fdate+"&tdate="+tdate,true);
		}
		else if(type=="Workshop"){
			xmlhttp.open("GET","getdeptfacreportws.php?deptId="+deptId+"&fdate="+fdate+"&tdate="+tdate,true);
		}
		else if(type=="Journals"){
			xmlhttp.open("GET","getdeptfacreportjs.php?deptId="+deptId+"&fdate="+fdate+"&tdate="+tdate,true);
		}
		else if(type=="Patents"){
			xmlhttp.open("GET","getdeptfacreportpt.php?deptId="+deptId+"&fdate="+fdate+"&tdate="+tdate,true);
		}
		
	
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
				  
					<li class="kopie"><a href="admindeptfullreports.php">All Reports </a></li>
						<li class="kopie"><a href="adminreports.php">Department Faculty Reports </a></li>
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
				 <input required type="text" class="form-control from-datepicker" placeholder="To Date" name="tdate" id="tdate" >
               <select onchange="showDeptFac()"  name="deptId" id="deptId" required class="form-control">
							<option value="">Select Department</option>
						
							<?php
	$sql = "SELECT dept_id,dept_name,dept_descr FROM dept_tl ";
    $rs = mysqli_query($db,$sql);
	 $count = mysqli_num_rows($rs);
	if ($count > 0) {
		while($row = $rs->fetch_assoc()) {
			
			echo "<option value='".$row["dept_id"]."'>".$row["dept_name"]."</option>";
		
			
		}
	}

?>
					   </select>
					   
					   
					   <select onchange="showDeptFac()"  name="type" id="type" required class="form-control">
							<option value="All">All</option>
							<option value="Conferences">Conferences</option>
							<option value="Research Projects">Research Projects</option>
							<option value="Workshop">Workshop</option>
							<option value="Journals">Journals</option>
							<option value="Patents">Patents</option>
							
						</select>

					   
              

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