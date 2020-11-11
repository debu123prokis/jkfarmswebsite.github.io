<?php

	$server="localhost";
	$username="root";
	$password="";
	$database="jkfarmsdb";

	$conn=mysqli_connect($server,$username,$password,$database);

	if($conn){
		echo "";
	}else{
		echo "Error!!! ".die("Mysqli_error()");
	}

?>