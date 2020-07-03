		<?php require_once('assets/header.php') ?>
		<div class="page">
		<!-- left_column b -->
			<div class="left_column">
					
					<h1 class="title1"><span>Учасники ОП "Федерація страхових посередників України"</span></h1>
					<!--<div class="time2">&nbsp;—&nbsp;25 января 2013, 14:09</div>-->
					<div class="border8"></div>
					<div class="h10"></div>
					
					<div class="rating_block1">
					
						<?foreach ($fed as $item):?>
							<div class="rating_f">
								<a href="<?=site_url('chlen_fspu/'.$item->id);?>" class="imglink" title=""><img src="<?=base_url();?>img/federation/<?=$item->image;?>" alt="" width="50" height="50"></a>
							<div class="oh">
								<h4><a href="<?=site_url('chlen_fspu/'.$item->id);?>">"<?=$item->title;?>"</a></h4>
								<?php
									$ch = explode(",", $item->type);
								?>
								<?foreach ($ch as $it):?>
								<span class="change2 ib"><span class=""> <?=$it;?> </span></span>
								<?endforeach;?>
							</div>
						</div>
						<?endforeach;?>

						<div class="cl"></div>
						
					</div>

					<div class="h5"></div>
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