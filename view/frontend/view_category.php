<div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
          <aside class="aside-category">
            <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
            <ul class="list-unstyled">
            <?php 
              foreach($arr as $rows)
              {
             ?>
              <li><a href="index.php?controller=product&id=<?php echo $rows["pk_category_product_id"]; ?>"><?php echo $rows["c_name"]; ?></a></li>
            <?php } ?>
            </ul>
          </aside>
        </div>