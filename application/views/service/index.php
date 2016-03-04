<div class="col-xs-9">
	<div class="row">
		
		<div class="col-xs-12">
			<h3 class="title-cat">Sản Phẩm & Dịch Vụ</h3>
			<div class="row">
				<?php foreach($content as $row) : ?>
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