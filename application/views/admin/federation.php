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
          <a href="<?=site_url('admin/federation/add_federation');?>" title="" class="sideB bGreyish mt10">Добавити участника</a>
        </div>
        <div class="grid4"></div>

        <div class="clear"></div>
      </div>

      <div class="widget">

            <div class="whead"><h6>&nbsp;</h6><div class="clear"></div></div>

            <div id="dyn" class="hiddenpars">

                <a class="tOptions" title="Options"><img src="<?=base_url()?>img/admin/icons/options" alt="" /></a>

                <table cellpadding="0" cellspacing="0" border="0" class="dTable" id="federation_data_table">

                  <thead>

                    <tr>
                      <th>Фото</th>

                      <th>Назва<span class="sorting" style="display: block;"></span></th>

                      <th>Статус</th>

                      <th>Адреса</th>

                      <th>Тел</th>

                      <th>E-mail</th>
                      
                      <th>Сайт</th>

                      <th>Контакт</th>

                       <th>Порядок</th>

                      <th>Дії</th>

                    </tr>

                  </thead>

                <tbody id="federation">

                <?php if(!empty($federation)):?>

                <?php foreach($federation as $item): ?>

                  <tr class="gradeA">

                    <td style="vertical-align:top;"><a href="<?=site_url('admin/federation/edit/'.$item->id);?>"><img style="width:50px;height:50px;" src="<?=base_url();?>img/federation/<?=$item->image ?>"></a></td>

                    <td style="vertical-align:top;"><a href="<?=site_url('admin/federation/edit/'.$item->id);?>"><?=htmlspecialchars_decode(html_entity_decode($item->title)); ?></a></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->type)); ?></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->address)); ?></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->tel)); ?></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->email)); ?></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->link)); ?></td>

                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->contact)); ?></td>
                    
                    <td style="vertical-align:top;"><?=htmlspecialchars_decode(html_entity_decode($item->order)); ?></td>

                    <td style="vertical-align:top;">
                        <a href="#" data-id="<?=$item->id ?>" class="delete_federation tablectrl_small bDefault tipS" original-title="Видалити">
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

