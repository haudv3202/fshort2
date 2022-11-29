<?php
    session_start();
    include "../../dao/pdo.php";
    include "../../dao/comment.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = load_allbl($idpro);
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
    <link
        href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Roboto:ital,wght@0,500;1,700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="../public/setting/css/detail_user.css" />

</head>

<body>

 <div class="comment_video_page">
    <?php
                  if (isset($_SESSION['userinfo'])){
                    $iduser = $_SESSION['user']['id_kh'];
                    ?>
        <div class="info_comment_video_page">
            <img src="./img/Anh-gai-xinh-Viet-Nam.jpg" alt="">
            <div class="text_logo_name_videos">
                <p>Hậu ăn cứt<i class='bx bxs-check-circle' style='color:#2e88ff'></i></p>
                <p>November 4 at 3:28 AM ~ <i class='bx bx-world'></i></p>
            </div>
        </div>
        <div class="value_comment_user">
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
          </p>
        </div>
    </div>
    <?php 
    
         }
        ?>
    <div class="input_comment">
      <form action="">
        <i class='bx bx-wink-smile'></i>
        <input type="text" required  placeholder="Thêm bình luận">
        <button type="submit"> Đăng</button>
      </form>
    </div>


</body>
</html>