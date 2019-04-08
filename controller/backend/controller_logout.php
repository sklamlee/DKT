<?php 
	class controller_logout{
		public function __construct(){
			//huy session $_SESSION["c_username"]
			unset($_SESSION["c_username"]);
			//quay tro lai trang admin
			header("location:admin.php");
		}	
	}
	new controller_logout();
 ?>
