<?php
@session_start();
if(!empty($_SESSION['cert_user']) && !empty($_SESSION['priv']) && $_SESSION['priv']=="user"){
  unset($_SESSION['cert_user']);
  unset($_SESSION['priv']);
}

require('header.php');
 ?>
     <div class="container">
       <div class="row">
         <div class="col-md-2">&nbsp;
         </div>
           <div class="col-md-8">
		   
				<!--<center><h3>WELCOME TO STUDENT'S FEEDBACK</h3></center> -->
				
				<section class="jumbotron text-center">
					<div class="container">
						<h3 class="jumbotron-heading">WELCOME TO Student's Feedback</h3>
						<p class="lead text-muted">Select Type of User</p>
						<p>
							<a href="feedback3/index.php" class="btn btn-primary my-2">Login</a>
							<!--<a href="#" class="btn btn-secondary my-2">Admin</a>-->
						</p>
					</div>
				</section>
		   
               <!--<form class="form-signin" role="form" action="usercheck.php" method="post"><br/><br/>
                 <h3 class="form-signin-heading">Certificate Generator</h3><br/>
          				<div class="input-group">
          				  <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user text-primary"></i></span>
          				  <input type="text" class="form-control" placeholder="Username" name="user" required autofocus />
          				</div><br/>
          				<div class="input-group">
          				  <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
          				  <input type="password" class="form-control" placeholder="Password" name="pwd" required />
          				</div>
                 <br/>
                 <button class="btn btn-md btn-primary btn-block" type="submit">Log in</button>
               </form> -->
			   
			   
            </div>
          <div class="col-md-2">&nbsp;
          </div>
        </div>
      </div> <!-- /container -->
<?php
require('footer.php');

 ?>
