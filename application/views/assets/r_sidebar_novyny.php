				<div class="right_column2">
					
					<!-- novyny b -->
					<div class="box_smallcol">
						<h2 class="head2"><a href="<?=site_url('novyny');?>">НОВИНИ</a></h2>
						<div class="h5"></div>
						<div class="border1"></div>
						<div class="h10"></div>
						
						<?foreach ($news_right as $key => $item):?>
							
							<?if($key !== 0):?>
							<div class="border4"></div>
							<?endif;?>
							<?$l=parse_url($item->source->link);?>
							<div class="event2"frfr>
								<? if($item->source_type == 'federation'):?>
									<a href="#" class="imglink" title=""><img src="<?=base_url();?>img/federation/<?=$item->source->image;?>" alt="" width="50" height="50"></a>
								<? elseif($item->source_type == 'smi'):?>
									<a href="<?=site_url('novyna/'.$item->id);?>" class="imglink" title=""><img src="<?=base_url();?>img/smi/<?=$item->source->image;?>" alt="" width="50" height="50"></a>
								<?endif;?>
								<div class="oh">
									<? if($item->source_type == 'federation'):?>
										<?if(array_key_exists('scheme', $l)):?>
										<span class="about"><a style="color:#005689;font-weight:bold;" href="<?=$item->source->link;?>"><?=$item->source->title;?></a></span>
										<?else:?>
										<span class="about"><a style="color:#005689;font-weight:bold;" href="http://<?=$item->source->link;?>"><?=$item->source->title;?></a></span>
										<?endif;?>
									<? elseif($item->source_type == 'smi'):?>
										<?if(array_key_exists('scheme', $l)):?>
										<span class="about"><span style="color:#005689;font-weight:bold;"><?=$item->source->title;?></span></span>
										<?else:?>
										<span class="about"><span style="color:#005689;font-weight:bold;"><?=$item->source->title;?></span></span>
										<?endif;?>
									<?endif;?>
									<h2><a style="overflow:hidden;height:35px;display:inline-block;" href="<?=site_url('novyna/'.$item->id);?>"><?=html_entity_decode($item->brif);?></a></h2>      
								</div>
							</div>	
						
						<?endforeach;?>
						
						<div class="h15"></div>
						<div class="oth2"><a href="<?=site_url('novyny');?>">Всі новини</a></div>
					</div>
					<!-- novyny e -->



					
					<!-- right bottom banner b -->
					<!--
					<div class="adver_block2">
						<div class="advert_txt">Реклама:</div>
						<div id="adriver_right_bottom" title="">
							<a target="_blank" href="">
							<img border="0" src="<?=base_url();?>pic/216_0.jpg" width="300" height="250" alt=""></a>
						</div>
					</div>
					<div class="h15"></div>
					-->
					<!-- right bottom banner e -->
					
					
					<div class="border2"></div>
				</div>