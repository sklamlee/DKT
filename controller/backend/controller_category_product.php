<?php 
	class controller_category_product extends controller{
		public function __construct(){
			parent:: __construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$this->model->execute("delete from tbl_category_product where pk_category_product_id=$id");
					header("location:admin.php?controller=category_product");
					break;
				}
			$tong= $this->model->num_rows("select * from tbl_category_product");
			$banghitrang = 5;
			$sotrang = ceil($tong/$banghitrang);
			$trang = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1 :0;
			$tu = $trang*$banghitrang;
			$arr = $this->model->fetch("select * from tbl_category_product order by pk_category_product_id desc limit $tu,$banghitrang");

			include "view/backend/view_category_product.php";
			
		}
	}
	new controller_category_product();
 ?>