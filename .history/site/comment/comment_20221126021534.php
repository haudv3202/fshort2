<?php
    session_start();
    include "../../model/connect.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = load_allbl($idpro);
?>
<!DOCTYPE html>
<html>
<head>
    <title>FSHORT</title>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> -->
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Roboto:ital,wght@0,500;1,700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="../public/setting/css/detail_user.css" />

</head>

<body>