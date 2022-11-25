<?php

function Allcomment(){
    $sql = "SELECT * FROM account";
    return pdo_query_all($sql);
}
?>