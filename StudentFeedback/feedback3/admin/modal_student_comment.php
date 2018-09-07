<!-- Modal -->
<div id="addstudent<?php echo $id?>" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Student</h4>
      </div>
      <div class="modal-body">
	    <form action="editstudent_action.php" method="post">
			<?php $sqls = mysql_query("select * from student where student_id='$id'");
				$row=mysql_fetch_array($sqls);?>
			<input type="text" name="lname" placeholder="Last Name" value="<?php echo $row['student_lastname']?>" class="form-control"><br/>
			<input type="hidden" name="type" value="student" >
			<input type="text" name="fname" placeholder="First Name" value="<?php echo $row['student_firstname']?>" class="form-control"><br/>
			<input type="text" name="idnumber" placeholder="Idnumber"  value="<?php echo $row['idnumber']?>"  class="form-control"><br/>
			<input type="text" name="section" placeholder="Section"  value="<?php echo $row['student_section']?>"  class="form-control"><br/>
			<input type="hidden" name="id" value="<?php echo $id?>">
			<label>Year</label>
			<select name="year" class="form-control"required>
					<option><?php echo $row['student_year']?></option>
						<option>1st</option>
					<option>2nd</option>
					<option>3rd</option>
					<option>4th</option>
					
					
				</select>
				<label>Course</label>
			
				<select name="course" class="form-control" required>
					<option><?php echo $row['student_course']?></option>
					<option>BSINFO</option>
					<option>BSIT</option>
					<option>BTTE</option>
					<option>BSIS</option>
				</select>
      </div>
      <div class="modal-footer">
		<input type="submit" name="save" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
