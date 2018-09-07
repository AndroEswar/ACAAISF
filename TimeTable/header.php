<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JNTUACEA</title>
    <link rel="icon" href="../images/favicon.png" sizes="16x16" type="image/png">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="print" href="../css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
  /*background-color: #DFE2DB;
    background-color: #FDF3E7;*/
    background-color: #F5F3EE;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}

.container .text-muted {
  margin: 20px 0;
}

.labelapply3{
    padding-top: 1px !important;
}

.doprint{
display: none;
}

@media print {
   .dontprint { display: none !important; }
   .doprint { display: block !important; }
}
</style>

  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top dontprint" style=" background-color: skyblue;">
      <div class="container">
        <div class="row" style=" padding-top:5px;">
          <div class="col-xs-12 col-sm-1" style="text-align:right;"><img src="../images/jntuaceatp.png" alt="JNTUA" width="90px" height="70px" />
          </div>
          <div class="col-xs-12 col-sm-7">
            <span style="font-size:1.3em; line-height:2em" class="text-primary">JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY ANANTAPUR</span><span style="font-size:1.2em;" class="text-primary"> &nbsp;</span><br /> <span style="font-size:1.2em;" class="text-primary">COLLEGE OF ENGINEERING <span style="font-family:'monotype corsiva'">(AUTONOMOUS)</span>, ANANTHAPURAMU.</span>
          </div>
          <div class="col-xs-12 col-sm-12" align="right">
				<div>
					<ul class="nav navbar-nav">
						<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="../TimeTable/index.php"><span class="glyphicon glyphicon-time"></span> Time Table</a></li>
						<li><a href="../StaffDetails/index.php"><span class="glyphicon glyphicon-user"></span> Staff Details</a></li> 
						<!--<li><a href="../AcademicCalender/index.php"><span class="glyphicon glyphicon-education"></span> Academic Calender</a></li> 
						<li><a href="../CollegeNoticeBoard/index.php"><span class="glyphicon glyphicon-zoom-in"></span> NoticeBoard</a></li> -->
						<li><a href="../StudentFeedback/index.php"><span class="glyphicon glyphicon-tint"></span>Student's Feedback</a></li> 
						<!--<li><a href="subject.allocation.php">Subject Allocation</a></li> 
						<li><a href="help.php">Help</a></li>-->
					</ul>
					<!--<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome admin</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
					</ul> -->
				</div>

		  
             <!--<span style="font-size:1.6em;" class="text-success"><br>Automation of College Academic Activities Including Student's Feedback</span> -->
          </div>
        </div>
      </div>
    </nav>
