<?php 
	class controller_checkout extends controller{
		public function __construct(){
			parent::__construct();
			//kiem tra, neu user chua dang nhap thi yeu cau dang nhap moi duoc mua hang
			if(isset($_SESSION["email"]) == false)
				echo("<script>location.href = 'index.php?controller=login';</script>");
			else{
				//duyet cac san pham trong gia hang de lay muc gia
				$gia = 0;
				foreach($_SESSION["cart"] as $rows){
					$gia = $gia + ($rows["c_price"]*$rows["number"]);
				}
				//insert thong tin vao bang tbl_order, sau do lay id vua insert
				$customer_id = $_SESSION["customer_id"];
				$httt = $_POST["rd"];

				$order_id = $this->model->execute("insert into tbl_order(customer_id,ngaymua,gia,httt) values($customer_id,now(),$gia,$httt)");
				//insert thong tin vao bao tbl_order_detail
				//duyet cac san pham, sau do insert vao bao tbl_order_detail
				foreach($_SESSION["cart"] as $product){
					$pk_product_id = $product["pk_product_id"];
					$c_number = $product["number"];
					$this->model->execute("insert into tbl_order_detail(order_detail_id,order_id,pk_product_id,c_number) values(null,$order_id,$pk_product_id,$c_number)");
				}
				//xoa gio hang
				$_SESSION['cart'] = array();
				if($httt ==1)
				{
					echo("<script>location.href = 'index.php?controller=cart&alert=success';</script>");
				}
				else
				{
					header("location:https://www.nganluong.vn/button_payment.php?receiver=quytuoiti101096@gmail.com&product_name=$customer_id&price=$gia&return_url=http://localhost/btl/index.php&comments=true");
				}
			}				
		}		
	}
	new controller_checkout();
 ?>