<?php $this->load->view('admin/assets/header.php')?>
</head>
<body>
<!-- Content begins -->
<div id="content">
    <div class="wrapper">
      <div class="widget fluid">
        <div class="whead"><h6>Добавити новину:</h6><div class="clear"></div></div>
        <form id="add_news" method="POST" data-name="news" enctype="multipart/form-data" action="<?=site_url('news/edit') ?>" class="main">
        <input type="hidden" name="news_id" value="<?=$news->id ?>">
        <div class="formRow">
          <div class="grid3"><label>Назва:</label></div>
          <div class="grid9"><input type="text" name="title" value="<?=htmlspecialchars_decode(html_entity_decode($news->title));?>"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3">Текст:</label></div>
          <div class="grid9">
            <div class="widget">
              <div class="whead"><h6>Введіть бриф с форматуванням</h6><div class="clear"></div></div>
              <textarea class="editor" name="brif" rows="" cols="16"><?=htmlspecialchars_decode(html_entity_decode($news->brif));?></textarea>
            </div>

          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3">Текст:</label></div>
          <div class="grid9">
            <div class="widget">
              <div class="whead"><h6>Введіть текст с форматуванням</h6><div class="clear"></div></div>
              <textarea class="editor" name="text" rows="" cols="16"><?=htmlspecialchars_decode(html_entity_decode($news->text));?></textarea>
            </div>

          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Дата:</label></div>
          <div class="grid9"><input type="text" name="date" value="<?=$news->date;?>" class="datepicker" /></div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Джерело:</label></div>
          <div class="grid9 noSearch">
            <select name="source" class="select">
              <option value="select">Виберіть</option>
              <?php if(!empty($source_fed)): ?>
              <?php foreach($source_fed as $item): ?>
                <?if($news->source == 'federation-'.$item->id):?>
                <option value="federation-<?=$item->id ?>" selected><?=htmlspecialchars_decode(html_entity_decode($item->title)); ?></option>
                <?else:?>
                <option value="federation-<?=$item->id ?>"><?=htmlspecialchars_decode(html_entity_decode($item->title)); ?></option>
                <?endif;?>
              <?php endforeach; ?>
              <?php endif; ?>
              <?php if(!empty($source_smi)): ?>
              <?php foreach($source_smi as $item): ?>
               <?if($news->source == 'smi-'.$item->id):?>
                <option value="smi-<?=$item->id ?>" selected><?=htmlspecialchars_decode(html_entity_decode($item->title));?> ?></option>
                <?else:?>
                <option value="smi-<?=$item->id ?>"><?=htmlspecialchars_decode(html_entity_decode($item->title)); ?></option>
                <?endif;?>
              <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="clear"></div>
        </div>
        <?php if(!empty($news->image)): ?>
        <div class="formRow">
          <div class="grid3"><label>Зображення:</label></div>
          <div class="grid3">
            <div id="img_image">
                  <img src="<?=base_url();?>img/news/<?=$news->image ?>" alt="" style="width:80px; max-width: 100%;">
                <br>
                <a href="#" data-photo_name="<?=$news->image ?>" data-id="<?=$news->id ?>" data-photo="image" data-photonum="image" class="del_img_news buttonS bDefault mb10 mt5">Видалити</a>

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
        <input id="update_news_submit" class="buttonS bDefault" value="Оновити новину" type="submit" />
        <div class="clear"></div>
      </div>
      </div>     
    
    </div>
                              
    <!-- Main content ends -->
    
</div>
<!-- Content ends -->
</body>
</html>
