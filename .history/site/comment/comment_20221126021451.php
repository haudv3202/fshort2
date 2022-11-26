<?php
    session_start();
    include "../../model/connect.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = load_allbl($idpro);
?>
