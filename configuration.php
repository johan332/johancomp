<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br />Please check back again soon.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'Johan Comp';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '25';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $debug_lang_const = '1';
	public $dbtype = 'mysqli';
	public $host = 'localhost';
	public $user = 'root';
	public $db = 'dbcomp';
	public $dbprefix = 'nd4q7_';
	public $live_site = '';
	public $secret = 'GZf1p29YhEzM9DxE';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'joehn332@gmail.com';
	public $fromname = 'Johan Comp';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $cache_platformprefix = '0';
	public $MetaDesc = 'VirtueMart works with Joomla! - the dynamic portal engine and content management system';
	public $MetaKeys = 'virtuemart, vm3, joomla, Joomla';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'none';
	public $log_path = 'C:\\xampp\\htdocs\\virtuemart\\administrator/logs';
	public $tmp_path = 'C:\\xampp\\htdocs\\virtuemart/tmp';
	public $lifetime = '60';
	public $session_handler = 'database';
	public $shared_session = '0';
	public $asset_id = '1';
}