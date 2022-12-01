<?php 
    function like($id_user_log,$id_post){
        $sql = "INSERT INTO interactive VALUES (null,'$id_post','$id_user_log')";
       pdo_execute($sql);
    //  return $sql;
    }
    function deleteLike($id_user_log,$id_post){
        $sql = "DELETE FROM `interactive` WHERE id_posts = '$id_post' AND id_account = '$id_user_log' ";
       pdo_execute($sql);
    //  return $sql;
    }
    function countLike($id_user_log,$id_post){
        $sql = "SELECT COUNT(id_posts) as totallike FROM interactive WHERE id_posts = '$id_post' AND id_account = '$id_user_log' ";
        return pdo_query_one($sql);
    }

  
?>