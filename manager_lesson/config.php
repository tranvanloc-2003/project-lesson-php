<?php 
const BASE_URL = true;

// gan bien path

const _MODULES = 'dashboard';
const _ACTIONS = 'index';



// Cấu hình database
const _HOST = 'localhost';
const _USER = 'root';
const _PASS = '';
const _DB = 'db_lesson';
const _PORT = 3306;
const _DRIVER = 'mysql';

//debug error
const _DEBUG = true;

//thiet lap host

define("_HOST_URL","https://" . $_SERVER['HTTP_HOST'] . "/project_lesson");

define("_HOST_TEMPLATE",_HOST_URL ."/template");

//thiet lap path
define("_PATH_URL",__DIR__ );
define("_PATH_URL_TEMPLATE", _PATH_URL . "/template");


?>