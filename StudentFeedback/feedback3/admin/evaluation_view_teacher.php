<?php 
include("../dbcon.php");
$sy = $_POST['school_year'];

$sem = $_POST['semester'];



?>
<?php include('head.php');?>
<style>

.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}
</style>
<script>
$(function () {
        $("#preview").dialog({
            modal: true,
            autoOpen: false,
            title: "jQuery Dialog",
            width: 300,
            height: 150
        });
        $("#d").click(function () {
            $('#preview').dialog('open');
        });
    });
</script>

 <div class="row row-centered">
<div class="col-xs-6 col-centered" style="width:50%;margin:0 auto">
<div class="table-responsive">
<form action="" method="post">
<?php $id = $_POST['id']?>
			<table>
			<tr align="left">
				<td>Legend</td>
			</tr>
			<tr align="left">
				<td>5 - Outstanding (O)</td>
			</tr>
			<tr align="left">
				<td>4 - Very Satisfactory (VS)</td>
			</tr>
			<tr align="left">
				<td>3 - Satisfactory (S)</td>
			</tr>
			<tr align="left">
				<td>2 - Unsatifactory (US)</td>
			</tr>
			<tr align="left">
				<td>1 - Poor (P)</td>
			</tr>
			<tr align="left">
		
				<td><br/><a href="#" data-toggle="modal" data-target="#comment<?php echo $id?>" class="btn btn-primary"><span class="glyphicon glyphicon-list"></span> View Comments</a></td>
			</tr>
			
		</table>
			<?php include('modal_comment.php');?>
		<table style="float:right">
				<?php 
			$count =0;
			$te=0;
			$tes=0;
			$total=0;
			$ave=0;
			$s=0;
			
			$sql = mysql_query("select * from evaluationform");
			while($row = mysql_fetch_array($sql)){ $idr = $row['evaluate_id']; ?>
			<?php $sqlh = mysql_query("select * from evaluationheader where evaluate_id='$idr'");
			
			?>
				<?php while($rowh = mysql_fetch_array($sqlh)){
				$idh = $rowh['evaluateheader_id'];?>
				<?php $sqlc = mysql_query("select * from evaluation_content where evaluationheader_id='$idh'");?>
										<?php while($rowc = mysql_fetch_array($sqlc)){
										$idc = $rowc['evaluation_content_id'];
										$rw = mysql_num_rows($sqlc);
										$sqld = mysql_query("select * from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										$count = mysql_num_rows($sqld);
						$te=$rw;		
						}}}?>
				<tr>
	
					<td>
					<?php echo "Number of Respondent(s): ".$count?>
					</td>
				
				</tr>
				<tr>
	
					<td>
					<?php echo "Semester ".$sem?>
					</td>
				
				</tr>
				<tr>
	
					<td>
					<?php echo "School Year ".$sy?>
					</td>
				
				</tr>
				
				
				
		</table>
			<?php $sql = mysql_query("select * from evaluationform");
			while($row = mysql_fetch_array($sql)){
				$idr = $row['evaluate_id']; ?>
					<table class="table">
					<thead>
						<tr>
						<th><?php echo $row['evaluate_description'] ?></th>
										
						<th></th>
						</tr>
					</thead>
					<tbody>
				<?php $sqlh = mysql_query("select * from evaluationheader where evaluate_id='$idr'");?>
				<?php while($rowh = mysql_fetch_array($sqlh)){
				$idh = $rowh['evaluateheader_id'];?>
					
					
						<tr>
							<td>
								<table width="100%">
									<tr>
										<th  style="width:80%;"><?php echo $rowh['evaluateheader_description'];?></th>
										<th style="width:20%;">Ratings</th>
							
										
									</tr>
										<?php $sqlc = mysql_query("select * from evaluation_content where evaluationheader_id='$idh'");
										 $sqlc1 = mysql_query("select * from evaluation_content");
										 $d=mysql_num_rows($sqlc1);
										
									 while($rowc = mysql_fetch_array($sqlc)){
										$idc = $rowc['evaluation_content_id'];
										
										$sqld = mysql_query("select * from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										
										
										$count = mysql_num_rows($sqld);
										$tes=$count;										
										if($count<=0){
											$count = 0;
											
										$sqle = mysql_query("select sum(ratings) from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										
										$rowe = mysql_fetch_array($sqle);
										$s = mysql_num_rows($sqle);
										$rating = $rowe['sum(ratings)'];
										
										}else{
										$sqle = mysql_query("select sum(ratings) from teacher_evaluation_result where evaluation_content_id = '$idc' AND teacher_id='$id' AND school_year='$sy' 
										 AND semester='$sem'");
										$s = mysql_num_rows($sqle);
										$rowe = mysql_fetch_array($sqle);
										$rating = $rowe['sum(ratings)']/$count;
										}
										$total=$rating+$total;
										
										?>
										<input type="hidden" value ="<?php echo $idc?>" name="id[]">
									<tr>
										<td style="width:80%;"><?php echo $rowc['Description'];?></td>
										<td style="width:20%;"><?php echo $rating?></td>
										
									</tr>
									<?php }?>
								</table>
						
							
						</tr>
						
						
					<?php }?>
						
					</tbody>
					</table>
			
			<?php }?>
				<tr>
				<table>
				<?php echo "<b>Total Items Checked per column: </b>"?><?php echo "<b style='float:right'>".$d."</b>"?><br/>
				<?php echo "<b>Total points per column</b>"?><?php echo "<b style='float:right'>".$total."</b>"?><br/>
				<?php echo "<b>Average</b>"?><?php echo "<b style='float:right'>".round($total/$d,2,PHP_ROUND_HALF_UP)."</b>"?><br/>
				
		</form>
	
  </div>
   </div>
</div>
</div>

