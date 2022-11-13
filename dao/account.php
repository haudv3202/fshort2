<?php

function add_account($name,$email,$password,$token_user){
    $sql = "INSERT INTO account (id,name, email, password, create_date,token_user) VALUES (NULL,'$name','$email','$password',CURRENT_TIMESTAMP(),'$token_user')";
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

?>