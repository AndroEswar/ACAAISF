<?php 
	include("../dbcon.php");
$id = $_GET['id'];




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
<form action="preview.php" method="post">
<?php $idg = $_GET['id']?>
		<input type="hidden" value="<?php echo $idg?>" name="ids">
		
		<table  align="center" style="text-align:center">
		<tr>
			<td colspan="4">Feedback System of</td>
		</tr>
		<tr>
			<td colspan="4"><b>JNTU ANANTHAPUR COLLEGE OF ENGINEERING</b></td>
		</tr>
		<tr>
			<td colspan="4">Anantapur City, Andhra Pradesh</td>
		</tr>
	
		<tr>
			<td colspan="4">	<br/><b>ANSWER SHEET</b></td>
		</tr>
		<tr>
			<td colspan="4">Faculty Performance Evaluation Instrument for students<br/></td>
		</tr>
		<tr>
			<td colspan="4"><br/></td>
		</tr>
		</table>
		<table class="table">
						<tr>
				<td>Faculty Name: </td>
				<td><?php $idt = $_GET['id'];
					$sqlt = mysql_query("select * from teacher where teacher_id ='$idt'");
					$rowt = mysql_fetch_array($sqlt);
					echo "<b> &nbsp;".$rowt['teacher_firstname']." ".$rowt['teacher_lastname']."</b>";
				?></td>
				<input type="hidden" value="<?php echo $idt?>" name="teacher">
				<td>Sem: </td>
				<td><select name="semester" required>
					<option></option>
					<option>1st</option>
					<option>2nd</option>
				</select></td>
			</tr>
			
			<tr>
				<td> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Subject: </td>
				<td>
					<select name="subject" required>
					<option></option>
					<?php
					$s = mysql_query('Select * from subject');
					while($r = mysql_fetch_array($s)){?>
					<option value="<?php echo $r['subject_id'];?>"><?php echo $r['subject_code']?></option>
					<?php } ?>
				</select>
				</td>
				<td>Sch Yr: </td>
				<td><select name="school_year" required>
					<option></option>
					<option>2015-2016</option>
					<option>2016-2017</option>
					<option>2017-2018</option>
					<option>2018-2019</option>
					<option>2019-2020</option>
					<option>2020-2021</option>
					<option>2021-2022</option>
					<option>2022-2023</option>
					
					
				</select></td>
			</tr>
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
								<table>
									<tr>
										<th style="width:80%;"><?php echo $rowh['evaluateheader_description'];?></th>
										<th style="width:40px;">P</th>
										<th style="width:40px;">U</th>
										<th style="width:40px;">S</th>
										<th style="width:40px;">VS</th>
										<th style="width:40px;">O</th>
										
									</tr>
										<?php $sqlc = mysql_query("select * from evaluation_content where evaluationheader_id='$idh'");?>
										<?php while($rowc = mysql_fetch_array($sqlc)){
										$idc = $rowc['evaluation_content_id'];?>
										<input type="hidden" value ="<?php echo $idc?>" name="id[]">
									<tr>
										<td><?php echo $rowc['Description'];?></td>
										<td><span>1</span><input type="radio" value="1" id="rating" class="radioBtnClass" name="rating<?php echo $idc?>" required></td>
										<td><span>2</span><input type="radio" value="2" id="rating" class="radioBtnClass"name="rating<?php echo $idc?>" required></td>
										<td><span>3</span><input type="radio" value="3" id="rating" class="radioBtnClass" name="rating<?php echo $idc?>" required></td>
										<td><span>4</span><input type="radio" value="4" id="rating" class="radioBtnClass"name="rating<?php echo $idc?>" required></td>
										<td><span>5</span><input type="radio" value="5" id="rating"  class="radioBtnClass"name="rating<?php echo $idc?>" required></td>
										
									</tr>
									<?php }?>
								
								</table>
							</td>
						</tr>
						
						
					<?php }?>
					
					</tbody>
					</table>
			
			<?php }?>
				<tr>
					<td>
						Comment Box: 
					</td>
					<td><textarea name="comment" class="form-control"></textarea></td>
					</tr>
					<tr>
					<br/>
						<td><input type="submit"  class="btn btn-primary" id="d"name = "save" value="Preview"></td>
					</tr>
			<table>
			
				
		</form>
	
  </div>
   </div>
</div>

