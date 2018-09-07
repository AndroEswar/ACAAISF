<!-- Modal -->
<div id="addstaff" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Staff Form</h4>
      </div>
      <div class="modal-body">
	    <form action="addstaff_action.php" method="post">
			<?php $sqls = mysql_query("select * from account where account_id='$session_id'");
				$row=mysql_fetch_array($sqls);?>
			<input type="text" name="lname" placeholder="Last Name"class="form-control"><br/>
			<input type="hidden" name="type" value="teacher">
			<input type="text" name="fname" placeholder="First Name"class="form-control"><br/>
			<input type="text" name="idnumber" placeholder="Idnumber"   class="form-control"><br/>
      </div>
      <div class="modal-footer">
		<input type="submit" name="save" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
