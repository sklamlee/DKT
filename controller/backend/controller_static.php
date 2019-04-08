<?php 
	class controller_static extends controller{
		public function __construct(){
			parent::__construct();
			//-----------
			$where = "";
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$tungay = $_POST["tungay"];
				$denngay = $_POST["denngay"];
				$where = " where ngaymua>='$tungay' and ngaymua<='$denngay' ";
			}
			$arr_sanphambanchay = $this->model->fetch_one("select tbl_product.*,tbl_order_detail.c_number, sum(c_number) as tong from tbl_order_detail inner join tbl_product on tbl_product.pk_product_id = tbl_order_detail.fk_product_id inner join tbl_order on tbl_order_detail.order_id=tbl_order.order_id $where group by fk_product_id order by tong desc limit 0,1");
			$arr_soluongdonhang = $this->model->fetch_one("select count(order_id) as soluongdonhang from tbl_order $where");
			$arr_giatridonhang = $this->model->fetch_one("select sum(gia) as tonggiatri from tbl_order $where");
			//-----------
			//load view
			include "view/backend/view_static.php";
		}
	}
	new controller_static();
 ?>