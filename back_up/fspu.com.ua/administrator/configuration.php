﻿<?php
class JConfig {
/* Site Settings */
var $offline = '0';
var $offline_message = 'Сайт сейчас закрыт на техническое обслуживание.<br /> Пожалуйста зайдите позже.';
var $sitename = 'ФСПУ - Федерація Страхових Посередників України';
var $editor = 'tinymce';
var $list_limit = '20';
var $legacy = '0';
/* Debug Settings */
var $debug = '0';
var $debug_lang = '0';
/* Database Settings */
var $dbtype = 'mysql';
var $host = 'u362663824_fspu.mysql.hostinger.ru';
var $user = 'fspu';
var $password = '11112222';
var $db = 'fspu';
var $dbprefix = 'jos_';
/* Server Settings */
var $live_site = '';
var $secret = 'hgBdLnsXC5q7ibt1';
var $gzip = '0';
var $error_reporting = '-1';
var $helpurl = 'http://help.joomla.org';
var $xmlrpc_server = '0';
var $ftp_host = '127.0.0.1';
var $ftp_port = '21';
var $ftp_user = '';
var $ftp_pass = '';
var $ftp_root = '';
var $ftp_enable = '0';
/* Locale Settings */
var $offset = '0';
var $offset_user = '0';
/* Mail Settings */
var $mailer = 'mail';
var $mailfrom = 'Hazaev@i.ua';
var $fromname = 'ФСПУ - Федерація Страхових Посередників України';
var $sendmail = '/usr/sbin/sendmail';
var $smtpauth = '0';
var $smtpuser = '';
var $smtppass = '';
var $smtphost = 'localhost';
/* Cache Settings */
var $caching = '0';
var $cachetime = '15';
var $cache_handler = 'file';
/* Meta Settings */
var $MetaDesc = 'Joomla! - the dynamic portal engine and content management system';
var $MetaKeys = 'joomla, Joomla';
var $MetaTitle = '1';
var $MetaAuthor = '1';
/* SEO Settings */
var $sef           = '0';
var $sef_rewrite   = '0';
var $sef_suffix    = '0';
/* Feed Settings */
var $feed_limit   = 10;
var $log_path = '/home/u362663824/public_html/logs';
var $tmp_path = '/home/u362663824/public_html/tmp';
/* Session Setting */
var $lifetime = '15';
var $session_handler = 'database';
}
?>