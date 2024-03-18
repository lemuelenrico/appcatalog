<!-- View -->
<div class="modal fade" id="view_<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">View Application</h4></center>
            </div>
            <div class="modal-body">

			<div class="container-fluid">
      <!--<div align="right"><button type="button" onclick="showedit()" class="btn btn-success btn-sm"><span class="glyphicon"></span>Edit</button></div>-->
    </br>
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['ID']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Vendor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Vendor" value="<?php echo $row['Vendor']; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">License Manager:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="LicenseManager" value="<?php echo $row['LicenseManager']; ?>" readonly>
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Open iT Support:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="OpeniTSupport" value="<?php echo $row['OpeniTSupport']; ?>" readonly>
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Other Notes:</label>
					</div>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" name="OpeniTSupport" value="<?php echo $row['OpeniTSupport']; ?>">-->
            <textarea class="form-control" style="text-indent:0px;" name="OtherNotes" rows="4" cols="50" readonly>
              <?php echo $row['OtherNotes']; ?>
            </textarea>
          </div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button id="updatebtn" type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Application</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['ID']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Vendor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Vendor" value="<?php echo $row['Vendor']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">License Manager:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="LicenseManager" value="<?php echo $row['LicenseManager']; ?>">
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Open iT Support:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="OpeniTSupport" value="<?php echo $row['OpeniTSupport']; ?>">
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Other Notes:</label>
					</div>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" name="OpeniTSupport" value="<?php echo $row['OpeniTSupport']; ?>">-->
            <textarea class="form-control" style="text-indent:0px;" name="OtherNotes" rows="4" cols="50">
              <?php echo $row['OtherNotes']; ?>
            </textarea>
          </div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Application</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['Name']; ?>?</h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
