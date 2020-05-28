<?php
// HTTP
define('HTTP_SERVER', 'http://floral-lime.biz.ua/');

// HTTPS
define('HTTPS_SERVER', 'http://floral-lime.biz.ua/');

// DIR
define('DIR_APPLICATION', '/var/www/ripmag01/data/www/floral-lime.biz.ua/catalog/');
define('DIR_SYSTEM', '/var/www/ripmag01/data/www/floral-lime.biz.ua/system/');
define('DIR_IMAGE', '/var/www/ripmag01/data/www/floral-lime.biz.ua/image/');
define('DIR_STORAGE', '/var/www/ripmag01/data/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'ripmag');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'bdfl');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');