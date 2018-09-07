<!-- Modal -->
<div id="addstudent" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Student</h4>
      </div>
      <div class="modal-body">
	    <form action="addstudent_action.php" method="post">
			<?php $sqls = mysql_query("select * from account where account_id='$session_id'");
				$row=mysql_fetch_array($sqls);?>
			<input type="text" name="lname" placeholder="Last Name"class="form-control"><br/>
			<input type="hidden" name="type" value="teacher">
			<input type="text" name="fname" placeholder="First Name"class="form-control"><br/>
			<input type="text" name="idnumber" placeholder="Idnumber"   class="form-control"><br/>
			<input type="text" name="section" placeholder="Section"   class="form-control"><br/>
			
			<label>Year</label>
			<select name="year" class="form-control"required>
					<option></option>
						<option>1st</option>
					<option>2nd</option>
					<option>3rd</option>
					<option>4th</option>
					
					
				</select>
				<label>Course</label>
			
				<select name="course" class="form-control" required>
					<option></option>
					<option>BSINFO</option>
					<option>BSIT</option>
					<option>BTTE</option>
					<option>BSIS</option>
					<option>MCA</option>
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
