<?php 
	class controller_add_edit_user extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					//tạo biến $form_action để điều khiển giá trị của action trong form ứng với sự kiện add hoặc edit
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					//lấy một bản ghi ứng với id truyền vào
					$arr = $this->model->fetch_one("select * from tbl_user where pk_user_id=$id");
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$c_password = $_POST["c_password"];
					$c_fullname = $_POST["c_fullname"];
					//update c_fullname
					$this->model->execute("update tbl_user set c_fullname='$c_fullname' where pk_user_id=$id");
					//kiểm tra, nếu password không rỗng thì update password
					if($password != ""){
						$password = md5($password);
						//update password
						$this->model->execute("update tbl_user set c_password='$c_password' where pk_user_id=$id");
					}
					//quay trở về trang user
					header("location:admin.php?controller=user");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
				case "do_add":
					$c_username = $_POST["c_username"];
					$c_password = $_POST["c_password"];
					$c_fullname = $_POST["c_fullname"];
					$c_password = md5($c_password);
					//kiểm tra trong csdl xem đã có username này chưa, nếu chưa thì insert vào csdl, nếu đã tồn tại thị hiển thị thông báo
					$check = $this->model->num_rows("select c_username from tbl_user where c_username='$c_username'");
					if($check > 0){
						//hiển thị thông báo: username đã tồn tại
						header("location:admin.php?controller=add_edit_user&err=valid");
					}else{
						//insert
						$this->model->execute("insert into tbl_user(c_username,c_password,c_fullname) values('$c_username','$c_password','$c_fullname')");
						header("location:admin.php?controller=user");
					}						
				break;
				default:
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
			}
		}
	}
	new controller_add_edit_user();
 ?>