
        <!-- từ đây đổ đi là phần nội dung, thay đổi nội dung trong này nhé -->
        <div class="right_root">
          <div id="main-page about_render_video">
         <div class="about_render_video news_page">
    
</div> 


          </div>
          <div class="infor_user_right_root">
            <div class="list_post_right">
              <p>Hôm ơi,hôm nay đăng gì ? </p>
              <button onclick="postnews()" type="button">
                <i class="bx bx-plus"></i>Tải lên
              </button>
            </div>
            <div class="user_and_friend">
<!--              <div class="user_login_right_root">-->
<!--                <div class="logo_name_videos">-->
<!--                  <img-->
<!--                    src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"-->
<!--                    alt=""-->
<!--                  />-->
<!--                  <div class="text_logo_name_videos">-->
<!--                    <p>-->
<!--                      Cristiano Ronaldo-->
<!--                      <i class="bx bxs-check-circle" style="color: #2e88ff"></i>-->
<!--                    </p>-->
<!--                    <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="logout_right_root">-->
<!--                  <a href="">Chuyển</a>-->
<!--                </div>-->
<!--              </div>-->
<?php 
            if (isset($_SESSION['info'])){
              
                ?>
<div class="note_view_all_friends">
  <p>Gợi ý cho bạn</p>
  <p onclick="viewAll()" id="viewAll">Xem tất cả</p>
</div>
<?php 
              
              foreach ($allaccount as $value){
                
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
                      <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                    </p>
                  </div>
                </div>
                <div class="logout_right_root">
                  <p
                    onclick="followRight(this)"
                    data-follow="1"
                    class="follow_right_root"
                  >
                    Follow
                  </p>
                </div>
                </div>
                <?php 
                   }
                ?>
                <?php 
                   }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================upload file thôi, đừng động nhé-============ -->
    <div class="post_content_video_news">
        <?php if(isset($_SESSION['info']) ){?>
      <div class="postnews">
        <div class="testposstvd">
          <form action="" method="post" enctype="multipart/form-data">
            <h3>Create post</h3>
            <div class="logo_name_videos">
              <img
                src="<?php echo $_SESSION['info']['link_avatar']?>"
                alt=""
              />
              <div class="text_logo_name_videos">
                <p>
                    <?php echo $_SESSION['info']['name']?>
                  <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                </p>
                <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
              </div>
            </div>

              <div id="CustomFormPost" style="width:300px">
                  <textarea   id="valueInput" placeholder="Viết điều bạn đang nghĩ nào ?" name="title_news" ></textarea>
              </div>
              <br>
                <p class="btn_add_video">Thêm ảnh<i class="bx bxs-hand-up"></i></p>
                  <span
                    ><input type="file" id="valueFileNews" name="image_post" class="post_videos"
                  /></span>
            <button type="submit" onclick="News()" name="submit_post">Đăng</button>
            <i onclick="postnews()" class="bx bxs-x-circle"></i>
          </form>
        </div>
      </div>
        <?php }else{?>
        <div class="postnews">
            <div class="testposstvd">
                <i onclick="postnews()" class="bx bxs-x-circle"></i>
            <a href="?login" style="background: #fff;padding: 50px;border-radius: 12px;text-decoration: none;color: blue;">Vui lòng đăng nhập để đăng bài</a>
            </div>
        </div>
        <?php }?>
    </div>

    </div>
