<!DOCTYPE html>
<html>
  <head>
    <title>FSHORT</title>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Roboto:ital,wght@0,500;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="src/css/detail_user.css" />
  </head>

  <body>
    <div class="container">
      <!-- head đây nhé, anh em sẽ dùng phần này -->
      <div class="headd">
        <div class="headerr">
          <div class="logo_search">
            <div class="logo">
              <span>F</span>
              <span>S</span>
              <span>h</span>
              <span>o</span>
              <span>r</span>
              <span>t</span>
            </div>
          </div>
          <div class="option_header">
            <nav id="main-nav" class="sidebar">
              <p>
                <a href="index.html" id="home"
                  ><i class="bx bxs-videos"></i>Videos</a
                >
                 <span id="car"></span>
              </p>
              <p>
                <a href="about.html" id="about"
                  ><i class="bx bx-news"></i>News</a
                >
                 <span id="car"></span>
              </p>
              <p>
                <a href="chat.php" id="chat"
                  ><i class="bx bxs-message-square-dots"></i>Poly Chat</a
                >
                 <span id="car"></span>
              </p>
              <p>
                <a href="car.php" id="car"
                  ><i class="bx bxs-car-mechanic"></i>Ghép Xe</a
                >
                 <span id="car"></span>
              </p>
            </nav>
          </div>

          <div class="upload_login_header">
            <div class="messs_header">
              <i onclick="Mess()" class="bx bx-message-rounded-dots"></i>
              <span>Tinn nhắn</span>
              <div class="aleart_mess_header">
                <h2>Tin nhắn</h2>
                <div class="search_mess">
                  <form action="">
                    <i class="bx bx-search-alt"></i>
                    <input
                      type="text"
                      name="name"
                      id=""
                      placeholder="Search Messenger"
                    />
                  </form>
                </div>
                <h3>Tất cả</h3>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p>
                    <b>#ManhCuongEnterTaiment</b> <br />
                    Chiều nay anh sang chú mày code nhé
                  </p>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p>
                    <b>#ManhCuongEnterTaiment</b> <br />
                    Tại sao cu Cường nó đẹp trai không tì vết vậy cơ chứ, đm hảo
                    hán thật đấy
                  </p>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p>
                    <b>#ManhCuongEnterTaiment</b> <br />
                    chiều nay t vưuaf nhìn thằng Cường nó làm quả web sợ thật,
                    đỉnh vkl
                  </p>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p>
                    <b>#ManhCuongEnterTaiment</b> <br />
                    ôi vcl, t chả hiểu sao cu Cường nó đỉnh vkl, front end đẹp
                    vcl
                  </p>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p>
                    <b>#ManhCuongEnterTaiment</b> <br />
                    đến đoạn này t chả biết viết mẹ gì nữa rồi, haizzzz
                  </p>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p>
                    <b>#ManhCuongEnterTaiment</b> <br />
                    ôi hàng cây xanh thắm dưới mái trường mến yêu huhu
                  </p>
                </div>
              </div>
            </div>

            <div class="notification_header">
              <i onclick="Aleart()" class="bx bxs-bell-ring"></i>
              <span>Thông báo</span>
              <div class="aleart_notifications">
                <h2>Thông Báo</h2>
                <h3>Trước đó</h3>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p><b>#ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                  <button>Theo dõi</button>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                  <button>Theo dõi</button>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                  <button>Theo dõi</button>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                  <button>Theo dõi</button>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                  <button>Theo dõi</button>
                </div>
                <div class="item_notifications">
                  <img
                    src="https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/313347520_1069237247086088_8949704310338389666_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=A3jjfTUob10AX9YPMpc&_nc_ht=scontent.fhan2-2.fna&oh=00_AfBbsbglIWgfjyCT33Mqd97TPTbLmCNN3k3bgeWtpx5tzA&oe=6375D837"
                    alt=""
                  />
                  <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                  <button>Theo dõi</button>
                </div>
              </div>
            </div>
            <div class="img-login-header">
              <div class="user_loginn">
                <span>ManhCuong</span>
                <img onclick="IMG()"
                                src="src/img/cuongdo.jpg"
                                alt="">
              </div>

              <div class="info_login_headerr">
                <p>
                  <a href="detail_video.php"> <i class="bx bx-user"></i> View Profile</a>
                </p>
                <p>
                  <a href=""> <i class="bx bxs-cog"></i> Settings</a>
                </p>
                <p>
                  <a href=""> <i class="bx bx-log-in"></i> Log Out</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- từ đây đổ xuống là thân, không có footer -->
      <div id="root">
        <!-- đây là menu cột bên trái, anh em dùng phần này nhé -->
        <div class="left_root">
          <div class="search_header">
            <form action="">
              <i class="bx bx-search-alt"></i>
              <input
                type="text"
                name="name"
                id=""
                placeholder="Search Fshort"
              />
            </form>
          </div>
          <div class="list_option_left_root">
            <p>
              <i class="bx bxs-home-alt-2"></i>
              <span>Dành cho bạn</span>
            </p>
            <p>
              <i class="bx bx-user-check"></i>
              <span>Đang Follow</span>
            </p>
            <p>
              <i class="bx bx-compass"></i>
              <span>Khám Phá</span>
            </p>
            <p>
              <i class="bx bxl-messenger"></i>
              <span>Tin nhắn</span>
            </p>
            <p>
              <i class="bx bx-plus-circle"></i>
              <span>Tạo</span>
            </p>
            <p>
              <i class="bx bxs-bell-ring"></i>
              <span>Thông báo</span>
            </p>
            <div class="user_left">
              <span>ManhCuong</span>
              <img
                src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/271655067_659278595270647_7381045493094705755_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Y74wTPPdInQAX8edq-R&_nc_ht=scontent.fhan2-5.fna&oh=00_AfDeiDT1ttkad-2hitju6L7laPuM7uvhxri_pfkMLWoaaQ&oe=637842C9"
                alt=""
              />
            </div>
          </div>
        </div>
        <!-- từ đây đổ đi là phần nội dung, thay đổi nội dung trong này nhé -->
        <div class="right_root">
          <div id="main-page about_render_video">
         <div class="about_render_video news_page">
    

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
                  <img
                    src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                    alt=""
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
                  <img
                    src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                    alt=""
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
                  <img
                    src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                    alt=""
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
                  <img
                    src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                    alt=""
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
                  <img
                    src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                    alt=""
                  />
                  <div class="text_logo_name_videos">
                    <p>
                      Cristiano Ronaldosfsafgsadg
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
    <div class="post_content_video_news">
      <div class="postvideo">
        <div class="testposstvd">
          <form onsubmit="submitForm(event)">
            <h3>Create post</h3>
            <div class="logo_name_videos">
              <img
                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                alt=""
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
                />
              <br>
                <p class="btn_add_video">  Add Video <i class="bx bxs-hand-up"></i></p>
               
                  <span
                    ><input type="file" id="valuefile" class="post_videos"
                  /></span>
            <button type="submit">Đăng</button>
            <i onclick="postvd()" class="bx bxs-x-circle"></i>
          </form>
        </div>
      </div>

      <div class="postnews">
        <div class="testposstvd">
          <form onsubmit="submitFormNews(event)">
            <h3>Create post</h3>
            <div class="logo_name_videos">
              <img
                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.6435-9/190108336_322648402555040_2100790391455013605_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DToGjk3hkasAX9wjEDD&_nc_ht=scontent.fhan2-1.fna&oh=00_AfDrshz1dpQG6f22a97d0X3EZUflybpE1t2KdKkECIi5tQ&oe=63960180"
                alt=""
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
    <div id="logo_loader">
    </div>
    <div class="loader">
    </div>
    <div id="text_loader">
    </div>

    <!-- <script src="src/js/test.js"></script> -->
    <!-- <script src="src/js/Array_user.js"></script>
    <script src="src/js/render.js"></script>  -->
    <script src="src/js/home.js"></script>
    
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
