<?php
// lấy lại lauout nhé   
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

function new_post_video($title,$link,$id_cate,$id_acc){
    $sql = "INSERT INTO posts VALUES (NULL,'$title','$link',CURRENT_TIMESTAMP(),NULL,'$id_acc','$id_cate',0,0,0,NULL)";
    return pdo_execute($sql);
}

function new_post($content,$link,$id_cate,$id_acc){
    $sql = "INSERT INTO posts VALUES (NULL,NULL,'$link',CURRENT_TIMESTAMP(),NULL,'$id_acc','$id_cate',0,0,0,'$content')";
    return pdo_execute($sql);
}

function all_post_video(){
    $sql ="SELECT * FROM posts WHERE cate_id = 1 ORDER BY create_date	 DESC";
    return pdo_query_all($sql);
}

function all_post_news(){
    $sql ="SELECT * FROM posts WHERE cate_id = 2 ORDER BY create_date DESC";
    return pdo_query_all($sql);
}

function all_post_video_detail($id_account){
    $sql ="SELECT * FROM posts WHERE id_account = '$id_account' AND cate_id = 1 ORDER BY create_date DESC";
    return pdo_query_all($sql);
}

function all_post_news_detail($id_account){
    $sql ="SELECT * FROM posts WHERE id_account = '$id_account' AND cate_id = 2 ORDER BY create_date DESC";
    return pdo_query_all($sql);
}
function PostLike($id_post){
    $sql = "UPDATE posts SET likes = likes+1 WHERE id = '$id_post' ";
    pdo_execute($sql);
}

function PostUnLike($id_post){
    $sql = "UPDATE posts SET likes = likes-1 WHERE id = '$id_post' ";
    pdo_execute($sql);
}

function allLike($id_user){
    $sql = "SELECT SUM(likes) as total_likes FROM posts WHERE 	id_account = '$id_user'";
    return pdo_query_one($sql);
}

function delete_video($id,$id_user){
    $sql = "DELETE  FROM posts WHERE id = '$id' AND id_account = '$id_user'";
    pdo_execute($sql);
}

?>

