<?php
@session_start();
require_once '../global.php';
require_once '../dao/pdo.php';
require_once '../dao/account.php';
require_once '../dao/posts_dao.php';
require_once '../dao/comment.php';
require_once '../dao/like.php';
require_once '../dao/user_follow_dao.php';
require_once '../dao/ban_dao.php';
require_once '../App/Check_app/Check.php';
require_once '../App/getid3/getid3.php';
$_SESSION['posts_video'] = [] ;
$posts_news= [];
if(isset($_GET['about'])){
    include_once('../cloudinary/post.php');
        $arr = all_post_news();
//        echo "<pre>";
//        print_r($arr);
//        die();
        $id_user = null;
        if(!empty($_SESSION['info'])){
            $id_user = $_SESSION['info']['id'];
        }
        foreach ($arr as $value){
            $status_like = null;
            if(countLike($id_user,$value['id'])['totallike']>0){
                $status_like = 1;
            }else {
                $status_like = 0;
            }
            $follow = null;
            if(!empty(follow_user($value['id_account'],$id_user))){
                $follow = 1;
            }else {
                $follow = 0;
            }
            $comments = [];

            foreach (comment_all($value['id']) as $value2 ){
                $comments[] = [
                    'key_post' => $value2['id'],
                    'id_comment' => $value2['id_account'],
                    'name_user_comment' => account_one_row_comment($value2['id_account'])['name'],
                    'content' => $value2['content'],
                    'id_post' => $value2['id_post'],
                    'time_date' => $value2['create_date'],
                    'avatar_comment' => account_one_row_comment($value2['id_account'])['link_avatar']
                ];
            }


            $posts_news[] = [
                'id_user_log' => $id_user,
                'id_post' => $value['id'],
                'cate_id' => $value['cate_id'],
                'name' => account_one_row($value['id_account'])['name'],
                'time_create' => $value['create_date'],
                'title' => str_replace('<br>', '<br><br>',nl2br($value['content'], FALSE)),
                'link' => $value['link'],
                'views' => $value['views'],
                'likes' => $value['likes'],
                'avatar' => account_one_row($value['id_account'])['link_avatar'],
                'comments' => $comments,
                'status_like' => $status_like,
                'follow' => $follow,
                'id_user_post' => $value['id_account']
            ];
//            echo "<pre>";
//            print_r($comments);
//            die();

        }






    //        follow
    if(isset($_POST['follows'])){
        $id_account_follow = $_POST['id_account_follow'];
        $id_account_log = $_POST['id_log_follow'];
        follow_user_new($id_account_follow,$id_account_log);
        route('?index.php');
    }

    if(isset($_POST['submit_like'])){
        $id_user = $_POST['id_user'];
        $id_post = $_POST['id_post'];

        if(countLike($id_user,$id_post)['totallike']>0){
            deleteLike($id_user,$id_post);
            PostUnLike($id_post);
            route('?about');
        }else {
            like($id_user,$id_post);
            PostLike($id_post);
            route('?about');
        }
    }
    if (isset($_POST['submit_comment_about'])){
        $content = $_POST['content_video_about'];
        $id_post = $_POST['id_post'];
        $tenkh = $_POST['name_cmt'];
        $id_account = $_SESSION['info']['id'];
        insert_comment($content,$id_account,$id_post);
        route('?about');
    }

    if(isset($_POST['delete_comment'])){
        $id_account = $_POST['id_account'];
        $id_post = $_POST['id_post'];
        $key_post = $_POST['key_post'];
        delete_comment($key_post,$id_account,$id_post);
        route('?about');
    }
    $ramdomFollow = AllaccountRandom();
    $VIEW_NAME = 'about.php';
    include_once './layout.php';
}else if(isset($_GET['chat'])){
    $VIEW_NAME = 'chat.php';
    include_once './layout.php';
}else if(isset($_GET['car'])){
    $VIEW_NAME = 'car.php';
    include_once './layout.php';
}else if(isset($_GET['detail_video'])){
    $arr = all_post_video_detail($_SESSION['info']['id']);
    if(!empty($_SESSION['info'])){
        $id_user = $_SESSION['info']['id'];
    }

    //    follow người khác
    $follow_number = follow_other($_SESSION['info']['id'])['total_follow'];
// Số lượng lượt thích
    $all_likes = allLike($_SESSION['info']['id'])['total_likes'];
//    người khác follow mình
    $follow_me = follow_me($_SESSION['info']['id'])['total_follow'];
    foreach ($arr as $value){
        $comments = [];

        foreach (comment_all($value['id']) as $value2 ){
            $comments[] = [
                'name_user_comment' => account_one_row($value2['id_account'])['name'],
                'content' => $value2['content'],
                'id_post' => $value2['id_post'],
                'time_date' => $value2['create_date'],
                'avatar_comment' => account_one_row($value['id_account'])['link_avatar']
            ];
        }
        $_SESSION['posts_video'][] = [
            'id_user_log' => $id_user,
            'id_detail' => $value['id_account'],
            'id_post' => $value['id'],
            'name' => account_one_row($value['id_account'])['name'],
            'time_create' => $value['create_date'],
            'title' => $value['title'],
            'link' => $value['link'],
            'views' => $value['views'],
            'likes' => $value['likes'],
            'avatar' => account_one_row($value['id_account'])['link_avatar'],
            'comments' => $comments
        ];
    }

    if(isset($_POST['delete_detail'])){
        $id = $_POST['id'];
        $id_account = $_POST['id_account'];
        delete_video($id,$id_account);
        route('?detail_video');
    }
    $VIEW_NAME = 'detail_video.php';
    include_once './layout.php';
}else if(isset($_GET['detail_posts'])){
    $arr = all_post_news_detail($_SESSION['info']['id']);
    $id_user = null;
    if(!empty($_SESSION['info'])){
        $id_user = $_SESSION['info']['id'];
    }

    //    follow người khác
    $follow_number = follow_other($_SESSION['info']['id'])['total_follow'];
// Số lượng lượt thích
    $all_likes = allLike($_SESSION['info']['id'])['total_likes'];
//    người khác follow mình
    $follow_me = follow_me($_SESSION['info']['id'])['total_follow'];

    foreach ($arr as $value){
        $posts_news[] = [
            'id_user_log' => $id_user,
            'id_post' => $value['id'],
            'name' => account_one_row($value['id_account'])['name'],
            'time_create' => $value['create_date'],
            'title' => str_replace('<br>', '<br><br>',nl2br($value['content'], FALSE)),
            'link' => $value['link'],
            'views' => $value['views'],
            'likes' => $value['likes'],
            'avatar' => account_one_row($value['id_account'])['link_avatar']];
    }
    $VIEW_NAME = 'detail_posts.php';
    include_once './layout.php';
}else if(isset($_GET['detail_video_other'])){
    $id_user_post = null;
    if(isset($_GET['id_account'])){
        $id_user_post = $_GET['id_account'];
    }
//    Các bài đăng của tài khoản khác
    $arr = all_post_video_detail($id_user_post);
//    Thông tin tài khoản khác
    $user = user_other($id_user_post);
//    follow người khác
    $follow_number = follow_other($id_user_post)['total_follow'];
// Số lượng lượt thích
    $all_likes = allLike($id_user_post)['total_likes'];
//    người khác follow mình
    $follow_me = follow_me($id_user_post)['total_follow'];

    $id_user = null;
    if(!empty($_SESSION['info'])){
        $id_user = $_SESSION['info']['id'];
    }

    $follow = null;

    if(!empty(follow_user($id_user_post,$id_user))){
        $follow = 1;
    }else {
        $follow = 0;
    }

    foreach ($arr as $value){
        $comments = [];
        foreach (comment_all($value['id']) as $value2 ){
            $comments[] = [
                'name_user_comment' => account_one_row($value2['id_account'])['name'],
                'content' => $value2['content'],
                'id_post' => $value2['id_post'],
                'time_date' => $value2['create_date'],
                'avatar_comment' => account_one_row($value['id_account'])['link_avatar']
            ];
        }
        $_SESSION['posts_video'][] = [
             'id_user_log' => $id_user,
            'id_detail' => $id_user_post,
            'id_post' => $value['id'],
            'name' => account_one_row($value['id_account'])['name'],
            'time_create' => $value['create_date'],
            'title' => $value['title'],
            'link' => $value['link'],
            'views' => $value['views'],
            'likes' => $value['likes'],
            'avatar' => account_one_row($value['id_account'])['link_avatar'],
            'comments' => $comments,
            'status_follow' => $follow
        ];
    }

    //        follow
    if(isset($_POST['follows'])){
        $id_account_follow = $_POST['id_account_follow'];
        $id_account_log = $_POST['id_log_follow'];
        follow_user_new($id_account_follow,$id_account_log);
        route('?detail_video_other&id_account='.$id_account_follow);
    }

    //        unfollow
    if(isset($_POST['unfollows'])){
        $id_account_follow = $_POST['id_account_follow'];
        $id_account_log = $_POST['id_log_follow'];
        unfollow_user($id_account_follow,$id_account_log);
        route('?detail_video_other&id_account='.$id_account_follow);
    }

    if(isset($_POST['delete_detail'])){
        $id = $_POST['id'];
        $id_account = $_POST['id_account'];
        delete_video($id,$id_account);
        route('?detail_video_other&id_account='.$id_account);
    }
    $VIEW_NAME = 'detail_video_user_other.php';
    include_once './layout.php';
}else if(isset($_GET['detail_posts_other'])){
        $id_user_post = null;
    if(isset($_GET['id_account'])){
        $id_user_post = $_GET['id_account'];
    }
    $arr = all_post_news_detail($id_user_post);
    $user = user_other($id_user_post);

    //    follow người khác
    $follow_number = follow_other($id_user_post)['total_follow'];
// Số lượng lượt thích
    $all_likes = allLike($id_user_post)['total_likes'];
//    người khác follow mình
    $follow_me = follow_me($id_user_post)['total_follow'];

    $id_user = null;
    if(!empty($_SESSION['info'])){
        $id_user = $_SESSION['info']['id'];
    }

    $follow = null;

    if(!empty(follow_user($id_user_post,$id_user))){
        $follow = 1;
    }else {
        $follow = 0;
    }

    foreach ($arr as $value){
        $posts_news[] = [
            'id_post' => $value['id'],
            'name' => account_one_row($value['id_account'])['name'],
            'time_create' => $value['create_date'],
            'title' => str_replace('<br>', '<br><br>',nl2br($value['content'], FALSE)),
            'link' => $value['link'],
            'views' => $value['views'],
            'likes' => $value['likes'],
            'avatar' => account_one_row($value['id_account'])['link_avatar']];
    }

    //        follow
    if(isset($_POST['follows'])){
        $id_account_follow = $_POST['id_account_follow'];
        $id_account_log = $_POST['id_log_follow'];
        follow_user_new($id_account_follow,$id_account_log);
        route('?detail_posts_other&id_account='.$id_account_follow);
    }

    //        unfollow
    if(isset($_POST['unfollows'])){
        $id_account_follow = $_POST['id_account_follow'];
        $id_account_log = $_POST['id_log_follow'];
        unfollow_user($id_account_follow,$id_account_log);
        route('?detail_posts_other&id_account='.$id_account_follow);
    }
    $VIEW_NAME = 'detail_posts_user_other.php';
    include_once './layout.php';
}else if(isset($_GET['setting'])){
    if(isset($_POST['update_account'])){
        $id = $_SESSION['info']['id'];
        $name = $_POST['name_profile'] == "" ? $_SESSION['info']['name'] : $_POST['name_profile'];
        $new_pass = null;
        if (md5($_POST['old_pass']) == $_SESSION['info']['password']){
            if ($_POST['new_pass'] == $_POST['ress_pass']){
                $new_pass = md5($_POST['new_pass']);
            }else{
                echo "<script>alert('Vui Lòng Nhập Lại Đúng Mật Khẩu Vừa Tạo!!!!')</script>";
            }
        }else{
            $new_pass = $_SESSION['info']['password'];
            echo "<script>alert('Mật Khẩu Cũ Không Đúng!!!!')</script>";
        }
        $links_avatar = null;
        if (!empty($_FILES['img_profile_update']) && $_FILES['img_profile_update']['error'] == 0 ){
            $image_profile = $_FILES['img_profile_update'];
            $name_image = $image_profile['name'];
            $path = $image_profile['tmp_name'];
            include_once('../cloudinary/update_avatar.php');
            $_SESSION['info']['link_avatar'] = $data['url'];
            $links_avatar = $data['url'];
        }else{
                $links_avatar = $_SESSION['info']['link_avatar'];
        }
                $_SESSION['info']['name'] = $name;
                update_profile($id,$name,$new_pass,$links_avatar);
                 echo "<script>alert('Cập Nhật Thành Công!!!!')</script>";
                // route('?setting');
    }
    $VIEW_NAME = 'setting.php';
    include_once './layout.php';
}else if(isset($_GET['detail_video_mini'])){
    if (isset($_GET['id_post'])){
        $id_post = $_GET['id_post'];
        $onepost = post($id_post);
    }
    if (isset($_POST['submit_comment_home'])){
        $content = $_POST['content_video_home'];
        $id_post = $_POST['id_post'];
        $id_account = $_SESSION['info']['id'];
        insert_comment($content,$id_account,$id_post);
        route('?detail_video_mini&id_post='.$id_post);
    }
    $VIEW_NAME = 'detail_video_mini.php';
    include_once './layout.php';
}else if(isset($_GET['detail_posts_mini'])){
    if (isset($_GET['id_post'])){
        $id_post = $_GET['id_post'];
        $onepost = post($id_post);
    }
    if (isset($_POST['submit_comment_home'])){
        $content = $_POST['content_video_home'];
        $id_post = $_POST['id_post'];
        $id_account = $_SESSION['info']['id'];
        insert_comment($content,$id_account,$id_post);
        header('Location: index.php?detail_posts_mini');
    }
    $VIEW_NAME = 'detail_posts_mini.php';
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
//                echo "<pre>";
                $band = UserBand(login_google($google_account_info['id'])['id']);
//                print_r(login_google($google_account_info['id']));
//                print_r($band);
//                die();
                if(empty($band)){
                    if(login_google($google_account_info['id'])['role_id'] == 2 || login_google($google_account_info['id'])['role_id'] == 3){
                        route('../admin');
                    }else {
                        route('index.php');
                    }
                }else {
                    $date_current = date('Y-m-d H:i:s');
                    $ThatTime = $band[0]['time_open'];
                    if(strtotime($date_current) >= strtotime($ThatTime)){
                        if(login_google($google_account_info['id'])['role_id'] == 2 || login_google($google_account_info['id'])['role_id'] == 3){
                            route('../admin');
                        }else {
                            route('index.php');
                        }
                    }else {
                        $_SESSION["error_account"] = 'Bạn đã bị cấm ' . '<i class="bi bi-exclamation-triangle"></i>' . 'Tài khoản sẽ được mở vào lúc ' . $band[0]['time_open'];
                        route('?login');
                    }
                }

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
    if(isset($_POST['sub_log'])){
        $email = checkData('em_log');
        $password = checkData('pass_log');
        if($email != false && $password != false){
            if(!empty($email) || $password){
                $data = check_account($email,md5($password));
                if(isset($data)){
                    $band = UserBand($data['id']);
                    if(empty($band)){
                            if($data['role_id'] == 2 || $data['role_id'] == 3){
                                $_SESSION['info'] = $data;
                                route('../admin/');
                            }else {
                                $_SESSION['info'] = $data;
                                route('index.php');
                            }
                    }else {
                        $date_current = date('Y-m-d H:i:s');
                        $ThatTime = $band[0]['time_open'];
                        if(strtotime($date_current) >= strtotime($ThatTime)){
                            if($data['role_id'] == 2 || $data['role_id'] == 3){
                                $_SESSION['info'] = $data;
                                route('../admin/');
                            }else {
                                $_SESSION['info'] = $data;
                                route('index.php');
                            }
                        }else {
                            $_SESSION["error_account"] = 'Bạn đã bị cấm ' . '<i class="bi bi-exclamation-triangle"></i>' . 'Tài khoản sẽ được mở vào lúc ' . $band[0]['time_open'];
                        }
                    }
                }else {
                    $_SESSION["error_account"] = 'Sai mật khẩu hoặc email';
                    }
            }
        }else{
            $_SESSION["error_account"] = 'Vui lòng không để trống';
        }

    }
    include_once('./resgister_login/v_login.php');
}else if(isset($_GET['fogotPass'])){
    require_once ("../mail/SendMail.php");
    if(isset($_POST['email_submit'])){
        $email = checkData('email_fogot');
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
            $_SESSION["error_forgot"] = 'Vui lòng không để trống';
        }
    }
    include_once('./resgister_login/v_fogot_password.php');
}
else if(isset($_GET['logout'])){
    session_unset();
    route('?index.php');
}else{
    include_once('../cloudinary/video.php');
    $_SESSION['count_for'] = 0;
    if($_SESSION['count_for'] == 0 ){
        $arr = all_post_video();
        $id_user = null;

        if(!empty($_SESSION['info'])){
            $id_user = $_SESSION['info']['id'];
        }
        foreach ($arr as $value){
            $comments = [];
            $status_like = null;
            if(countLike($id_user,$value['id'])['totallike']>0){
                $status_like = 1;
            }else {
                $status_like = 0;
            }
            $follow = null;
            if(!empty(follow_user($value['id_account'],$id_user))){
                $follow = 1;
            }else {
                $follow = 0;
            }

            foreach (comment_all($value['id']) as $value2 ){
                $comments[] = [
                    'key_post' => $value2['id'],
                    'id_comment' => $value2['id_account'],
                    'name_user_comment' => account_one_row($value2['id_account'])['name'],
                    'content' => $value2['content'],
                    'id_post' => $value2['id_post'],
                    'time_date' => $value2['create_date'],
                    'avatar_comment' => account_one_row($value2['id_account'])['link_avatar']
                ];
            }
            $_SESSION['posts_video'][] = [
                'id_user_log' => $id_user,
                'id_post' => $value['id'],
                'cate_idpost' => $value['cate_id'],
                'name' => account_one_row($value['id_account'])['name'],
                'time_create' => $value['create_date'],
                'title' => $value['title'],
                'link' => $value['link'],
                'views' => $value['views'],
                'likes' => $value['likes'],
                'avatar' => account_one_row($value['id_account'])['link_avatar'],
                'comments' => $comments,
                'status_like' => $status_like,
                'follow' => $follow,
                'id_user_post' => $value['id_account']
            ];
        }
        ++$_SESSION['count_for'];
    }

//        follow
    if(isset($_POST['follows'])){
        $id_account_follow = $_POST['id_account_follow'];
        $id_account_log = $_POST['id_log_follow'];
        follow_user_new($id_account_follow,$id_account_log);
        route('?index.php');
    }


    // like
    if(isset($_POST['submit_like'])){
        $id_user = $_POST['id_user'];
        $id_post = $_POST['id_post'];

        if(countLike($id_user,$id_post)['totallike']>0){
            deleteLike($id_user,$id_post);
            PostUnLike($id_post);
            route('?index.php');
        }else {
            like($id_user,$id_post);
            PostLike($id_post);
            route('?index.php');
        }
    }

    if (isset($_POST['submit_comment_home'])){
        $content = $_POST['content_video_home'];
        $id_post = $_POST['id_post'];
        $tenkh = $_POST['name_cmt'];
        $id_account = $_SESSION['info']['id'];
        insert_comment($content,$id_account,$id_post);
        route('?index.php');
    }

    if(isset($_POST['delete_comment'])){
        $id_account = $_POST['id_account'];
        $id_post = $_POST['id_post'];
        $key_post = $_POST['key_post'];
        delete_comment($key_post,$id_account,$id_post);
        route('?index.php');
    }
    $ramdomFollow = AllaccountRandom();
    $VIEW_NAME = 'home.php';
    include_once './layout.php';
}
require_once('../public/setting/js/home.php');
