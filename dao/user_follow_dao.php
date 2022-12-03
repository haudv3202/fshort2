<?php

function follow_user_new($id_account_follow,$id_log_follow){
    $sql = "INSERT INTO user_follow VALUES (NULL,'$id_account_follow','$id_log_follow',CURRENT_TIMESTAMP)";
    return pdo_execute($sql);
}

function follow_user($id_account_follow,$id_log_follow){
    $sql = "SELECT * FROM user_follow WHERE follower = '$id_account_follow' AND id_follow = '$id_log_follow'";
    return pdo_query_one($sql);
}
?>