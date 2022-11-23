<?php
    @session_start();
    require_once '../global.php';
    require_once '../dao/pdo.php';
    require_once '../dao/account.php';
    require_once '../App/Check_app/Check.php';

    if(isset($_GET['home'])){
        $VIEW_NAME = 'home.php';
        include_once './test.php';
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

            if($username != false && $email != false && $password != false && $ress_pass != false  ){
                if(tailcheck($email) ==  true){
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
                        route('?token');
                    }
                }else {
                    $_SESSION["error"] = 'Bạn không có quyền truy cập';
                    route('?register');
                }
            }else {
                $_SESSION["error"] = 'Không để trống';
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
            if(tailcheck($google_account_info['email']) == true){
                if(checkToken($google_account_info['id']) != true){
                    if(!empty($_SESSION['userinfo'])){
                        $token = substr(rand(0,999999),0,6);
                        $title = "Token password";
                        $content = "Your verification code is " . "<b>$token</b>";
                        $result_mail = send_token($title,$content,$_SESSION['userinfo']['email']);
                        $_SESSION['userinfo']['token_check'] = $token;
                        $_SESSION['status'] = 1;
                    }
                    route('?token');
                }else {
                    route('index.php');
                }
            }else {
                $_SESSION["error"] = 'Bạn không có quyền truy cập';
                route('?register');
            }
        }
    }else if(isset($_GET['token']) &&  isset($_SESSION['status'])){
        if(isset($_POST['token_submit'])){
            $user_token = checkData('token');
                if(!empty($user_token) ){
                    if(isset($_SESSION['userinfo']) || $_SESSION['token_check']){
                        if($user_token == $_SESSION['userinfo']['token_check']  ){
                            $_SESSION["success"] = 'Thành công vui lòng nhập mật khẩu';
                            route('?change_password');
                        }else if($user_token == $_SESSION['token_check']){
                            $_SESSION["success"] = 'Chúc mừng bạn tạo tài khoản thành công';
                            $result = add_account($_SESSION['username'],$_SESSION['email'],md5($_SESSION['password']),NULL);
                            route('?login');
                        } else {
                            $_SESSION["error"] = 'Token sai';
                        }
                    }
                }
        }
        include_once('./resgister_login/v_token_verification.php');
    }else if(isset($_GET['change_password']) && isset($_SESSION["success"])){
        if(isset($_POST["submit_account"])){
            $pass = checkData('new_pass');
            $ress_pass = checkData('ress_pass');
            if(isset($_SESSION['email_fogot'])){
                if($pass == $ress_pass){
                    $result = fogotAccount($_SESSION['id_fogot'],md5($pass));
                    route('?login');
                }
            }else {
                if($pass == $ress_pass){
                    $result = add_account($_SESSION['userinfo']['full_name'],$_SESSION['userinfo']['email'],md5($pass),$_SESSION['userinfo']['token_user']);
                    route('?login');
                }
            }
        }
        include_once('./resgister_login/v_change_password.php');
    }else if(isset($_GET['login'])){
        require_once ('../google/config.php');

        if(isset($_SESSION["error_account"])){
            $error = $_SESSION["error_account"];
            echo "<script>alert('$error')</script>";
            unset($_SESSION['error_account']);
        }
        if(isset($_POST['sub_log'])){
            $email = checkData('em_log');
            $password = checkData('pass_log');
            if($email != false && $password != false){
                if(!empty($email) || $password){
                    $data = check_account($email,md5($password));
                    if(isset($data)){
                        route('index.php');
                    }else {
                        $_SESSION["error_account"] = 'Sai mật khẩu hoặc email';
                        route('?login');
                    }
                }
            }else{
                $_SESSION["error_account"] = 'Phải điền tất cả các trường';
            }

        }
        include_once('./resgister_login/v_login.php');
    }else if(isset($_GET['fogotPass'])){
        require_once ("../mail/SendMail.php");
        if(isset($_SESSION["error_forgot"])){
            $error = $_SESSION["error_forgot"];
            echo "<script>alert('$error')</script>";
            unset($_SESSION['error_forgot']);
        }
        if(isset($_POST['email_submit'])){
            $email = checkData('email_fogot');
//            print_r();
//            die();
            if($email != false){
                if(!empty(checkEmail($email))){
                    $token = substr(rand(0,999999),0,6);
                    $title = "Token password";
                    $content = "Your verification code is " . "<b>$token</b>";
                    $result_mail = send_token($title,$content,$email);
                    $_SESSION['userinfo']['token_check'] = $token;
                    $_SESSION['status'] = 1;
                    $_SESSION['id_fogot'] = checkEmail($email)['id'];
                    $_SESSION['email_fogot'] = checkEmail($email)['email'];
                    route('?token');
                }else {
                    $_SESSION["error_forgot"] = 'Email không tồn tại';
                }
            }else{
                $_SESSION["error_forgot"] = 'Phải điền tất cả các trường';
            }
        }
        include_once('./resgister_login/v_fogot_password.php');
    }else{
        $VIEW_NAME = 'trang-chu.php';
        include_once './test.php';
    }
?>