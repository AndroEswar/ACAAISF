<?php
   include('session.php');
   $msg="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $deptId = mysqli_real_escape_string($db,$_POST['deptId']);
      $desg = mysqli_real_escape_string($db,$_POST['desg']); 
	  $firstName = mysqli_real_escape_string($db,$_POST['firstName']); 
	  $lastName = mysqli_real_escape_string($db,$_POST['lastName']); 
	  $emailId = mysqli_real_escape_string($db,$_POST['emailId']); 
	  $mobileNo = mysqli_real_escape_string($db,$_POST['mobileNo']); 
	  $userName = mysqli_real_escape_string($db,$_POST['userName']); 
	  $facultyId = mysqli_real_escape_string($db,$_POST['facultlyId']); 
      $password=substr($userName,3)."".substr($mobileNo,3);
      $sql = "insert into user_tl(dept_id,user_type,first_Name,last_Name,email_Id,mobile_No,userName,password,status,faculty_code)values($deptId,'$desg','$firstName','$lastName','$emailId','$mobileNo','$userName','$password','Active','$facultyId')";
	
      $result = mysqli_query($db,$sql);
      
		
      if($result == TRUE) {
         
		 try {
				require("class.phpmailer.php");
				require("class.smtp.php");
				$mail = new PHPMailer(); // create a new object
				$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 465; // or 587
				$mail->IsHTML(true);
				$mail->Username = "jntuaceadatabase@gmail.com";
				$mail->Password = "THELEADER";
				$mail->SetFrom("jntuaceadatabase@gmail.com");
				$mail->Subject = "Regarding userName/password for Faculty Activities Information System";
				$mail->Body = "Dear sir/Madama /n your userName is ".$userName." and password is".$password."";
				$mail->AddAddress($emailId);
				$mail->Send();
		 }catch(Exception $e) {}

        $msg = "Staff Details are successfully  inserted";
        
      }else {
         $msg = "Not inserted";
      }
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Add Faculty </title>
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
            <div class="navbar-collapse  collapse" >
              <ul class="nav navbar-nav navbar-right">
               <li ><a href="adminhome.php">Home</a></li>
               <li><a href="admindept.php">Departments</a></li>
			    <li class="dropdown" class="active">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculty <b class="caret"></b></a> 
				  <ul class="dropdown-menu active">
					<li class="kopie" ><a href="adminfaculty.php">Faculty</a></li>
					<li class="kopie" class="active"><a href="adminaddfaculty.php">AddFaculty</a></li>
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
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $msg; ?></div>
 
			<!-- row  -->
			   <div class="row">
				
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-3 control-label-left"><font color="red">*&nbsp;</font>Dept&nbsp;Name</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <select type="text" class="form-control" name="deptId" id="deptId" required>
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

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   
			   <!-- row  -->
			   <div class="row">
				
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-3 control-label-left"><font color="red">*&nbsp;</font>Designation</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <select type="text" class="form-control" name="desg" id="desg" required>
							<option value="">Select Designation</option>
							
							<option value="Professor">Professor</option>
							<option value="Associate Professor">Associate Professor</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Lecturer">Lecturer</option>
							
					   </select>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   <!-- row  -->
			   <div class="row">
			  
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-1 control-label-left"><font color="red">*&nbsp;</font>Faculty&nbsp;Id</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <input type="text" class="form-control" name="facultlyId" id="facultlyId" required>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			<!-- row  -->
			   <div class="row">
			  
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-1 control-label-left"><font color="red">*&nbsp;</font>First&nbsp;Name</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <input type="text" class="form-control" name="firstName" id="firstName" required>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   
			   <!-- row  -->
			   <div class="row">
			
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-1 control-label-left"><font color="red">*&nbsp;</font>Last&nbsp;Name</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <input type="text" class="form-control" name="lastName" id="lastName" required>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   
			   <!-- row  -->
			   <div class="row">
			  
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-1 control-label-left"><font color="red">*&nbsp;</font>MobileNo</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <input type="text" class="form-control" name="mobileNo" id="mobileNo" required>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   
			   <!-- row  -->
			   <div class="row">
			 
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-1 control-label-left"><font color="red">*&nbsp;</font>EmailId</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <input type="text" class="form-control" name="emailId" id="emailId" required>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   
			   <!-- row  -->
			   <div class="row">
			 
			   <div class="col-xs-3 col-md-3" align="right">
				<label for="concept" class="col-xs-4 col-md-1 control-label-left"><font color="red">*&nbsp;</font>UserName</label>
			   </div>
			   <div class="col-xs-5 col-md-6">
					<div class="form-group">
					   <input type="text" class="form-control" name="userName" id="userName" required>

					 </div>
									  
				</div>
								
			   </div>
			   <!-- end row -->
			   
			   <!-- row  -->
		   <div class="row">
		  
		   <div class="col-xs-4 col-md-3"></div>
		   
		   <div class="col-xs-6 col-md-6">
				<div class="form-group">
				
		<input type="submit"  class="btn btn-success " value="Submit">
		
				   
				 </div>
								  
			</div>
							
		   </div>
		   <!-- end row -->
 </form>

                
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