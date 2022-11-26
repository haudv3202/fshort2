<?php

    function Load_allcmt(){
        $querycmt = "SELECT * FROM comments";
        return pdo_query_all($querycmt);
    }

      function insert_bl($noidung,$makh,$idpro,$ngaybl){
        $sql = "INSERT INTO binh_luan(noi_dung,ma_kh,idpro,ngay_bl) VALUES ('$noidung','$makh','$idpro','$ngaybl')";
        pdo_execute($sql);
    }

    function load_allbl($idpro){
        $sql = "SELECT * FROM comments WHERE 1";
        if ($idpro>0) $sql.=" AND idpro='".$idpro."'";
         $sql.=" ORDER BY ma_bl DESC";
        $listbl = pdo_query($sql);
        return $listbl;
    }

    function delete_bl($id){
        $sql = "DELETE FROM binh_luan WHERE ma_bl=".$id;
        pdo_execute($sql);
    }
?>