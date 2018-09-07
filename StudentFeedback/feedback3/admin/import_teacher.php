<?php
include('../dbcon.php');
		
		$filename=$_FILES["file"]["tmp_name"];
	
		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
	              $sql = "INSERT into teacher (teacher_lastname,teacher_firstname,idnumber) 
	            	values('$emapData[0]','$emapData[1]','$emapData[2]')";
					mysql_query("insert into account(idnumber) values('$emapData[2]')");
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysql_query( $sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"import_index.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
							
						window.location = \"teacher_category.php\"
					</script>";
	        
			 

			 //close of connection
		
				
		 	
			
		 }
?>