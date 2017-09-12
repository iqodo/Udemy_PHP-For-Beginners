<?php

	$connection = mysqli_connect('localhost', 'root', '', 'udemy_loginapp');
		if( ! $connection) {
		die("Database connection failed");
	}
	
?>