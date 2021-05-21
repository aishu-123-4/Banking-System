<?php

	$conn = mysqli_connect('localhost','aishu123','ash2001*','bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>