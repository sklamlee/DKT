<?php 
	class controller_category extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from tbl_category_product");
			include "view/frontend/view_category.php";
		}
	}
	new controller_category();
 ?>