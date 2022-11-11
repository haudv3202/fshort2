<?php

function add_account($name,$email,$password,$token_user){
    $sql = "INSERT INTO account (id,name, email, password, create_date,token_user) VALUES (NULL,'$name','$email','$password',CURRENT_TIMESTAMP(),'$token_user')";
    return pdo_execute($sql);
}

?>