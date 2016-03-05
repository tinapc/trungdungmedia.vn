<div class="near-footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-2">
    				<h4>Về chúng tôi</h4>
					<ul class="nav-pills nav-stacked list-unstyled">
						<?php foreach($this->load->get_var('data_nav_introduc') as $row) : ?>
                            <?php if($row->external_link !== '') : ?>
                                <li><i class="fa fa-angle-double-right"></i> <a href="<?=prep_url($row->external_link)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
                            <?php else : ?>
                                <li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('page/'. $row->alias)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>  
                            <?php endif ?>
                        <?php endforeach ?>
					</ul>
    			</div>
    			<div class="col-xs-2">
    				<h4>Khách hàng</h4>
					<ul class="nav-pills nav-stacked list-unstyled">
						<li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('page/dien-thoai-ho-tro')?>" title="Điện thoại hổ trợ">Điện thoại hỗ trợ</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('hoi-dap')?>" title="Hỏi & đáp">Hỏi & đáp</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('page/so-do-duong-di')?>" title="Sơ đồ đường đi">Sơ đồ đường đi</a></li>
					</ul>
    			</div>
    			<div class="col-xs-4 social">
    				<h4>Mạng xã hội</h4>
					<div class="row">
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('facebook')?>" target="_blank" title="Facebook"><img src="<?=base_url()?>assets/front/images/icons/facebook.png" alt=""/> Facebook</a>
						</div>
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('rss')?>" target="_blank" title="Rss"><img src="<?=base_url()?>assets/front/images/icons/rss.png" alt=""/> RSS</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('youtube')?>" target="_blank" title="Youtube"><img src="<?=base_url()?>assets/front/images/icons/youtube.png" alt=""/> Youtube</a>
						</div>
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('twitter')?>" target="_blank" title="Twitter"><img src="<?=base_url()?>assets/front/images/icons/twitter.png" alt=""/> Twitter</a>
						</div>
					</div>
    			</div>
    			<div class="col-xs-4" style="padding:0px">
    				<div class="comp_info">
    					<h5><?=$this->load->get_var('company_name')?></h5>
    					<p><?=$this->load->get_var('company_address')?></p>
    					<p><?=$this->load->get_var('phone')?></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    
    <?php 
        $showHoatDong = $this->resource->get_by(array('id' => 52), array('published'));
    ?>

    <div class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-5">
    				<p>
    					&copy <?=date('Y')?> TÂM ĐIỂM Communications 
                        <?php if($showHoatDong->published == 1) : ?>
                            | <a href="<?=site_url('page/hinh-anh-hoat-dong')?>">Hình ảnh hoạt động</a>
                        <?php endif ?>
    				</p>
    			</div>
    			<div class="col-xs-7 text-right" style="padding-right:0px">
    				<a href="<?=site_url()?>">Trang chủ</a> |
    				<a href="<?=site_url('gioi-thieu')?>">Giới thiệu</a> |
    				<a href="<?=site_url('tin-tuc')?>">Tin tức & Sự kiện</a> |
    				<a href="<?=site_url('dich-vu')?>">Sản phẩm dịch vụ</a> |
    				<a href="<?=site_url('page/dien-thoai-ho-tro')?>">Hổ trợ khách hàng</a> |
    				<a href="<?=site_url('page/ly-do-chon-tam-diem')?>">Lý do chọn TĐ</a>
    			</div>
    		</div>
    	</div>
    </div>
    
    <script src="<?=base_url()?>assets/front/plugin/flexisel/js/jquery.flexisel.js"></script>


    <!--TextIllate Effect-->
    <script src="<?=base_url()?>assets/front/plugin/textillate/assets/jquery.fittext.js"></script>
    <script src="<?=base_url()?>assets/front/plugin/textillate/assets/jquery.lettering.js"></script>
    <script src="<?=base_url()?>assets/front/plugin/textillate/jquery.textillate.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slogon-flash').textillate({ 
                loop: true, 
                in: { effect: 'flash', shuffle: false, reverse: false, sync: false }, 
                out: { effect: 'pulse', shuffle: false, reverse: true, sync: false}
            });

            jQuery('.main-nav ul.nav li.dropdown').hover(function() {
                jQuery(this).find('.dropdown-menu').stop(true, true).slideDown();
                jQuery(this).addClass('open');
            }, function() {
                jQuery(this).find('.dropdown-menu').stop(true, true).slideUp();
                jQuery(this).removeClass('open');
            });

            $('.carousel-inner .item:first').addClass('active');

            //$('.nbs-flexisel-container').hide();
        });


        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: false,
                clone: true
            });
            $('#flexiselDemo3').show();
        });
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/front/js/main.js"></script>

    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script> 
    <script type="text/javascript">stLight.options({publisher: "45615180-47a4-43ca-acc3-ae740e1561e9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <script>
    /*var options={ "publisher": "45615180-47a4-43ca-acc3-ae740e1561e9", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "linkedin", "pinterest", "email"]}};
    var st_hover_widget = new sharethis.widgets.hoverbuttons(options);*/
    </script>   
  </body>
</html>