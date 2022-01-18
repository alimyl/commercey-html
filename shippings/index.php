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
                                    <!-- header -->
                                    <div class="app-header-wrapper mb-3">
                                        <p class="app-heading text-capitalize">Shipping, Delivery, And Pickup</p>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="app-content-container">
                                        <!-- section -->
                                        <div class="fixed-left-page-view-container new-shippings-container">
                                            <div class="flpvc-inner d-flex flex-wrap">
                                                <!-- left sec -->
                                                <div class="flpvc-lt-sec">
                                                    <div class="inner">
                                                        <!-- head -->
                                                        <div class="app-header-wrapper heading-sm mb-3">
                                                            <p class="app-heading text-capitalize mb-2">Current shipping and delivery methods</p>
                                                            <p class="app-desc">These are the shipping and delivery methods that you have added to your store. When enabled, they are available for customers to choose from at checkout.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- right sec -->
                                                <div class="flpvc-rt-sec media-body ps-3">
                                                    <div class="inner">
                                                        <!-- listing -->
                                                        <?php
                                                            include "./includes/shipping-list.php"
                                                        ?>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>

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