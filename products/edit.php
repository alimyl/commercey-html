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
                        <section id="app-products__create-details" class="st-def-mar-TB page-eorc-wrapper">
                            <div class="container-fluid st-container">
                                <div class="app-products__create-details">
                                    <!-- back or save -->
                                    <div class="page-save-button-block d-flex align-items-center">
                                        <!-- back btn -->
                                        <div class="back-button-wrapper st-line-height-0">
                                            <a 
                                                class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                                href="https://mycommercey.com/commercey-html/products/">
                                                <i class="feather feather-arrow-left icon me-1"></i>
                                                <span>Cancel and go back to products</span>
                                            </a>
                                        </div>

                                        <!-- save btn -->
                                        <button
                                            class="st-btn st-btn-primary ms-auto">
                                            <span>Save</span>
                                        </button>
                                    </div>

                                    <!-- header -->
                                    <div class="app-header-wrapper">
                                        <p class="app-heading text-capitalize heading-sm">Edit Product</p>
                                        <p class="app-desc">
                                            Edit product.
                                        </p>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="page-content">
                                        <div class="page-border-box">
                                            <div class="pbb-inner">
                                                <!-- links -->
                                                <div class="st-tabs-links">
                                                    <div class="stl-inner">
                                                        <!-- link -->    
                                                        <a href="#general_tab" class="stl-link d-inline-flex align-items-center text-capitalize ">
                                                            <!-- <i class="feather-alert-circle icon cursor-pointer me-2"></i> -->
                                                            <span>general</span>
                                                        </a>

                                                        <!-- link -->
                                                        <a href="#attributes_tab" class="stl-link d-inline-flex align-items-center text-capitalize">
                                                            <span>attributes</span>
                                                        </a>

                                                        <!-- link -->
                                                        <a href="#variations_tab" class="stl-link d-inline-flex align-items-center text-capitalize">
                                                            <span>variations</span>
                                                        </a>

                                                        <!-- link -->
                                                        <a href="#seo_tab" class="stl-link d-inline-flex align-items-center text-capitalize">
                                                            <span>SEO</span>
                                                        </a>

                                                        <!-- link -->
                                                        <a href="#purchasability_tab" class="stl-link d-inline-flex align-items-center text-capitalize">
                                                            <span>Purchasability</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!-- form -->
                                                <form action="/">
                                                    <div class="product-container">
                                                        <div class="pc-inner d-flex flex-wrap">
                                                            <!-- left sec -->
                                                            <div class="pc-lt media-body">
                                                                <!-- general setting -->
                                                                <?php
                                                                    include "./includes/form-components/general.php"
                                                                ?>

                                                                <!-- attributes settings -->
                                                                <?php
                                                                    include "./includes/form-components/attributes.php"
                                                                ?>

                                                                <!-- variations settings -->
                                                                <?php
                                                                    include "./includes/form-components/variations.php"
                                                                ?>

                                                                <!-- seo settings -->
                                                                <?php
                                                                    // include "./includes/form-components/seo.php"
                                                                ?>

                                                                <!-- purchasibility settings -->
                                                                <?php
                                                                    // include "./includes/form-components/purchasibility.php"
                                                                ?>
                                                            </div>

                                                            <!-- right sec -->
                                                            <div class="pc-rt">
                                                                <!-- border box -->
                                                                <div class="page-border-box2">
                                                                    <div class="pbb2-inner">
                                                                        <p class="box-heading st-fw-600 st-text-color2 mb-2">Pricing</p>
                                                                        
                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows">
                                                                            <label>Cost Price</label>
                                                                            <input type="number" class="form-control" placeholder="Cost Price" id="costPrice" name="costPrice" value="">
                                                                        </div>

                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows">
                                                                            <label>
                                                                                Price
                                                                                <span class="required ms-1 st-fs-12">(required)</span>
                                                                            </label>
                                                                            <input type="number" class="form-control" placeholder="Price" id="price" name="price" value="">
                                                                        </div>

                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows mb-0">
                                                                            <label>Promo Price</label>
                                                                            <input type="number" class="form-control" placeholder="Promo Price" id="promoPrice" name="promoPrice" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- border box -->
                                                                <div class="page-border-box2">
                                                                    <div class="pbb2-inner">
                                                                        <p class="box-heading st-fw-600 st-text-color2 mb-2">Inventory</p>
                                                                        
                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows">
                                                                            <label>Stock</label>
                                                                            <input type="number" class="form-control" placeholder="Stock" id="stock" name="stock" value="">
                                                                        </div>
                                                                        
                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows">
                                                                            <label>Low Stock</label>
                                                                            <input type="number" class="form-control" placeholder="Low Stock" id="lowStock" name="lowStock" value="">
                                                                        </div>
                                                                        
                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows">
                                                                            <label>Max Order Quantity</label>
                                                                            <input type="number" class="form-control" placeholder="Max Order Quantity" id="maxOrderQuantity" name="maxOrderQuantity" value="">
                                                                        </div>
                                                                        
                                                                        <!-- form item -->
                                                                        <div class="st-form form-sm no-arrows mb-0">
                                                                            <label>Min Order Quantity</label>
                                                                            <input type="number" class="form-control" placeholder="Min Order Quantity" id="minOrderQuantity" name="minOrderQuantity" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- border box -->
                                                                <div class="page-border-box2 set-product-availability">
                                                                    <div class="pbb2-inner">
                                                                        <p class="box-heading st-fw-600 st-text-color2 mb-2">Product Availability</p>
                                                                        <label class="st-switch-input d-inline-flex align-items-center mb-0">
                                                                            <input type="checkbox" class="d-none" id="status" checked="">
                                                                            <span class="round-outer">
                                                                                <span class="round d-block"></span>
                                                                            </span>
                                                                            <span class="text ms-2 position-relative st-fs-13 st-fw-600">Enabled</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- submit btn hidden -->
                                                    <button type="submit" hidden=""></button>
                                                </form>





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