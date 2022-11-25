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

function new_post($title,$link,$id_cate,$id_acc){
    $sql = "INSERT INTO posts VALUES (NULL,'$title','$link',CURRENT_TIMESTAMP(),NULL,'$id_acc','$id_cate',NULL,0,0,0)";
    return pdo_execute($sql);
}

function all_post(){
    $sql ="SELECT * FROM posts";
    return pdo_query_all($sql);
}
function all_post(){
    $sql ="SELECT * FROM posts";
    return pdo_query_all($sql);
}