<?php 
	class controller_login extends controller{
		public function __construct(){
			//gọi hàm tạo của class controller để khởi tạo đối tượng model
			parent::__construct();
			//----------------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_username = $_POST["c_username"];
				$c_password = $_POST["c_password"];
				$c_password = md5($c_password);
				$check = $this->model->fetch_one("select c_username,c_password from tbl_user where c_username='$c_username'");
				if(isset($check["c_username"]) == true){
					if($check["c_password"] == $c_password){
						//đăng nhập thành công
						$_SESSION["c_username"] = $c_username;
					}
				}
				//quay lai trang admin
				header("location:admin.php");
			}
			//----------------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>
