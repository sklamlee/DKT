<div class="special-collection">
          <div class="tabs-container">
            <div class="clearfix">
              <h2>Sản phẩm Hot</h2>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
              <?php 
                foreach($arr as $rows)
                {
               ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-3 col-sm-6 ">
                  <div class="product-grid" id="product-1168979">
                    <div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows["pk_product_id"]; ?>"><img src="public/upload/product/<?php echo $rows["c_img"]; ?>" title="<?php echo $rows["c_name"]; ?>" alt="<?php echo $rows["c_name"]; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows["pk_product_id"]; ?>"><?php echo $rows["c_name"]; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows["pk_product_id"]); ?> VND </span> </span> </p>
                      <div class="action-btn">
                          <a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_product_id"]; ?>" class="button">Chọn sản phẩm</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php } ?>
                <div style="clear: both;"></div>
                <ul class="pagination pull-right" style="margin-top: 0px !important">
                  <li><a href="#">Trang</a></li>
                  <?php 
                    for($i=1;$i<=$num_page;$i++)
                    {
                   ?>
                  <li><a href="index.php?controller=search<?php echo isset($_GET["key"])?"&key=".$_GET["key"]:""; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>