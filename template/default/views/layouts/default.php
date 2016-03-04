<?php echo $template['partials']['header']; ?>

<?php if($this->router->fetch_class() == 'welcome') : ?>
	<div class="container main">
	    <div class="row">	
			<?php echo $template['body']; ?>
			<?php echo $template['partials']['right']; ?>		
		</div>
	</div><!--End Main-->

<?php else : ?> 
	<div class="container main" style="margin-top:0px">
	    <div class="row">
	    	<div style="background:#fff; padding:10px 5px; margin:0px 15px; display:inline-block; width:97.4%">
				<?php echo $template['body']; ?>
				<?php echo $template['partials']['right']; ?>		
			</div>	
		</div>
	</div><!--End Main-->
<?php endif ?>

<?php echo $template['partials']['footer']; ?>		
