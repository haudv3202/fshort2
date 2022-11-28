<?php

    function Load_allcmt(){
        $querycmt = "SELECT * FROM comments";
        return pdo_query_all($querycmt);
    }

      function insert_comment($noidung,$makh,$idpro,$ngaybl){
        $sql = "INSERT INTO binh_luan(noi_dung,ma_kh,idpro,ngay_bl) VALUES ('$noidung','$makh','$idpro','$ngaybl')";
        pdo_execute($sql);
    }
    function comment_one_video($id_video_home){
    $sqlcmt = "SELECT * FROM comments WHERE id_post = '$id_video_home'";
    return pdo_query_one($sqlcmt);
}

?>
