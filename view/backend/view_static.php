<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Thống kê</div>
		<div class="panel-body">
			<div style="margin-bottom: 10px;">
			<form method="post" action="">
				Từ ngày <input type="date" name="tungay" required>&nbsp;&nbsp;
				Đến ngày <input type="date" name="denngay" required>&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Thống kê">
			</form>
			<?php if($where != ""){ ?>
			<div>Thống kê từ ngày <?php echo $tungay; ?> đến ngày <?php echo $denngay; ?></div>
			<?php } ?>
			</div>
			<ul class="list-group">
			  <li class="list-group-item">
			  <span style="font-weight: bold;">- Sản phẩm bán chạy (được mua nhiều nhất):</span>
			  	<table class="table table-hover table-bordered">
			  		<tr style="background-color: black; color:white">
			  			<th style="width: 100px; ">Ảnh</th>
			  			<th>Tên sản phẩm</th>
			  			<th style="width: 150px;">Số lượng mua</th>
			  			<th style="width: 150px;">Tổng giá</th>
			  		</tr>
			  		<?php 
			  			if(isset($arr_sanphambanchay["c_name"]) == true)
			  			{
			  		 ?>
			  		<tr>
			  			<td style="text-align: center;">
			  				<img src="public/upload/product/<?php echo $arr_sanphambanchay["c_img"]; ?>" style="width: 100px;">
			  			</td>
			  			<td><?php echo $arr_sanphambanchay["c_name"]; ?></td>
			  			<td style="text-align: center;"><?php echo $arr_sanphambanchay["tong"]; ?></td>
			  			<td style="text-align: center;"><?php echo number_format($arr_sanphambanchay["tong"]*$arr_sanphambanchay["c_price"]); ?> đ</td>
			  		</tr>
			  		<?php } ?>
			  	</table>
			  </li>
			  <li class="list-group-item">
			  	<span style="font-weight: bold;">- Số lượng đơn hàng:</span> <?php echo $arr_soluongdonhang["soluongdonhang"] ?> đơn hàng
			  </li>
			  <li class="list-group-item">
			  	<span style="font-weight: bold;">- Tổng giá trị các đơn hàng:</span> <?php echo number_format($arr_giatridonhang["tonggiatri"]); ?>đ
			  </li>
			</ul>
		</div>
	</div>
</div>