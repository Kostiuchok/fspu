<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

//load plugin params info
global $bname, $btext;
$pluginParams = new JParameter( $plugin->params );
$btext = $pluginParams->def('btext', '{cbutton}text{/cbutton}');
$bname = $pluginParams->def('bname', 'Button text');


class plgButtonpb_spoiler extends JPlugin
{
       function plgButtonpb_spoiler(& $subject, $config)
       {
               	parent::__construct($subject, $config);
       }

       function onDisplay($name)
       {
               	global $mainframe, $bname, $btext;
				$btntext = $btext;
				$doc 		=& JFactory::getDocument();
				$template 	= $mainframe->getTemplate();
               	$js = "
                       function insertSpoiler(editor) {
								var jsbtntext = '".$btext."';
								jInsertEditorText(jsbtntext, editor);
						}
						";
               	$doc->addScriptDeclaration($js);
                $doc->addStyleSheet( $mainframe->getSiteURL() . 'plugins/editors-xtd/pb_spoiler.css', 'text/css', null, array() );
               	$button = new JObject();
               	$button->set('modal', false);
               	$button->set('onclick', 'insertSpoiler(\''.$name.'\');return false;');
               	$button->set('text', $bname);
               	$button->set('name', 'pb_spoiler');
               	$button->set('link', '#');

               	return $button;
       }
}?>