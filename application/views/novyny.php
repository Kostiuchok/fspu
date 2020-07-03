		<?php require_once('assets/header.php') ?>
		<div class="page">
			<!-- left_column b -->
				<div class="left_column2">
					
					<!-- selected_news b -->
					<div class="textbox6">
						<?if($news_one->image):?>
						<a href="<?=site_url('novyna/'.$news_one->id);?>" class="imglink"><img src="<?=base_url();?>img/news/<?=$news_one->image;?>" width="365" height="235"></a>
						<?endif;?>
						<div class="oh">
							<h2><a href="<?=site_url('novyna/'.$news_one->id);?>"><?=$news_one->title;?></a></h2>
							<p><?=htmlspecialchars_decode(html_entity_decode($news_one->brif));?></p>
							<div class="author2">
								<div class="authoritem">
									<?if($source_type == 'federation'):?>
									<a href="#"><img src="<?=base_url();?>img/federation/<?=$source->image;?>" width="25" height="25"><?=$source->title;?></a>
									<?endif?>
									<?if($source_type == 'smi'):?>
									<a href="#"><img src="<?=base_url();?>img/smi/<?=$source->image;?>" width="25" height="25"><?=$source->title;?></a>
									<?endif;?>
								</div>
								
							</div>
						</div>
					</div>
					<!-- selected_news e -->
				
				<div class="h10"></div>
				<div class="border2"></div>
				<div class="h10"></div>
				
				<h2 class="head2">ВСІ НОВИНИ РОЗДІЛУ</h2
				
				<?foreach($news_all as $item):?>

				<!-- block -->
				<div class="textbox5">
					<?if($item->image):?>
					<a href="<?=site_url('novyna/'.$item->id);?>" class="imglink"><img src="<?=base_url();?>img/news/<?=$item->image;?>" alt="" title=""></a>
					<?endif;?>
					<div class="author3">
						<div class="authoritem">
							<?if($item->source->type == 'federation'):?>
							<a href="http://<?=$item->source->link;?>"><img src="<?=base_url();?>img/federation/<?=$item->source->image;?>" width="25" height="25"><?=$item->source->link;?></a>
							<?elseif($item->source->type == 'smi'):?>
							<a href="http://<?=$item->source->link;?>"><img src="<?=base_url();?>img/smi/<?=$item->source->image;?>" width="25" height="25"><?=$item->source->link;?></a>
							<?endif;?>
						</div>
						
					</div>
					<div class="oh desc">
						<h2><a href="<?=site_url('novyna/'.$item->id);?>"><?=htmlspecialchars_decode(html_entity_decode($item->title));?></a></h2>
						<p><?=htmlspecialchars_decode(html_entity_decode($item->brif));?></p>
					</div>
				</div>
				<!-- end block -->

				<? unset($item);?>
				<?endforeach;?>

				
				
			
				
				
					
					<div class="h5"></div>
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