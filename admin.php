<?php 
	//start sesion
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "application/model.php";
	//load file controller
	include "application/controller.php";
	//kiem tra, neu user chua dang nhap thi yeu cau dang nhap
	if(isset($_SESSION["c_username"]) == false)
		include "controller/backend/controller_login.php";
	else{
		$c = isset($_GET["controller"])?$_GET["controller"]:"";
		$controller = "controller/backend/controller_$c.php";
		include "view/backend/view_layout.php";
	}		
 ?>