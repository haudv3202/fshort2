<?php

function allposts($id_account){
    $sql = "SELECT * FROM posts WHERE id_account = '$id_account'";
    return pdo_query_all($sql);
}
    function load_allsp($kyw,$id_account){
    $sql = "SELECT * FROM posts WHERE 1";
    if ($kyw != ""){
        $sql.= " AND title LIKE '%".$kyw."%'";
    }
    if ($iddm > 0){
        $sql.= " AND ma_dm LIKE '".$iddm."'";
    }
    $sql.= " ORDER BY masp DESC";
    $listsp = pdo_query($sql);
    return $listsp;
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

?>

