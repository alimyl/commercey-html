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
                                    <p class="head st-fs-24 st-fw-700 text-center">Sign in</p>
                                    <p class="mt-1 subhead text-center">Login to your account</p>
                                </div>

                                <!-- form sec -->
                                <div class="form-sec">
                                    <form>
                                        <!-- form item -->
                                        <div class="st-form position-relative">
                                            <input type="text" class="form-control" placeholder="Email" id="loginEmail" name="loginEmail" value="">
                                        </div>

                                        <!-- form item -->
                                        <div class="st-form position-relative">
                                            <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="loginPassword" value="">
                                        </div>

                                        <!-- btns -->
                                        <div class="btns d-flex align-items-center pt-1">
                                            <button type="submit" class="st-btn st-btn-primary st-fw-600 text-uppercase d-flex align-items-center justify-content-center btn btn-primary">
                                                <span>sign in</span>
                                            </button>

                                            <label class="st-checkbox d-inline-flex cursor-pointer ms-3">
                                                <input type="checkbox" class="d-none" id="loginRememberMe" name="loginRememberMe" value="false">
                                                <span class="box d-flex align-items-center justify-content-center border">
                                                    <i class="feather-check icon position-relative"></i>
                                                </span>
                                                <span class="text ms-2">Remember Me</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- other details -->
                            <div class="other-details text-center my-3">
                                <p class="text-decoration-none mb-1">
                                    I forgot my password. Please <a class="st-text-primary" href="http//lll/alhRst/commercey-html/forgot-password">send me a recovery email.</a>
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