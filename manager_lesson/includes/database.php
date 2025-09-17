<?php


if (!defined('BASE_URL')) {
    die('Bạn không có quyền truy cập vào file này');
}
//truy vấn nhiều dòng dl
function getAll($sql){
    global $conn;
        $stm = $conn -> prepare($sql);
        $stm -> execute();
        $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
}

//truy vấn 1 dòng dl 
function getOne($sql){
    global $conn;
        $stm = $conn -> prepare($sql);
        $stm -> execute();
        $result = $stm -> fetch(PDO::FETCH_ASSOC);
        return $result;
}