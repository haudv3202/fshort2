<?php 
if (isset($_SESSION['info'])){
    if ($_SESSION['info']['role_id'] == 3 ){
        $role_id = "Quản Trị";
    }else if($_SESSION['info']['role_id'] == 2){
        $role_id = "Nhân Viên";
    }else{
        $role_id = "Người Dùng";
    }
?>
     <div class="detail_user">
        <div class="box">   
                <div class="row-centerfix">
                <div class="content_row_setting">
                    <h2>Quản lý tài khoản</h2>
                </div>
                <div class="menu_center">               
                    <div id="fix_setting_id" class="row-center-setting">
                        <div  class="center_title_setting">
                            <p><?php echo $_SESSION['info']['name'];?></p> 
                        </div>
                        <div id="icon_setting">
                            <a  href="">Xóa Vĩnh Viễn</a>
                        </div>
                    </div>
   
                </div>

                <hr>
                <div class="content_row_setting">
                    <h2>Thông Tin Tài Khoản</h2>
                    <form action="" class="form_setting_account">
                         <div class="setting_account_name_role">
                        <div class="name_settimg_account">
                                <p for="">Tên Tài Khoản</p>
                        <input type="text" placeholder="<?php echo $_SESSION['info']['name'];?>">
                        </div>
                        <div class="role_setting_account">
                               <p for="">Vai Trò</p>
                        <input type="text" placeholder="<?php echo $role_id ?>" disabled>
                        </div>
                        </div>
                        <div class="setting_account">
                            <p for="">Email</p>
                        <input type="text" placeholder="<?php echo $_SESSION['info']['email'];?>">
                        </div>
                         <div class="setting_account_pass_button">
                         <div class="pass_setting_account">
                               <p for="">Mật Khẩu</p>
                        <input type="text" placeholder="<?php echo $_SESSION['info']['password'];?>">
                         </div>
                        <div class="button_edit_setting">
                            <button>Sửa Tài Khoản</button>
                        </div>
                        </div>
                        
                    </form>
                    </div>
        </div>
</div>
<?php 

}

?>