<?php 
	class controller_home extends controller{
		public function __construct(){
			parent::__construct();
			//------------
			//san pham noi bat
			$arr_noibat = $this->model->fetch("select * from tbl_product where c_hotproduct=1");			
			//------------
			//san pham moi
			$arr_new = $this->model->fetch("select * from tbl_product order by pk_product_id desc limit 0,8");
			//------------
			//load view
			include "view/frontend/view_home.php";
		}
	}
	new controller_home();
 ?>