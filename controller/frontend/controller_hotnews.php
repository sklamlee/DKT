<?php 
	class controller_hotnews extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from tbl_news where c_hotnews=1 order by pk_news_id desc");
			include "view/frontend/view_hotnews.php";
		}
	}
	new controller_hotnews();
 ?>