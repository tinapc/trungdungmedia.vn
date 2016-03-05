<div id="partner" class="container" >
    <h2 class="text-center">KHÁCH HÀNG</h2>
    <ul id="flexisel-partner" style="display:none">
        <?php foreach ($this->load->get_var('partners') as $key) : ?>
            <li><img src="<?php echo str_replace(array('tamdiem.home', 'lienviet.app', 'tamdiem.com.vn', 'trungdungmedia.app'), $_SERVER['HTTP_HOST'], $key->logo)?>" /></li>
        <?php endforeach?>
    </ul>
</div><!--End partner-->

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
    					<h5><?=$this->load->get_var('phone')?></h5>
                        <input class="form-control input-search" id="keywords" value="Tìm kiếm">
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
    			<div class="col-xs-2">
                    <a href="/" style="background: #303030; padding: 10px 13px; font-size: 20px; border-radius: 100px;"
                    ><i class="fa fa-home"></i></a>
    			</div>
    			<div class="col-xs-7 text-center" style="padding-right:0px">
    				Copyright &copy; <?=date('Y')?> TRUNG DŨNG Media <br>
                    Địa chỉ: <?=$this->load->get_var('company_address')?>
    			</div>
                <div class="col-xs-3">
                    Đang online: <?php echo $this->counter->online()?>/Tổng số: <?php $this->counter->total()?>
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

            $("#flexisel-partner").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: false,
                clone: true
            });
            $("#flexisel-partner").show();

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#keywords')
            .blur(function(event) {
                if($(this).val() == '') {
                    $(this).val('Tìm kiếm');
                }
            })
            .focus(function(event) {
                if($(this).val() == 'Tìm kiếm') {
                    $(this).val('');
                }
            });

            // Search function
            $('#keywords').keyup(function(e){
                if(e.keyCode == 13)
                {
                    var k = $('#keywords').val();
                    var kk = k.replace(/%20/gi, ' ');
                    window.location.href= site_url + 'tim-kiem/?k=' + kk;
                }
            });

        });
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/front/js/main.js"></script>

    <script type="text/javascript">var switchTo5x=true;</script>
    <!--<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script> 
    <script type="text/javascript">stLight.options({publisher: "45615180-47a4-43ca-acc3-ae740e1561e9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->
    <script>
    /*var options={ "publisher": "45615180-47a4-43ca-acc3-ae740e1561e9", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "linkedin", "pinterest", "email"]}};
    var st_hover_widget = new sharethis.widgets.hoverbuttons(options);*/
    </script>   
  </body>
</html>