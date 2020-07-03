<?php
class JConfig {
	var $offline = '0';
	var $editor = 'tinymce';
	var $list_limit = '20';
	var $helpurl = 'http://help.joomla.org';
	var $debug = '0';
	var $debug_lang = '0';
	var $sef = '0';
	var $sef_rewrite = '0';
	var $sef_suffix = '0';
	var $feed_limit = '10';
	var $secret = 'hgBdLnsXC5q7ibt1';
	var $gzip = '0';
	var $error_reporting = '-1';
	var $xmlrpc_server = '0';
	var $log_path = '/var/www/fspu/fspu.com.ua/logs/';
	var $tmp_path = '/var/www/fspu/fspu.com.ua/tmp/';
	var $live_site = '';
	var $offset = '2';
	var $caching = '0';
	var $cachetime = '15';
	var $cache_handler = 'file';
	var $memcache_settings = array();
	var $ftp_enable = '0';
	var $ftp_host = '127.0.0.1';
	var $ftp_port = '21';
	var $ftp_user = 'admin';
	var $ftp_pass = '11112222';
	var $ftp_root = '';
	var $dbtype = 'mysql';
	var $host = 'localhost';
	var $user = 'u_fspu';
	var $db = 'fspu';
	var $dbprefix = 'jos_';
	var $mailer = 'mail';
	var $mailfrom = 'info@fspu.com.ua';
	var $fromname = 'ФСПУ - Федерація Страхових Посередників України';
	var $sendmail = '/usr/sbin/sendmail';
	var $smtpauth = '0';
	var $smtpuser = '';
	var $smtppass = '';
	var $smtphost = 'localhost';
	var $MetaAuthor = '1';
	var $MetaTitle = '1';
	var $lifetime = '15';
	var $session_handler = 'database';
	var $password = '11112222';
	var $sitename = 'ФСПУ - Федерація Страхових Посередників України';
	var $MetaDesc = 'ФСПУ - Федерація Страхових Посередників України
Federation of Insurance Intermediaries of Ukraine';
	var $MetaKeys = 'страховой брокер, рейтинг страховых компаний,страховые компании,страхование грузов, страхование квартир,  	
медицинское страхование,страховые посредники';
	var $offline_message = 'Сайт сейчас закрыт на техническое обслуживание. Пожалуйста зайдите позже.';
}
?>