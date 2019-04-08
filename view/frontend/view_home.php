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
                foreach($arr_noibat as $rows_noibat)
                {
               ?>  
                <!-- box product -->
                <div class="col-xs-6 col-md-3 col-sm-6 ">
                  <div class="product-grid" id="product-1168979">
                    <div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows_noibat["pk_product_id"]; ?>"><img src="public/upload/product/<?php echo $rows_noibat["c_img"]; ?>" title="<?php echo $rows_noibat["c_name"]; ?>" alt="<?php echo $rows_noibat["c_name"]; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows_noibat["pk_product_id"]; ?>"><?php echo $rows_noibat["c_name"]; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php 
                      echo number_format($rows_noibat["c_price"]); ?> </span> </span> </p>
                      <div class="action-btn">
                        <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                          <a href="index.php?controller=product_detail&id=<?php echo $rows_noibat["pk_product_id"]; ?>" class="button">Chọn sản phẩm</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper-tab-collections" style="margin-top:0px;">
          <div class="tabs-container">
            <ul class="list-unstyled">
              <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
                <h2>Sản phẩm nổi bật</h2>
                </a></li>
            </ul>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex">
            <?php 
              foreach($arr_new as $rows_new)
              {
             ?> 
              <!-- box product -->
              <div class="col-xs-6 col-sm-4 col-md-3 ">
                <div class="product-grid product-loop" id="product-1142079">
                  <div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows_new["id"]; ?>"><img src="public/upload/product/<?php echo $rows_new["c_img"]; ?>" title="<?php echo $rows_new["c_name"]; ?>" alt="<?php echo $rows_new["c_name"]; ?>" class="img-responsive"></a> </div>
                  <div class="info">
                    <h3 class="name"><a href="laptop-asus-zenbook-ux305f-fc089h"><?php echo $rows_new["c_name"]; ?></a></h3>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows_new["c_price"]); ?> </span> </span> </p>
                    <div class="action-btn">
                      <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142079">
                        <a href="index.php?controller=cart&act=add&id=<?php echo $rows_new["pk_product_id"]; ?>" class="button"> mua hàng</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end box product --> 
              <?php } ?>
              
            </div>
          </div>
        </div>