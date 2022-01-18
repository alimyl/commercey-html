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
                                    <!-- save btn -->
                                    <button
                                        class="st-btn st-btn-primary ms-auto">
                                        <span>Save</span>
                                    </button>
                                </div>

                                <div class="app-google-shopping">
                                    <!-- header -->
                                    <div class="app-header-wrapper mb-3">
                                        <p class="app-heading text-capitalize">Sell on Google Shopping</p>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="app-content-container">
                                        <div class="fixed-left-page-view-container google-shopping-container">
                                            <div class="flpvc-inner d-flex flex-wrap">
                                                <!-- left sec -->
                                                <div class="flpvc-lt-sec">
                                                    <div class="inner">
                                                        <!-- head -->
                                                        <div class="app-header-wrapper heading-sm mb-3">
                                                            <p class="app-heading text-capitalize mb-2">Google Shopping product feed</p>
                                                            <p class="app-desc">Generate your product feed and manage your campaigns manually.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- right sec -->
                                                <div class="flpvc-rt-sec media-body ps-3">
                                                    <div class="inner">
                                                        <!-- border box -->
                                                        <div class="page-border-box2 mb-3 mb-md-4 generate-shipping-feed">
                                                            <div class="pbb2-inner d-flex">
                                                                <div class="text-sec media-body pe-3">
                                                                    <div class="app-header-wrapper heading-sm mb-2">
                                                                       <p class="app-heading text-capitalize mb-2">Generate Google Shopping feed</p>
                                                                       <p class="app-desc st-fs-14">Generate your product XML feed and upload it to Google Merchant Center to manage your ads or marketing campaigns manually. The feed will regenerate automatically every 5 hours.</p>
                                                                    </div>
                                                                    <div class="content">
                                                                       <div class="feed-link-value">
                                                                          <p>
                                                                              <span class="st-fw-600">Feed Link </span>
                                                                              <a href="https://feeds.commercey.com/googleshopping/ruhstaging/619606a6ac8d6" target="_blank" rel="noreferrer" class="st-text-primary">https://feeds.commercey.com/googleshopping/ruhstaging/619606a6ac8d6</a>
                                                                            </p>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- border box -->
                                                        <div class="page-border-box2 mb-3 mb-md-4 edit-senders-info">
                                                            <div class="pbb2-inner d-flex">
                                                               <div class="text-sec media-body pe-3">
                                                                  <div class="app-header-wrapper heading-sm mb-2">
                                                                        <p class="app-heading text-capitalize mb-2">Marketplace category</p>
                                                                        <p class="app-desc st-fs-14">This category is assigned to your products by default. To specify a category for a particular product, go to the “Product / Attributes” page.</p>
                                                                        <p class="app-desc st-fs-14 mt-2"><span class="st-fw-600">Marketplace category: </span>Home &amp;amp; Garden &amp;gt; Decor</p>
                                                                  </div>
                                                               </div>
                                                               <div class="btn-sec">
                                                                   <a class="st-btn st-btn-sm" href="http://localhost/VEZIRE/commercey-html/google-shopping/settings.php" style="padding-top: 7.5px;">Change Category</a>
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