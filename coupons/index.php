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
                        <section id="app-coupons" class="st-def-mar-TB">
                            <div class="container-fluid st-container">
                                <div class="app-coupons">
                                    <!-- header -->
                                    <div class="app-header-wrapper d-flex mb-2">
                                        <p class="app-heading text-capitalize">coupons</p>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="app-content-container">
                                        <div class="app-card">
                                            <div class="app-card-content bg-white border st-border-light st-default-rounded-block mb-3">
                                                <!-- top bar -->
                                                <div class="acc_top-bar border-bottom st-border-light">
                                                    <?php
                                                        include "includes/top-bar.php"
                                                    ?>
                                                </div>
                        
                                                <!-- listting table -->
                                                <div class="st-listing-table coupons-table table-responsive">
                                                    <?php
                                                        include "includes/table.php"
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- pagination -->
                                    <div class="pagination-container d-flex justify-content-end">
                                        <?php
                                            include "includes/pagination.php"
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