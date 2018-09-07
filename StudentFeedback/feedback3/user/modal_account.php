<!-- Modal -->
<div id="account" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Account</h4>
      </div>
      <div class="modal-body">
	    <form>
			<?php $sqls = mysql_query("select * from account where account_id='$session_id'");
				$row=mysql_fetch_array($sqls);?>
			  <?php if($row['account_type']=='student'){?>
			
			  
			<input type="text" name="lname" placeholder="Last Name"class="form-control"><br/>
			<input type="hidden" name="type" value="student">
			
			<input type="text" name="fname"  placeholder="Last Name"class="form-control"><br/>
			<label>Course</label>
			<select name="course" class="form-control">
				<option></option>
				<option>BSINFO</option>
				<option>BTTE</option>
				<option>BSIS</option>
				<option>BSIT</option>
			</select>
			<label>Year</label>
			<select name="year" class="form-control">
				<option></option>
				<option>1st</option>
				<option>2nd</option>
				<option>3rd</option>
				<option>4th</option>
			</select><br/>
			<input type="text" name="section"  placeholder="section" class="form-control"><br/>
			<input type="password" name="password"   class="form-control"><br/>
		<?php }else if($row['account_type']=='staff'){ ?>

		 	  
			<input type="text" name="lname" placeholder="Last Name"class="form-control"><br/>
			<input type="hidden" name="type" value="staff">
			<input type="text" name="fname" placeholder="First Name"class="form-control"><br/>
			
			<input type="password" name="password"   class="form-control"><br/>
		<?php }else { ?>
		  
			<input type="text" name="lname" placeholder="Last Name"class="form-control"><br/>
			<input type="hidden" name="type" value="teacher">
			<input type="text" name="fname" placeholder="First Name"class="form-control"><br/>
			
			<input type="password" name="password"   class="form-control"><br/>
		<?php }?>
      </div>
      <div class="modal-footer">
		<input type="submit" name="save" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>