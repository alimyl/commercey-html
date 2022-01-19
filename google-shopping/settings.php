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
                        <section id="app-google-shopping" class="st-def-mar-TB">
                            <div class="container-fluid st-container">
                                <!-- back or save -->
                                <div class="page-save-button-block d-flex align-items-center mb-1">
                                    <!-- back btn -->
                                    <div class="back-button-wrapper st-line-height-0">
                                        <a 
                                            class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                            href="https://mycommercey.com/commercey-html/google-shopping/">
                                            <i class="feather feather-arrow-left icon me-1"></i>
                                            <span>Cancel and go back to google shopping</span>
                                        </a>
                                    </div>
                                    <!-- save btn -->
                                    <button
                                        class="st-btn st-btn-primary ms-auto">
                                        <span>Save</span>
                                    </button>
                                </div>

                                <div class="app-google-shopping">
                                    <!-- header -->
                                    <div class="app-header-wrapper mb-3">
                                        <p class="app-heading text-capitalize">Marketplace Product Settings</p>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="app-content-container">
                                        <!-- section -->
                                        <div class="fixed-left-page-view-container google-shopping-container">
                                            <div class="flpvc-inner d-flex flex-wrap">
                                                <!-- left sec -->
                                                <div class="flpvc-lt-sec">
                                                    <div class="inner">
                                                        <!-- head -->
                                                        <div class="app-header-wrapper heading-sm mb-3">
                                                            <p class="app-heading text-capitalize mb-2">Your Products On Marketplaces</p>
                                                            <p class="app-desc">These settings are applied to your products published on Facebook and displayed across Google.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- right sec -->
                                                <div class="flpvc-rt-sec media-body ps-3">
                                                    <div class="inner">
                                                        <!-- border box -->
                                                        <div class="page-border-box2 mb-3 mb-md-4 edit-senders-info">
                                                            <div class="pbb2-inner">
                                                                <!-- categories -->
                                                                <?php
                                                                    include "./includes/categories.php"
                                                                ?>

                                                                <!-- cats listing -->
                                                                <?php
                                                                    include "./includes/product-condition.php"
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- section -->
                                        <div class="fixed-left-page-view-container google-shopping-container">
                                        <div class="flpvc-inner d-flex flex-wrap">
                                                <!-- left sec -->
                                                <div class="flpvc-lt-sec">
                                                    <div class="inner">
                                                        <!-- head -->
                                                        <div class="app-header-wrapper heading-sm mb-3">
                                                            <p class="app-heading text-capitalize mb-2">Category Per Product</p>
                                                            <p class="app-desc">These settings are applied to your products published on Facebook and displayed across Google.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- right sec -->
                                                <div class="flpvc-rt-sec media-body ps-3">
                                                    <div class="inner">
                                                        <!-- border box -->
                                                        <div class="page-border-box2 mb-3 mb-md-4 edit-senders-info">
                                                            <div class="pbb2-inner">
                                                                <!-- head -->
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p class="app-heading text-capitalize mb-2">Assigned categories per product</p>
                                                                </div>

                                                                <!-- content -->
                                                                <div class="content">
                                                                    <table class="table table-main">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Category</th>
                                                                                <th>Products</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <p>Home &amp; Garden &gt; Decor</p>
                                                                                </td>
                                                                                <td><a href="/" class="st-text-primary">544 products</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
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