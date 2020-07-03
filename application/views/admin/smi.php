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
          <a href="<?=site_url('admin/smi/add_smi');?>" title="" class="sideB bGreyish mt10">Добавити ЗМІ</a>
        </div>
        <div class="grid4"></div>

        <div class="clear"></div>
      </div>

      <div class="widget">

            <div class="whead"><h6>&nbsp;</h6><div class="clear"></div></div>

            <div id="dyn" class="hiddenpars">

                <a class="tOptions" title="Options"><img src="<?=base_url()?>img/admin/icons/options" alt="" /></a>

                <table cellpadding="0" cellspacing="0" border="0" class="dTable" id="smi_data_table">

                  <thead>

                    <tr>

                      <th>Фото</th>

                      <th>Назва<span class="sorting" style="display: block;"></span></th>

                      <th>Сайт</th>

                      <th>Дії</th>

                    </tr>

                  </thead>

                <tbody id="smi">

                <?php if(!empty($smi)):?>

                <?php foreach($smi as $item): ?>

                  <tr class="gradeA">

                    <td style="vertical-align:top;" align="center"><a href="<?=site_url('admin/smi/edit/'.$item->id);?>"><img style="height:25px;width:25px;" src="<?=base_url();?>img/smi/<?=$item->image;?>"></a></td>

                    <td style="vertical-align:top;"><a href="<?=site_url('admin/smi/edit/'.$item->id);?>"><?=htmlspecialchars_decode(html_entity_decode($item->title)); ?></a></td>
                    <? $l = parse_url($item->link);?>
                    <?if (array_key_exists('scheme', $l)):?>
                    <td style="vertical-align:top;"><?=$item->link ?></td>
                    <?else:?>
                    <td style="vertical-align:top;">http://<?=$item->link ?></td>
                    <?endif;?>
                    <td style="vertical-align:top;">
                        <a href="#" data-id="<?=$item->id ?>" class="delete_smi tablectrl_small bDefault tipS" original-title="Удалить">
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

