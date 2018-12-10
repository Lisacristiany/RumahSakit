<?php

	$server="localhost";
	$username="root";
	$password="";
	$db="mahasiswa";

	$conn= new mysqli($server,$username,$password,$db);
	if($conn->connect_error)
	{
		die("connection failed: " . $conn->connection_error);
	}