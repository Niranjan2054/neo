<?php 
ob_start();
session_start();
date_default_timezone_set('Asia/Kathmandu');
if ($_SERVER['SERVER_ADDR']=='127.0.0.1' || $_SERVER['SERVER_ADDR']=="::1") {
	define('ENVIRONMENT', 'DEVELOPMENT');
}else{
	define('ENVIRONMENT', 'PRODUCTION');
}
if (ENVIRONMENT == 'DEVELOPMENT') {
	error_reporting(E_ALL);
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'neo');
	define('DB_USER', 'root');
	define('DB_PWD', '');
	define('SITE_URL', 'http://neofusionsoc.com/');
}else{
	error_reporting(0);
	define('DB_HOST', 'shareddb-w.hosting.stackcp.net');
	define('DB_NAME', 'neofusionsoc-31343953e6');
	define('DB_USER', 'neofusionsoc-31343953e6');
	define('DB_PWD', '£2%UEL9/u=EJ');
	define('SITE_URL', 'http://neofusionsoc.com/');
}
define('CMS_PATH', SITE_URL.'cms/');
define('ASSESTS_PATH', CMS_PATH.'assets/');
define('INCLUDE_PATH', CMS_PATH.'inc/');
define('PLUGIN_PATH', CMS_PATH.'plugins/');
define('CKEDITOR_PATH', PLUGIN_PATH.'ckeditor/');
define('CKFINDER_PATH', PLUGIN_PATH.'ckfinder/');
define('CSS_PATH', ASSESTS_PATH.'css/');
define('IMAGES_PATH', ASSESTS_PATH.'images/');
define('JS_PATH', ASSESTS_PATH.'js/');
define('FONTS_PATH', ASSESTS_PATH.'fonts/');

define('ERROR_PATH', $_SERVER['DOCUMENT_ROOT'].'error/');
define('CLASS_PATH', $_SERVER['DOCUMENT_ROOT'].'class/');
define('CONFIG_PATH', $_SERVER['DOCUMENT_ROOT'].'config/');
define('UPLOAD_PATH', $_SERVER['DOCUMENT_ROOT'].'upload/');
define('UPLOAD_URL',SITE_URL.'upload/');
define('SITE_NAME', 'neofusionsoc.com');
define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'].'upload/');
define('ALLOWED_EXT',array('jpg','jpeg','png','gif','svg','bmp','json'));
