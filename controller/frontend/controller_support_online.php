<?php 
	class controller_support_online extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from tbl_support_online");
			include "view/frontend/view_support_online.php";
		}
	}
	new controller_support_online();
 ?>