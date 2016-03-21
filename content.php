	<?php
		if($popup['pop_status'] == 1){
	?>
    <div id="popupContact">
      <div id="popupContactClose" href="javascript:void(0);"> <a style="cursor:pointer; font-size:24px; color:white;" onClick="closePop();">[X]</a> </div>
      <p id="contactArea"><a href="<?php echo $popup['pop_link']; ?>" target="_blank"><img src="<?php echo base_url()."uploads/popup/".$popup['pop_images']; ?>" alt="popup" /></a></p>
    </div>
    <div id="backgroundPopup"></div>
	<?php
		}
	?>
    
    <?php $this->load->view("column_left"); ?>
    <div id="slide">
    <script type="text/javascript" src="<?php echo base_url();?>public/scripts/nivo.js"></script>
        <div class="hbanner-live">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                	<a href="#"><img src="<?php echo base_url();?>public/images/capsule_img.jpg" alt="" /></a>      
                    <a href="#"><img src="<?php echo base_url();?>public/images/banner1.jpg" alt="" /></a> 
                    <a href="#"><img src="<?php echo base_url();?>public/images/banner2.jpg" alt="" /></a> 
                    <a href="#"><img src="<?php echo base_url();?>public/images/banner3.jpg" alt="" /></a> 
                </div>
            </div>
        </div>
    </div>
    <!--slide--> 
    <div id="deal_home" class="bg"> 
      <div class="price_deal"><strong class="black font18">TIN TỨC</strong>&nbsp;&nbsp;<span class="line_through"></span></div>
      <table>
      	<?php
			if(isset($list_news) && $list_news != NULL){
				foreach($list_news as $value){
		?>
        <tr class="tr_news_home_page">
          <td>
          	<a title="<?php echo $value['news_title']; ?>" href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>" class="img_pro_12">
          	<img class="img_first_top" src="<?php echo base_url()."uploads/news/thumb/".$value['news_images']."";?>" alt="<?php echo $value['news_title']; ?>"/></a>
          </td>
          <td>
          	<a title="<?php echo $value['news_title']; ?>" href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>"><strong class="font12"><?php echo $value['news_title']; ?></strong></a>
            <p style="color:#A2A2A2"><strong class="font12"><?php echo $value['news_date']; ?></strong></p>
          </td>
        </tr>
        <?php
			}
		}
		?>
        
      </table>
    </div>
    <!--deal_home-->
    <div class="clear"></div>
    <div id="content"> 
      <div class="title_box_left">
        <h2><span>Sản phẩm khuyến mại - giá rẻ</span></h2>
        <div class="title_tab khuyenmaitrian"> 
        	<a style="color:#f00" title="Sản phẩm khuyến mại" href="<?php echo base_url()."san-pham-khuyen-mai.html"; ?>">Xem tất cả</a>
        </div>
      </div>
      <!--title_box_left-->
      <div class="clear"></div>
      <div class="list_product khuyenmaitrian border" style="margin-top:-7px; border-top:none;width: 1104px;height: auto;float: left;">
        <div class="clear"></div>
        <ul class="cf current" id="laptopcu">
          <?php 
			if(isset($pro_saleoff) && $pro_saleoff != NULL){
				$stt = 0;
				foreach($pro_saleoff as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> <span class="cssName"><?php echo $value['pro_name']; ?></span> </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; } ?></b></p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){echo "-";}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro" title="<?php echo $value['pro_name']; ?>"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." đ"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 5 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
      </div>
      <!--list_product-->
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="list_product border" style="border:none;margin-bottom:5px;"> 
	      <a href="#"><img class="img_qc_635" src="<?php echo base_url();?>public/images/qc1.jpg" alt="" /></a> 
	      <a href="#"><img class="img_qc_635" src="<?php echo base_url();?>public/images/qc2.jpg" alt="" /></a> 
      </div>
      <div class="title_box_left title_box_left_1">
        <h2><span>Sản phẩm mới</span></h2>
        <div class="title_tab khuyenmaitrian"> 
        	<a style="color:#f00" title="Sản phẩm mới" href="<?php echo base_url()."san-pham-moi.html"; ?>">Xem tất cả</a>
        </div>
      </div>
      <!--title_box_left-->
      <div class="clear"></div>
      <div class="list_product xt border" style="margin-top:-7px; border-top:none;">
        <div class="clear"></div>
        <ul class="cf current" id="laptopcu_new">
          <?php 
			if(isset($pro_new) && $pro_new != NULL){
				$stt = 0;
				foreach($pro_new as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> <span class="cssName"><?php echo $value['pro_name']; ?></span> </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></b> </p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){echo "-";}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro" title="<?php echo $value['pro_name']; ?>"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." đ"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 5 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
        <div class="clear"></div>
      </div>
      <!--list_product-->
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="title_box_left title_box_left_2">
        <h2><span>Sản phẩm bán chạy</span></h2>
        <div class="title_tab khuyenmaitrian"> 
        	<a style="color:#f00" title="Sản phẩm bán chạy" href="<?php echo base_url()."san-pham-ban-chay.html"; ?>">Xem tất cả</a>
        </div>
      </div>
      <!--title_box_left-->
      <div class="clear"></div>
      <div class="list_product hot border" style="margin-top:-7px; border-top:none;">
        <div class="clear"></div>
        <ul class="cf current" id="laptopcu_hot">
          <?php 
			if(isset($pro_bestsale) && $pro_bestsale != NULL){
				$stt = 0;
				foreach($pro_bestsale as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> <span class="cssName"><?php echo $value['pro_name']; ?></span> </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></b> </p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></b></p>
                <p><?php if($value['pro_info'] == NULL){echo "-";}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="" class="name_pro" title="<?php echo $value['pro_name']; ?>"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." đ"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 5 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
        <div class="clear"></div>
      </div>
      <!--list_product-->
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="list_product border" style="border:none;margin-bottom:5px;"> 
	      <a href="#"><img class="img_qc_635" src="<?php echo base_url();?>public/images/qc2.jpg" alt="" /></a> 
	      <a href="#"><img class="img_qc_635" src="<?php echo base_url();?>public/images/qc1.jpg" alt="" /></a>       
      </div>
