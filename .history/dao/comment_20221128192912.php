<?php


function comment_video_all($id_post_video){
    $sql = "SELECT * FROM comments WHERE id_post = $id_post_video";
    return pdo_query_all($sql);
}
function insert_comment($content,$id_account,$id_post){
        $sql = "INSERT INTO comments(content,id_account,id_post,create_date) VALUES ('$content','$id_account','$id_post')";
        pdo_execute($sql);
    }

?>


