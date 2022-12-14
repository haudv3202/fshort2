<?php
function login_google($token){
    $sql = "SELECT * FROM account WHERE token_user = '$token'";
    return pdo_query_one($sql);
}
function add_account($name,$email,$password,$token_user){
    $sql = "INSERT INTO account (id,name, email, password, create_date,token_user) VALUES (NULL,'$name','$email','$password',CURRENT_TIMESTAMP(),'$token_user')";
    return pdo_execute($sql);
}

function new_account($name,$email,$password){
    $sql = "INSERT INTO account (id,name, email, password, create_date,token_user) VALUES (NULL,'$name','$email','$password',CURRENT_TIMESTAMP(),NULL)";
    return pdo_execute($sql);
}

function check_account($email,$password){
    $sql = "SELECT * FROM account WHERE email = ? AND password = ?";
    return pdo_query_one($sql,$email,$password);
}
function check_token($token){
    $sql = "SELECT * FROM account WHERE token_user = $token";
    return pdo_query_one($sql);
}

function checkEmail($email){
    $sql = "SELECT id,email FROM account WHERE email = '$email'";
    return pdo_query_one($sql);
}

function fogotAccount($id,$password){
    $sql = "UPDATE account SET password = '$password' WHERE id = '$id'";
    return pdo_execute($sql);
}

function Allaccount(){
    $sql = "SELECT * FROM account";
    return pdo_query_all($sql);
}

function AllaccountRandom(){
    $sql = "SELECT id,name,link_avatar FROM account ORDER BY RAND() LIMIT 0,6";
    return pdo_query_all($sql);
}

function AllBand(){
    $sql = "SELECT * FROM account WHERE level_ban > 0";
    return pdo_query_all($sql);
}

function Band($id,$role_band){
    $sql = "UPDATE account SET level_ban = '$role_band' WHERE id = '$id'";
    return pdo_execute($sql);
}

function searchEmail($email){
//    $sql = "SELECT * FROM account WHERE name LIKE '%$name%' OR email LIKE '%$email%'";
    $sql = "SELECT * FROM account WHERE email LIKE '%$email%'";
    return pdo_query_all($sql);
}

function account_one_row($id){
    $sql = "SELECT * FROM account WHERE id = '$id'";
    return pdo_query_one($sql);
}

function account_one_row_comment($id){
    $sql = "SELECT link_avatar,name FROM account WHERE id = '$id'";
    return pdo_query_one($sql);
}

function searchName($name){
    $sql = "SELECT * FROM account WHERE name LIKE '%$name%'";
    return pdo_query_all($sql);
}

function nameUser($id){
    $sql = "SELECT name FROM account WHERE id = '$id'";
    return pdo_query_one($sql);
}

function setRoleId($id,$role_id){
    $sql = "UPDATE account SET role_id = '$role_id' WHERE id = '$id'";
    return pdo_execute($sql);
}
function user_other($id){
    $sql = "SELECT * FROM account WHERE id = '$id'";
    return pdo_query_one($sql);
}

function update_profile($id,$name,$password,$avatar){
    $sql = "UPDATE account SET name = '$name',password = '$password',link_avatar = '$avatar' WHERE id = '$id'";
    return pdo_execute($sql);
}

function check_pass($id,$password){
    $sql ="SELECT COUNT(password) as total_ac FROM account WHERE id = '$id' AND password = '$password'";
    return pdo_query_one($sql);
}

?>