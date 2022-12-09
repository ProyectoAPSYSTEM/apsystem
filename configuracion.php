<?php
// Activamos reporte de todos los errores
error_reporting(E_ALL | E_STRICT);
/*RUTAS */
define('HOME', 'c:\xampp\htdocs');
define('APP_NAME', 'apsystem');
define('APP', HOME . DIRECTORY_SEPARATOR . APP_NAME);
/* sistema */
define('SYS', APP . DIRECTORY_SEPARATOR . 'systen');
define('URL', 'HTTP://localhost');
define('URL_BASE', URL .'/'.APP_NAME);
/* 4 capas - MVC */
define('VIS', APP . DIRECTORY_SEPARATOR .'vista');
define('MOD', APP . DIRECTORY_SEPARATOR .'modelo');
define('CON', APP . DIRECTORY_SEPARATOR .'controlador');

define('PER', APP . DIRECTORY_SEPARATOR .'persistencia');
define('REC', APP . DIRECTORY_SEPARATOR . 'recursos');