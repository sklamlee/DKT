<?php 
	class model{
		//lay danh sach cac ban ghi
		public function fetch($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}
		//lay mot ban ghi
		public function fetch_one($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			$rows = mysqli_fetch_array($result);
			return $rows;
		}
		//tinh so luong cac ban ghi
		public function num_rows($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			return mysqli_num_rows($result);
		}
		//thuc thi cau lenh sql
		public function execute($sql){
			global $link;
			$get_insert_id = 0;
			if(mysqli_query($link,$sql)==true)
				$get_insert_id = mysqli_insert_id($link);
			return $get_insert_id;
		}
		//lay ban ghi vua moi insert vao
		public function get_insert_id($id_name,$table_name){
			global $link;
			$result = mysqli_query($link,"select $id_name from $table_name order by $id_name desc limit 0,1");
			$row = mysqli_fetch_array($result);
			return $row;
		}
	}
 ?>