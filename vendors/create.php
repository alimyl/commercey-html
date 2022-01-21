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
                        <section id="app-vendors__create-details" class="st-def-mar-TB page-eorc-wrapper">
                            <div class="container-fluid st-container">
                                <div class="app-vendors__create-details">
                                    <!-- back or save -->
                                    <div class="page-save-button-block d-flex align-items-center">
                                        <!-- back btn -->
                                        <div class="back-button-wrapper st-line-height-0">
                                            <a 
                                                class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                                href="http://localhost/VEZIRE/commercey-html/vendors/">
                                                <i class="feather feather-arrow-left icon me-1"></i>
                                                <span>Cancel and go back to vendors</span>
                                            </a>
                                        </div>

                                        <!-- save btn -->
                                        <button
                                            class="st-btn st-btn-primary ms-auto">
                                            <span>Create vendor</span>
                                        </button>
                                    </div>

                                    <!-- header -->
                                    <div class="app-header-wrapper mb-3">
                                        <p class="app-heading text-capitalize heading-sm">Create vendor</p>
                                        <p class="app-desc">
                                            Create a vendors.
                                        </p>
                                    </div>
                        
                                    <!-- content -->
                                    <?php
                                        include "./includes/form.php"
                                    ?>
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