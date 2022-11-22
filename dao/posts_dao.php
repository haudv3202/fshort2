<?php

function allposts($id_account){
    $sql = "SELECT * FROM posts WHERE id_account = '$id_account'";
    return pdo_query_all($sql);
}


function post_band($id,$id_band){
    $sql = "UPDATE posts SET band_posts = '$id_band' WHERE id = '$id' ";
    pdo_execute($sql);
}


function post($id){
    $sql = "SELECT * FROM posts WHERE id = '$id'";
    return pdo_query_all($sql);
}