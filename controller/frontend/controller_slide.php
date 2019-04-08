<?php 
	class controller_slide extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from tbl_slide");
			include "view/frontend/view_slide.php";
		}
	}
	new controller_slide();
 ?>