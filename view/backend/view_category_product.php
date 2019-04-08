<div class="col-md-8 col-xs-offset-1">
	<div style="margin-bottom: 5px;">
		<a href="admin.php?controller=add_edit_category_product&act=add" class="btn btn-primary"> Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Danh mục sản phẩm</div>
		<div class="body-body">
			<table class="table table-bordered table-hover">
				<tr style="background-color: black; color: white">
					<th>Danh mục</th>
					<th style="width: 100px">Quản lý</th>
				</tr>
				<?php 
					foreach ($arr as $rows) {
						# code..
					
				 ?>
				 <tr>
				 	<td><?php echo $rows["c_name"] ;?></td>
				 	<td style="text-align: center;">
				 		<a href="admin.php?controller=add_edit_category_product&act=edit&id=<?php echo $rows["pk_category_product_id"] ;?>">Edit</a>
				 		<a onclick="return window.confirm('xoa?');" href="admin.php?controller=category_product&act=delete&id=<?php echo $rows["pk_category_product_id"] ;?>">Delete</a>&nbsp;&nbsp;
				 	</td>
				 </tr>
				 <?php } ?>
			</table>
			 <style type="text/css">
				 	.pagination{margin: 0px; padding: 0px;}
			 </style>
			 <ul class="pagination pull-right">
			 	<li class="active"><a href="#">Trang</a></li>
			 	<?php 
			 		for ($i=1; $i <= $sotrang ; $i++) { 
			 			# code...
			 		
			 	 ?>
			 	 <li  <?php echo isset($_GET["p"])&&$_GET["p"]==$i?"class='active'":""; ?>><a href="admin.php?controller=category_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			 	 <?php } ?>
			 </ul>
		</div>
	</div>
</div>