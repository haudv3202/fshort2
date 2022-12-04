<div id="video_detail_mini">
    <?php
    foreach ($onepost as $value){
    // echo "<pre>";
    // print_r($onepost);
    // die();
    ?>
    <div class="video_detail_mini_left">
        <div class="video_center post_center">
          <span>
            <img  class="posts_click_play"
                  src="<?php echo $value['link'] ?>"
            ></img>
          </span>
        </div>
        <div class="icon_video_center">
            <a href="?about" class="close_video_detail_mini">
                <i class="bx bx-x"></i>
            </a>
        </div>
    </div>
    <div class="profile_detail_mini_right">
        <div class="avatar_name_icon_video_mini_right">
            <div class="avatar_mini_video">
                <img
                        src="<?php echo account_one_row($value['id_account'])['link_avatar'] ?>"
                        alt=""
                />
            </div>
            <div class="name_setting_mini_video">
                <div class="name_mini_video">
                    <h3><?php echo account_one_row($value['id_account'])['name'] ?></h3>
                    <h4><span>#<?php echo account_one_row($value['id_account'])['id'] ?></span><span class="date_post_video_mini"><?php echo $value['create_date'] ?></span></h4>
                </div>
                <div class="setting_mini_video">
                    <i
                            class="bx bx-dots-horizontal-rounded share_user_mini_video_i"
                    ></i>
                    <ul class="coplink_user_mini_video">
                        <li>
                            <a href=""> <p>Cài đặt quyền riêng tư</p></a>
                        </li>
                        <li>
                            <a href=""> <p>Xóa</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="title_mini_video content_posts_mini">
            <?php echo $value['content'] ?>
        </div>
        <div class="Interactive_mini_video bdt_interactive_posts">
            <div class="icon_interactive_mini_left_posts">
                <div class="like_interactive">
                    <i onclick="clicklike()" id="like-posts-mini"  class='bx bx-like'></i>
                    <span class="view_interactive_mini">Thích</span>
                </div>
                <div class="chat_interactive">
                    <i class="fa-regular fa-message"></i>
                    <span class="view_interactive_mini">Bình luận</span>
                </div>
                <div class="icon_share_right_mini">
                    <i class='bx bx-share bx-flip-horizontal' ></i>
                    <span>Chia sẻ</span>
                </div>
            </div>

        </div>
        <div class="comment_user_video_mini comment_user_posts_mini">
            <?php
            foreach (comment_all($value['id']) as $value2 ){
                ?>
                <div class="user_comment_video_mini">
                    <div class="avatar_name_icon_mini_video">
                        <div class="avatar_mini_video">
                            <img src="<?php echo account_one_row($value['id_account'])['link_avatar'] ?>" alt="">
                        </div>
                        <div class="name_comment_mini_video">
                            <h4><?php echo account_one_row($value2['id_account'])['name'] ?></h4>
                            <span class="time_cmt_vdmini"><?php echo $value2['create_date'] ?></span>
                        </div>
                    </div>
                    <div class="comment_video_mini">
                        <div class="text_comment_video_mini">
                            <span><?php echo $value2['content'] ?></span><br>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <form action="index.php" method="post" class="input_button_comment_video_mini">
            <input type="hidden" name="id_post" value="<?php echo $value['id'] ?>">
            <?php

            if (isset($_SESSION['info'])){

                ?>
                <input  class="ip_cmt_mini" oninput="checkcomment_ipvideo()"  name="content_video_home" type="text" placeholder="Thêm bình luận...">
                <?php
            }else{
                ?>
                <input  class="ip_cmt_mini" oninput="checkcomment_ipvideo()"  name="content_video_home" type="text" disabled placeholder="Đăng nhập để bình luận...">
                <?php
            }
            ?>
            <button type="submit" class="btn_cmt_vdmini"  name="submit_comment_home">Đăng</button>
        </form>
    </div>
</div>
<?php
}
?>