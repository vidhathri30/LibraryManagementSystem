<?php
	$conn = new mysqli('localhost:3306', 'root', '', 'db_ls') or die(mysqli_error());
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}