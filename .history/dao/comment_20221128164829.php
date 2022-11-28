<?php

    function Load_allcmt(){
        $querycmt = "SELECT * FROM comments";
        return pdo_query_all($querycmt);
    }

      function insert_comment($noidung,$makh,$idpro,$ngaybl){
        $sql = "INSERT INTO binh_luan(noi_dung,ma_kh,idpro,ngay_bl) VALUES ('$noidung','$makh','$idpro','$ngaybl')";
        pdo_execute($sql);
    }

    function load_allbl($idpro){
        $sql = "SELECT * FROM comments WHERE 1";
        if ($idpro>0) $sql.=" AND idpro='".$idpro."'";
         $sql.=" ORDER BY id DESC";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function comment_one_video($id_video_home){
    $sqlcmt = "SELECT * FROM comments WHERE id = '$id'";
    return pdo_query_one($sqlcmt);
}

?>
