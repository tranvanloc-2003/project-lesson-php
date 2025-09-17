<?php


if (!defined('BASE_URL')) {
    die('Bạn không có quyền truy cập vào file này');
}



try {
    if (class_exists('PDO')) {
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //ho tro tieng viet
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $link = _DRIVER . ":host=" . _HOST . ";dbname=" . _DB;
        $conn = new PDO($link, _USER, _PASS, $options);
    }
} catch (Exception $e) {
    // echo "Connection failed: " . $e->getMessage();
    require_once 'modules/errors/404.php';
    die();
}