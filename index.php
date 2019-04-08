<?php 
	ob_start();
	//start sesion
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "application/model.php";
	//load file controller
	include "application/controller.php";
	$c = isset($_GET["controller"])?$_GET["controller"]:"home";
	$controller = "controller/frontend/controller_$c.php";
	include "view/frontend/view_layout.php";		
 ?>