<?php $this->load->view('admin/assets/header.php')?>
</head>
<body>

<!-- Content begins -->
<div id="content">
    <div class="wrapper">
      <div class="widget fluid">
        <div class="whead"><h6>Добавити ЗМІ:</h6><div class="clear"></div></div>
        <form id="add_smi" method="POST" data-name="smi" enctype="multipart/form-data" action="<?=site_url('smi/edit_smi') ?>" class="main">
        <input type="hidden" name="smi_id" value="<?=$smi->id ?>">
        <div class="formRow">
          <div class="grid3"><label>Назва:</label></div>
          <div class="grid9"><input type="text" name="title" value="<?=htmlspecialchars_decode(html_entity_decode($smi->title));?>"></div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Сайт:</label></div>
          <div class="grid9"><input type="text" name="link" value="<?=htmlspecialchars_decode(html_entity_decode($smi->link));?>"></div>
          <div class="clear"></div>
        </div>
        <?php if(!empty($smi->image)): ?>
        <div class="formRow">
          <div class="grid3"><label>Зображення:</label></div>
          <div class="grid3">
            <div id="img_image">
                  <img src="<?=base_url();?>img/smi/<?=$smi->image ?>" alt="" style="width:80px; max-width: 100%;">
                <br>
                <a href="#" data-photo_name="<?=$smi->image ?>" data-id="<?=$smi->id ?>" data-photo="image" data-photonum="image" class="del_img_smi buttonS bDefault mb10 mt5">Видалити</a>
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
        <input id="update_smi_submit" class="buttonS bDefault" value="Оновити джерело" type="submit" />
        <div class="clear"></div>
      </div>
      </div>     
    
    </div>
                              
    <!-- Main content ends -->
    
</div>
<!-- Content ends -->
</body>
</html>
