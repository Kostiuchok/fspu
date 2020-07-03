/* Spoiler by http://irridium.spb.ru/articles/show/116 */

window.addEvent('domready', function() {

var spoilers = $$('.spoiler');
spoilers.getElement('.sp-head').addClass('folded');

spoilers.each(function(element) {
    var fx_sp_opac = new Fx.Styles(element.getElement('.sp-body'), {duration: 400, transition: Fx.Transitions.Expo.easeInOut});
    var fx_sp_slide = new Fx.Slide(element.getElement('.sp-body'), {duration: 400, onStart: function() {
	fx_sp_opac.start({'opacity': [0.5, 1]});
    } });

    fx_sp_slide.hide();
    element.getElement('.sp-head-click').addEvent('click', function(){
    element.getElement('.sp-head').toggleClass('unfolded');
    fx_sp_slide.toggle();
      });

});
});