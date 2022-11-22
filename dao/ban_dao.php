<?php
function Ban($id,$id_post,$time_open,$id_person_ban){
    $sql = "INSERT INTO band VALUES ('$id',CURRENT_TIMESTAMP(),'Bị ban lí do bài có id $id_post vi phạm nguyên tắc cộng đồng','$id_post','$time_open',NULL,'$id_person_ban',NULL)";
    return pdo_execute($sql);
}

function UserBand($id_account){
    $sql = "SELECT * FROM band WHERE id_account = '$id_account'";
    return pdo_query_all($sql);
}

function totalBan($id_account){
    $sql = "SELECT COUNT(id_account) as totalband FROM band WHERE id_account = '$id_account'";
    return pdo_query_one($sql);
}

function timeBand($id_account){
    $sql = "SELECT time_ban,time_open FROM band WHERE id_account = '$id_account' ORDER BY ID DESC LIMIT 1";
    return pdo_query_all($sql);
}

function post_ban($id,$id_post){
    $sql = "SELECT * FROM band WHERE id_account = '$id' AND id_post = '$id_post'";
    return pdo_query_one($sql);
}

function open_band($id_account,$time_open){
    $sql = " UPDATE band  set time_open='$time_open' WHERE id_account = '$id_account' AND time_open = (SELECT time_open FROM band WHERE id_account = '$id_account' ORDER BY ID DESC LIMIT 1)";
    return pdo_query_one($sql);
}

function delete_ban($id_account){
    $sql = "DELETE FROM band WHERE id_account = '$id_account'";
    return pdo_execute($sql);
}

function id_admin($id_account){
    $sql = "SELECT id_person_ban FROM band WHERE id_account = '$id_account' ORDER BY ID DESC LIMIT 1";
    return pdo_query_one($sql);
}
