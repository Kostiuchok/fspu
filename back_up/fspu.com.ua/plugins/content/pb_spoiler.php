<?php
/**
* @version		1.1.2 from Beliyadm
* @copyright	Copyright (C) 2008 - 2009 Open Source Matters. All rights reserved.
*/
// no direct access
defined( '_JEXEC' ) or die( 'Прямой доступ запрещен' );
//register events
$mainframe->registerEvent('onPrepareContent', 'pb_spoiler');
//$plugin 		=& JPluginHelper::getPlugin('content', 'pb_spoiler');

function pb_spoiler_css()
	{
		global $mainframe;
		$config 		= & JFactory::getConfig();
		$plugin 		=& JPluginHelper::getPlugin('content', 'pb_spoiler');
		$pluginParams 	= new JParameter( $plugin->params );
		$jsjquery 		= $pluginParams->get('jsjquery', 1);
		$jsshow 		= $pluginParams->get('jsshow', 1);
		$jstype 		= $pluginParams->get('jstype', 1);
		$header 		= '';

		switch ($jstype) {
			case '1'; //mootools
			$header 	.= '<script type="text/javascript" src="'.$config->getValue('live_site').'/plugins/content/pb_spoiler/mootools/spoiler.js"></script>';
            $header 	.= '<link rel="stylesheet" href="'.$config->getValue('live_site').'/plugins/content/pb_spoiler/mootools/spoiler.css" type="text/css" />';

			break;
			case '2'; //jquery
			if ($jsjquery == '1') {
			$header 	.= '<script type="text/javascript" src="'.$config->getValue('live_site').'/plugins/content/pb_spoiler/jquery/jquery.js"></script>';
		  	} else {}
		  	$header 	.= '<script type="text/javascript" src="'.$config->getValue('live_site').'/plugins/content/pb_spoiler/jquery/accordion.js"></script>';
		  	$header 	.= "<script type=\"text/javascript\">
							jQuery().ready(function(){
								// applying the settings
								jQuery('.pbspoiler').Accordion({
									active: 'span.selected',
									header: 'span.head',
									alwaysOpen: false,
									animated: true,
									showSpeed: 400
								});
							});
							</script>";
		  	$header 	.= '<link rel="stylesheet" href="'.$config->getValue('live_site').'/plugins/content/pb_spoiler/jquery/style.css" type="text/css" />';
			break;

		}
		$mainframe->addCustomHeadTag($header);
	}

function pb_spoiler(&$row, &$params)
	{
		$regex = "#{spoiler(?: title=(([_0-9A-Za-zА-яа-яЁё](.*?)))?)?}(.*?){/spoiler}#s";
		$row->text = preg_replace_callback( $regex, 'pb_spoiler_replacer', $row->text );
		return true;
	}

function pb_spoiler_replacer ( &$matches )
	{
		//$jstype = pb_spoiler_params();
		pb_spoiler_css();
		$plugin 		=& JPluginHelper::getPlugin('content', 'pb_spoiler');
		$pluginParams 	= new JParameter( $plugin->params );
	 	$jstype 		= $pluginParams->get('jstype', 1);
		$html 			= '';
		$regex1 = "#{spoiler title=([_0-9A-Za-zА-яа-яЁё](.*?))}#s";
		$regex2 = "#{/spoiler}#s";
		$spoilertext = preg_replace($regex2, '', (preg_replace($regex1, '', $matches[0])));

		switch ($jstype) {
			case '1'; //mootools
			$html .= '<div class="spoiler">
			<div class="sp-head">
			<div class="sp-head-click"><a href="#">'.$matches[1].'</a></div></div>
			<div class="sp-body">'.$spoilertext.'</div>
			</div>';
			break;
			case '2'; //jquery
			$html .= '<ul class="pbspoiler">';
			$html .= '<li><span class="head"><a href="javascript:;" title="Развернуть">'.$matches[1].'</a></span>
			    	<ul>
			    		<li>'.$spoilertext.'</li>
			    	</ul>
		    	</li>';
		 	$html .= '</ul>';
		 	break;
		}
        return $html;
	}

?>