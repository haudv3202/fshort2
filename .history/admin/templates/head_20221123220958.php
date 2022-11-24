<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./public/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <?php echo !empty($linkCSS) ? $linkCSS : ""; ?>
    <link
        href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Roboto:ital,wght@0,500;1,700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./public/src/styles/core.css">
    <link rel="stylesheet" type="text/css" href="./public/src/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="./public/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./public/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./public/src/styles/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script src="./public/src/scripts/ajax_handle.js"></script>
    <?php echo !empty($linkCDN) ? $linkCDN : ""; ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>


</head>