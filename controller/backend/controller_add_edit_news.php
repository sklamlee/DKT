<?php 
	class controller_add_edit_news extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_news where pk_news_id=$id");
					$form_action = "admin.php?controller=add_edit_news&act=do_edit&id=$id";
					//load view
					include "view/backend/view_add_edit_news.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$c_name = $_POST["c_name"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_img = "";
					//update ban ghi co id ung voi id truyen vao
					$this->model->execute("update tbl_news set c_name='$c_name',c_hotnews=$c_hotnews,c_description='$c_description',c_content='$c_content' where pk_news_id=$id");
					//kiem tra, neu user co upload anh thi thuc hien upload
					if($_FILES["c_img"]["name"] != ""){
						//-------------
						//xoa anh cu truoc ghi upload anh moi
						$old_img = $this->model->fetch_one("select * from tbl_news where pk_news_id=$id");
						$c_old_img = $old_img["c_img"];
						if(file_exists("public/upload/news/$c_old_img"))
							//xoa anh
							unlink("public/upload/news/$c_old_img");
						//-------------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload anh
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/news/$c_img");
						//update anh cua ban ghi co id truyen vao
						$this->model->execute("update tbl_news set c_img='$c_img' where pk_news_id=$id");
					}
					header("location:admin.php?controller=news");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_news&act=do_add";
					//load view
					include "view/backend/view_add_edit_news.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/news/$c_img");
					}
					//insert ban ghi
					$this->model->execute("insert into tbl_news(c_name,c_description,c_content,c_img,c_hotnews) values('$c_name','$c_description','$c_content','$c_img',$c_hotnews)");
					header("location:admin.php?controller=news");
				break;
			}
		}
	}
	new controller_add_edit_news();
 ?>