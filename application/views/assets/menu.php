<a class="menu_link">РАЗДЕЛЫ</a>
				<nav id="menu" role="navigation">
					<ul class="primary_navigation">
						
						<li>
							<div class="dark_menu"><a href="<?=site_url("pro_federaciju_zagalni_vidomosti");?>" class="nlink">ПРО ФЕДЕРАЦІЮ</a></div>
							<div class="dropdown" style="left: -9999px;">
								<div class="dropdown_content">
									<div class="col31 fl">
										<div class="h10"></div>
										<h2 class="head21">ПРО ФЕДЕРАЦІЮ СТРАХОВИХ ПОСЕРЕДНИКІВ УКРАЇНИ</h2>
										<ul class="dropdown_tag">
											<li><a href="<?=site_url("pro_federaciju_zagalni_vidomosti");?>">Загальні відомості про Федерацію</a></li>
											<li><a href="<?=site_url("pro_federaciju_predmet_dijalnosti");?>">Предмет діяльності Федерації</a></li>
											<li><a href="<?=site_url("pro_federaciju_osnovni_pryncypy");?>">Основні принципи Федерації</a></li>
											<li><a href="<?=site_url("pro_federaciju_stupeni_chlenstva");?>">Ступені членства у Федерації</a></li>
											<li><a href="<?=site_url("pro_federaciju_umovy_chlenstva");?>">Умови членства у Федерації</a></li>
											<li><a href="<?=site_url("pro_federaciju_prava_prava_ta_obovjazky_chleniv");?>">Права та обов`язки членів ФЕДЕРАЦІЇ</a></li>
											<li><a href="<?=site_url("pro_federaciju_apeljacijnyj_komitet");?>">Апеляційний комітет</a></li>
											<li><a href="<?=site_url("chleny_fspu");?>">Учасники ОП "ФСПУ"</a></li>
										</ul>
									</div>

									<div class="col6 fr">  
										<div class="h10"></div>
										<h2 class="head21">ПРО ГОЛОВНЕ</h2>
										<?foreach ($news_menu_fed as $key => $item):?>
											<?if($key !== 0):?>
												<div class="border4"></div>
											<?endif;?>
											<div class="event2">
												<a class="imglink" href="<?=site_url("novyna/".$item->id);?>" title=""><img style="max-width:100px;" src="<?=base_url();?>img/news/<?=$item->image;?>" alt=""></a>
												<div class="oh">
													<h2><a href="<?=site_url("novyna/".$item->id);?>"><?=html_entity_decode($item->brif);?></a></h2>
													<span class="about"><?=$item->source->title;?></span>
												</div>
											</div>
										<?endforeach;?>
										
									</div>
									
								</div>
							</div>
						</li>
						<li>
							<div class="dark_menu"><a href="<?=site_url("novyny");?>" class="nlink">НОВИНИ</a></div>
							<div class="dropdown" style="left: -9999px;">
								<div class="dropdown_content">
									<div class="col31 fl">
										<div class="h10"></div>
										<h2 class="head21">НОВИНИ УЧАСНИКІВ ФЕДЕРАЦІЇ ТА СТРАХОВОГО РИНКУ</h2>
										<ul class="dropdown_tag">
											<li><a href="<?=site_url("novyny_uchasnykiv_federacii");?>">Новини учасників Федерації</a></li>
											<li><a href="<?=site_url("novyny_federacii");?>">Новини Федерації</a></li>
											<li><a href="<?=site_url("novyny_publikacii");?>">Публікації</a></li>
											<li><a href="<?=site_url("novyny_memorandum");?>">Меморандум</a></li>
											<li><a href="<?=site_url("novyny_pres_relizy");?>">Прес-релізи</a></li>
											<li><a href="<?=site_url("novyny_zasidannja_kruglogo_stolu");?>">Засідання круглого столу</a></li>
											<li><a href="<?=site_url("novyny_strahovi_brokery_ukrainy");?>">Страхові брокери України</a></li>
											<li><a href="<?=site_url("novyny_mizhnarodnyj_dosvid");?>">Міжнародний досвід</a></li>
											<li><a href="<?=site_url("novyny_ogljad_zmi");?>">Огляд ЗМІ</a></li>
										</ul>
									</div>
									
									<div class="col6 fr">  
										<div class="h10"></div>
										<h2 class="head21">СВІЖІ НОВИНИ</h2>
										<? if(!empty($news_top)):?>
										<?foreach($news_top as $key => $item):?>
											<?if($key !== 0):?>
												<div class="border4"></div>
											<?endif;?>
											<div class="event2">
											<?if($item->image):?>
											<a class="imglink" href="<?=site_url('novyna/'.$item->id);?>" title=""><img style="max-width:100px;" src="<?=base_url();?>img/news/<?=$item->image;?>" alt=""><!-- <span class="date1"><b>27</b>ср</span> --></a>
											<?endif;?>
											<div class="oh">
												<h2><a href="<?=site_url('novyna/'.$item->id);?>"><?=$item->brif;?></a></h2>
												<span class="about"><?=$item->source->title;?></span>
											</div>
										</div>	
										<?endforeach;?>
										<?endif;?>
									</div>

								</div>
							</div>
						</li>
						<li>
							<div class="dark_menu"><a href="#" class="nlink">СТАТИСТИКА</a></div>
							<div class="dropdown" style="left: -9999px;">
								<div class="dropdown_content">
									<div class="col31 fl">
										<div class="h10"></div>
											<div class="textbox2"><h4>Аналіз страхового ринку</h4></div>   
											<div class="border3g"></div>
											<div class="textbox2Li"><h4><a href="<?=site_url("statystyka_vidomosti_pro_poserednycku_dijalnist");?>">Відомості про посередницьку діяльність</a></h4></div>   
											<div class="border3g"></div>
											<div class="textbox2Li"><h4><a href="<?=site_url("statystyka_ukrainskyj_strahovyj_rynok");?>">Український страховий ринок</a></h4></div>      
										<div class="h10"></div>
									</div>
								
									<div class="col6 fr">  
										<div class="h10"></div>
										<h2 class="head21">ОНОВЛЕННЯ РОЗДІЛУ</h2>
										<div class="event2">
											<a class="imglink" target="_blank" href="https://www.nfp.gov.ua/files/OgliadRinkiv/SK/SB/sb_3_kv_2017.xls"><img width="50" height="50" src="<?=base_url();?>pic/pdf.jpg" alt=""></a>
											<div class="oh">
												<h2><a target="_blank" href="https://www.nfp.gov.ua/files/OgliadRinkiv/SK/SB/sb_3_kv_2017.xls">Інформація про посередницькі послуги у страхуванні та/або перестрахуванні за 9 місяців 2017 року (www.dfp.gov.ua)</a></h2>
											</div>
										</div>
										<div class="event2">
											<a class="imglink" target="_blank" href="https://www.nfp.gov.ua/files/OgliadRinkiv/SK/sk_I%D0%86%D0%86_kv_2017.pdf"><img width="50" height="50" src="<?=base_url();?>pic/pdf.jpg" alt=""></a>
											<div class="oh">
												<h2><a target="_blank" href="https://www.nfp.gov.ua/files/OgliadRinkiv/SK/sk_I%D0%86%D0%86_kv_2017.pdf">Інформація про стан і розвиток страхового ринку України за 9 місяців 2017 року (www.dfp.gov.ua)</a></h2>
											</div>
										</div>
										<div class="border4"></div>
									</div>
									
								</div>
							</div>
						</li>
						<li>
							<div class="dark_menu"><a href="#" class="nlink">ЗАКОНОДАВСТВО</a></div>
							<div class="dropdown" style="left: -9999px;">
								<div class="dropdown_content">
									<div class="col31 fl">
									<div class="h10"></div>
									<div class="textbox2"><h4><a href="<?=site_url("zakonodavstvo_zakony_ukrainy");?>">Закони України</a></h4></div>   
									<div class="border3g"></div>
									<div class="textbox2Li"><h4><a href="<?=site_url("zakonodavstvo_zagalne");?>">- Загальне</a></h4></div>   
									<div class="border3g"></div>
									<div class="textbox2Li"><h4><a href="<?=site_url("zakonodavstvo_galuzeve");?>">- Галузеве</a></h4></div>   
									<div class="border3g"></div>
									<div class="textbox2"><h4><a href="<?=site_url("zakonodavstvo_proekty_zakoniv");?>">Проекти Законів</a></h4></div>   
									<div class="border3g"></div>
									<div class="textbox2"><h4><a href="<?=site_url("zakonodavstvo_normatyvni_akty_zarubizhnyh_krain");?>">Нормативні акти зарубіжних країн</a></h4></div>   
									<div class="h10"></div>
								</div>
									
									<div class="col6 fr">  
										<div class="h10"></div>
										<h2 class="head21">ПРО ГОЛОВНЕ</h2>
										<div class="event2">
											<div class="oh">
												<h2><a target="_blank" href="http://zakon1.rada.gov.ua/cgi-bin/laws/main.cgi?nreg=2664-14&key=4/UMfPEGznhhkFW.ZiTkeV/THI4ows80msh8Ie6">Закон України «Про фінансові послуги та державне регулювання ринків фінансових послуг» вiд 12.07.2001  № 2664-III</a></h2>
											</div>
										</div>
										<div class="event2">
											<div class="oh">
												<h2><a target="_blank" href="http://zakon1.rada.gov.ua/cgi-bin/laws/main.cgi?nreg=85%2F96-%E2%F0">Закон України «Про страхування» вiд 07.03.1996  № 85/96-ВР</a></h2>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</li>
						<li>
							<div class="dark_menu"><a href="#" class="nlink">КЛІЄНТАМ СТРАХОВИХ БРОКЕРІВ</a></div>
							<div class="dropdown" style="left: -9999px;">
								<div class="dropdown_content">
									<div class="col31 fl">
										<div class="h10"></div>
										<div class="textbox2"><h4><a href="<?=site_url("klijentam_hto_takyj_strahovyj_broker");?>">Хто такий Страховий Брокер?</a></h4></div>
										<div class="border3g"></div>
										<div class="textbox2"><h4><a href="<?=site_url("klijentam_perevagy_brokera");?>">Переваги Брокера</a></h4></div>
										<div class="border3g"></div>
										<div class="textbox2"><h4><a href="<?=site_url("klijentam_identyfikacija_brokera_fspu");?>">Ідентифікація Брокера ФСПУ</a></h4></div>
										<div class="border3g"></div>
										<div class="textbox2"><h4><a href="<?=site_url("klijentam_prava_i_obovjazky_spozhyvacha");?>">Права і Обов'язки Споживача</a></h4></div>
										<div class="border3g"></div>
										<div class="textbox2"><h4><a href="<?=site_url("klijentam_zagalni_strahovi_temy");?>">Загальні страхові теми</a></h4></div>
										<div class="h10"></div>
									</div>
								
									<div class="col6 fr">  
										<div class="h10"></div>
										<div class="event2">
											<a class="imglink" href="<?=site_url("klijentam_hto_takyj_strahovyj_broker");?>" title=""><img width="50" height="50" src="<?=base_url();?>pic/inshakov.jpg" alt=""></a>
											<div class="oh">
												<h2><a href="<?=site_url("klijentam_hto_takyj_strahovyj_broker");?>">Страховий Брокер - це юридична особа, або фізична особа - підприємець, що виступає у ролі професійного страхового консультанта, якій незалежно надає послуги, для того щоб задовольнити усі Ваші страхові потреби.</a></h2>
												<span class="about">Іншаков Сергій Валерійович
											</div>
										</div>
										<div class="border4"></div>
										<div class="event2">
											<a class="imglink" href="<?=site_url("klijentam_perevagy_brokera");?>" title=""><img width="50" height="50" src="<?=base_url();?>pic/inshakov.jpg" alt=""></a>
											<div class="oh">
												<h2><a href="<?=site_url("klijentam_perevagy_brokera");?>">З Брокером, Ваші потреби стають Пріоритетними. Агенти уповноважені продавати тільки продукти компаній, на яких вони працюють.  Незалежний брокер, з іншого боку, підтримує стосунки з декількома страховими компаніями.</a></h2>
												<span class="about">Іншаков Сергій Валерійович
											</div>
										</div>
									</div>
									
								</div>         
							</div>
						</li>
						<li>
							<div class="dark_menu"><a href="<?=site_url("kodeks_profesijnoi_etyky");?>" >КОДЕКС ПРОФЕСІЙНОЇ ЕТИКИ</a></div>
						</li>
						
						
					</ul>
				</nav>
				<div class="border52"></div>