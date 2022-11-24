<?php

function Allaccount(){
    $sql = "SELECT * FROM account";
    return pdo_query_all($sql);
}
?>