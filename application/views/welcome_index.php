<div class="col-xs-9">

	<!--New ticker-->
	<div class="row">
		<div class="col-md-12">
			<!-- <div class="BreakingNewsController easing" id="breakingnews1" style="border-bottom:1px solid #ccc !important">
	        	<div class="bn-title"></div> -->
	            <ul id="newsticker_demo_scroll" class="newsticker">
	            	<?php 
						$this->db->select('alias, title, intro, content_type');
						$this->db->where(array('is_hot' => 1, 'published' => 1, 'content_type' => 'news_item'));
						$hots = $this->db->get('resource')->result();
					?>
					<?php if(count($hots)) : ?>
					<?php foreach($hots as $row) : ?>
						<?php 
							if($row->content_type == 'news_item') {
								$url = site_url('tin-tuc/'.$row->alias);
							} elseif($row->content_type == 'cate_service') {
								$url = site_url('dich-vu/'.$row->alias);
							} elseif($row->content_type == 'product_item') {
								$url = site_url('san-pham/'.$row->alias);
							}
						?>
						<li> <a href="<?=$url?>"><?php echo $row->title?></a> </li> 
					<?php endforeach; endif ?>
	                <!-- <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry bu deneme text metinidir</a></li> -->
	            </ul>
	            <!-- <div class="bn-arrows"><span class="bn-arrows-left"></span><span class="bn-arrows-right"></span></div>	
	        </div> -->

		</div>		
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-big" style="text-transform:uppercase; margin-top:50px;"><?=$introduc->title?></h3>
			<div>
				<?=$introduc->intro?>
			</div>
			<p class="text-right">
				<a href="<?=site_url('page/'.$introduc->alias)?>" class="btn btn-primary btn-view-more">Xem chi tiết</a>
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-big">LĨNH VỰC HOẠT ĐỘNG</h3>
			<div class="clearfix"></div>
			<div class="row">
				<?php foreach($this->load->get_var('data_nav_cate_service') as $row) : ?>
				<div class="col-xs-6">
					<div class="item-field">
						<a href="<?=site_url('dich-vu/'.$row->alias)?>">
							<?php if($row->icon !== '') : ?>
							<img src="<?=$row->icon?>" alt="<?=$row->title?>" class="pull-left"/>
							<?php else : ?>
							<img src="http://dummyimage.com/45x46/4d494d/686a82.gif&text=No Image" alt="placeholder+image" class="pull-left">
							<?php endif ?>
							<p><?=$row->title?></p>
						</a>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		
	</div>

</div><!--End Left Col-->