<?php

require_once('dbcon.php');

  
 session_start();

   if(isset($_POST['log'])) {
      $myusername = mysql_real_escape_string($_POST['idnumber']);
	
     
      $result = mysql_query("SELECT * FROM account WHERE idnumber = '$myusername'");
      $row = mysql_fetch_array($result);
      //$active = $row['active'];
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count != 0) {
        // session_register("myusername");
		
       $_SESSION['id']=$row['account_id'];
         
       header("location:user/index.php");
      }else {
        	echo "<script> $.notify({
	title: '<strong>Warning!</strong>',
	message: 'Your Id number is not found'
},{
	type: 'danger'
});</script>";
      }
   }


   if(isset($_POST['admin'])) {
      $myusername = mysql_real_escape_string($_POST['idnumber']);
	 $mypassword = mysql_real_escape_string($_POST['password']);
		
     
      $result = mysql_query("SELECT * FROM admin WHERE username = '$myusername' AND password='$mypassword'");
      $row = mysql_fetch_array($result);
      //$active = $row['active'];
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count != 0) {
        // session_register("myusername");
		
       $_SESSION['id']=$row['admin_id'];
         
       header("location:admin/index.php");
      }else {
        	echo "<script> $.notify({
	title: '<strong>Warning!</strong>',
	message: 'Your Id number is not found'
},{
	type: 'danger'
});</script>";
      }
   }
?>
