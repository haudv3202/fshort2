
<?php
                
                if(isset($_SESSION['info'])){
                    $user = $_SESSION['info'];
                  ?>
      <div class="detail_user">
        <div class="avatar_name_detail_user">
          <div class="mt-3 avatar_detail_user">
            <img
              class="img"
            src="<?php echo $_SESSION['info']['link_avatar'];?>"
              alt=""
            />
          </div>
          <div class="name_detail_user">
            <div class="id_user_detail">

              <h2><?php echo $_SESSION['info']['name'];?></h2>

              <div class="share_user_detail">
                <i class='bx bx-share bx-flip-horizontal share_user_detail_i' ></i>
                <ul class="coplink_user_detail">
<!--                  <li>-->
<!--                    <a href=""-->
<!--                      ><i class="bx bxl-facebook"></i>-->
<!--                      <p>Chia Sẻ Với Facebook</p></a-->
<!--                    >-->
<!--                  </li>-->
                  <li>
                    <a  onclick="getURL();"
                      ><i class="bx bx-link-alt"></i>
                      <p>Sao chép liên kết</p></a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div id="notification-area">
        </div>
            <div class="name_user_detail">
              <h3>#<?php echo $_SESSION['info']['id'];?></h3>
            </div>
            <div class="edit_profile_user_detail">
              <button class="btn_edit_user">
                <i class="bx bxs-edit"></i><a href="?setting">Sửa hồ sơ</a>
              </button>
            </div>
          </div>
        </div>
        <div class="ms-4 mt-3 contact_user_detail">
          <div class="Interactive">
            <h5 class="number_user_fl"><?php echo $follow_number;?></h5>
            <span class="text_interactive">Đang Follow</span>
          </div>
          <div class="Interactive">
            <h5 class="number_user_fl"><?php echo $follow_me;?></h5>
            <span class="text_interactive">Follower</span>
          </div>
          <div class="Interactive">
            <h5 class="number_user_fl"><?php echo $all_likes;?></h5>
            <span class="text_interactive">Thích</span>
          </div>
        </div>
        <div class="Story_user_detai mt-2">
          <span class="ms-4 text-secondary fs-5">Chưa có tiểu sử.</span>
        </div>
        <?php
                
                }
                    
                  ?>
        <div class="Post_user_detail">
          <div class="title_video_user_detail">
            <span class="btn_video fs-5 fw-normal"
              ><a href="?detail_video">Video</a></span
            >
            <span class="btn_video fs-5 fw-normal"
              ><a href="?detail_posts">Bài Viết</a></span
            >
<!--            <span class="btn_video fs-5 fst-normal"-->
<!--              ><i class="bx bxs-lock-alt"></i-->
<!--              ><a href="?detail_video">Đã thích</a></span-->
<!--            >-->
          </div>
          <div class="Posts_user">
            <!-- Render  -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

    </div>

