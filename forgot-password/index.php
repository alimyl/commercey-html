<!DOCTYPE html>
<html lang="en">
    <?php
        include "../components/head.php"
    ?>
    <body>
        <div class="app-root bg-white">
            
            <div class="app-main-wrapper page-login">
                <div class="st-auth overflow-auto">
                    <div class="h-100 container-fluid">
                        <div class="st-auth h-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="inner border st-default-rounded-block bg-white">
                                <!-- top sec -->
                                <div class="top-sec">
                                    <a class="d-block mx-auto mb-3 mb-lg-3" href="/login" style="width: 150px;">
                                        <img src="../images/logo-on-top.svg" class="img-fluid">
                                    </a>
                                    <p class="head st-fs-24 st-fw-700 text-center">Forgot password</p>
                                    <p class="mt-1 subhead text-center">Enter your email address</p>
                                </div>

                                <!-- form sec -->
                                <div class="form-sec">
                                    <form>
                                        <!-- form item -->
                                        <div class="st-form position-relative">
                                            <input type="text" class="form-control" placeholder="Email" id="loginEmail" name="loginEmail" value="">
                                        </div>

                                        <!-- btns -->
                                        <div class="btns d-flex align-items-center pt-1">
                                            <button type="submit" class="st-btn st-btn-primary st-fw-600 text-uppercase d-flex align-items-center justify-content-center w-100 btn btn-primary">
                                                <span>Reset Password</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- other details -->
                            <div class="other-details text-center my-3">
                                <p class="text-decoration-none mb-1">
                                    I already have an account. Please <a class="st-text-primary" href="http://localhost/commercey-html/login">take me to the login page.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- global loading container -->
            <div class="global-loading-container d-none align-items-center justify-content-center">
                <div class="spinner-border st-text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <?php
            include "../components/footer-scripts.php"
        ?>
    </body>
</html>