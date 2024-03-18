<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Application</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" autocomplete="off">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Vendor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Vendor">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">License Manager:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="LicenseManager">
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">OpeniT Support:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="OpeniTSupport">
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Other Notes:</label>
					</div>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" name="OtherNotes" required>-->
            <textarea class="form-control" style="text-indent:0px;" name="OtherNotes" rows="4" cols="50">
            </textarea>
					</div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
