<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Add edit product
		</div>
		<div class="panel-body">
			<form class="form-controler" method="post" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Tiêu đề</div>
					<div class="col-md-10"><input type="text" name="c_name" value="<?php echo isset($arr["c_name"])?$arr["c_name"]:""; ?>" class="form-control" required></div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Giá</div>
					<div class="col-md-10"><input type="number" name="c_price" value="<?php echo isset($arr["c_price"])?$arr["c_price"]:""; ?>" class="form-control" required></div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Thuộc danh mục</div>
					<div class="col-md-10">
						<select name="fk_category_product_id">
						<?php 
							//lay cac ban ghi thuoc table tbl_category_product
							$category = $this->model->fetch("select * from tbl_category_product");
							foreach($category as $rows)
							{
						 ?>
<option <?php echo isset($arr["fk_category_product_id"])&&$arr["fk_category_product_id"]==$rows["pk_category_product_id"]?"selected":""; ?> value="<?php echo $rows["pk_category_product_id"]; ?>"><?php echo $rows["c_name"]; ?></option>
						<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="checkbox" <?php echo isset($arr["c_hotproduct"])&&$arr["c_hotproduct"]==1?"checked":""; ?> name="c_hotproduct"> Sản phẩm nổi bật
					</div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Giới thiệu</div>
					<div class="col-md-10">
						<textarea name="c_description">
							<?php echo isset($arr["c_description"])?$arr["c_description"]:""; ?>
						</textarea>
						<script type="text/javascript">
							CKEDITOR.replace("c_description");
						</script>
					</div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Chi tiết</div>
					<div class="col-md-10">
						<textarea name="c_content">
							<?php echo isset($arr["c_content"])?$arr["c_content"]:""; ?>
						</textarea>
						<script type="text/javascript">
							CKEDITOR.replace("c_content");
						</script>
					</div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Đường dẫn ảnh</div>
					<div class="col-md-10">
						<input type="file" name="c_img">
					</div>
				</div>
			</div>
			<!-- /form-group -->
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
			</div>
			<!-- /form-group -->
			</form>
		</div>
	</div>
</div>