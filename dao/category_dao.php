<?php
function category_id($cate_id){
    $sql = "SELECT * FROM category where id = '$cate_id'";
    return pdo_query_one($sql);
}

?>