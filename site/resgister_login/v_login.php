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
                        if(isset($_SESSION['success'])){
                            ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['success'];?>
                            </div>
                            <?php
                            unset($_SESSION['success']);
                        }
                            ?>

                        <form action="" method="post">
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="email" name="em_log" class="form-control" id="username">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="pass_log" class="form-control" id="password">

                            </div>

                            <!--                            <div class="d-flex mb-5 align-items-center">-->
                            <!--                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>-->
                            <!--                                    <input type="checkbox" checked="checked"/>-->
                            <!--                                    <div class="control__indicator"></div>-->
                            <!--                                </label>-->
                            <!--                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>-->
                            <!--                            </div>-->

                            <input type="submit" name="sub_log" value="Log In" class="btn text-white btn-block btn-primary">

                            <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                            <div class="social-login">
                                <a href="<?php echo $client->createAuthUrl()?>" class="google">
                                    <span class="icon-google mr-3"></span>
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