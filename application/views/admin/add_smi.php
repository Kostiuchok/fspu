<?php $this->load->view('admin/assets/header.php')?>
</head>
<body>

<!-- Content begins -->
<div id="content">
    <div class="wrapper">
      <div class="widget fluid">
        <div class="whead"><h6>Добавити ЗМІ:</h6><div class="clear"></div></div>
        <form id="add_smi" method="POST" data-name="smi" enctype="multipart/form-data" action="<?=site_url('smi/add_smi') ?>" class="main">
        <div class="formRow">
          <div class="grid3"><label>Назва:</label></div>
          <div class="grid9"><input type="text" name="title"></div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
          <div class="grid3"><label>Сайт:</label></div>
          <div class="grid9"><input type="text" name="link"></div>
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
              <a id="pickfiles_image" class="buttonS bDefault mb10 mt5" href="#">Выбрати файл</a>
              <a id="uploadfiles_image" rel="" class="buttonS bDefault mb10 mt5" href="#">Загрузити файл</a>
              <div id="filelist_image"></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </form>
      <div class="formRow">
        <input id="add_smi_submit" class="buttonS bDefault" value="Добавити джерело" type="submit" />
        <div class="clear"></div>
      </div>
      </div>     
    
    </div>
                              
    <!-- Main content ends -->
    
</div>
<!-- Content ends -->
</body>
</html>
