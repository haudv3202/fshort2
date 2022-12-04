<?php 
  if(isset($_SESSION['info'])){

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
                            <p><?php echo $_SESSION['info']['name'] ?></p> 
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
                                <p for="">Tên tài khoản</p>
                        <input type="text" placeholder="<?php echo $_SESSION['info']['name'] ?>">
                        </div>
                        <div class="role_setting_account">
                               <p for="">Mật khẩu cũ</p>
                        <input type="text" placeholder="Nhập mật khẩu cũ..." >
                        </div>
                        </div>
                        <div class="grid_new_pass">
                            <div class="setting_account">
                            <p for="">Mật Khẩu Mới</p>
                            <input type="text" placeholder="Nhập Mật Khẩu Bạn Muốn Tạo...">
                        </div>
                             <div class="pass_setting_account">
                               <p for="">Nhập lại mật khẩu mới</p>
                                <input type="text" placeholder="Nhập Lại Mật Khẩu bạn Vừa Tạo....">
                         </div>
                        </div>
                         <div class="setting_account_pass_button">
                            <div class="image_setting">
                                <img src="<?php echo $_SESSION['info']['link_avatar'] ?>" alt="">
                                <div class="update_image_setting">
                                    <p for="">Thêm mới ảnh</p>
                                <input class="custom-file-input" type="file">
                                </div>
                            </div>
                        <div class="button_edit_setting">
                            <button>Cập Nhật Tài Khoản</button>
                        </div>
                        </div>
                        
                    </form>
                    </div>
        </div>
</div>
     <?php
        }
        ?>