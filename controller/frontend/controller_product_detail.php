<?php 
	class controller_product_detail extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//lay ban ghi co id truyen vao
			$arr = $this->model->fetch_one("select * from tbl_product where pk_product_id=$id");
			//load view
			include "view/frontend/view_product_detail.php";
		}
	}
	new controller_product_detail();
 ?>