<?php

function tailcheck($email){
    $str = $email;
    $output = explode("@",$str);
    $code = substr($output[0],-7);
    if($output[1] == 'fpt.edu.vn' && substr($code,0,2) ==  "ph"){
        return true;
    }else if($output[1] == 'fpt.edu.vn'){
        return true;
    }else {
        return false;
    }
}

function checkData($name_post){
    $namePost = $_POST["{$name_post}"] == "" ? "" : $_POST["{$name_post}"];
    if($namePost ==  ""){
        return false;
    }else {
        return $namePost;
    }
}

function route($path){
    header('location:'.$path);
}

function checkToken($token){
    $data = check_token("'" . $token ."'");
    if(!empty($data)){
        $_SESSION['info'] = $data;
        return true;
    }else {
        return false;
    }
}

?>
