<?php
?>
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
    <!-- <link
            href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Roboto:ital,wght@0,500;1,700&display=swap"
            rel="stylesheet"
    /> -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="../public/setting/css/detail_user.css" />
    <link rel="stylesheet" href="../public/setting/css/emojionearea.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../public/setting/js/emojionearea.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
                        <a href="?home" id="home"
                        ><i class="bx bxs-videos"></i>Videos</a
                        >
                        <span id="car"></span>
                    </p>
                    <p>
                        <a href="?about" id="about"
                        ><i class="bx bx-news"></i>News</a
                        >
                        <span id="car"></span>
                    </p>
                    <p>
                        <a href="?chat" id="chat"
                        ><i class="bx bxs-message-square-dots"></i>Poly Chat</a
                        >
                        <span id="car"></span>
                    </p>
                    <p>
                        <a href="?car" id="car"
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
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p>
                                <b>#ManhCuongEnterTaiment</b> <br />
                                Chiều nay anh sang chú mày code nhé
                            </p>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p>
                                <b>#ManhCuongEnterTaiment</b> <br />
                                Tại sao cu Cường nó đẹp trai không tì vết vậy cơ chứ, đm hảo
                                hán thật đấy
                            </p>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p>
                                <b>#ManhCuongEnterTaiment</b> <br />
                                chiều nay t vưuaf nhìn thằng Cường nó làm quả web sợ thật,
                                đỉnh vkl
                            </p>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p>
                                <b>#ManhCuongEnterTaiment</b> <br />
                                ôi vcl, t chả hiểu sao cu Cường nó đỉnh vkl, front end đẹp
                                vcl
                            </p>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p>
                                <b>#ManhCuongEnterTaiment</b> <br />
                                đến đoạn này t chả biết viết mẹ gì nữa rồi, haizzzz
                            </p>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
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
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p><b>#ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                            <button>Theo dõi</button>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                            <button>Theo dõi</button>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                            <button>Theo dõi</button>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                            <button>Theo dõi</button>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                            <button>Theo dõi</button>
                        </div>
                        <div class="item_notifications">
                            <img
                                    src="../public/setting/img/Anh-gai-xinh-Viet-Nam.jpg"
                            />
                            <p><b>ManhCuongEnterTaiment</b> đã bắt đầu theo dõi bạn</p>
                            <button>Theo dõi</button>
                        </div>
                    </div>
                </div>
                <div class="img-login-header">
                    <?php if(isset($_SESSION['info']) && $_SESSION['info']['role_id'] == 1 ){?>
                        <div class="user_loginn">
                            <span><?php echo $_SESSION['info']['name'];?></span>
                            <img
                                    onclick="IMG()"
                                    src="<?php echo $_SESSION['info']['link_avatar'];?>"
                                    alt=""
                            />
                        </div>

                        <div class="info_login_headerr">
                            <ul>
                                <li>
                                <a href="?detail_video"> <i class="bx bx-user"></i> View Profile</a>
                                </li>
                                <li>
                                    <a href="?setting"> <i class="bx bxs-cog"></i> Settings</a>
                                </li>
                                <li>
                                    <a href="?logout"> <i class="bx bx-log-in"></i> Log Out</a>
                                </li>
                            </ul>
                        </div>
                    <?php }else if(isset($_SESSION['info']) && ($_SESSION['info']['role_id'] == 2 || $_SESSION['info']['role_id'] == 3)){?>
                        <div class="user_loginn">
                            <span><?php echo $_SESSION['info']['name'];?></span>
                            <img
                                    onclick="IMG()"
                                    src="<?php echo $_SESSION['info']['link_avatar'];?>"
                                    alt=""
                            />
                        </div>

                        <div class="info_login_headerr">
                        <ul>
                            <li>
                                <a href="?detail_video"> <i class="bx bx-user"></i> View Profile</a>
                            </li>
                            <li>
                                <a href="?setting"> <i class="bx bxs-cog"></i> Settings</a>
                            </li>
                            <li>
                                <a href="?setting"> <i class="bx bxs-cog"></i>Admin</a>
                            </li>
                            <li>
                                <a href="?logout"> <i class="bx bx-log-in"></i> Log Out</a>
                            </li>
                        </ul>
                        </div>
                    <?php }else{?>

                        <a class="login_header" href="?login" >Đăng nhập</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- từ đây đổ xuống là thân, không có footer -->
    <div id="root">
        <!-- đây là menu cột bên trái, anh em dùng phần này nhé -->
        <div class="left_root">
            <div class="search_header">
                <form action="index.php?home" method="post">
                    <button type="submit" ><i class="bx bx-search-alt" name="timkiemsp"></i></button>
                    <input
                            type="text"
                            id=""
                            placeholder="Search Fshort"
                            placeholder="Tìm Kiếm Sản Phẩm"
                            name="nhapemail"
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
                    <span>Tạo mới </span>
                </p>
                <p>
                    <i class="bx bxs-bell-ring"></i>
                    <span>Thông báo</span>
                </p>
                <?php if(isset($_SESSION['info'])){?>
                    <div class="user_left">

                        <span><?php echo $_SESSION['info']['name'];?></span>
                        <img
                                src="<?php echo $_SESSION['info']['link_avatar'];?>"
                                alt=""
                        />

                    </div>
                <?php }else{?>
                    <div class="user_left_failed">
                    <a class="login_header_left" href="?login" >Đăng nhập</a>
                    </div>
                <?php }?>
            </div>
        </div>

        <!--        Đây là header -->
