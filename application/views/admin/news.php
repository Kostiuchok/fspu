<?php $this->load->view('admin/assets/header.php')?>

</head>

<body>

<!-- Top line begins -->

<div id="top">

    <div class="wrapper">

        <a href="<?=base_url();?>" target="_blank" title="" class="logo"><img style="max-width:75px;" src="<?=base_url()?>img/fspu-logo.png" alt="" /></a>

        

        <!-- Right top nav -->

        <div class="topNav">

        <?php $this->load->view('admin/assets/right_top_nav.php')?>    

        </div>

        <div class="clear"></div>

    </div>

</div>

<!-- Top line ends -->


<!-- Sidebar begins -->

<div id="sidebar">

    <div class="mainNav">

    <?php $this->load->view('admin/assets/main_nav.php')?>    

    </div>


</div>

<!-- Sidebar ends -->


<!-- Content begins -->

<div id="content">

    <div class="contentTop">

    </div> 



    <div class="wrapper">

      <div class="fluid">
        <div class="grid4">&nbsp;</div>
        <div class="grid4">
          <a href="<?=site_url('admin/news/add_news');?>" title="" class="sideB bGreyish mt10">Добавити новину</a>
        </div>
        <div class="grid4"></div>

        <div class="clear"></div>
      </div>

      <div class="widget">

            <div class="whead"><h6>&nbsp;</h6><div class="clear"></div></div>
           
            <div id="dyn" class="hiddenpars">

                <a class="tOptions" title="Options"><img src="<?=base_url()?>img/admin/icons/options" alt="" /></a>

                <table cellpadding="0" cellspacing="0" border="0" id="news_data_table">

                  <thead>

                    <tr>
                      <th>Фото</th>

                      <th>Назва<span class="sorting" style="display: block;"></span></th>

                      <th>Бриф</th>

                      <th>Дата</th>

                      <th>Джерело</th>

                      <th>Дії</th>

                    </tr>

                  </thead>

                <tbody id="news">

                <?php if(!empty($news)):?>

                <?php foreach($news as $item): ?>

                  <tr class="gradeA">

                    <td style="vertical-align:top;">
                      <?if($item->image):?>
                      <a href="<?=site_url('admin/news/edit/'.$item->id);?>"><img style="max-height:200px;" src="<?=base_url();?>img/news/<?=$item->image ?>"></a></td>
                      <?endif;?>
                    <td style="vertical-align:top;"><a href="<?=site_url('admin/news/edit/'.$item->id);?>"><?=$item->title ?></a></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->brif)); ?></td>

                    <td style="vertical-align:top;"><span style="display:none;"><?=strtotime($item->date);?></span><?=date("d-m-Y", strtotime($item->date)); ?></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->source)); ?></td>
                    
                    <td style="vertical-align:top;">

                        <a href="#" data-id="<?=$item->id ?>" class="delete_news tablectrl_small bDefault tipS" original-title="Видалити">
                          <span class="iconb" data-icon=""></span>
                        </a>

                    </td>

                </tr>

                <?php endforeach; ?>

                <?php endif; ?>

                </ul>

                </tbody>

                </table> 

            </div>

            <div class="clear"></div> 

        </div> 

    </div>  

    

                    

                

    <!-- Main content ends -->

    

</div>

<!-- Content ends -->

</body>

</html>

