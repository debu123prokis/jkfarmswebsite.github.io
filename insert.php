<?php

	include "connection.php";

	$email=$_POST['email'];

	$query=mysqli_query($conn,"INSERT INTO `newsletter`(`email`) VALUES ('$email')");

	if($query){

		echo "";
	
	}else{
		
		echo "Error!!! ".die(mysqli_error());
	
	}

?>