
    // include_once "index.php";
    <div id="video_detail_mini">
      <div class="video_detail_mini_left">
        <div class="video_center">
          <span onclick="play()">
            <img  class="video_click_play"
            src="https://res.cloudinary.com/dnbbehk5b/image/upload/v1669366476/Fshort/image_post/alien-planet-hd-computer-7mlds37jr2v371k0_xhjorr.jpg"
            width="42%"
          ></img>
          </span>
        </div>
        <div class="icon_video_center">
          <a href="?home" class="close_video_detail_mini">
            <i class="bx bx-x"></i>
          </a>
          <div class="btn_report">
            <button><i class="bx bxs-flag-alt"></i><span>Báo cáo</span></button>
          </div>
        </div>
      </div>
      <div class="profile_detail_mini_right">
        <div class="avatar_name_icon_video_mini_right">
          <div class="avatar_mini_video">
            <img
              src="https://res.cloudinary.com/dnbbehk5b/image/upload/v1669366476/Fshort/image_post/alien-planet-hd-computer-7mlds37jr2v371k0_xhjorr.jpg"
              alt=""
            />
          </div>
          <div class="name_setting_mini_video">
            <div class="name_mini_video">
              <h2>Lê Sỹ Hải</h2>
              <h3><span>#43</span><span> 9-7</span></h3>
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
        <div class="title_mini_video">
          Đây là trang chi tiết bài viết
          <span class="tag_mini_video">#demo #fshort</span>
        </div>
        <div class="Interactive_mini_video">
          <div class="icon_interactive_mini_left">
            <div class="heart_interactive">
              <i class='bx bxs-heart' onclick="heart_video_cmt()"></i>
              <span class="view_interactive_mini">0</span>
            </div>
            <div class="chat_interactive">
              <i class='bx bx-message-rounded-dots'></i>
              <span class="view_interactive_mini">124</span>
            </div>
          </div>
          <div class="icon_interactive_mini_right">
           <div class="icon_link_right_mini">
             <i class='bx bx-link' ></i>
             <span>Copy link</span>
           </div>
            <div class="icon_face_right_mini">
              <i class='bx bxl-facebook' ></i>
              <span>Chia sẻ lên facebook</span>
            </div>
            <div class="icon_share_right_mini">
              <i class='bx bxs-share bx-flip-horizontal' ></i>
            </div>
          </div>

        </div>
        <div class="comment_user_video_mini">
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="https://res.cloudinary.com/dnbbehk5b/image/upload/v1669366476/Fshort/image_post/alien-planet-hd-computer-7mlds37jr2v371k0_xhjorr.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                    <h4>Bùi Mạnh Cường</h4>
                    <span class="time_cmt_vdmini">9-7</span>
                    </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích</span><br>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="https://res.cloudinary.com/dnbbehk5b/image/upload/v1669366476/Fshort/image_post/alien-planet-hd-computer-7mlds37jr2v371k0_xhjorr.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đậu Phương Thảo</h4>
                  <span class="time_cmt_vdmini">9-7</span>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích mình đã học được rất nhiều kiến thức mới</span><br>
               </div>
              </div>
            </div>
        </div>
        <form class="input_button_comment_video_mini">
          <input class="ip_cmt_mini" oninput="checkcomment_ipvideo()" type="text"placeholder="Thêm bình luận...">
          <button class="btn_cmt_vdmini">Đăng</button>
        </form>
      </div>
    </div>