<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?=$title?></title>
<link href="<?=base_url()?>css/admin/styles.css" rel="stylesheet" type="text/css" />
<!--[if IE]> <link href="<?=base_url()?>css/admin/ie.css" rel="stylesheet" type="text/css"> <![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/ui.spinner.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="https://www.google.com/jsapi"></script>	
<script src="http://maps.google.com/maps/api/js?sensor=true&language=en"></script>
<!--<script src="<?=base_url()?>plugin/google-map-api.1.0.1.js"></script>-->
<!--<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/charts/jquery.sparkline.min.js"></script>-->
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/tables/jquery.sortable.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/tables/jquery.resizable.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.uniform.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.autotab.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.chosen.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.ibutton.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/uploader/jquery.plupload.queue.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/wizards/jquery.form.wizard.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/wizards/jquery.validate.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/wizards/jquery.form.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.fileTree.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.sourcerer.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/others/jquery.fullcalendar.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/others/jquery.elfinder.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/files/bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/files/functions.js"></script>
<!--<script type="text/javascript" src="<?=base_url()?>js/admin/charts/chart.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/charts/hBar_side.js"></script>-->
<script type="text/javascript" src="<?=base_url()?>js/admin/script.js"></script>
<script>var base_url = '<?=base_url();?>';</script>