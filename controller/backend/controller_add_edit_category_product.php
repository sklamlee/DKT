<?php 
	class controller_add_edit_category_product extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$form_action = "admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
					$arr = $this->model->fetch_one("select * from tbl_category_product where pk_category_product_id=$id");
					//load view
					include "view/backend/view_add_edit_category_product.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$c_name = $_POST["c_name"];
					$this->model->execute("update tbl_category_product set c_name='$c_name' where pk_category_product_id=$id");
			
					header("location:admin.php?controller=category_product");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_category_product&act=do_add";
					include "view/backend/view_add_edit_category_product.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$check = $this->model->num_rows("select c_name from tbl_category_product where c_name='$c_name'");
					if($check > 0){
						header("location:admin.php?controller=add_edit_category_product&err=valid");
					}else{
						//insert
						$this->model->execute("insert into tbl_category_product(c_name) values('$c_name')");
						header("location:admin.php?controller=category_product");
					}						
				break;
				default:
					$form_action = "admin.php?controller=add_edit_category_product&act=do_add";
					//load view
					include "view/backend/view_add_edit_category_product.php";
				break;
			}
		}
	}
	new controller_add_edit_category_product();
 ?>