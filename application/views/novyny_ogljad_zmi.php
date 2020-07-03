			<?php require_once('assets/header.php') ?>
			<div class="page">
			<!-- left_column b -->
				<div class="left_column2">
					
				<h2 class="head2">ВСІ НОВИНИ РОЗДІЛУ</h2>
				<div class="h10"></div>
				<div class="border2"></div>
				<div class="h10"></div>
				<?	
				foreach($news as $item):			
				?>
				<!-- block -->
				<div class="textbox5">
					<a href="<?=site_url('novyna/'.$item->id);?>" class="imglink"><img src="<?=base_url();?>img/news/<?=$item->image;?>" alt="" title=""></a>
					<div class="author3">
						<div class="authoritem">
							<? $l = parse_url($item->source->link);?>
							<?if(array_key_exists('scheme', $l)):?>
							<a href="<?=$item->source->link;?>"><img src="<?=base_url();?>img/smi/<?=$item->source->image;?>" width="25" height="25"><?=$item->source->title;?></a>
							<?else:?>
							<a href="http://<?=$item->source->link;?>"><img src="<?=base_url();?>img/smi/<?=$item->source->image;?>" width="25" height="25"><?=$item->source->title;?></a>
							<?endif;?>
						</div>
						
					</div>
					<div class="oh desc">
						<h2><a href="<?=site_url('novyna/'.$item->id);?>"><?=$item->title;?></a></h2>
						<p><?=$item->title;?></p>
					</div>
				</div>
				<!-- end block -->
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