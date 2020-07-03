// JS для выпадающего меню

var jm_$ = $;

jm_$(function()
{
	jm_$('.scroll-pane').jScrollPane();
	jm_$('.scroll-pane2').jScrollPane();
	//jm_$('.scroll-pane3').jScrollPane();
});
	
	
	
	
(function(jm_$){
	
	jm_$(function(){
		
	jm_$("ul.primary_navigation >li").hover(
	function () {
		
		var popup = jm_$(this).find("div.dropdown");
		var popuplink = jm_$(this).find("a.nlink");
				
			intervalID=setTimeout(
			function() {
			popup.css("left", 0);
			popuplink.addClass('nlink_before');
			}, 500);
	},
	function () {
		jm_$("div.dropdown").css("left", -9999);
		jm_$(this).find("a.nlink").removeClass('nlink_before');
		clearInterval(intervalID);
	 }
	);
	
	});
	
})(jQuery);
