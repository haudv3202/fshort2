<?php

    function Load_allcmt(){
        $querycmt = "SELECT * FROM comments";
        return pdo_query_all($querycmt);
    }
?>