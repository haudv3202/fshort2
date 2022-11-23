<?php

function dd(){
    echo "<pre>";
    $args = func_get_args();
    var_dump($args);
}





const BASE_URL = "http://localhost/fshort2/"; // url đến đường dẫn
const SITE_URL = BASE_URL . "site/index.php"; // đường dẫn đến trang chuyển trang
const ADMIN_BASE = BASE_URL . 'admin/'; // đường dẫn vào admin


?>
