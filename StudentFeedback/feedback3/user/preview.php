<?php 




?>

<?php include('head.php');?>
<?php if(isset($_POST['save'])){?>
<?php 
$idd=$_POST['id'];
$n = count($idd);
$subject = $_POST['subject'];
$sy = $_POST['school_year'];
$teacher = $_POST['teacher'];
$semester = $_POST['semester'];
include("../dbcon.php");
include("../dbcon.php");
$id = $_POST['ids'];
?>

 <div class="row row-centered">
<div class="" style="width:80%;margin:0 auto">
<div class="table-responsive" style="margin:0 auto;width:100%">
<form action="" method="post" style="margin:0 auto;width:100%">
<h2 style="text-align:center">Preview</h2>
<input type="hidden" value="<?php echo $subject?>" name="subject">
<input type="hidden" value="<?php echo $sy?>" name="school_year">
<input type="hidden" value="<?php echo $teacher?>" name="teacher">
<input type="hidden" value="<?php echo $semester?>" name="semester">
			<table class="table" style="margin:0 auto;" align="center" >
					<tr>
					<th >Description</th>
					<th style="text-align:center" style="width:40px;">Ratings</th>
						<?php for($i=0;$i<$n;$i++){
						$id_f = $idd[$i];
						$rating = $_POST['rating'.$id_f];
						?>
					</tr>
					<?php $sqlc = mysql_query("select * from evaluation_content where evaluation_content_id='$id_f'");?>
					<?php while($rowc = mysql_fetch_array($sqlc)){
					$idc = $rowc['evaluation_content_id'];?>
					<input type="hidden" value ="<?php echo $idc?>" name="id[]">
					<tr>
						<td><?php echo $rowc['Description'];?></td>
						<td style="text-align:center"><input type="text" value="<?php echo $rating?>" style="width:20%"  name="ratings[]"></td>
					</tr>
					<?php }
						}?>
						
					
						</table>
						
					<tr>
							<td>
								Comment Box: 
							</td>
							<td><textarea name="comment" class="form-control"><?php echo $_POST['comment'];?></textarea></td>
						</tr>
			
				
	
<?php } ?>
<br/>
		<input type="submit" name="saved" value="Submit" class="btn btn-primary">
			</form>
   	
  </div>
   </div>
</div>
<?php include('save.php');?>
