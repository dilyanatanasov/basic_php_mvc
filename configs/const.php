<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'ikt_second_year');

define('PROJEC_FOLDER', substr(dirname($_SERVER['PHP_SELF']), 1) . '/');

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    define('SERVER_PROTOCOL', 'https://');
} else {
    define('SERVER_PROTOCOL', 'http://');
}

define('DOMAIN', SERVER_PROTOCOL . $_SERVER['HTTP_HOST'] . '' . PROJEC_FOLDER);
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/' . PROJEC_FOLDER);

define('APPLICATION_PATH', 'mvc/');
define('CONTROLLERS_PATH', 'controllers/');
define('MODEL_PATH', 'models/');
define('VIEW_PATH', 'views/site/');


?>
