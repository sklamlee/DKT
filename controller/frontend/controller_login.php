<?php 
	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			//-----------
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$email = $_POST["email"];
				$password = md5($_POST["password"]);
				$check = $this->model->fetch_one("select customer_id, email,password from tbl_customer where email='$email'");
				if(isset($check["email"])){
					if($check["password"] == $password){
						
						$_SESSION["customer_id"]=$check["customer_id"];
						$_SESSION["email"] = $email;
						
						echo "<meta http-equiv='refresh' content='0; url=index.php'>";
					}
				}
				else{
					echo "<meta http-equiv='refresh' content='0; url=index.php?controller=login'>";
				}
			}
			//-----------
			//load view
			include "view/frontend/view_login.php";
		}
	}
	new controller_login();
 ?>