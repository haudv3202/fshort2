<?php


function comment_all($id_post_video){
    $sql = "SELECT * FROM comments WHERE id_post = $id_post_video";
    return pdo_query_all($sql);
}
function insert_comment($content,$id_account,$id_post){
        $sql = "INSERT INTO comments(content,id_account,id_post) VALUES ('$content','$id_account','$id_post')";
        pdo_execute($sql);
    }
function delete_comment($id,$id_account,$id_post){
         $sql = "DELETE FROM comments WHERE id = '$id' AND id_account = '$id_account' AND id_post = '$id_post'   ";
         return pdo_execute($sql);
}

?>


