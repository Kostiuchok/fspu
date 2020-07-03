	<?php require_once('assets/header.php') ?>
	<div class="page">

		<!-- left_column b -->
			<div class="left_column">
			
			
				<!-- header b -->
					<h2 class="head2">УЧАСНИКИ ОП "ФСПУ"</h2>
				<!-- header e -->
				<div class="border8"></div>
				
			<div class="rating_block1">
				<!-- name b -->
					<h1 class="title1"><span><?=$type;?> "<?=$title;?>"</span></h1>
				<!-- name e -->
				
				
				<div class="rating_d">
					<!-- logo b -->
					<img src="<?=base_url();?>img/federation/<?=$image;?>" alt="" width="200" height="200">
					<!-- logo e -->
					<!-- info b -->
					<div class="right">
						<h3>"<?=$title;?>"</h3>
						<h4><?=$type;?></h4>
						<h4><b>Адрес:</b> <?=$address;?></h4>
						<h4><b>Телефон:</b> <?=$tel;?></h4>
						<h4><b>Ел. почта:</b> <?=$email;?></h4>
						<? $l = parse_url($link);?>
						<?if(array_key_exists('scheme', $l)):?>
						<h4><b>Веб-сайт:</b> <a target="_blank" href="<?=$link;?>"><?=$link;?></a></h4>
						<?elseif(!array_key_exists('scheme', $l)):?>
						<h4><b>Веб-сайт:</b> <a target="_blank" href="http://<?=$link;?>"><?=$link;?></a></h4>
						<?endif;?>
						<h4><b>Контактное лицо:</b> <?=$contact;?></h4>
					</div>
					<!-- info e -->
				</div>
			
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