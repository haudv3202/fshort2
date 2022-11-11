<?php
    @session_start();
    require_once '../global.php';
    require_once '../dao/pdo.php';
    require_once '../dao/account.php';

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
        include_once './layout.php';
    }else if(isset($_GET['danh-muc'])){
        $VIEW_NAME = 'danh-muc.php';
        include_once './layout.php';
    }else if(isset($_GET['register'])){
        require_once ('../google/config.php');
        require_once ("../mail/SendMail.php");
        if(isset($_POST['resgister'])){
            $username = checkData('username');
            $email = checkData('email');
            $password = checkData('password');
            $ress_pass = checkData('re_pass');
            if($password == $ress_pass){
                $token = substr(rand(0,999999),0,6);
                $title = "Token password";
                $content = "Your verification code is " . "<b>$token</b>";
                $result_mail = send_token($title,$content, $email);
                $_SESSION['token_check'] = $token;
                $_SESSION['username'] =  $username;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['status'] = 1;
                header("location:?token");
            }
        }
        include_once('./resgister_login/v_register.php');
    }else if(isset($_GET['token_verification']) && isset($_GET['code'])){
        require_once ('../google/config.php');
        require_once ("../mail/SendMail.php");
        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token['access_token']);

            // get profile info
            $google_oauth = new Google_Service_Oauth2($client);
            $google_account_info = $google_oauth->userinfo->get();

            $_SESSION['userinfo']  = [
                'email' => $google_account_info['email'],
                'full_name' => $google_account_info['name'],
                'token_user' => $google_account_info['id'],
            ];

            if(!empty($_SESSION['userinfo'])){
                $token = substr(rand(0,999999),0,6);
                $title = "Token password";
                $content = "Your verification code is " . "<b>$token</b>";
                $result_mail = send_token($title,$content,$_SESSION['userinfo']['email']);
                $_SESSION['userinfo']['token_check'] = $token;
                $_SESSION['status'] = 1;
            }

            header("location:?token");
        }
    }else if(isset($_GET['token']) &&  isset($_SESSION['status'])){
        if(isset($_POST['token_submit'])){
            $user_token = checkData('token');
                if(!empty($user_token) ){
                    if($user_token == $_SESSION['userinfo']['token_check']  ){
                        $_SESSION["success"] = 'Thành công vui lòng nhập mật khẩu';
                        header('Location:?change_password');
                    }else if($user_token == $_SESSION['token_check']){
                        $_SESSION["success"] = 'Chúc mừng bạn tạo tài khoản thành công';
                        $result = add_account($_SESSION['username'],$_SESSION['email'],$_SESSION['password'],NULL);
                        header('location:index.php');
                    } else {
                        $_SESSION["error"] = 'Token sai';
                    }
                }

        }
        include_once('./resgister_login/v_token_verification.php');
    }else if(isset($_GET['change_password']) && isset($_SESSION["success"])){
        if(isset($_POST["submit_account"])){
            $pass = checkData('new_pass');
            $ress_pass = checkData('ress_pass');
            if($pass == $ress_pass){
                $result = add_account($_SESSION['userinfo']['full_name'],$_SESSION['userinfo']['email'],$pass,$_SESSION['userinfo']['token_user']);
                header('location:index.php');
            }
        }
        include_once('./resgister_login/v_change_password.php');
    }else{
        $VIEW_NAME = 'trang-chu.php';
        include_once './layout.php';
    }


?>