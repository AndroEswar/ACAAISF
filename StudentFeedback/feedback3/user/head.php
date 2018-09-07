<?php include('../header.php');?>
<?php include('../session.php');?>
<?php include('../dbcon.php');?>	
<div class="bs-example">
  <nav class="navbar navbar-inverse">
     <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">HOME</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Category<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="teacher_category.php">Teacher</a></li>
					
					  <li><a href="staff.php">Staff</a></li>
					  <li><a href="class.php">Class</a></li>
					</ul>
				  </li>
				  <li class="dropdown"><a class="dropdown-toggle" href="facilities.php" href="#"><span class="glyphicon glyphicon-list"></span>&nbsp;Facilities</a>
				</li>
              
            </ul>
			
			
			<ul class="nav navbar-nav navbar-right">
			 <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
        </div>
    </nav>
	<?php include("modal_account.php");?>
</div>
