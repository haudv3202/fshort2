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
                <i class="bx bx-video-plus"></i> Post Videos
            </button>
            <button onclick="postnews()" type="button">
                <i class="bx bx-plus"></i>Post News
            </button>
        </div>
        <div class="user_and_friend">
            <div class="user_login_right_root">
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                    </div>
                </div>
                <div class="logout_right_root">
                    <a href="">Chuyển</a>
                </div>
            </div>
            <div class="note_view_all_friends">
                <p>Gợi ý cho bạn</p>
                <p onclick="viewAll()" id="viewAll">Xem tất cả</p>
            </div>

            <!-- ==============list friends -->
            <div class="list_friends_root_right">
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
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
            <div class="list_friends_root_right">
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                    </div>
                </div>
                <div class="logout_right_root">
                    <p onclick="followRight(this)" class="follow_right_root">
                        Follow
                    </p>
                </div>
            </div>
            <div class="list_friends_root_right">
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                    </div>
                </div>
                <div class="logout_right_root">
                    <p onclick="followRight(this)" class="follow_right_root">
                        Follow
                    </p>
                </div>
            </div>
            <div class="list_friends_root_right">
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                    </div>
                </div>
                <div class="logout_right_root">
                    <p onclick="followRight()" class="follow_right_root">
                        Follow
                    </p>
                </div>
            </div>
            <div class="viewall_friends_root_right">
                <div class="list_friends_root_right">
                    <div class="logo_name_videos">
                        <img
                                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                                alt=""
                        />
                        <div class="text_logo_name_videos">
                            <p>
                                Cristiano Ronaldo
                                <i
                                        class="bx bxs-check-circle"
                                        style="color: #2e88ff"
                                ></i>
                            </p>
                            <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                        </div>
                    </div>
                    <div class="logout_right_root">
                        <p onclick="followRight(this)" class="follow_right_root">
                            Follow
                        </p>
                    </div>
                </div>
                <div class="list_friends_root_right">
                    <div class="logo_name_videos">
                        <img
                                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                                alt=""
                        />
                        <div class="text_logo_name_videos">
                            <p>
                                Cristiano Ronaldo
                                <i
                                        class="bx bxs-check-circle"
                                        style="color: #2e88ff"
                                ></i>
                            </p>
                            <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                        </div>
                    </div>
                    <div class="logout_right_root">
                        <p onclick="followRight(this)" class="follow_right_root">
                            Follow
                        </p>
                    </div>
                </div>
                <div class="list_friends_root_right">
                    <div class="logo_name_videos">
                        <img
                                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                                alt=""
                        />
                        <div class="text_logo_name_videos">
                            <p>
                                Cristiano Ronaldo
                                <i
                                        class="bx bxs-check-circle"
                                        style="color: #2e88ff"
                                ></i>
                            </p>
                            <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                        </div>
                    </div>
                    <div class="logout_right_root">
                        <p onclick="followRight(this)" class="follow_right_root">
                            Follow
                        </p>
                    </div>
                </div>
                <div class="list_friends_root_right">
                    <div class="logo_name_videos">
                        <img
                                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                                alt=""
                        />
                        <div class="text_logo_name_videos">
                            <p>
                                Cristiano Ronaldo0000000000
                                <i
                                        class="bx bxs-check-circle"
                                        style="color: #2e88ff"
                                ></i>
                            </p>
                            <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                        </div>
                    </div>
                    <div class="logout_right_root">
                        <p onclick="followRight(this)" class="follow_right_root">
                            Follow
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- ================upload file thôi, đừng động nhé-============ -->


<!--</form>-->
<div class="post_content_video_news">
    <div class="postvideo">
        <div class="testposstvd">
<!--            <form action="" method="post" enctype="multipart/form-data">-->
<!--                <input type="text" name="title1">-->
<!--                <input type="file" name="video" id="">-->
<!--                <input type="submit" name="sb-vd" value="gui">-->
<!--            </form>-->
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
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                    </div>
                </div>

                <input
                        type="text"
                        id="valueInput"
                        class="post_content_video"
                        placeholder="What's on your mind ?"
                        name="title"
                />
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

    <div class="postnews">
        <div class="testposstvd">
            <form onsubmit="submitFormNews(event)">
                <h3>Create post</h3>
                <div class="logo_name_videos">
                    <img src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                    />
                    <div class="text_logo_name_videos">
                        <p>
                            Cristiano Ronaldo
                            <i class="bx bxs-check-circle" style="color: #2e88ff"></i>
                        </p>
                        <p>November 4 at 3:28 AM ~ <i class="bx bx-world"></i></p>
                    </div>
                </div>

                <input
                        type="text"
                        id="valueInputNews"
                        class="post_content_video"
                        placeholder="What's on your mind ?"
                />
                <br>
                <p class="btn_add_video">  Add Video <i class="bx bxs-hand-up"></i></p>

                <span
                ><input type="file" id="valueFileNews" class="post_videos"
                    /></span>
                <button type="submit">Đăng</button>
                <i onclick="postnews()" class="bx bxs-x-circle"></i>
            </form>
        </div>
    </div>
</div>

<div id="video_detail_mini">
      <div class="video_detail_mini_left">
        <div class="video_center">
          <span onclick="play()">
            <video  class="video_click_play"
            src="https://res.cloudinary.com/dnbbehk5b/video/upload/v1667919971/Fshort/video/test.mp4"
            width="41%"
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
              src="../public/setting/img/4k-programming-hello-world-text-tpiuwb02b1g2u7kb.jpg"
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/5557920_CV.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/5557920_CV.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/5557920_CV.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/chup-anh-hoang-hon-bang-smartphone_800x450.jpg" alt="">
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
                  <img src="../public/setting/img/5557920_CV.jpg" alt="">
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
        <form method="POST" id="comment_form" class="input_button_comment_video_mini">
          <input class="ip_cmt_mini" oninput="checkcomment_ipvideo()" type="text"placeholder="Thêm bình luận...">
          <input type="" class="btn_cmt_vdmini">Đăng</input>
        </form>
      </div>
    </div>