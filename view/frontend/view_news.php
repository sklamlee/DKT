<h1>Tin tức</h1>
<div class="wrapper-blog"> 
          <!-- list news -->
          <div class="row">
          <?php 
            $n=0;
            foreach($arr as $rows)
            {
              $n++;
           ?>
            <div class="col-md-6 article"> <a href="index.php?controller=news_detail&id=<?php echo $rows["pk_news_id"]; ?>" class="image"> <img src="public/upload/news/<?php echo $rows["c_img"]; ?>" alt="<?php echo $rows["c_name"]; ?>" title="<?php echo $rows["c_name"]; ?>" class="img-responsive"> </a>
              <h3><a href="index.php?controller=news_detail&id=<?php echo $rows["pk_news_id"]; ?>"><?php echo $rows["c_name"]; ?></a></h3>
              <p class="desc"><?php echo $rows["c_description"]; ?></p>
            </div>
            <?php if($n%2 == 0){ ?><div style="clear:both;"></div><?php } ?>
            <?php } ?>

          </div>
          <!-- end list news --> 
          
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>