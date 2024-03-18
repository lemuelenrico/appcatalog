<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$name = $_POST['Name'];
		$vendor = $_POST['Vendor'];
		$licensemanager = $_POST['LicenseManager'];
		$openitsupport = $_POST['OpeniTSupport'];
		$othernotes = $_POST['OtherNotes'];
		$sql = "INSERT INTO application (Name, Vendor, LicenseManager, OpeniTSupport, OtherNotes) VALUES ('$name', '$vendor', '$licensemanager','$openitsupport','$othernotes')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////

		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>
