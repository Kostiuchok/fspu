			<?php require_once('assets/header.php') ?>
				<div class="page">
						<h1 class="title1"><span>Мета, основні принципи та предмет діяльності ФЕДЕРАЦІЇ</span></h1>
					<!--<div class="time2">&nbsp;—&nbsp;25 января 2013, 14:09</div>-->
					
					<div class="border8"></div>
					<div class="h10"></div>
					<!--<div class="itemdescription">
						<div class="brief">Мета, основні принципи та предмет діяльності ФЕДЕРАЦІЇ не передбачають одержання прибутку.</div>
					</div>
					-->
					<div class="text_box">
						<p>
						<strong>
						Метою створення ФЕДЕРАЦІЇ є сприяння розвитку посередницької діяльності на страховому ринку в Україні, представництво інтересів Членів ФЕДЕРАЦІЇ в органах державної влади та управління, захист прав та інтересів учасників посередницької діяльності на ринку страхових послуг, забезпечення всебічних зв'язків із громадськістю, тощо.
						</strong>
						</p>
						<div class="incut11">
						ФСПУ співпрацює з органами державної влади та управління щодо напрацювання напрямків і методів вдосконалення базису ведення посередницької діяльності на страховому ринку України.
						</div>
						<div class="photo">
							<a href=""><img src="<?=base_url();?>pic/inshakov-140.jpg"></a>
							<div class="sign"><strong>Генеральний директор</strong><br>Федерації страхових посередників України<br><strong>Іншаков С.В.</strong></div>
						</div>	
						<p>
						Співпрацює з засобами масової інформації, може випускати інформаційно-професійні бюлетені та надавати інші матеріали, здійснювати комплексні рекламно-інформаційні заходи;
						</p>
						<p>
						Співробітництво з учасниками національного та міжнародного страхових ринків (у тому числі страховими компаніями і професійними об’єднаннями), державними регуляторними та іншими органами.
						</p>
					</div>
					
					<div class="border8"></div>
					<div class="h50"></div>
				
				<!-- main_column e -->
				
				<!-- left_column b -->				
				<div class="left_column">
					<div class="top_articles2">
						<div class="border2"></div>
						<h2 class="head1"><a href="<?=site_url('novyny');?>">НОВИНИ</a></h2>
						<div class="border31"></div>
						<div class="opinions">
							
							<?foreach ($news_block as $item):?>
							<!-- block -->
							<div class="opinion2" style="width: 100%;">
								<?if($item->source_type == 'federation'):?> 
								<a href="<?=site_url('novyna/'.$item->id);?>" class="imglink" title=""><img src="<?=base_url();?>img/federation/<?=$item->source->image;?>" alt="" width="50" height="50"></a>
								<?elseif($item->source_type == 'smi'):?>
								<a href="<?=site_url('novyna/'.$item->id);?>" class="imglink" title=""><img src="<?=base_url();?>img/smi/<?=$item->source->image;?>" alt="" width="50" height="50"></a>
								<?endif;?>
							<div class="oh">
								<?if($item->source_type == 'federation'):?> 
								<span class="about"><a href="<?=site_url('chlen_fspu/'.$item->source->id);?>"><?=$item->source->title;?></a></span>
								<?elseif($item->source_type == 'smi'):?> 
								<span class="about"><span style="color:#005689;font-weight:bold;"><?=$item->source->title;?></span></span>
								<?endif;?>
								<h2><a href="<?=site_url('novyna/'.$item->id);?>"><?=$item->title;?></a></h2>      
							</div>
							</div>
							<!-- end block -->			
							<?endforeach;?>
																		
						</div>

						<div class="h5"></div>
						<div class="oth1"><a href="<?=site_url('novyny');?>">Всі новини</a></div>
					</div>


					<div class="top_side2">
						<div class="border2"></div>
						<h2 class="head1"><a href="<?=site_url('novyny_ogljad_zmi');?>">ОГЛЯД ПРЕСИ</a></h2>
						<div class="border31"></div>
						
							<div class="top_news">
								<!--<a href="" class="imglink" title=""><img src="<?=base_url();?>pic/zmi/zmi1.jpg" alt=""></a>-->
								<div class="oh">
									<span class="time1"></span>
									<!--<h4><a target="_blank" href="http://www.kommersant.ua/">Коммерсантъ-Украина</a></h4>-->
								</div>
							</div>
								
							<?/* <div class="scroll_pane jspScrollable" tabindex="0">
								<div class="jspContainer" style="height: 420px;">
									<div class="jspPane">
										<ul class="news1">	 */?>
										
							<div class="scroll_pane jspScrollable" style="min-height: 350px; tabindex="0">
								<div class="" style="height: 840px; overflow: hidden;float:left;">
									<div class="">
										<ul class="news1">	
											
											<?/* <link rel="stylesheet" href="http://fspu.com.ua/css/style-news.css" type="text/css" />
											<div class="informers-layout">
											<div class="inf-block">
											<div class="inf-body">
											<div id="segodnya_ua_inner">Загружается...</div><div class="clr"></div>
											<div class="inf-item last-inf-item"><a class="i-left inf-links" target="_blank" rel="nofollow" href="http://ukr.segodnya.ua/allnews.html" title="усi новини">Усi новини</a><a class="inf-links i-right" href="http://ukr.segodnya.ua" rel="nofollow" title="ukr.segodnya.ua">Ukr.Segodnya.ua</a><div class="clr"></div></div>
											</div>
											</div>
											</div>
											<script src="http://www.segodnya.ua/user/informers/1f2b4f8f8296625daaf5c6855ea948a1.js"></script> */ ?>
											
											
											
											
											<? /* Rss handler */
											$url = 'https://bin.ua/finance/insurance/rss.xml';       //адрес RSS ленты
											$rss = simplexml_load_file($url);       
											
											$counter = 0;
											$limit = 10;
											foreach ($rss->channel->item as $item) {
												
												if($counter < $limit)
												{
													preg_match('/<img.*?src="(.*?)".*?>/', $item->description, $result);
													
													if(isset($result[1]) and $result[1])
														$src = $result[1];
													else
														$src = null;
													
													if($src)
														$image = '<img src="'.$src.'">';
													else
														$image = '';
													
														echo '<li>';
														echo '<div class="time1">'.date('d.m.Y', strtotime($item->pubDate)).'</div>';
														echo '<p>'.$image.'<a href="'.$item->link.'" target="_blank" rel="nofollow">'.$item->title.'</a><br></p>';
														echo '</li>';
														
													$counter++;
												}
											} 
?>

											
											<!--<li>
												<div class="time1">31.10.2013</div>
												<p><a target="_blank" href="http://www.kommersant.ua/doc/2332473">Немцы идут в розницу // "Allianz Украина" продвигает страхование населения </a></p>
											</li>
											<li>
												<div class="time1">29.10.2013</div>
												<p><a target="_blank" href="http://www.kommersant.ua/doc/2330792">Агрострахование сужается // Сегмент рынка продолжают покидать страховые компании</a></p>
											</li>
											<li>
												<div class="time1">22.10.2013</div>
												<p><a target="_blank" href="http://www.kommersant.ua/doc/2325450">Нацкомфинуслуг нагнала страху // Лицензионные условия страховщиков будут ужесточены </a></p>
											</li>
											<li>
												<div class="time1">18.10.2013</div>
												<p><a target="_blank" href="http://www.kommersant.ua/doc/2322305">Страховой тур // "PZU Украина" заплатит за невыдачу визы </a></p>
											</li>													
											<li>
												<div class="time1">17.10.2013</div>
												<p><a target="_blank" href="http://www.kommersant.ua/doc/2321702">Жизнь под угрозой // СК "Зенит" на грани банкротства </a></p>
											</li>--->
											
											
										</ul>
									</div>
								</div>
							</div>
							<div class="gborder1"></div>
							<div class="h5"></div>
							<!--<div class="oth1"><a href="">Переглянути все</a></div>-->
							<div class="h10"></div>
					</div>
					
					<script type="text/javascript">
						jQuery(function()
						{
							jQuery('.jspScrollable').jScrollPane();
						});
					</script>

					<!-- e -->

				</div>
				<!-- left_column  -->

				
				
				
									<!-- right_column b -->
				
									<div class="right_column">
										<div class="wpad12">
											<!-- popular b -->
											<div class="border2"></div>
											<h2 class="head1">ОНОВЛЕННЯ НА САЙТІ</h2>
											<div class="border31"></div>
											<div id="viewsblock" style="display:block;">
												<ul class="popular1">
													<li>
														<a href="docs/proekty_zakoniv/proek_zakonu_finmonitoryng.pdf" class="h">
															<span class="popularheader">Проект Закону про внесення змін до деяких законодавчих актів України у сфері запобігання та протидії легалізації (відмиванню) доходів, одержаних злочинним шляхом, фінансуванню тероризму та фінансуванню розповсюдження зброї масового знищення</span>
														</a>
													</li>
													<li>
														<a href="docs/broshura_spozhgyvachu_nebankivskih_finansovyh_poslug.pdf" class="h">
															<span class="popularheader">СПОЖИВАЧУ НЕБАНКІВСЬКИХ ФІНАНСОВИХ ПОСЛУГ</span>
														</a>
													</li>
													<li>
														<a href="<?=site_url('novyny_federacii');?>" class="h">
															<span class="popularheader">Порівняльна таблиця до проекту Закону України Про внесення змін до Закону України "Про страхування" (нова редакція) та інших законодавчих актів України</span>
														</a>
													</li>
													<li>
														<a href="<?=site_url('novyny_uchasnykiv_federacii');?>" class="h">
															<span class="popularheader">Доля в перестраховании через брокеров. «Оукшотт Іншуренс Консалтантс Лімітед»</span>
														</a>
													</li>
													<li>
														<a href="<?=site_url('zakonodavstvo_normatyvni_akty_zarubizhnyh_krain');?>" class="h">
															<span class="popularheader">ДИРЕКТИВА (ЄС) 2016/97 ЄВРОПЕЙСЬКОГО ПАРЛАМЕНТУ ТА РАДИ</span>
														</a>
													</li>
													<li>
														<a href="<?=site_url('zakonodavstvo_normatyvni_akty_zarubizhnyh_krain');?>" class="h">
															<span class="popularheader">ДИРЕКТИВА 2002/92/ЄС ЄВРОПЕЙСЬКОГО ПАРЛАМЕНТУ ТА РАДИ Про посередництво у страхуванні</span>
														</a>
													</li>
													
													
													
													
													
												</ul>
												<!--<div class="oth1"><a href="">Всі оновлення сайту</a></div>-->
											</div>
											<!-- popular e -->
										</div>
									</div>
									
									<!-- right_column e -->
									
									
													
									<!-- member b -->
									
									<div class="h15"></div>
									<div class="border2"></div>
									<h2 class="head1"><a href="<?=site_url('chleny_fspu');?>">ЧЛЕНИ ФСПУ</a></h2>
									<div class="border31"></div>
									<div class="left_column">
										<div class="rating_block2">

											<?foreach($fed as $item):?>
											<div class="rating_f">
												<?$l = parse_url($item->link);?>

												<?if(array_key_exists('scheme', $l)):?>
												<a target="_blank" href="<?=$item->link;?>" class="imglink" title=""><img src="<?=base_url();?>img/federation/<?=$item->image;?>" alt="" width="50" height="50"></a>
												<?else:?>
												<a target="_blank" href="http://<?=$item->link;?>" class="imglink" title=""><img src="<?=base_url();?>img/federation/<?=$item->image;?>" alt="" width="50" height="50"></a>
												<?endif;?>
												<div class="oh">
													
													<?if(array_key_exists('scheme', $l)):?>
													<h4><a target="_blank" href="<?=$item->link;?>"><?=$item->title;?></a></h4>
													<?else:?>
													<h4><a target="_blank" href="http://<?=$item->link;?>"><?=$item->title;?></a></h4>
													<?endif;?>
													<?php 
														$ch = explode(",", $item->type);
													?>
													<?foreach ($ch as $v):?>
													<span class="change2 ib"><span class=""> <?=$v;?>, </span></span>
													<?endforeach;?>
												</div>
											</div>
											<?endforeach;?>
											
											<div class="cl"></div>
											
										</div>    
										
										<div class="h5"></div>
									</div>
																		
									<!-- member e -->
									
									<div class="right_column">
										<div id="share">
											<div id="stage">
												<?foreach($fed_all as $item):?>
												<?$l = parse_url($item->link);?>
												<?if(array_key_exists('scheme', $l)):?>
												<div class="btn main"><div class="bcontent"><a href="<?=$item->link;?>" target="_blank" name="fb_share" type="box_count" href="<?$item->link;?>"><img style="width:50px; height: 50px;" src="<?=base_url();?>img/federation/<?=$item->image;?>" /></a></div></div>
												<?else:?>
												<div class="btn main"><div class="bcontent"><a href="http://<?=$item->link;?>" target="_blank" name="fb_share" type="box_count" href="<?$item->link;?>"><img style="width:50px; height: 50px;" src="<?=base_url();?>img/federation/<?=$item->image;?>" /></a></div></div>
												<?endif;?>
												<?endforeach;?>
												
											</div>
											
										</div>
									</div>
									<div class="cl"></div>
									
									
									<!--  video gallery b -->
									<div class="h15"></div>
									<div class="border2"></div>
									<h2 class="head1">ПЕРЕГЛЯНУТИ ВІДЕО</h2>
									<div class="border31"></div>
									
									<div class="textbox_f">
										<iframe width="250" height="150" src="//www.youtube.com/embed/ntPCyupIMDA" frameborder="0" allowfullscreen></iframe>
										<div class="oh">
											<p class="smallvideo"><b>Колапс державного регулювання страхового ринку України</b></p>
										</div>      
									</div>
									<div class="textbox_f">
										<iframe width="250" height="150" src="//www.youtube.com/embed/VHD5HpO8v0I" frameborder="0" allowfullscreen></iframe>
										<div class="oh">
											<p class="smallvideo"><b>Круглый стол в Верховной Раде по обсуждению законодательства по страховым посредникам.</b></p>
										</div>      
									</div>
									<div class="textbox_f">
										<iframe width="250" height="150" src="//www.youtube.com/embed/SgIebeXw1Dc?rel=0" frameborder="0" allowfullscreen></iframe>
										<div class="oh">
											<p class="smallvideo"><b>Проблемы развития института страховых посредников.</b></p>
										</div>      
									</div>
									<div class="textbox_f">
										<object type="application/x-shockwave-flash" style="width:250px;height:150px;" data="http://www.youtube.com/v/Lk41nrbj25E&amp;hl=en&amp;fs=1" title=""><param name="movie" value="http://www.youtube.com/v/Lk41nrbj25E&amp;hl=en&amp;fs=1"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="bgcolor" value="#010101"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"></object>
										<div class="oh">
											<p class="smallvideo"><b>На страховом рынке Украины работают много лжеброкеров...</b></p>
										</div>      
									</div>
									<div class="textbox_f">
										<object type="application/x-shockwave-flash" style="width:250px;height:150px;" data="http://www.youtube.com/v/JNK5lrHLYZc&amp;hl=en&amp;fs=1" title=""><param name="movie" value="http://www.youtube.com/v/JNK5lrHLYZc&amp;hl=en&amp;fs=1"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="bgcolor" value="#010101"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"></object>
										<div class="oh">
											<p class="smallvideo"><b>Федерация страховых посредников Украины выступила с инициативой...</b></p>
										</div>      
									</div>
									
									<div class="cl"></div>
									
									
		
									<!--  video gallery e -->
														
			<!-- page e -->
			
			</div>

		<?php require_once('assets/footer.php');?>