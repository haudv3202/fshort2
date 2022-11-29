<?php



?>
=======
function comment_video_all($id_post_video){
    $sql = "SELECT * FROM comments WHERE id_post = $id_post_video";
    return pdo_query_all($sql);
}
>>>>>>> 5b11bf788c2681aef23a2f66f6c113d59172bf71
