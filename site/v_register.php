<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="public/register_login/images/f_short.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3> <strong><img src="public/register_login/images/logo.png" width="250" alt=""></strong></h3>
                            <p class="mb-4">Mạng xã hội video ngắn của Fpoly</p>
                        </div>
                        <?php
                            if(isset($_SESSION['error_token'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error_token'] ;?>
                                </div>
                        <?php    }
                        ?>

                        <form action="" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="text" name="email" class="form-control" id="username">
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Enter password</label>
                                <input type="password" name="re_pass" class="form-control" id="password">
                            </div>


                            <input type="submit" value="Đăng kí" name="resgister" class="btn text-white btn-block btn-primary">

                            <span class="d-block text-left my-4 text-muted"> or register with</span>

                            <div class="social-login">
                                <a href="#" class="facebook">
                                    <span class="icon-facebook mr-3"></span>
                                </a>
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
