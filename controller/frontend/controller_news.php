<?php 
	class controller_news extends controller{
		public function __construct(){
			parent::__construct();			
			//tính tổng số bản ghi
			$total = $this->model->num_rows("select * from tbl_news");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 10;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = $this->model->fetch("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_news.php";
			//--------------------
		}
	}
	new controller_news();
 ?>
