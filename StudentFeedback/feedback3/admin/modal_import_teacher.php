<style>
label{

color:#000000;
}
</style>
 <div class="modal fade" id="importteacher" role="dialog">

   <div class="modal-dialog" id="" style="width:40%">
			  <div class="modal-content">
						<div class="modal-header" style="">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body" >
							<form style=" color:white"class="form-horizontal" action="import_teacher.php" method="post" name="upload_excel" enctype="multipart/form-data">
				
							<label>CSV/Excel File:</label>
							<input type="hidden" value="<?php echo $tid?>" name="id">
							<input type="file" name="file" id="file" class="form-control input-large" required>
							<label>Course</label>
		
							<br/>
							<button type="submit" style="margin:0 auto"id="submit"  name="Import" class="form-control btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							
				</form>
					   </div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
			  </div>
    </div>
  </div>

  


