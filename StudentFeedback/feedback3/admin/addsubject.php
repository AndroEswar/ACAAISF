<!-- Modal -->
<div id="addsubject" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Student</h4>
      </div>
      <div class="modal-body">
	    <form action="addsubject_action.php" method="post">
			
			<input type="text" name="subject_code" placeholder="Subject Code"  class="form-control"><br/>
			<input type="text" name="subject_description" placeholder="Subject Description" class="form-control"><br/>
		
			
      </div>
      <div class="modal-footer">
		<input type="submit" name="save" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
