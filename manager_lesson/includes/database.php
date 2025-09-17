<?php


if (!defined('BASE_URL')) {
    die('Bạn không có quyền truy cập vào file này');
}
//truy vấn nhiều dòng dl
function getAll($sql)
{
    global $conn;
    $stm = $conn->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//truy vấn 1 dòng dl 
function getOne($sql)
{
    global $conn;
    $stm = $conn->prepare($sql);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//đếm số dòng trả về
function getRows($sql)
{
    global $conn;
    $stm = $conn->prepare($sql);
    $stm->execute();
    $result = $stm->rowCount();
    return $result;
}
//insert dữ liệu

function insertData($table, $data)
{
    /**    
     * 
     * $data = [
     *   'name' => 'Nguyen Van A',
     *   'email' => 'nguyenvana@example.com',
     *   'phone' => '0123456789'
     * ]
     */
    global $conn;

    $keys = array_keys($data); //lấy ra các key của mảng
    // echo $keys;
    $cot = implode(',', $keys); //chuyển mảng thành chuỗi
    $place = ':' . implode(',:', $keys);
    echo $cot;
    echo $place;
    $sql = "INSERT INTO $table ($cot) VALUES($place)";
    echo $sql;
    $stm = $conn->prepare($sql); //SQL injection
    // $name = "Nguyen Van A";
    // $stm -> execute([':name' => $name]);
    $stm->execute($data);
}

function updateData($table, $data, $condition = '')
{
    global $conn;
    $update = "";
    foreach ($data as $key => $value) {
        $update .= $key . "=:" . $key . ',';
    }
    $update = rtrim($update, ',');

    if (!empty($condition)) {
        $sql = "UPDATE $table SET  $update WHERE $condition";
    } else {
        $sql = "UPDATE $table SET  $update";
    }
    echo $sql;
    $tmp = $conn->prepare($sql);
    $tmp->execute($data);
}

function delete($table, $condition)
{
    global $conn;
    if (!empty($condition)) {
        $sql = "DELETE FROM $table WHERE $condition";
    } else {
        $sql = "DELETE FROM $table";
    }

    $tmp = $conn->prepare($sql);
    $tmp->execute();
}
//ham lấy dòng dl mới insert
function lastID(){
    global $conn;
    return $conn->lastInsertId();
}