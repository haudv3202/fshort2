<?php


function comment_video_all($id_post_video){
    $sql = "SELECT * FROM comments WHERE id_post = $id_post_video";
    return pdo_query_all($sql);
}

?>


