<?php 
	class controller_user extends controller{
		public function __construct(){
			parent::__construct();
			//--------------------
			$act= isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_user where pk_user_id=$id");
					//di chuyen den trang user
					header("location:admin.php?controller=user");
				break;
			}
			//--------------------
			//tính tổng số bản ghi
			$total = $this->model->num_rows("select * from tbl_user");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 5;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = $this->model->fetch("select * from tbl_user order by pk_user_id asc limit $from,$record_per_page");
			//load view
			include "view/backend/view_user.php";
			//--------------------
		}
	}
	new controller_user();
 ?>