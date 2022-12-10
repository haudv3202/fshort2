<?php
if(isset($_SESSION['success'])){
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['success'];?>
    </div>
    <?php
    unset($_SESSION['success']);
}
?>
<!-- từ đây đổ đi là phần nội dung, thay đổi nội dung trong này nhé -->
<div class="right_root">
    <div id="main-page">
        <div class="videos_page news_page">
            <!-- Render Video  -->
        </div>
    </div>
    <div class="infor_user_right_root">
        <div class="list_post_right">
            <p>Hôm nay có gì mới không nào!!!</p>
            <button onclick="postvd()" type="button">
                <i class="bx bx-video-plus"></i> Tải lên
            </button>
        </div>
        <div class="user_and_friend">
            <?php
            if (isset($_SESSION['info'])){
            ?>
            <div class="note_view_all_friends">
                <p>Gợi ý cho bạn</p>
<!--                <p onclick="viewAll()" id="viewAll">Xem tất cả</p>-->
            </div>
            <!-- ==============list friends -->
            <?php
              foreach ($ramdomFollow as $value){
                  if($value['id'] != $_SESSION['info']['id'] && follows($_SESSION['info']['id'],$value['id'])['total_follow'] != 1){
                  ?>
              <!-- ==============list friends -->
              <div class="list_friends_root_right">
                <div class="logo_name_videos">
                  <img
                    src="<?php echo account_one_row($value['id'])['link_avatar'] ?>"
                    alt=""
                  />
                  <div class="text_logo_name_videos">
                    <p>
                      <?php echo $value['name'] ?>
                      <i class="bx bxs-check-circle" style="color: #2988bc"></i>
                    </p>
                  </div>
                </div>
                <div class="logout_right_root">
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $_SESSION['info']['id'] ?>" name="id_log_follow">
                        <input type="hidden" value="<?php echo $value['id'] ?>" name="id_account_follow">
                        <button type="submit" name="follows" class="follow_right_root">Follow</button>
                    </form>
                </div>
              </div>
                <?php
                  }
                }
                ?>
        </div>
           <?php 
              }

                ?>
    </div>
</div>
</div>
</div>

<!-- ================upload file thôi, đừng động nhé-============ -->


<!--</form>-->
<div class="post_content_video_news">
    <?php if(isset($_SESSION['info']) ){?>
    <div class="postvideo">
        <div class="testposstvd">
            <?php if(isset($_SESSION['error_upload'])) {
                $error = $_SESSION['error_upload'];
                echo "<script>alert('$error')</script>'";
                unset($_SESSION['error_upload']);
            }?>
            <form   action="" method="post" enctype="multipart/form-data">
                <h3>Create post</h3>
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                    </div>
                </div>

                <div id="CustomFormPost" style="width:300px">
                    <textarea   id="valueInput" placeholder="What's on your mind ?" name="title" ></textarea>
                </div>

                <br>
                <p class="btn_add_video">  Add Video <i class="bx bxs-hand-up"></i></p>

                <span
                ><input type="file" name="videohome" id="valuefile" class="post_videos"
                    /></span>
                <button type="submit" onclick="test()" name="sb_video">Đăng</button>
                <i onclick="postvd()" class="bx bxs-x-circle"></i>
            </form>
        </div>
    </div>
    <?php }else{?>
        <div class="postvideo">
            <div class="testposstvd" onclick="postvd()">
               <div class="errol_post_Video" style="background:#ed8c72;padding: 0px 30px 30px;color:#fff;border-radius: 70px;">
                <img src="../public/setting/img/logo.png" alt="">
                <div class="style_errol_posst_video"></div>
               <!-- <i onclick="postvd()" class="bx bxs-x-circle"></i> -->
               <p >Vui lòng <a href="?login"> đăng nhập </a> để đăng video</p> 
               </div>
            </div>
        </div>
    <?php }?>
</div>

      

