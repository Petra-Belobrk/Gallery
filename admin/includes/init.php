<?php



defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);


ob_start();


require_once(__DIR__ . DS ."functions.php");
require_once(__DIR__ . DS ."new_config.php");
require_once(__DIR__ . DS ."database.php");
require_once(__DIR__ . DS ."db_object.php");
require_once(__DIR__ . DS ."user.php");
require_once(__DIR__ . DS . "photo.php");
require_once(__DIR__ . DS ."session.php");
require_once(__DIR__ . DS . "comment.php");
require_once(__DIR__ . DS ."paginate.php");


