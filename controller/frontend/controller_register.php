<?php 
	class controller_register extends controller{
		public function __construct(){
			parent::__construct();
			//-------------------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hovaten = $_POST["hovaten"];
				$email = $_POST["email"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				$password = md5($_POST["password"]);
				//truoc khi insert, kiem tra xem email da ton tai trong csdl chua, neu chua co thi moi cho insert
				$check = $this->model->num_rows("select email from tbl_customer where email='$email'");
				if($check == 0){
					//insert ban ghi vao tbl_customer
					$this->model->execute("insert into tbl_customer(hovaten,diachi,dienthoai,email,password) values('$hovaten','$diachi','$dienthoai','$email','$password')");
					//quay ve trang dang nhap
					//header("location:index.php?controller=login");
					echo "<meta http-equiv='refresh' content='0; url=index.php?controller=login'>";
				}
				else
					echo "<meta http-equiv='refresh' content='0; url=index.php?controller=register&err=valid'>";				
			}
			//-------------------
			//load view
			include "view/frontend/view_register.php";
		}
	}
	new controller_register();
 ?>