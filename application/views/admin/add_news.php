<?php $this->load->view('admin/assets/header.php')?>
</head>
<body>

<!-- Content begins -->
<div id="content">
    <div class="wrapper">
      <div class="widget fluid">
        <div class="whead"><h6>Добавити новину:</h6><div class="clear"></div></div>
        <form id="add_news" method="POST" data-name="news" enctype="multipart/form-data" action="<?=site_url('news/add') ?>" class="main">
        <div class="formRow">
          <div class="grid3"><label>Назва:</label></div>
          <div class="grid9"><input type="text" name="title"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3">Текст:</label></div>
          <div class="grid9">
            <div class="widget">
              <div class="whead"><h6>Введіть бриф с форматуванням</h6><div class="clear"></div></div>
              <textarea class="editor" name="brif" rows="" cols="16"></textarea>
            </div>

          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3">Текст:</label></div>
          <div class="grid9">
            <div class="widget">
              <div class="whead"><h6>Введіть текст с форматуванням</h6><div class="clear"></div></div>
              <textarea class="editor" name="text" rows="" cols="16"></textarea>
            </div>

          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Дата:</label></div>
          <div class="grid9"><input type="text" name="date" class="datepicker" /></div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Джерело:</label></div>
          <div class="grid9 noSearch">
            <select name="source" class="select">
              <option value="select">Виберіть</option>
              <?php if(!empty($source_fed)): ?>
              <?php foreach($source_fed as $item): ?>
              <option value="federation-<?=$item->id ?>"><?=$item->title ?></option>
              <?php endforeach; ?>
              <?php endif; ?>
              <?php if(!empty($source_smi)): ?>
              <?php foreach($source_smi as $item): ?>
              <option value="smi-<?=$item->id ?>"><?=$item->title ?></option>
              <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Зображення:</label></div>
          <div class="grid3" style="display:none;">
            <div id="img_image">
                
            </div>  
          </div>
          <div class="grid6">
            <div id="up_image">
              <a id="pickfiles_image" class="buttonS bDefault mb10 mt5" href="#">Вибрати файл</a>
              <a id="uploadfiles_image" rel="" class="buttonS bDefault mb10 mt5" href="#">Загрузити файл</a>
              <div id="filelist_image"></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </form>
      <div class="formRow">
        <input id="add_news_submit" class="buttonS bDefault" value="Добавити новину" type="submit" />
        <div class="clear"></div>
      </div>
      </div>     
    
    </div>
                              
    <!-- Main content ends -->
    
</div>
<!-- Content ends -->
</body>
</html>
