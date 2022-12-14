<?php

function follow_user_new($id_account_follow,$id_log_follow){
    $sql = "INSERT INTO user_follow VALUES (NULL,'$id_account_follow','$id_log_follow',CURRENT_TIMESTAMP)";
    return pdo_execute($sql);
}

function unfollow_user($id_account_follow,$id_log_follow){
    $sql = "DELETE FROM user_follow WHERE id_follow = '$id_log_follow' AND follower = '$id_account_follow'";
    return pdo_execute($sql);
}


function follow_user($id_account_follow,$id_log_follow){
    $sql = "SELECT * FROM user_follow WHERE follower = '$id_account_follow' AND id_follow = '$id_log_follow'";
    return pdo_query_one($sql);
}

function follows($id_user,$id_follower){
    $sql = "SELECT COUNT(follower) as total_follow FROM user_follow WHERE id_follow = '$id_user' AND follower = '$id_follower'";
    return pdo_query_one($sql);
}

//follow người khác
function follow_other($id_user){
    $sql = "SELECT COUNT(id_follow) as total_follow FROM user_follow WHERE id_follow = '$id_user'";
    return pdo_query_one($sql);
}

//người khác follow mình
function follow_me($id_user){
    $sql = "SELECT COUNT(follower) as total_follow FROM user_follow WHERE follower = '$id_user'";
    return pdo_query_one($sql);
}
?>