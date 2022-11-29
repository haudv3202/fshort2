<?php


function comment_video_all($id_post_video){
    $sql = "SELECT * FROM comments WHERE id_post = $id_post_video";
    return pdo_query_all($sql);
}
function insert_comment($content,$id_â,$idpro,$ngaybl){
        $sql = "INSERT INTO binh_luan(noi_dung,ma_kh,idpro,ngay_bl) VALUES ('$noidung','$makh','$idpro','$ngaybl')";
        pdo_execute($sql);
    }

?>


