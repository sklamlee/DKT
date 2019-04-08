<div class="col-md-10 col-xs-offset-1">
<?php 
	if(isset($_GET["err"]) && $_GET["err"] == "valid")
	{
 ?>
	<div class="alert alert-danger">Username đã tồn tại</div>
<?php } ?>
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>">
				<!-- form group -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Username</div>
						<div class="col-md-10"><input value="<?php echo isset($arr["c_username"])?$arr["c_username"]:""; ?>" type="text" name="c_username" <?php echo isset($arr["c_username"])?"disabled":"required"; ?> class="form-control"></div>
					</div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Password</div>
						<div class="col-md-10">
<input type="password" name="c_password" <?php echo isset($arr["c_password"])?"placeholder='Nếu muốn đổi password mới, xin mời nhập password'":"required"; ?> class="form-control">
						</div>
					</div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Fullname</div>
						<div class="col-md-10">
						<input type="text" value="<?php echo isset($arr["c_fullname"])?$arr["c_fullname"]:""; ?>" name="c_fullname" class="form-control">
						</div>
					</div>
				</div>
				<!-- end form group -->
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
				<!-- end form group -->
			</form>
		</div>
	</div>
</div>