<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../public/register_login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../public/register_login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/register_login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../public/register_login/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<body>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="../public/register_login/images/f_short.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3> <strong><img src="../public/register_login/images/logo.png" width="250" alt=""></strong></h3>
                            <p class="mb-4">Mạng xã hội video ngắn của Fpoly</p>
                        </div>
                        <?php
                        if(isset($_SESSION['error_forgot'])){
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error_forgot'];?>
                            </div>
                            <?php
                            unset($_SESSION['error_forgot']);
                        }else{
                            ?>
                            <div class="alert alert-success" role="alert">Nhập email tài khoản quên mật khẩu</div>
                            <?php
                        }
                        ?>


                        <form action="" method="post">
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="email" name="email_fogot" class="form-control" id="username">
                            </div>
                            <input type="submit" name="email_submit" value="Xác minh" class="btn text-white btn-block btn-primary">

                            <div class="social-login mt-4">
                                <a href="index.php" class="facebook">
                                    <span class="bi bi-house-door-fill mr-3"></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="../public/register_login/js/jquery-3.3.1.min.js"></script>
<script src="../public/register_login/js/popper.min.js"></script>
<script src="../public/register_login/js/bootstrap.min.js"></script>
<script src="../public/register_login/js/main.js"></script>
</body>
</html>