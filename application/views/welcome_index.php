<div class="col-xs-12">

	<div class="video-lists">
		<div class="row">
			<div class="col-xs-4">
				<a href=""><img src="<?=base_url()?>assets/front/images/test1.jpg" class="img-responsive" alt=""></a>
			</div>
			<div class="col-xs-4">
				<a href=""><img src="<?=base_url()?>assets/front/images/test1.jpg" class="img-responsive" alt=""></a>
			</div>
			<div class="col-xs-4">
				<a href=""><img src="<?=base_url()?>assets/front/images/test1.jpg" class="img-responsive" alt=""></a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-big">
				<img src="<?=base_url()?>assets/front/images/category_icon.png" alt="">
				DỊCH VỤ CỦA CHÚNG TÔI
			</h3>
			<div class="clearfix"></div>
			<div class="row">
				<?php foreach($this->load->get_var('data_nav_cate_service') as $row) : ?>
				<div class="col-xs-4">
					<div class="item-field">
						<a href="<?=site_url('dich-vu/'.$row->alias)?>">
							<?php if($row->image !== '') : ?>
							<img src="<?=$row->image?>" alt="<?=$row->title?>" class="img-responsive"/>
							<?php else : ?>
							<img src="http://dummyimage.com/45x46/4d494d/686a82.gif&text=No Image" alt="placeholder+image" class="img-responsive">
							<?php endif ?>
							<div class="clearfix"></div>
							<p><?=$row->title?></p>
							<p class="intro">
								<?=$row->intro?>
							</p>
						</a>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		
	</div>

</div><!--End Left Col-->