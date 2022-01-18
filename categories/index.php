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
                        <section id="app-categories" class="st-def-mar-TB">
                            <div class="container-fluid st-container">
                                <div class="app-categories">
                                    <!-- header -->
                                    <div class="app-header-wrapper d-flex mb-2">
                                        <p class="app-heading text-capitalize">Categories</p>
                                    </div>
                        
                                    <!-- CONTENT WRAPPER -->
                                    <div class="app-content-container categories-wrapper">
                                        <!-- top btns} -->
                                        <div class="cats-all-btns mb-3">
                                            <div class="cats-all-btns-inner d-flex flex-wrap align-items-center">
                                                <!-- add root cat -->
                                                <button
                                                    class="st-btn st-btn-primary d-flex align-items-center justify-content-center me-2">
                                                    <i class="feather-plus icon me-2 st-fs-15"></i>
                                                    <span>Add Root category</span>
                                                </button>

                                                <!-- add sub cat -->
                                                <button
                                                    class="st-btn st-btn-secondary d-flex align-items-center justify-content-center me-2">
                                                    <i class="feather-plus icon me-2 st-fs-15"></i>
                                                    <span>Add Sub category</span>
                                                </button>

                                                <!-- delete cat -->
                                                <button
                                                    class="st-btn st-btn-secondary d-flex align-items-center justify-content-center me-2">
                                                    <i class="feather-trash icon me-2 st-fs-15"></i>
                                                    <span>Delete category</span>
                                                </button>

                                                <!-- delete cat -->
                                                <button
                                                    class="st-btn st-btn-primary d-flex align-items-center justify-content-center ms-auto">
                                                    <span>Create Category</span>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- categories main -->
                                        <div class="categories-wrapper-inner d-flex flex-wrap">
                                            <!-- categories list -->
                                            <?php
                                                include "./includes/listing.php"
                                            ?>

                                            <!-- form data -->
                                            <?php
                                                include "./includes/form-data.php"
                                            ?>
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