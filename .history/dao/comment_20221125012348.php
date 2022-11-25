<?php

function Allcomment(){
    $querycmt = "
SELECT * FROM comments WHERE parent_comment_id = '0' ORDER BY id DESC
";
    return pdo_query_all($sql);
}
?>