<?php

function allRoles(){
    $sql = "SELECT * FROM roles";
    return pdo_query_all($sql);
}

function Role($id){
    $sql = "SELECT * FROM roles WHERE id = '$id'";
    return pdo_query_all($sql);
}

?>