<?php
	$hostname = 'localhost';
	$username = 'cs213user';
	$password = 'letmein';
	$dbname   = 'projectDB';

	$conn = mysqli_connect($hostname, $username, $password) OR die('Unable to connect to database! Please try again later.');
	mysqli_select_db($conn, $dbname);
?>