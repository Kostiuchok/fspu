$(document).on("change","#transactions_category,#transactions_timeframe",get_projects_transactions);
$(document).on("change","#projects_category_count_fixed,#projects_timeframe_count_fixed",get_projects_fixed_count);
$(document).on("change","#projects_category_count_flex,#projects_timeframe_count_flex",get_projects_flex_count);
$(document).on("change","#active_projects_category,#active_projects_type,#active_projects_states,#active_projects_timeframe",get_active_projects_list);
$(document).on("change","#funded_projects_category,#funded_projects_type,#funded_projects_states,#funded_projects_timeframe",get_funded_projects_list);
$(document).on("change","#not_funded_projects_category,#not_funded_projects_type,#not_funded_projects_states,#not_funded_projects_timeframe",get_not_funded_projects_list);
$(document).on("change","#rejected_projects_category,#rejected_projects_type,#rejected_projects_states,#rejected_projects_timeframe",get_rejected_projects_list);
$(document).on("click",".delete_project",delete_project);
$(document).on("click",".reject_project",reject_project);
$(document).on("click",".delete_comment",delete_comment);
$(document).on("click",".delete_sub",delete_subscriber);
$(document).on("click",".delete_user",delete_user);
$(document).on("click",".delete_story",delete_story);
$(document).on("click",".delete_slide",delete_cwl_slide);
$(document).on("click",".del_img_story",del_img_story);
$(document).on("change","#wish_category_count,#wish_timeframe_count",get_wish_count);
$(document).on("change","#wish_projects_category,#wish_projects_states,#wish_projects_timeframe",get_wish_projects_list);
$(document).on("change","#success_wish_projects_category,#success_wish_projects_states,#success_wish_projects_status,#success_wish_projects_timeframe",get_success_wish_projects_list);
$(document).on("change","#count_users_timeframe",get_users_count);
$(document).on("change","#story_category,#story_states",get_story_list);
$(document).on("change","input[name='zip']",get_geo);
$(document).on("click","#add_story_submit",add_story);
$(document).on("click","#update_story_submit",update_story);
$(document).on("change","input[name^='paid_']",change_paid_status);
$(document).on("click","#update_project_submit",update_project);
$(document).on("click",".del_kudos",del_kudos);
$(document).on("click",".add_kudos",add_kudos);
$(document).on("click","#add_cwl_slide",add_cwl_slide);
$(document).on("click","#update_cwl_slide",update_cwl_slide);

function get_projects_transactions(){

  var category = $('#transactions_category').val();
  var timeframe = $('#transactions_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/transactions/load_get_projects_filter',
          data: {category: category,timeframe: timeframe},
      dataType:'json',
         async: false,
       success: function(data){
            $('#transactions_project_table_tbody').html('<tr class="center"><td>'+data.category_name+'</td><td>$'+data.t_fixed+'</td><td>$'+data.f_fixed+'</td><td>$'+data.a_fixed+'</td><td>$'+data.t_flexible+'</td><td>$'+data.f_flexible+'</td><td>$'+data.a_flexible+'</td></tr>');
       }
  });

}

function get_projects_fixed_count(){

  var category = $('#projects_category_count_fixed').val();
  var timeframe = $('#projects_timeframe_count_fixed').val();
  $.ajax({type:'post',
           url: base_url+'admin/projects/load_get_projects_fixed_count',
          data: {category: category,timeframe: timeframe},
      dataType:'json',
         async: false,
       success: function(data){
            /*console.log(data);*/
            if(data != ''){
               
              $('#num_all_t_fix').html('#'+data.num_all_t_fix);
              $('#num_all_a_fix').html('#'+data.num_all_a_fix);
              $('#num_all_f_fix').html('#'+data.num_all_f_fix);
              $('#num_all_nf_fix').html('#'+data.num_all_nf_fix);
              $('#num_all_r_fix').html('#'+data.num_all_r_fix);
            }
       }
  });

}

function get_projects_flex_count(){

  var category = $('#projects_category_count_flex').val();
  var timeframe = $('#projects_timeframe_count_flex').val();
  $.ajax({type:'post',
           url: base_url+'admin/projects/load_get_projects_flex_count',
          data: {category: category,timeframe: timeframe},
      dataType:'json',
         async: false,
       success: function(data){
            /*console.log(data);*/
            if(data != ''){
              $('#num_all_t_flex').html('#'+data.num_all_t_flex);
              $('#num_all_a_flex').html('#'+data.num_all_a_flex);
              $('#num_all_f_flex').html('#'+data.num_all_f_flex);
              $('#num_all_nf_flex').html('#'+data.num_all_nf_flex);
              $('#num_all_r_flex').html('#'+data.num_all_r_flex);
            }
       }
  });

}

function get_active_projects_list(){
  var type = $('#active_projects_type').val();
  var category = $('#active_projects_category').val();
  var states = $('#active_projects_states').val();
  var timeframe = $('#active_projects_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/active_projects/load_get_projects_list',
          data: {type: type, category: category, states: states, timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#active_projects_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#active_projects_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#active_projects_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/projects_details/index/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.percent_comp,
                 '$'+val.amounts,
                 '$'+val.goal,
                 val.days_left,
                 '<a target="_blank" href="'+base_url+'projects/view/'+val.url+'">Link</a>',
                 '<a href="#" data-id="'+val.id+'" class="reject_project tablectrl_small bDefault tipS" original-title="Reject"><span class="iconb" data-icon="R"></span></a><a href="#" class="delete_project tablectrl_small bDefault tipS" data-id="'+val.id+'" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function get_funded_projects_list(){
  var type = $('#funded_projects_type').val();
  var category = $('#funded_projects_category').val();
  var states = $('#funded_projects_states').val();
  var timeframe = $('#funded_projects_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/funded_projects/load_get_projects_list',
          data: {type: type, category: category, states: states, timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#funded_projects_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#funded_projects_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
               if(val.paid == '1'){
                 val.check = 'checked="checked"';
               }
               else{
                  val.check = '';
               }
	             $('#funded_projects_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/projects_details/index/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.percent_comp,
                 '$'+val.amounts,
                 '$'+val.goal,
                 '<input style="margin:25%;" type="checkbox" id="check21" data-id="'+val.id+'" name="paid_'+val.id+'" '+val.check+'/>',
                 '<a target="_blank" href="'+base_url+'projects/view/'+val.url+'">Link</a>',
                 '<a href="#" class="delete_project tablectrl_small bDefault tipS" data-id="'+val.id+'" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function get_not_funded_projects_list(){
  var type = $('#not_funded_projects_type').val();
  var category = $('#not_funded_projects_category').val();
  var states = $('#not_funded_projects_states').val();
  var timeframe = $('#not_funded_projects_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/not_funded_projects/load_get_projects_list',
          data: {type: type, category: category, states: states, timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#not_funded_projects_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#not_funded_projects_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#not_funded_projects_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/projects_details/index/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.percent_comp,
                 '$'+val.amounts,
                 '$'+val.goal,
                 '<a target="_blank" href="'+base_url+'projects/view/'+val.url+'">Link</a>',
                 '<a href="#" class="delete_project tablectrl_small bDefault tipS" data-id="'+val.id+'" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function get_rejected_projects_list(){
  var type = $('#rejected_projects_type').val();
  var category = $('#rejected_projects_category').val();
  var states = $('#rejected_projects_states').val();
  var timeframe = $('#rejected_projects_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/rejected_projects/load_get_projects_list',
          data: {type: type, category: category, states: states, timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#rejected_projects_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#rejected_projects_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#rejected_projects_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/projects_details/index/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.percent_comp,
                 '$'+val.amounts,
                 '$'+val.goal,
                 '<a target="_blank" href="'+base_url+'projects/view/'+val.url+'">Link</a>',
                 '<a href="#" class="delete_project tablectrl_small bDefault tipS" data-id="'+val.id+'" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function delete_project(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to remove project")){
      $.ajax({type:'post',
           url: base_url+'admin/manage_projects/load_delete_project',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 $('#active_projects_timeframe').change();
                 $('#funded_projects_timeframe').change();
                 $('#not_funded_projects_timeframe').change();
                 $('#rejected_projects_timeframe').change();
               }
          }
      });
   }  
}

function reject_project(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to reject project")){
      $.ajax({type:'post',
           url: base_url+'admin/manage_projects/load_reject_project',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 $('#active_projects_timeframe').change();
               }
          }
      });
   }  
}

function delete_subscriber(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var subs = obj.data("subs");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to delete subscriber")){
      $.ajax({type:'post',
           url: base_url+'admin/subscribers/load_delete_subscriber',
          data: {id: id, subs: subs},
      dataType:'json',
         async: false,
       success: function(data){
               if(data.status == 'ok'){
                window['get_subscribers_list']();
               }
          }
      });
   }  
}

function delete_user(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to delete user")){
      $.ajax({type:'post',
           url: base_url+'admin/manage_users/load_delete_user',
          data: {id: id},
      dataType:'json',
         async: false,
       success: function(data){
               if(data.status == 'ok'){
                location.reload();
               }
          }
      });
   }  
}

function delete_comment(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var project_id = obj.data("project_id");
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to delete comment")){
      $.ajax({type:'post',
           url: base_url+'admin/manage_comments/load_delete_comment',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 window['get_comments_list'](project_id);
               }
          }
      });
   }  
}

function delete_story(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to delete story")){
      $.ajax({type:'post',
           url: base_url+'admin/manage_story/load_delete_story',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 $('#story_category').change();
               }
          }
      });
   }  
}

function delete_cwl_slide(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("id");
  var table = obj.parents("table").attr("id");
  if(confirm("Are you sure you want to delete slide")){
      $.ajax({type:'post',
           url: base_url+'admin/cwl_slides/load_delete_slide',
          data: {id: id},
      dataType:'html',
         async: false,
       success: function(data){
               if(data == 'ok'){
                 $('#slide_category').change();
               }
          }
      });
   }  
}
function get_wish_count(e){
  var category = $('#wish_category_count').val();
  var timeframe = $('#wish_timeframe_count').val();
  $.ajax({type:'post',
           url: base_url+'admin/wishlist/load_get_projects_count',
          data: {category: category,timeframe: timeframe},
      dataType:'json',
         async: false,
       success: function(data){
            /*console.log(data);*/
            if(data != ''){ 
              $('#num_wish').html('#'+data.num_wish);
              $('#num_converted').html('#'+data.num_converted);
            }
       }
  });  
}

function get_wish_projects_list(){

  var category = $('#wish_projects_category').val();
  var states = $('#wish_projects_states').val();
  var timeframe = $('#wish_projects_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/projects_wishlist/load_get_projects_list',
          data: {category: category, states: states, timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#wish_projects_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#wish_projects_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#wish_projects_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/wishlist_details/index/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.comments_count,
                 val.votes_count,
                 '<a target="_blank" href="'+base_url+'projects/view/'+val.url+'">Link</a>',
                 '<td><a href="#" data-id="'+val.id+'" class="delete_project tablectrl_small bDefault tipS" original-title="Remove"><span class="iconb" data-icon=""></span></a></td>']);
            });
       }
  });

}

function get_subscribers_list(){

  $.ajax({type:'post',
           url: base_url+'admin/subscribers/load_subscribers_list',
          data: {},
      dataType:'json',
         async: false,
         error: function(){$('#subscribers_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#subscribers_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#subscribers_data_table').dataTable().fnAddData( [
		             val.name,
		             val.email,
		             val.date,
                 '<a href="#" data-id="'+val.id+'" class="delete_sub tablectrl_small bDefault tipS" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function get_comments_list(project_id){
  var obj = $('event.currentTarget');
  $.ajax({type:'post',
           url: base_url+'admin/manage_comments/load_comments_list',
          data: {'project_id' : project_id},
      dataType:'json',
         async: false,
         error: function(){$('#wish_details_comments_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#wish_details_comments_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#wish_details_comments_data_table').dataTable().fnAddData( [
		             val.date,
		             '<a target="_blank" href="'+base_url+'admin/contributors_details/index/'+val.user_id+'">'+val.user_name+'</a>',
		             val.text,
                 '<a href="#" data-project_id="'+project_id+'" data-id="'+val.id+'" class="delete_comment tablectrl_small bDefault tipS" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function get_success_wish_projects_list(){

  var category = $('#success_wish_projects_category').val();
  var states = $('#success_wish_projects_states').val();
  var status = $('#success_wish_projects_status').val();
  var timeframe = $('#success_wish_projects_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/success_projects_wishlist/load_get_projects_list',
          data: {category: category, states: states, status: status, timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#success_wish_projects_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#success_wish_projects_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#success_wish_projects_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/projects_details/index/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.comments_count,
                 val.votes_count,
                 '<a target="_blank" href="'+base_url+'projects/view/'+val.url+'">Link</a>',
                 '<td><a href="#" data-id="'+val.id+'" class="delete_project tablectrl_small bDefault tipS" original-title="Remove"><span class="iconb" data-icon=""></span></a></td>']);
            });
       }
  });

}

function get_users_count(){
     
  var timeframe = $('#count_users_timeframe').val();
  $.ajax({type:'post',
           url: base_url+'admin/users/load_count_users_by_type',
          data: {timeframe: timeframe},
      dataType:'json',
         async: false,
         error: function(){$('#users_count').html('');},
       success: function(data){
            /*console.log(data);*/
            $('#users_count tbody').html('<tr><td><a target="_blank" href="'+base_url+'admin/creators_users">'+data.count_creators+'</a></td><td><a target="_blank" href="'+base_url+'admin/contributors_users">'+data.count_contributors+'</a></td></tr>');
	            
       }
  });   
     
}

function get_story_list(){
  var category = $('#story_category').val();
  var states = $('#story_states').val();
  $.ajax({type:'post',
           url: base_url+'admin/success_story_page/load_get_story_list',
          data: {category: category, states: states},
      dataType:'json',
         async: false,
         error: function(){$('#story_data_table').dataTable().fnClearTable();},
       success: function(data){
            /*console.log(data);*/
            $('#story_data_table').dataTable().fnClearTable();
            $.each(data, function (i, val){
	             $('#story_data_table').dataTable().fnAddData( [
		             '<a target="_blank" href="'+base_url+'admin/manage_story/open/'+val.id+'">'+val.title+'</a>',
		             val.category_name,
		             val.state_name,
		             val.total,
                 val.days,
                 '<a target="_blank" href="'+base_url+'admin/manage_story/edit/'+val.id+'" class="edit_story tablectrl_small bDefault tipS" original-title="Edit"><span class="iconb" data-icon=""></span></a><a href="#" class="delete_story tablectrl_small bDefault tipS" data-id="'+val.id+'" original-title="Remove"><span class="iconb" data-icon=""></span></a>']);
            });
       }
  });

}

function get_geo() {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode( {'address': $("input[name='zip']").val() }, function(results, status) {
	  if(status == 'OK') {
			$('input[name="lat"]').val(results[0].geometry.location.lat());
			$('input[name="lng"]').val(results[0].geometry.location.lng());
      for(var x in results[0].address_components) {
					for(var y in results[0].address_components[x].types) {
						switch(results[0].address_components[x].types[y]) {
							case 'administrative_area_level_1' : $('#state option').each(function(){$(this).attr("selected",false);}); $('#state :contains("'+results[0].address_components[x].short_name+'")').attr("selected",true); break;
						  case 'locality' : $('input[name="city"]').val(results[0].address_components[x].long_name); break;
            }
					}
				}
		}
	});
}

function add_story(){
  
  var uploader = $("#uploader_story").pluploadQueue();
  
  if(uploader_image.files.length > 0){
     uploader_image.start();
     uploader.start();
     if(uploader.files.length === (uploader.total.uploaded + uploader.total.failed) && uploader_image.files.length === (uploader_image.total.uploaded + uploader_image.total.failed)){
          var data = $('#add_story').serialize();
          $.ajax({type:'post',
                       url: base_url+'admin/manage_story/add_story',
                      data: data,
                  dataType:'json',
                     async: false,
                     error: function(){alert("Error submiting form")},
                   success: function(data){
                        if(data.status == 1){alert(data.msg);}
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
  }
  else{
     alert('You must add Image');
  }
}

function update_story(){
  var data = $('#add_story').serialize();
  $.ajax({type:'post',
           url: base_url+'admin/manage_story/update_story',
          data: data,
      dataType:'json',
         async: false,
         error: function(){alert("Error submiting form")},
       success: function(data){
            if(data.status == 1){
              alert(data.msg);
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

function del_img_story(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var story_id = obj.data("id");
  var photo = obj.data("photo");
  var photo_name = obj.data("photo_name");
  var num = obj.data("photonum");
  $.ajax({type:'post',
           url: base_url+'admin/manage_story/del_img_from_story',
          data: {"story_id" : story_id, "photo" : photo, "photo_name": photo_name},
      dataType:'json',
         async: false,
         error: function(){alert("Error")},
       success: function(data){
            if(data.status == "ok"){
              alert("Image was deleted");
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
			$('#add_story').append('<input type="hidden" name="uploader_story_'+num+'_tmpname" value="'+file.target_name+'">');
			/*console.log(file);*/
		});
              
            }
            else{
              alert("Error"); 
            }
       }
  });
}
function add_cwl_slide(){

  if(uploader_image.files.length > 0){
     uploader_image.start();
     if( uploader_image.files.length === (uploader_image.total.uploaded + uploader_image.total.failed)){
          var data = $('#add_slide').serialize();
          $.ajax({type:'post',
                       url: base_url+'admin/cwl_slides/add_slide',
                      data: data,
                  dataType:'json',
                     async: false,
                     error: function(){alert("Error submiting form")},
                   success: function(data){
                        if(data.status == 1){alert(data.msg);}
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
  }
  else{
     alert('You must add Image');
  }
}

function update_cwl_slide(){
  var data = $('#add_slide').serialize();
  $.ajax({type:'post',
           url: base_url+'admin/cwl_slides/update_slide',
          data: data,
      dataType:'json',
         async: false,
         error: function(){alert("Error submiting form")},
       success: function(data){
            if(data.status == 1){
              alert(data.msg);
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
function change_paid_status(e){
  var obj=$(e.currentTarget);
  var id = obj.data("id");
  if(obj.prop("checked")){
     var check = "ok"
  }
  else{
     var check = "no";
  }
  $.ajax({type:'post',
           url: base_url+'admin/funded_projects/change_paid_status',
          data: {id : id, check : check},
      dataType:'json',
         async: false,
         error: function(){alert("Error")},
       success: function(data){
            if(data.status == "ok"){
              alert("Paid status was changed");
            }
            else{
              alert("Error"); 
            }
       }
  });
}

function update_project(e){
     e.preventDefault();
     
     $.ajax({type:'post',
           url: base_url+'admin/edit_project/update/'+$('#project_id').val(),
          data: $('#update_project').serialize(),
      dataType:'json',
         async: false,
         error: function(){alert("Error submiting form")},
       success: function(data){
            if(data.status == 1){
              alert(data.msg);
            }
            else{
              alert(data.msg); 
            }
          }
          });
}

function del_kudos(e){
  e.preventDefault();
  var obj = $(e.currentTarget);
  var id = obj.data("k_id");
  $.ajax({type:'post',
           url: base_url+'admin/edit_project/del_kudos/',
          data: {id : id},
      dataType:'json',
         async: false,
         error: function(){alert("Error submiting form")},
       success: function(data){
            if(data.status == 1){
              obj.closest("div.formRow").remove(); 
              alert(data.msg);
            }
            else{
              alert(data.msg); 
            }
          }
          });
  
     
}

function add_kudos(e){
  e.preventDefault();
  var k_counter = $('input[name="new-kudos-counter"]').val();
  
  var obj = $(e.currentTarget);
  $.ajax({type:'post',
           url: base_url+'admin/edit_project/add_kudos/',
          data: {k_counter: k_counter},
      dataType:'html',
         async: false,
         error: function(){alert("Error submiting form")},
       success: function(data){
           $(data).insertAfter(obj.closest("div.formRow"));
           k_counter = k_counter + 1;
           $('input[name="new-kudos-counter"]').val(k_counter);
          }
          });
}