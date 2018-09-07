<?php include("header.php");?>
 <script>
 $(document).ready(function(){
	$(".c2").hide();
	$(".admin").click(function(){
	$(".c2").show();
		$(".c1").hide();
	});
	$(".user").click(function(){
	$(".c1").show();
		$(".c2").hide();
	});
	
 });
 </script>
<style>
#d{
width:82%;
margin:0 auto;
}
</style>
<?php include("login.php");?>
<div class="container">
	<section id="content" class="c1">
		<form action="" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="ID number" required="" name="idnumber" />
			</div>
			
			<div>
				<input type="submit" name="log" value="Log in" />
				<a href="#" class="admin">Admin Log in</a>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
	<section id="content" class="c2">
		<form action="" method="post">
			<h1>Admin Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="idnumber" />
			</div>
			<div>
				<input type="password" placeholder="password" required="" name="password" />
			</div>
			
			<div>
				<input type="submit" name="admin" value="Log in" />
				<a href="#" class="user">User</a>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
	</section>
	
</div><!-- container -->
