<?php
require_once 'config.php';
//config bên ngoài
// tạo kết nối từ project php sang mysql
function getConnect(){
    $connect = new PDO("mysql:host=" . DB_HOST. ";dbname=" . DB_NAME
                        . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PWD
            );
    return $connect;
}


//truy vấn nhiều bản ghi
function pdo_query_all($query){
    // select * from users where email = ? or role_id = ?

    $args = func_get_args();
    $args = array_slice($args, 1);
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $data = $stmt->fetchAll();
    if(count($data) > 0){
        return $data;
    }

    return [];

}

// truy vấn 1 bản ghi
function pdo_query_one($query){
    // select * from users where email = ? or role_id = ?

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $data = $stmt->fetch();
    if(count($data) > 0){
        return $data;
    }
    return null;

}


function pdo_execute_get_id($query){

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $lastId =  $conn->lastInsertId();
    return $lastId;
}

//Thực hiện câu truy vấn
function pdo_execute($query){

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
   
}
?>