<?php $this->load->view('admin/assets/header.php')?>
</head>
<body>

<!-- Content begins -->
<div id="content">
    <div class="wrapper">
      <div class="widget fluid">
        <div class="whead"><h6>Добавити участника:</h6><div class="clear"></div></div>
        <form id="add_federation" method="POST" data-name="federation" enctype="multipart/form-data" action="<?=site_url('federation/add') ?>" class="main">
        <div class="formRow">
          <div class="grid3"><label>Назва:</label></div>
          <div class="grid9"><input type="text" name="title"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Статус :</label></div>
          <div class="grid9 noSearch">
            <select name="type" class="select">
              <option value="select">Виберіть</option>
              <option value="Засновник Федерації">Засновник Федерації</option>
              <option value="Член правління">Член правління</option>
              <option value="Засновник Федерації,член Правління">Засновник Федерації,член Правління</option>
              <option value="ТОВ">ТОВ</option>
              <option value="Представництво">Представництво</option>
              <option value="ФОП">ФОП</option>
            </select>
          </div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Адреса:</label></div>
          <div class="grid9"><input type="text" name="address"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Телефон:</label></div>
          <div class="grid9"><input type="text" name="tel"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>E-mail:</label></div>
          <div class="grid9"><input type="text" name="email"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Сайт:</label></div>
          <div class="grid9"><input type="text" name="link"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Контактна особа:</label></div>
          <div class="grid9"><input type="text" name="contact"></div>
          <div class="clear"></div>
        </div>
         <div class="formRow">
          <div class="grid3"><label>Порядок:</label></div>
          <div class="grid9"><input type="text" name="order"></div>
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
        <input id="add_federation_submit" class="buttonS bDefault" value="Добавити участника" type="submit" />
        <div class="clear"></div>
      </div>
      </div>     
    
    </div>
                              
    <!-- Main content ends -->
    
</div>
<!-- Content ends -->
</body>
</html>
