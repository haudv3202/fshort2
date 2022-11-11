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
                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">

                            </div>

<!--                            <div class="d-flex mb-5 align-items-center">-->
<!--                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>-->
<!--                                    <input type="checkbox" checked="checked"/>-->
<!--                                    <div class="control__indicator"></div>-->
<!--                                </label>-->
<!--                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>-->
<!--                            </div>-->

                            <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

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
