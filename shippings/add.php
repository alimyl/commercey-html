<!DOCTYPE html>
<html lang="en">
    <?php
        include "../components/head.php"
    ?>
    <body>
        <div class="app-root bg-white">
            
            <div class="app-main-wrapper">
                <div class="amw_inner">
                    <!-- leftbar -->
                    <?php
                        include "../components/dashboard-leftbar.php"
                    ?>

                    <!-- main content -->
                    <div class="app-main-content d-flex flex-column">
                        <!-- header -->
                        <?php
                            include "../components/header.php"
                        ?>

                        <!-- content -->
                        <section id="app-shipping" class="st-def-mar-TB page-eorc-wrapper mb-0">
                            <div class="container-fluid st-container">
                                <div class="app-shipping">
                                    <!-- back or save -->
                                    <div class="page-save-button-block d-flex align-items-center mb-3">
                                        <!-- back btn -->
                                        <div class="back-button-wrapper st-line-height-0">
                                            <a 
                                                class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                                href="http://localhost/commercey-html/shippings/"
                                                data-id="shipping-back-btn"
                                                data-go-to="">
                                                <i class="feather feather-arrow-left icon me-1"></i>
                                                <span>Back</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- header -->
                                    <div class="app-header-wrapper mb-3">
                                        <p class="app-heading text-capitalize">New Shipping Method</p>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="app-content-container add-shipping-method-container">
                                        <!-- loading -->
                                        <div class="add-shipping-method-loading mb-3 mb-lg-4">
                                            <div class="progress-indicator">
                                                <!-- text -->
                                                <div class="text st-fw-600 st-fs-17 mb-2">
                                                    <span class="st-text-success me-2 st-text-color">
                                                        Step <span class="current-step">1</span> from <span class='total-steps'>3</span>.
                                                    </span>
                                                    <span class='main-text'>Select shipping method</span>
                                                </div>

                                                <!-- progress -->
                                                <div class="progress-main step-1">
                                                    <div class="inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- steps 1 -->
                                        <?php
                                            include "./includes/add-shipping-step1.php"
                                        ?>

                                        <!-- steps 2 -->
                                        <?php
                                            include "./includes/add-shipping-step2.php"
                                        ?>

                                        <!-- free shipping -->
                                        <?php
                                            include "./includes/free-shipping-set-up.php"
                                        ?>

                                        <!-- condtional free shipping -->
                                        <?php
                                            include "./includes/condtional-free-shipping-set-up.php"
                                        ?>

                                        <!-- falt shipping -->
                                        <?php
                                            include "./includes/flat-shipping-set-up.php"
                                        ?>



                                    </div>
                                </div>
                            </div>
                        </section>
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