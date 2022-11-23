
      <div class="detail_user">
        <div class="avatar_name_detail_user">
          <div class="mt-3 avatar_detail_user">
            <img
              class="img"
              src="src/img/z3813258660358_a0f98002b39707510fb60cf2d7eded19.jpg"
              alt=""
            />
          </div>
          <div class="name_detail_user">
            <div class="id_user_detail">
              <h1>leehai1508</h1>
              <div class="share_user_detail">
                <i class='bx bx-share bx-flip-horizontal share_user_detail_i' ></i>
                <ul class="coplink_user_detail">
                  <li>
                    <a href=""
                      ><i class="bx bxl-facebook"></i>
                      <p>Chia Sẻ Với Facebook</p></a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><i class="bx bx-link-alt"></i>
                      <p>Sao chép liên kết</p></a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="name_user_detail">
              <h2>LeeHair</h2>
            </div>
            <div class="edit_profile_user_detail">
              <button class="btn_edit_user_other"  onclick="followOther(this)" data-follow="1">
                <span class="btn_edit_user_other_span">Follow</span>
              </button>
            </div>
          </div>
        </div>
        <div class="ms-4 mt-3 contact_user_detail">
          <div class="Interactive">
            <h5 class="number_user_fl">1</h5>
            <span class="text_interactive">Đang Follow</span>
          </div>
          <div class="Interactive">
            <h5 class="number_user_fl">1.5M</h5>
            <span class="text_interactive">Follower</span>
          </div>
          <div class="Interactive">
            <h5 class="number_user_fl">100M</h5>
            <span class="text_interactive">Thích</span>
          </div>
        </div>
        <div class="Story_user_detai mt-2">
          <span class="ms-4 text-secondary fs-5">Chưa có tiểu sử.</span>
        </div>
        <div class="Post_user_detail">
          <div class="title_video_user_detail">
            <span class="btn_video fs-5 fw-normal"
              ><a href="detail_video_user_other.html">Video</a></span
            >
            <span class="btn_video fs-5 fw-normal"
              ><a href="detail_posts_user_other.php">Bài Viết</a></span
            >
            <span class="btn_video fs-5 fst-normal"
              ><i class="bx bxs-lock-alt"></i
              ><a href="detail_video.php">Đã thích</a></span
            >
          </div>
          <div class="Post_video_user_detail ms-3 row">
            <!-- Render  -->
          </div>
        </div>
      </div>
    </div>
    <div id="video_detail_mini">
      <div class="video_detail_mini_left">
        <div class="video_center">
          <span onclick="play()">
            <video  class="video_click_play"
            src="src/Video/Snaptik.app_7163614237363834139.mp4"
            width="42%"
          ></video>
          </span>
          <div class="icon_play_video_center">
            <i onclick="play()" class="fa-solid fa-play"></i>
          </div>
          <div class="ranger_time_mini_video">
                <input id="seekslider_minivideo" type="range" min="0" max="100" value="0" step="1">
              <div class="time_ranger">
                   <span id="curtimetext_minivideo">00:00</span> / <span id="durtimetext_minivideo">00:00</span>
              </div>
          </div>
        </div>
        <div class="icon_video_center">
          <div class="close_video_detail_mini">
            <i onclick="showVideo()" class="bx bx-x"></i>
          </div>
          <div class="btn_report">
            <button><i class="bx bxs-flag-alt"></i><span>Báo cáo</span></button>
          </div>
          <div class="volum_video">
                        <div id="volum2"><i onclick="clickoffvollume()" class='bx bx-volume-full' ></i></div>
                       <div class="input_transform_video_mini">
                           <input id="volume" value="0.5" type="range"  min="0" max="1" step="0.01">
                       </div>
          </div>
        </div>
      </div>
      <div class="profile_detail_mini_right">
        <div class="avatar_name_icon_video_mini_right">
          <div class="avatar_mini_video">
            <img
              src="src/img/4k-programming-hello-world-text-tpiuwb02b1g2u7kb.jpg"
              alt=""
            />
          </div>
          <div class="name_setting_mini_video">
            <div class="name_mini_video">
              <h3>.leehai1508</h3>
              <h4><span>LeeHair .</span><span> 9-7</span></h4>
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
          Đây là trang chi tiết của trang video <span class="tag_mini_video">#demo #fshort</span>
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
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                              <h4>Bùi Mạnh Cường</h4>
                    <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                    </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đậu Phương Thảo</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích mình đã học được rất nhiều kiến thức mới</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/5557920_CV.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đặng văn Hậu</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                  
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích cố gắng pahts triển kênh nhé</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
             <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Bùi Mạnh Cường</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div> 
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đậu Phương Thảo</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích mình đã học được rất nhiều kiến thức mới</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/5557920_CV.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đặng văn Hậu</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích cố gắng pahts triển kênh nhé</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
             <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Bùi Mạnh Cường</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đậu Phương Thảo</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích mình đã học được rất nhiều kiến thức mới</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/5557920_CV.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đặng văn Hậu</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích cố gắng pahts triển kênh nhé</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
             <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Bùi Mạnh Cường</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đậu Phương Thảo</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span>Video của bạn rất bổ ích mình đã học được rất nhiều kiến thức mới</span><br>
                <span class="time_cmt_vdmini">9-7</span>
               </div>
              </div>
            </div>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="src/img/5557920_CV.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                  <h4>Đặng văn Hậu</h4>
                       <div class="hover_icon_cmt_mini_i">
                      <i class='bx bx-dots-horizontal-rounded'></i>
                      <ul class="hover_icon_cmt_mini">
                        <li><a href=""><i class="fa-regular fa-flag"></i> Báo cáo</a></li>
                        <hr>
                        <li><a href=""><i class="fa-regular fa-trash-can"></i> Xóa</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span >Video của bạn rất bổ ích cố gắng pahts triển kênh nhé</span><br>
                <span class="time_cmt_vdmini">9-7</span>
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
    <div id="logo_loader">
    </div>
    <div class="loader">
    </div>
    <div id="text_loader">
    </div>
 