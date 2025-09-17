<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
ob_start();
require_once 'config.php';
require_once 'includes/connect.php';
require_once 'includes/database.php';
$module = _MODULES;
$action = _ACTIONS;

// $data = [
//     'fullname' => 'Trần Văn Lộc',
//     'email' => 'namlun12333@gmail.com',
//     'phone'=> '0123456789',
//     'address' => 'Hà Nội',
// ];

// insertData('user', $data);
$condition = "id=2";
// delete('user', $condition);
echo lastID();
// updateData('course_category', $data, $condition);
$rel = getRows("SELECT * FROM user");
echo $rel;
// $rel =  getAll("SELECT * FROM course");

// echo '<pre>';
// print_r($rel);
// echo '</pre>';
if (!empty($_GET['module'])) {

    $module = $_GET['module'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$path = 'modules/' . $module . '/' . $action . '.php';


if (!empty($path)) {
    if (file_exists($path)) {
        require_once $path;
    } else {
        require_once 'modules/errors/404.php';
    }
} else {
    require_once 'modules/errors/500.php';
}


