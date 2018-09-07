<style>
label{

color:#000000;
}
</style>
 <div class="modal fade" id="importstudent" role="dialog">

   <div class="modal-dialog" id="" style="width:40%">
			  <div class="modal-content">
						<div class="modal-header" style="">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body" >
							<form style=" color:white"class="form-horizontal" action="import_student.php" method="post" name="upload_excel" enctype="multipart/form-data">
				
							<label>CSV/Excel File:</label>
							<input type="hidden" value="<?php echo $tid?>" name="id">
							<input type="file" name="file" id="file" class="form-control input-large" required>
							<label>Course</label>
			<select name="course" class="form-control" required>
				<option></option>
				<option>BSINFO</option>
				<option>BSIT</option>
				<option>BSIS</option>
				<option>BTTE</option>
				
			</select>
			
			<label>Section</label>
			<select name="section" class="form-control" required>
				<option></option>
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
				<option>E</option>
				<option>F</option>
				<option>G</option>
				
			</select>
			
			<label>YEAR</label>
			<select name="year" class="form-control" required>
				<option></option>
				<option>1st</option>
				<option>2nd</option>
				<option>3rd</option>
				<option>4th</option>
				
			</select>
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

  


