<div class="template-cart">
          <form action="index.php?controller=cart&act=update" method="post">
          <?php 
            if(isset($_GET["alert"]) && $_GET["alert"]=="success")
            {
           ?>
          <h3>Đặt hàng thành công. Chúng tôi sẽ liên hệ bạn trong trong thời gian sớm nhất.</h3>
          <?php } ?>
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                	foreach($_SESSION["cart"] as $product)
                	{
                 ?>
                  <tr>
                    <td><img src="public/upload/product/<?php echo $product["c_img"]; ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=product_detail&id=<?php echo $product["pk_product_id"]; ?>"><?php echo $product["c_name"]; ?></a>
                      </td>
                    <td> <?php echo number_format($product["c_price"]); ?>₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["pk_product_id"]; ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo number_format($product["number"]*$product["c_price"]); ?>₫</b></p></td>
                    <td><a href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
                 <?php } ?>


                </tbody>
                <tfoot>
                <?php 
                	if($this->cart_number() > 0)
                	{
                 ?>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&act=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                      <input type="submit" class="button pull-right" value="Cập nhật">
                      </td>
                  </tr>
                  <?php } ?>
                </tfoot>
              </table>
            </div>
          </form>
          <div class="total-cart"> Tổng tiền thanh toán: 
          <?php echo number_format($this->cart_total()); ?>₫ <br>
          <form action="index.php?controller=checkout" method="POST">
            <input type="radio" name="rd" value="1" checked>thanh toán trực tiếp
             <input type="radio" name="rd" value="0">thanh toán online
             <input type="submit" name="" value="thanh toán" class="button black">
          </form>
 </div>
        </div>