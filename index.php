<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Application Catalog</title>
	<link rel="icon" type="image/x-icon" href="image/openit.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px;
		}
		td {
			max-width: 0;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}

		#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #e20026;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}

	</style>
</head>
<body onload="myFunction()" style="margin:0;">

	<div id="loader"></div>
	<h1 class="page-header text-center"><img src="logo.png" alt="logo" width="150" />Application Catalog <?php echo date("Y"); ?></h1>
	<div style="display:none;" id="myDiv" class="container animate-bottom">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> New</a>
				<!--<a href="print_pdf.php" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>-->
				<a href="exportexcel.php" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-download"></span> Excel Export</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Vendor</th>
						<th>License Manager</th>
						<th>OpeniT Support</th>
						<th>Other Notes</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM application";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo
								"<tr>
									<td>".$row['ID']."</td>
									<td>".$row['Name']."</td>
									<td>".$row['Vendor']."</td>
									<td>".$row['LicenseManager']."</td>
									<td>".$row['OpeniTSupport']."</td>
									<td>".$row['OtherNotes']."</td>
									<td>
										<a href='#view_".$row['ID']."' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-eye-open'></span></a>
										<a href='#edit_".$row['ID']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['ID']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
								include('view_edit_delete_modal.php');
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
</div>

<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 70);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});

</script>
</body>
<footer><div class="PP"><p>Edited By: Lemuel Enrico</p><p>Brought To You By:<a href="https://code-projects.org/"> code-projects.org</a></p></div></footer>
<style>
.PP{
	text-align: center;
}

.right {
	margin-left: auto;
	margin-right: 0;
}

#updatebtn {
	display: none;
}

</style>
</html>
