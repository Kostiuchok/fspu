<?php $this->load->view('admin/assets/header.php')?>
</head>
<body>

<!-- Content begins -->
<div id="content">
    <div class="wrapper">
      <div class="widget fluid">
        <div class="whead"><h6>Добавити участника:</h6><div class="clear"></div></div>
        <form id="add_federation" method="POST" data-name="federation" enctype="multipart/form-data" action="<?=site_url('federation/edit') ?>" class="main">
        <input type="hidden" name="federation_id" value="<?=$federation->id ?>">
        <div class="formRow">
          <div class="grid3"><label>Назва:</label></div>
          <div class="grid9"><input type="text" name="title" value="<?=htmlspecialchars_decode(html_entity_decode($federation->title));?>"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Статус :</label></div>
          <div class="grid9 noSearch">
            <select name="type" class="select">
              <option value="select">Виберіть</option>

              <option <?=($federation->type == 'Засновник Федерації')? 'selected': '';?> value="Засновник Федерації">Засновник Федерації</option>
              <option <?=($federation->type == 'Член правління')? 'selected': '';?> value="Член правління">Член правління</option>
              <option <?=($federation->type == 'Засновник Федерації,член Правління')? 'selected': '';?> value="Засновник Федерації,член Правління">Засновник Федерації,член Правління</option>
              <option <?=($federation->type == 'ТОВ')? 'selected': '';?> value="ТОВ">ТОВ</option>
              <option <?=($federation->type == 'Представництво')? 'selected': '';?> value="Представництво">Представництво</option>
              <option <?=($federation->type == 'ФОП')? 'selected': '';?> value="ФОП">ФОП</option>
            </select>
          </div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Адреса:</label></div>
          <div class="grid9"><input type="text" name="address"  value="<?=htmlspecialchars_decode(html_entity_decode($federation->address));?>"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Телефон:</label></div>
          <div class="grid9"><input type="text" name="tel"  value="<?=htmlspecialchars_decode(html_entity_decode($federation->tel));?>"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>E-mail:</label></div>
          <div class="grid9"><input type="text" name="email"  value="<?=htmlspecialchars_decode(html_entity_decode($federation->email));?>"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Сайт:</label></div>
          <div class="grid9"><input type="text" name="link"  value="<?=htmlspecialchars_decode(html_entity_decode($federation->link));?>"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Контактна особа:</label></div>
          <div class="grid9"><input type="text" name="contact"  value="<?=htmlspecialchars_decode(html_entity_decode($federation->contact));?>"></div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Порядок:</label></div>
          <div class="grid9"><input type="text" name="order"  value="<?=htmlspecialchars_decode(html_entity_decode($federation->order));?>"></div>
          <div class="clear"></div>
        </div>
        <?php if(!empty($federation->image)): ?>
        <div class="formRow">
          <div class="grid3"><label>Зображення:</label></div>
          <div class="grid3">
            <div id="img_image">
                  <img src="<?=base_url();?>img/federation/<?=$federation->image ?>" alt="" style="width:80px; max-width: 100%;">
                <br>
                <a href="#" data-photo_name="<?=$federation->image ?>" data-id="<?=$federation->id ?>" data-photo="image" data-photonum="image" class="del_img_federation buttonS bDefault mb10 mt5">Видалити</a>
            </div>  
          </div>
          <div class="grid6">
            <div style="display:none;" id="up_image">
              <a id="pickfiles_image" class="buttonS bDefault mb10 mt5" href="#">Вибрати файл</a>
              <a id="uploadfiles_image" class="buttonS bDefault mb10 mt5" href="#">Завантажити файл</a>
              <div id="filelist_image"></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>

         <?php else: ?>

        <div class="formRow">

          <div class="grid3"><label>Image:</label></div>

          <div class="grid3" style="display:none;">

            <div id="img_image">

                

            </div>  

          </div>

          <div class="grid6">

            <div id="up_image">

              <a id="pickfiles_image" class="buttonS bDefault mb10 mt5" href="#">Вибрати файл</a>

              <a id="uploadfiles_image" class="buttonS bDefault mb10 mt5" href="#">Завантажити файл</a>

              <div id="filelist_image"></div>

            </div>

          </div>

          <div class="clear"></div>

        </div>

        <?php endif; ?>
      </form>
      <div class="formRow">
        <input id="update_federation_submit" class="buttonS bDefault" value="Оновити участника" type="submit" />
        <div class="clear"></div>
      </div>
      </div>     
    
    </div>
                              
    <!-- Main content ends -->
    
</div>
<!-- Content ends -->
</body>
</html>
