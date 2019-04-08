<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "dktstore_mvc";
	$link = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($link,"UTF8");
 ?>