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

                                        <!-- section -->
                                        <div class="fixed-left-page-view-container new-shippings-container">
                                            <div class="flpvc-inner d-flex flex-wrap">
                                                <!-- left sec -->
                                                <div class="flpvc-lt-sec">
                                                    <div class="inner">
                                                        <!-- head -->
                                                        <div class="app-header-wrapper heading-sm mb-3">
                                                            <p class="app-heading text-capitalize mb-2">Add a new shipping or delivery method</p>
                                                            <p class="app-desc">
                                                                Select how you’ll be getting your products to customers. Add local delivery, curbside and drive-through pickup, or enable shipping with the most popular carriers.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- right sec -->
                                                <div class="flpvc-rt-sec media-body ps-3">
                                                    <div class="inner">
                                                        <!-- border box -->
                                                        <div class="page-border-box2 mb-3 mb-md-4 add-shipping-item">
                                                            <div class="pbb2-inner d-flex">
                                                                <!-- lt -->
                                                                <div class="lt-sec border-right media-body">
                                                                    <p class="head st-fw-600 st-fs-19 st-text-color mb-2">
                                                                        Shipping
                                                                    </p>
                                                                    <p class="desc st-fs-15 st-line-height-normal mb-3">
                                                                        Ship within your country or internationally. Enable automatic shipping rates from carriers or use your own custom rates if your product requires special shipping fees.
                                                                    </p>
                                                                    
                                                                    <a href="http://localhost/VEZIRE/commercey-html/shippings/add.php" class="text-decoration-none st-btn st-btn-primary st-btn-sm d-inline-flex align-items-center text-capitalize">
                                                                        <i class="feather-plus icon me-1"></i>
                                                                        <span class="st-fw-400">Add Shipping</span>
                                                                    </a>
                                                                    
                                                                </div>

                                                                <!-- rt -->
                                                                <div class="rt-sec">
                                                                    <!-- payment methods -->
                                                                    <div class="supported-methods d-flex align-items-center mb-2 mb-lg-3">
                                                                        <img src="../images/icons/payment-method-1.svg" alt="payment-method" height="26" width="26">
                                                                        <img src="../images/icons/payment-method-2.svg" alt="payment-method" height="26" width="26">
                                                                        <img src="../images/icons/payment-method-3.svg" alt="payment-method" height="26" width="26">
                                                                        <img src="../images/icons/payment-method-4.svg" alt="payment-method" height="26" width="26">
                                                                        <img src="../images/icons/payment-method-5.svg" alt="payment-method" height="26" width="26">
                                                                    </div>

                                                                    <div class="methods-details">
                                                                        <!-- item -->
                                                                        <div class="item d-flex st-fs-15">
                                                                            <i class="feather-check pt-1 me-2"></i>
                                                                            <p class="text">Automatic rates from U.S.P.S., UPS, FedEx</p>
                                                                        </div>

                                                                        <!-- item -->
                                                                        <div class="item d-flex st-fs-15">
                                                                            <i class="feather-check pt-1 me-2"></i>
                                                                            <p class="text">Custom rates for DHL and other carriers</p>
                                                                        </div>

                                                                        <!-- item -->
                                                                        <div class="item d-flex st-fs-15">
                                                                            <i class="feather-check pt-1 me-2"></i>
                                                                            <p class="text">Weight-based and subtotal-based rates</p>
                                                                        </div>

                                                                        <!-- item -->
                                                                        <div class="item d-flex st-fs-15">
                                                                            <i class="feather-check pt-1 me-2"></i>
                                                                            <p class="text">Free shipping promotions</p>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
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