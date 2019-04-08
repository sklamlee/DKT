<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Add edit Category
		</div>
		<div class="panel-body">
			<form class="form-controler" method="post" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
			<!-- form group -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">Tiêu đề danh mục</div>
					<div class="col-md-10"><input type="text" name="c_name" value="<?php echo isset($arr["c_name"])?$arr["c_name"]:""; ?>" class="form-control" required></div>
				</div>
			</div>	
			<div class="form-group">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
			</div>

			</form>
		</div>
	</div>
</div>