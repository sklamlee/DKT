<?php 
	class controller_logout{
		public function __construct(){
			//huy cac session
			unset($_SESSION["email"]);
			unset($_SESSION["customer_id"]);
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
	}
	new controller_logout();
 ?>