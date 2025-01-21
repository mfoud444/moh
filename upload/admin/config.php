<?php
// APPLICATION
define('APPLICATION', 'Admin');

// HTTP
// Automatically determine HTTP_SERVER and HTTP_CATALOG
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
define('HTTP_SERVER', 'https://alsgpt.com/admin//admin/');
// Define HTTP_CATALOG (for front-end)
define('HTTP_CATALOG', 'https://alsgpt.com/admin/');

// DIR
define('DIR_OPENCART', '../');
define('DIR_APPLICATION', DIR_OPENCART . 'admin/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'bootmy');
define('DB_PASSWORD', 'pmapass');
define('DB_DATABASE', 'moh');
define('DB_PORT', '3306');
define('DB_PREFIX', 'ks_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
