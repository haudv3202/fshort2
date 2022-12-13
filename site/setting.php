<?php 
  if(isset($_SESSION['info'])){

      if(isset($_SESSION['update_profile'])){
          $update = $_SESSION['update_profile'];
          echo "<script>alert('$update')</script>";
          unset($_SESSION['update_profile']);
      }
?>
     <div class="detail_user">
        <div class="box">   
                <div class="row-centerfix">
<!--                <div class="content_row_setting">-->
<!--                    <h2>Quản lý tài khoản</h2>-->
<!--                </div>-->
<!--                <div class="menu_center">               -->
<!--                    <div id="fix_setting_id" class="row-center-setting">-->
<!--                        <div  class="center_title_setting">-->
<!--                            <p>--><?php //echo $_SESSION['info']['name'] ?><!--</p> -->
<!--                        </div>-->
<!--                        <div id="icon_setting">-->
<!--                            <a  href="">Xóa Vĩnh Viễn</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--   -->
<!--                </div>-->

                <hr>
                <div class="content_row_setting">
                    <h2>Thông Tin Tài Khoản</h2>
                    <form action="" class="form_setting_account" method="POST" enctype="multipart/form-data">
                         <div class="setting_account_name_role">
                        <div class="name_settimg_account">
                                <p for="">Tên tài khoản</p>
                        <input type="text" name="name_profile" placeholder="<?php echo $_SESSION['info']['name'] ?>">
                        </div>
                        <div class="role_setting_account">
                               <p for="">Mật khẩu cũ</p>
                        <input type="text" name="old_pass" placeholder="Nhập mật khẩu cũ..." >
                        </div>
                        </div>
                        <div class="grid_new_pass">
                            <div class="setting_account">
                            <p for="">Mật Khẩu Mới</p>
                            <input type="text" name="new_pass" placeholder="Nhập Mật Khẩu Bạn Muốn Tạo...">
                        </div>
                             <div class="pass_setting_account">
                               <p for="">Nhập lại mật khẩu mới</p>
                                <input type="text" name="ress_pass" placeholder="Nhập Lại Mật Khẩu bạn Vừa Tạo....">
                         </div>
                        </div>
                         <div class="setting_account_pass_button">
                            <div class="image_setting">
                                <img src="<?php echo $_SESSION['info']['link_avatar'] ?>" alt="">
                                <div class="update_image_setting">
                                    <p for="">Thêm mới ảnh</p>
                                <input class="custom-file-input" type="file" name="img_profile_update">
                                </div>
                            </div>
                        <div class="button_edit_setting">
                            <button type="submit" name="update_account">Cập Nhật Tài Khoản</button>
                        </div>
                        </div>
                        
                    </form>
                    </div>
        </div>
</div>
     <?php
        }else{
        ?>
                <p class="login_setting">Đăng NHập Để Chỉnh Sửa Tài Khoản</p>
        <?php
        }
        ?>  