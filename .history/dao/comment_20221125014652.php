<?php

    function Load_allcmt(){
        $querycmt = "SELECT * FROM comments"
        return function pdo_query_all($querycmt);
    }
?>