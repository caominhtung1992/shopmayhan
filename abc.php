<script type="text/javascript">
	$(window).load(function(){
	  $('.hot_view ul').carouFredSel({
		auto: {
			 play: true,
			 pauseOnHover: true
		},
		prev: '.hot_view .btn_prev',
		next: '.hot_view .btn_next',
		'direction'		: 'left',
		mousewheel: true,
		scroll:1,
		swipe: {
				onMouse: true,
				onTouch: true
		}
	  });
	});
	</script>
    <p>&nbsp;</p>
    <div id="content_bottom">
      <div id="viewed_pro">
        <h3 class="font16">Sản phẩm Xem nhiều</h3>
        <ul>
        	<?php 
			if(isset($pro_view) && $pro_view != NULL){
				foreach($pro_view as $value){
					@$images = unserialize($value['pro_images']);
		   ?>
            <li>
                <div class="l"><a class="img" href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><img src="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" alt="<?php echo $value['pro_name']; ?>"></a></div>
                <div class="r">
                <p><a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><b><?php echo $value['pro_name']; ?></b></a></p>
                <p class="price_pro"><b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></b></p>
                </div>
            </li>
            <?php
				}
			}else{
				echo "<div style='padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
      </div>
      <!--viewed_pro-->
      <div class="list_product hot_view" style="overflow:hidden;">
        <h3 class="font16">Sản phẩm được mua nhiều nhất</h3>
        <div class="btn_carousel">
          <div class="btn_prev bg"></div>
          <div class="btn_next bg"> </div>
        </div>
        <!--btn_carousel-->
        <ul>
          <?php 
			if(isset($pro_hot) && $pro_hot != NULL){
				$stt = 0;
				foreach($pro_hot as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> 
              	<span class="cssName"><?php echo $value['pro_name']; ?></span> 
              </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></b></p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></b></p>
                <p><?php if($value['pro_info'] == NULL){}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img alt="<?php echo $value['pro_name']; ?>" src="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
                <?php
					if($value['pro_market'] != 0){
						$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
						$percent = round($temp);
						echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
					}
				?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." đ"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
				}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
      </div>
      <!--hot_view-->
      <div class="clear"></div>
    </div>
    <!--content_bottom--> 
    <script type="text/javascript">
    $(window).load(function(){
      $('#list_brand ul').carouFredSel({
        auto: {
             play: true,
             pauseOnHover: true
        },
        prev: '#list_brand .btn_prev_brand',
        next: '#list_brand .btn_next_brand',
        'direction'		: 'left',
        mousewheel: true,
        scroll:1,
        swipe: {
                onMouse: true,
                onTouch: true
        }
      });
    });
    </script>
    <div id="list_brand">
      <div class="btn_prev_brand bg"></div>
      <div class="content_list_brand">
        <ul>
          <li><a href=""><img src="<?php echo base_url();?>public/images/hp.jpg" alt=""/></a></li>
          <li><a href=""><img src="<?php echo base_url();?>public/images/apple.jpg" alt=""/></a></li>
          <li><a href=""><img src="<?php echo base_url();?>public/images/acer.jpg" alt=""/></a></li>
          <li><a href=""><img src="<?php echo base_url();?>public/images/lenovo.jpg" alt=""/></a></li>
          <li><a href=""><img src="<?php echo base_url();?>public/images/asus.jpg" alt=""/></a></li>
          <li><a href=""><img src="<?php echo base_url();?>public/images/dell.jpg" alt=""/></a></li>
          <li><a href=""><img src="<?php echo base_url();?>public/images/hp.jpg" alt=""/></a></li>
        </ul>
      </div>
      <div class="btn_next_brand bg"></div>
    </div>
    <!--list_brand-->
    <div class="clear"></div>
    <div id="footer">
      <div id="footer_top">
        <div id="copyright">® Bản quyền thuộc về Trang sức sunny</div>
        <div id="nav_footer"> 
        <a href="index.html">Trang chủ</a> 
        <a href="<?php echo base_url(); ?>page/chinh-sach-van-chuyen/106.html">Chính sách</a> 
        <a href="<?php echo base_url(); ?>page/cam-ket/114.html">Cam kết</a> 
        <a href="<?php echo base_url(); ?>sitemap.xml">Sitemap</a> 
        <a href="<?php echo base_url(); ?>lien-he.html">Liên hệ</a> </div>
        <!--nav_footer--> 
      </div>
      <!--top_footer-->
      <div id="footer_bottom">
        <div class="l" style="margin-right:5px;"> <a href="<?php echo base_url(); ?>" style="margin-top: 0px;" id="logo_bottom" class=""><img style="max-width: 162px;" src="<?php echo base_url();?>public/images/logo.png" alt="logo" /></a>										        <!--logo_bottom-->
          <div class="clear"></div>
          <div class="contact line_height20"> 
            <span class="blue"><strong>Địa chỉ :</strong> Vật Cách - Đồng Cương - Yên Lạc - Vĩnh Phúc</span><br />
            <span class="blue"><strong><a class="blue" target="_blank" href="">( Xem bản đổ )</a></strong></span><br />
          </div>
          <div class="clear space2"></div>
          <p>Thiết kế bởi <b><a target="_blank" href="https://www.facebook.com/bach.ict">Bachnx</a></b></p>
          <p>Đang Online : <?php echo $online; ?></p>
          <p>Lượt truy cập : <?php echo $access; ?></p>
        </div>
        <!--l-->
        <div class="l link_bottom" style="background:url(<?php echo base_url();?>public/images/bg_footer_space.jpg) left center no-repeat; padding-left:10px;">
          <h3>Thông tin</h3>
          <ul>
            <li><a href="<?php echo base_url()."gioi-thieu.html"; ?>">Giới thiệu chung</a></li>
            <li><a href="<?php echo base_url()."page/chinh-sach-van-chuyen/106.html"; ?>">Chính sách vận chuyển</a></li>
            <li><a href="<?php echo base_url()."page/chinh-sach-bao-tri-bao-hanh/105.html"; ?>">Chính sách bảo trì, bảo hành</a></li>
            <li><a href="<?php echo base_url()."page/chinh-sach-doi-tra-hang/107.html"; ?>">Chính sách đổi trả hàng</a></li>
          </ul>
        </div>
        <!--l-->
        <div class="l link_bottom">
          <h3>Hỗ trợ khách hàng</h3>
          <ul>
            <li><a href="<?php echo base_url()."page/huong-dan-mua-hang-online/109.html"; ?>">Hướng dẫn mua hàng online</a></li>
            <li><a href="<?php echo base_url()."page/dia-chi-giao-dich/104.html"; ?>">Địa chỉ giao dịch</a></li>
            <li><a href="<?php echo base_url()."page/cac-hinh-thuc-mua-hang/111.html"; ?>">Các hình thức mua hàng</a></li>
          </ul>
        </div>
        <!--l-->
        <div class="r" style="width:331px;background:url(<?php echo base_url();?>public/images/bg_footer_space.jpg) left center no-repeat; padding-left:10px;">
          <div id="connect_us">
            <h4>Kết nối với Trang sức sunny</h4>
            <a href="https://www.facebook.com/pages/Trang-S%E1%BB%A9c-Sunny/1452784041628401" target="_blank" class="nomar_l"><i class="bg cn_fb"></i> Facebook</a> <a href="https://twitter.com/" target="_blank"><i class="bg cn_tw"></i> Twitter</a> <a href="#"><i class="bg cn_go"></i> Google+</a> </div>
          <div class="clear"></div>
          <div class="space2"></div>
          <div id="pay_accept">
            <h4>Chấp nhận thanh toán</h4>
            <ul>
              <li><i class="bg icon_listbank"></i> <a href="javascript:void(0)">Bằng tiền mặt (tại nhà hoặc quầy thu ngân)</a> <i class="bg icon_tienmat"></i></li>
              <li><i class="bg icon_listbank"></i> <a href="javascript:void(0)">Chuyển khoản qua Ngân hàng</a> <i class="bg icon_chuyenkhoan"></i></li>
            </ul>
          </div>
          <!--pay_accept-->
          <div class="clear"></div>
          <div id="news_letter" class="bg">
            <input type="text" name="" id="email_newsletter" onfocus="this.value=''" class="cssText" value="Nhập email nhận tin KM" />
            <a href="javascript:subscribe_newsletter()" class="button">Gửi</a> </div>
          <!--news_letter--> 
        </div>
        <!--l--> 
      </div>
      <!--footer_bottom--> 
    </div>
    <!--footer-->
    <div class="clear"></div>
    <div class="space2"></div>
    <script type="text/javascript">
      $(document).ready(function(){
            $("#support_footer .sup_title").click(function(){
              $('#support_footer .sup_content').stop(false, true).slideToggle(300);
      		  if ($('.sup_title .up').is(':hidden')) {
                  $('.sup_title .up').show();
                  $('.sup_title .down').hide();
              } else {
                  $('.sup_title .up').hide();
                  $('.sup_title .down').show();
              }
            });
      });
  </script>
<div id="support_footer">
  <div class="sup_title">Gọi mua hàng <span style="display: block; float: right; margin-right: 15px;" class="up"><img src="<?php echo base_url();?>public/images/up_s.png" alt="up" /></span> <span style="float: right; margin-right: 15px; display: none;" class="down"><img src="<?php echo base_url();?>public/images/down_s.png" alt="up" /></span> </div>
  <div class="sup_content" style="display: none;">
    <table bgcolor="#FFFFFF" border="0" style="text-align:center;padding-right:10px;" width="260">
      <tbody>
        <tr>
          <td style="50px;"><img src="<?php echo base_url();?>public/images/s_phone.png" alt="supporter" /></td>
          <td><strong style="font-size: 17px; color: #ff0000;">Hotline: 0978.034.085</strong></td>
        </tr>
        <tr>
          <td style="50px;"><img src="<?php echo base_url();?>public/images/s_mail.png" alt="supporter" style="margin-left: 5px;" /></td>
          <td><p class="Email"><a href="mailto:bachnx92@gmail.com">bachnx92@gmail.com</a></p></td>
        </tr>
        <tr>
          <td style="50px;"><img src="<?php echo base_url();?>public/images/s_female.png" alt="supporter" /></td>
          <td><strong class="TenNick">C/S khách hàng 1:</strong> <span class="MayLe"> <strong style="font-size: 14px; color: #ff0000;">0978.034.085</strong></span><br />
            <span class="all"><a href="ymsgr:sendim?bachnx92&m=Xin chào"><img src="http://opi.yahoo.com/online?u=bachnx92&m=g&t=1&l=us" /></a> <a href="skype:northstar.vn"><img height="20px" src="http://mystatus.skype.com/bigclassic/northstar.vn" style="border: none;" width="64px" /></a></span></td>
        </tr>
        <tr>
          <td style="50px;"><img src="<?php echo base_url();?>public/images/s_male.png" alt="supporter" /></td>
          <td><strong class="TenNick">C/S khách hàng 2:</strong> <span class="MayLe"> <strong style="font-size: 14px; color: #ff0000;">0978.034.085</strong></span><br />
            <span class="all"><a href="ymsgr:sendim?bachnx92&m=Xin chào"><img src="http://opi.yahoo.com/online?u=bachnx92&m=g&t=1&l=us" /></a> <a href="skype:northstar.vn"> <img height="20px" src="http://mystatus.skype.com/bigclassic/northstar.vn" style="border: none;" width="64px" /></a></span></td>
        </tr>
        <tr>
          <td style="50px;"><img src="<?php echo base_url();?>public/images/s_male.png" alt="supporter" /></td>
          <td><strong class="TenNick">C/S khách hàng 3</strong> <span class="MayLe"> <strong style="font-size: 14px; color: #ff0000;">0978.034.085</strong></span><br>
            <span class="all"><a href="ymsgr:sendim?bachnx92&m=Xin chào"><img src="http://opi.yahoo.com/online?u=bachnx92&m=g&t=1&l=us" /></a> <a href="skype:northstar.vn"> <img height="20px" src="http://mystatus.skype.com/bigclassic/northstar.vn" style="border: none;" width="64px" /></a></span></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
  $(function() {
    $(window).scroll(function() {
      if($(this).scrollTop() != 0) {
      	$('#bttop').fadeIn();
      } else {
      	$('#bttop').fadeOut();
      }
    });
    $('#bttop').click(function() {
        $('body,html').animate({scrollTop:0},300);
    });
  });
</script>
<div id="bttop" title="Lên đầu trang" style=""><img src="<?php echo base_url();?>public/images/scroll.png" alt="lên đầu trang" /></div>