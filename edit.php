<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['Name'];
		$vendor = $_POST['Vendor'];
		$licensemanager = $_POST['LicenseManager'];
		$openitsupport = $_POST['OpeniTSupport'];
		$othernotes = $_POST['OtherNotes'];
	//	$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
		$sql = "UPDATE application SET Name = '$name', Vendor = '$vendor', LicenseManager = '$licensemanager', OpeniTSupport = '$openitsupport', OtherNotes = '$othernotes' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////

		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>