$(document).on("click","#add_news_submit",add_news);
$(document).on("click",".delete_news",delete_news);
$(document).on("click","#update_news_submit",update_news);
$(document).on("click","#add_federation_submit",add_federation);
$(document).on("click",".delete_federation",delete_federation);
$(document).on("click","#update_federation_submit",update_federation);
$(document).on("click","#add_smi_submit",add_smi);
$(document).on("click",".delete_smi",delete_smi);
$(document).on("click","#update_smi_submit",update_smi);
$(document).on("click",".del_img_news",del_img_news);
$(document).on("click",".del_img_smi",del_img_smi);
$(document).on("click",".del_img_federation",del_img_federation);


function add_news(){
  
  var data = $('#add_news').serialize();
  $.ajax({type:'post',
          url: base_url+'admin/news/add',
          data: data,
          dataType:'json',
          async: false,
          error: function(){alert("Помилка завантаження форми")},
          success: function(data){
            if(data.status == 1){
              alert(data.msg);
              window.location.href = base_url+'admin/news';
            }
            else{
              var mess = data.msg+'\n';
              for(var key in data.input) {
                if(data.input[key] != ''){mess = mess+data.input[key]+'\n';}
              }
              alert(mess); 
            }
          }
  });
    
}

function update_news(){
  var data = $('#add_news').serialize();
  console.log(data);
  $.ajax({type:'post',
           url: base_url+'admin/news/update',
          data: data,
      dataType:'json',
         async: false,
         error: function(){alert("Помилка завантаження форми")},
       success: function(data){
            if(data.status == 1){
              alert(data.msg);
              window.location.href = base_url+'admin/news';
            }
            else{
               var mess = data.msg+'\n';
               for(var key in data.input) {
                 if(data.input[key] != ''){mess = mess+data.input[key]+'\n';}
               }
              alert(mess); 
            }
          }
          });
}

function delete_news(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Ви впененні, що хочете видалит новину")){
      $.ajax({type:'post',
           url: base_url+'admin/news/delete',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 alert("Новина видалена");
                 window.location.reload();
               }
          }
      });
   }  
}

function add_federation(){
  
  var data = $('#add_federation').serialize();
  console.log(data);
  $.ajax({type:'post',
          url: base_url+'admin/federation/add',
          data: data,
          dataType:'json',
          async: false,
          error: function(){alert("Помилка завантаження форми")},
          success: function(data){
            if(data.status == 1){
              alert(data.msg);
              window.location.href = base_url+'admin/federation';
            }
            else{
              var mess = data.msg+'\n';
              for(var key in data.input) {
                if(data.input[key] != ''){mess = mess+data.input[key]+'\n';}
              }
              alert(mess); 
            }
          }
  });
    
}

function update_federation(){
  var data = $('#add_federation').serialize();
  $.ajax({type:'post',
           url: base_url+'admin/federation/update',
          data: data,
      dataType:'json',
         async: false,
         error: function(){alert("Помилка завантаження форми")},
       success: function(data){
            if(data.status == 1){
              alert(data.msg);
              window.location.href = base_url+'admin/federation';
            }
            else{
               var mess = data.msg+'\n';
               for(var key in data.input) {
                 if(data.input[key] != ''){mess = mess+data.input[key]+'\n';}
               }
              alert(mess); 
            }
          }
          });
}

function delete_federation(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Ви впененні, що хочете видалити участника")){
      $.ajax({type:'post',
           url: base_url+'admin/federation/delete',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 alert("Участник видалений");
                 window.location.reload();
               }
          }
      });
   }  
}

function add_smi(){
  
  var data = $('#add_smi').serialize();
  console.log(data);
  $.ajax({type:'post',
          url: base_url+'admin/smi/add',
          data: data,
          dataType:'json',
          async: false,
          error: function(){alert("Помилка завантаження форми")},
          success: function(data){
            if(data.status == 1){
              alert(data.msg);
              window.location.href = base_url+'admin/smi';
            }
            else{
              var mess = data.msg+'\n';
              for(var key in data.input) {
                if(data.input[key] != ''){mess = mess+data.input[key]+'\n';}
              }
              alert(mess); 
            }
          }
  });
    
}

function update_smi(){
  var data = $('#add_smi').serialize();
  $.ajax({type:'post',
           url: base_url+'admin/smi/update',
          data: data,
      dataType:'json',
         async: false,
         error: function(){alert("Помилка завантаження форми")},
       success: function(data){
            if(data.status == 1){
              alert(data.msg);
              window.location.href = base_url+'admin/smi';
            }
            else{
               var mess = data.msg+'\n';
               for(var key in data.input) {
                 if(data.input[key] != ''){mess = mess+data.input[key]+'\n';}
               }
              alert(mess); 
            }
          }
          });
}

function delete_smi(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Ви впененні, що хочете видалити ЗМІ")){
      $.ajax({type:'post',
           url: base_url+'admin/smi/delete',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 alert("ЗМІ видалені");
                 location.reload();
               }
          }
      });
   }  
}

function del_img_news(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var news_id = obj.data("id");
  var photo = obj.data("photo");
  var photo_name = obj.data("photo_name");
  var num = obj.data("photonum");
  $.ajax({type:'post',
           url: base_url+'admin/news/del_img_from_news',
          data: {"news_id" : news_id, "photo" : photo, "photo_name": photo_name},
      dataType:'json',
         async: false,
         error: function(){alert("Error")},
       success: function(data){
            if(data.status == "ok"){
              alert("Фото було видалене");
              $("#img_"+photo).html('').hide();
              $("#up_"+photo).show();
              
              var uploader_ph = new plupload.Uploader({
      runtimes : 'html5,html4',
      browse_button : 'pickfiles_'+photo,
      container : 'up_'+photo,
      max_file_size : '15mb',
      unique_names : true,
      url : base_url+'admin/upload',
      filters : [
        {title : "Image files", extensions : "jpg,jpeg,gif,png"}
      ]
    });
    $('#uploadfiles_'+photo).click(function(e) {
      uploader_ph.start();
      e.preventDefault();
    });
    
    uploader_ph.init();
    
    uploader_ph.bind('FilesAdded', function(up, files) {
      if(up.files.length > 1){
         alert('Only 1 foto');
         uploader_ph_1.removeFile(files[0]);
       }
       else{
        $.each(files, function(i, file) {
          $('#filelist_'+photo).append(
            '<div id="' + file.id + '">' +
            file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
          '</div>');
        });
       }
    });
    
    uploader_ph.bind('UploadProgress', function(up, file) {
      $('#' + file.id + " b").html(file.percent + "%");
    });
  
    uploader_ph.bind('Error', function(up, err) {
      $('#filelist_'+photo).append("<div>Error: " + err.code +
        ", Message: " + err.message +
        (err.file ? ", File: " + err.file.name : "") +
        "</div>"
      );
  
    });
  
    uploader_ph.bind('FileUploaded', function(up, file) {
      $('#' + file.id + " b").html("100%");
      $('#add_news').append('<input type="hidden" name="uploader_news_'+num+'_tmpname" value="'+file.target_name+'">');
      /*console.log(file);*/
    });
              
            }
            else{
              alert("Error"); 
            }
       }
  });
}

function del_img_smi(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var smi_id = obj.data("id");
  var photo = obj.data("photo");
  var photo_name = obj.data("photo_name");
  var num = obj.data("photonum");
  $.ajax({type:'post',
           url: base_url+'admin/smi/del_img_from_smi',
          data: {"smi_id" : smi_id, "photo" : photo, "photo_name": photo_name},
      dataType:'json',
         async: false,
         error: function(){alert("Error")},
       success: function(data){
            if(data.status == "ok"){
              alert("Фото було видалене");
              $("#img_"+photo).html('').hide();
              $("#up_"+photo).show();
              
              var uploader_ph = new plupload.Uploader({
      runtimes : 'html5,html4',
      browse_button : 'pickfiles_'+photo,
      container : 'up_'+photo,
      max_file_size : '15mb',
      unique_names : true,
      url : base_url+'admin/upload',
      filters : [
        {title : "Image files", extensions : "jpg,jpeg,gif,png"}
      ]
    });
    $('#uploadfiles_'+photo).click(function(e) {
      uploader_ph.start();
      e.preventDefault();
    });
    
    uploader_ph.init();
    
    uploader_ph.bind('FilesAdded', function(up, files) {
      if(up.files.length > 1){
         alert('Only 1 foto');
         uploader_ph_1.removeFile(files[0]);
       }
       else{
        $.each(files, function(i, file) {
          $('#filelist_'+photo).append(
            '<div id="' + file.id + '">' +
            file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
          '</div>');
        });
       }
    });
    
    uploader_ph.bind('UploadProgress', function(up, file) {
      $('#' + file.id + " b").html(file.percent + "%");
    });
  
    uploader_ph.bind('Error', function(up, err) {
      $('#filelist_'+photo).append("<div>Error: " + err.code +
        ", Message: " + err.message +
        (err.file ? ", File: " + err.file.name : "") +
        "</div>"
      );
  
    });
  
    uploader_ph.bind('FileUploaded', function(up, file) {
      $('#' + file.id + " b").html("100%");
      $('#add_smi').append('<input type="hidden" name="uploader_smi_'+num+'_tmpname" value="'+file.target_name+'">');
      /*console.log(file);*/
    });
              
            }
            else{
              alert("Error"); 
            }
       }
  });
}

function del_img_federation(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var federation_id = obj.data("id");
  var photo = obj.data("photo");
  var photo_name = obj.data("photo_name");
  var num = obj.data("photonum");
  $.ajax({type:'post',
           url: base_url+'admin/federation/del_img_from_federation',
          data: {"federation_id" : federation_id, "photo" : photo, "photo_name": photo_name},
      dataType:'json',
         async: false,
         error: function(){alert("Error")},
       success: function(data){
            if(data.status == "ok"){
              alert("Фото було видалене");
              $("#img_"+photo).html('').hide();
              $("#up_"+photo).show();
              
              var uploader_ph = new plupload.Uploader({
      runtimes : 'html5,html4',
      browse_button : 'pickfiles_'+photo,
      container : 'up_'+photo,
      max_file_size : '15mb',
      unique_names : true,
      url : base_url+'admin/upload',
      filters : [
        {title : "Image files", extensions : "jpg,jpeg,gif,png"}
      ]
    });
    $('#uploadfiles_'+photo).click(function(e) {
      uploader_ph.start();
      e.preventDefault();
    });
    
    uploader_ph.init();
    
    uploader_ph.bind('FilesAdded', function(up, files) {
      if(up.files.length > 1){
         alert('Only 1 foto');
         uploader_ph_1.removeFile(files[0]);
       }
       else{
        $.each(files, function(i, file) {
          $('#filelist_'+photo).append(
            '<div id="' + file.id + '">' +
            file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
          '</div>');
        });
       }
    });
    
    uploader_ph.bind('UploadProgress', function(up, file) {
      $('#' + file.id + " b").html(file.percent + "%");
    });
  
    uploader_ph.bind('Error', function(up, err) {
      $('#filelist_'+photo).append("<div>Error: " + err.code +
        ", Message: " + err.message +
        (err.file ? ", File: " + err.file.name : "") +
        "</div>"
      );
  
    });
  
    uploader_ph.bind('FileUploaded', function(up, file) {
      $('#' + file.id + " b").html("100%");
      $('#add_federation').append('<input type="hidden" name="uploader_federation_'+num+'_tmpname" value="'+file.target_name+'">');
      /*console.log(file);*/
    });
              
            }
            else{
              alert("Error"); 
            }
       }
  });
}