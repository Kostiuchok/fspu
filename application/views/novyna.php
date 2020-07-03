		<?php require_once('assets/header.php') ?>
		<div class="page">
		<!-- left_column b -->
				<div class="left_column2">
					
					<h1 class="title1"><span><?=htmlspecialchars_decode(html_entity_decode($title));?></span></h1>
					
					<div class="border8"></div>
					<div class="h10"></div>
					<div class="itemdescription">
						<div class="brief">
						<?=htmlspecialchars_decode(html_entity_decode($brif));?>
						</div>
					</div>
					
					<div class="textbox6">
					<? if($image):?>							
						<img src="<?=base_url();?>img/news/<?=$image;?>">
					   <?endif;?>
						<?=htmlspecialchars_decode(html_entity_decode($text));?>
					</div>
					
					<div class="h5"></div>
					<div class="border8"></div>
					<div class="h50"></div>

					
				</div>
				<!-- left_column e -->

		<!-- premium banner -->
				<?php require_once("assets/r_premium_banner.php");?>
				<!-- end premium banner -->
			

				<!-- right column b -->
				<?php require_once("assets/r_sidebar_novyny.php");?>
				<!-- right column e -->

				<div class="cl"></div>

			</div>

			<!-- page e -->
			<?php require_once('assets/footer.php');?>
