<?php
@session_start();
require_once '../App/Check_app/Check.php';
if(isset($_SESSION['info'])){
    require_once '../global.php';
    require_once '../dao/pdo.php';
    require_once '../dao/account.php';
    require_once '../dao/role_dao.php';
    require_once '../dao/posts_dao.php';
    require_once '../dao/category_dao.php';
    require_once '../dao/ban_dao.php';
    require_once '../App/Tool_view/css.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
        include_once './templates/layout.php';
    }else if(isset($_GET['danh-muc'])){
        $VIEW_NAME = 'danh-muc.php';
        include_once './templates/layout.php';
    }else if(isset($_GET['AllAccount'])){

        $allAccount = Allaccount();
        $allData = [];

        foreach ($allAccount as $value){
            if(totalBan($value['id'])['totalband'] ==  1 || totalBan($value['id'])['totalband'] ==  2){
                $a = timeBand($value['id'])[0]['time_open'];
                if(time() > strtotime($a)){
                    $allData[] = $value;
                    $role_band = 0;
                    Band($value['id'],$role_band);//update level band
                }
            }else if(totalBan($value['id'])['totalband'] ==  0){
                $allData[] = $value;
            }
        }


        $VIEW_NAME = 'v_accouns.php';
        include_once './templates/layout.php';



    }else if(isset($_GET['bandAccount'])){
        if(isset( $_POST['item_id'])){
            $time = date('Y-m-d H:i:s',strtotime('- 1 hour'));
            $id_user = $_POST['item_id'];
            $role_band = $_POST['open'];
            if(totalBan($id_user)['totalband'] >= 3){
                Band($id_user,$role_band);
                delete_ban($id_user);
            }else {
                open_band($id_user,$time);
                Band($id_user,$role_band);
            }
        }

        $allData = AllBand();
        $VIEW_NAME = 'v_band.php';
        include_once './templates/layout.php';

    }else if(isset($_GET['posts'])){

        $dataPost = null;
        $hastag = [];
        if(!empty($_GET['id'])){
            $dataPost = allposts($_GET['id']);
            foreach ($dataPost as $value){
                $hastag[$value['id']] = explode(',',$value['hastag']);
            }
        }

        if(isset( $_POST['id_user'])){
            $id_user = $_POST['id_user'];
            $time_ban = null;
            $startDate = time();
            $role_band = null;
            $id_person_ban = $_SESSION['info']['id'];

            if(totalBan($id_user)['totalband'] == 1){
                $role_band = 2;
                $time_ban = date('Y-m-d H:i:s', strtotime('+7 day', $startDate));
            }else if(totalBan($id_user)['totalband'] >= 2) {
                $role_band = 3;
                $time_ban = date('Y-m-d H:i:s', strtotime('365 day', $startDate));
            }else {
                $role_band = 1;
                $time_ban = date('Y-m-d H:i:s', strtotime('+1 day', $startDate));
            }

            $id_post = $_POST['id_post'];
            Ban($id_user,$id_post,$time_ban,$id_person_ban);
            Band($id_user,$role_band);//update level band
        }

        $VIEW_NAME = 'v_posts.php';
        include_once './templates/layout.php';
    }else if(isset($_GET['employee'])){
        $allData = Allaccount();
        $allRows = allRoles();
        $linkCDN = viewCssCDN('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">');
//        $linkCSS = viewCSS('./public/src/styles/');
        if(!empty($_POST['item_id'])){
            $id = $_POST['item_id'];
            $role_id = $_POST['status_role'];
            setRoleId($id,$role_id);
        }

        $VIEW_NAME = 'v_employee_account.php';
        include_once './templates/layout.php';
    }else if(isset($_GET['newAccount'])){
        $linkCDN = viewCssCDN('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">');
        require_once ("../mail/SendMail.php");
        $roleAll = allRoles();
        if(isset($_POST['submit_account'])){
            $name = $_POST['nameAc'];
            $email = $_POST['EmailAc'];
            $pass = rand_string(8);
        }
        $VIEW_NAME = 'v_new_account.php';
        include_once './templates/layout.php';
    }else {
        $VIEW_NAME = 'v_home.php';
        include_once './templates/layout.php';
    }
}else {
    $_SESSION['error_admin'] = "Vui lòng đăng nhập để vào admin";
    route('../site/?login');
}
?>