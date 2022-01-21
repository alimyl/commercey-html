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
                        <section id="app-abandonedCart" class="st-def-mar-TB">
                            <div class="container-fluid st-container">
                                <div class="app-abandonedCart">
                                    <!-- back or save -->
                                    <div class="page-save-button-block d-flex align-items-center">
                                        <!-- back btn -->
                                        <div class="back-button-wrapper st-line-height-0 mb-3">
                                            <a 
                                                class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                                href="http://localhost/VEZIRE/commercey-html/abandoned-carts/">
                                                <i class="feather feather-arrow-left icon me-1"></i>
                                                <span>Back to aboandoned cart</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- header -->
                                    <div class="app-header-wrapper mb-3">
                                        <p class="app-heading text-capitalize heading-sm">Abandoned Cart Details</p>

                                        <!-- links -->
                                        <div class="links d-flex">
                                            <a
                                                href="/"
                                                class="st-text-primary text-decoration-none st-fs-14 st-fw-400"
                                            >
                                                <i class="feather-printer st-fs-13 icon"></i>
                                                <span class="ms-2 position-relative" style="top: 1px">Print Page</span>
                                            </a>

                                            <!-- update -->
                                            <div class="sales-order-dropdown position-relative ms-2 app-dropdown-container">
                                                <a href="/" class="head d-flex text-decoration-none align-items-center text-decoration-none dropdown-link">
                                                    <span class="me-2">Update</span>
                                                    <i class="feather-chevron-up st-fs-16 icon me-1"></i>
                                                </a>

                                                <!-- dropdown content -->
                                                <div class="dropdown-content position-absolute" style="width: 160">
                                                    <div class="inner">
                                                        <a
                                                            href="/"
                                                            class="link text-decoration-none d-flex p-3"
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#sendRecoveryEmailModal">
                                                            Send Recovery Email
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <!-- content -->
                                    <div class="app-content-container abandoned-details-content">
                                        <div class="app-card d-flex flex-wrap position-relative">
                                            <!-- lt sec -->
                                            <div class="lt-sec media-body pe-4">
                                                <div class="inner">
                                                    <!-- border box -->
                                                    <div class="page-border-box mb-3">
                                                        <div class="pbb-inner">
                                                            <div class="frac d-flex align-items-center">
                                                                <div class="lt media-body pe-2">
                                                                    <p class="product-date">
                                                                        $187.00
                                                                        <span class="seprator"></span>
                                                                        Jan 07, 2022 03:15 AM
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box -->
                                                    <div class="page-border-box mb-3">
                                                        <div class="pbb-inner">
                                                            <!-- head -->
                                                            <p class="head st-fw-600 st-text-color2 st-fs-16 mb-3">Order items: <span>3</span></p>

                                                            <!-- products -->
                                                            <div class="products-view">
                                                                <div class="product-view-table">
                                                                    <div class="table-responsive">
                                                                        <table class="table mb-0">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">Product Details</th>
                                                                                    <th class="text-end">SKU</th>
                                                                                    <th class="text-end">Price</th>
                                                                                    <th class="text-end">Qty</th>
                                                                                    <th class="text-end">Subtotal</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="60">
                                                                                        <div class="img-sec loaded" style="width: 60px;">
                                                                                            <img src="https://www.commercey.com/stores/ruhstaging/products/8/6a/7183/small/7183-acacia-cutting-board499526873944.jpg" alt="" class="img-fluid img-fluid-height">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a target="_blank" rel="noreferrer" class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-decoration-none d-inline-block" href="/store/ruhstaging/catalog/products/edit/7298">
                                                                                            Autumn Canister
                                                                                        </a>
                                                                                        <p class="prod-details-in-table st-text-color2">
                                                                                            <span class="me-2">Size: 4"x 5.25", Color: Brown</span>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td width="100">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">51305.00</p>
                                                                                    </td>
                                                                                    <td width="150">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">$36.00</p>
                                                                                    </td>
                                                                                    <td width="130">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">1</p>
                                                                                    </td>
                                                                                    <td width="130">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">$36.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <td colspan="5" class="border-top">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color text-end">Items:</p>
                                                                                    </td>
                                                                                    <td class="border-top">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color st-fw-600 text-end">$187.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5" class="">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color text-end">Discount:</p>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <div class="d-flex align-items-center justify-content-end">
                                                                                            <p class="text-danger prod-heading-in-table st-fs-17 st-text-color st-fw-600 text-end">$0.00</p>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5" class="">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color text-end">Shipping:</p>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color st-fw-600 text-end">$0.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5" class="">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color text-end">Tax:</p>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color st-fw-600 text-end">$0.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5" class="">
                                                                                        <p class="prod-heading-in-table st-fs-19 st-fw-600 st-text-color text-end">Total:</p>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <p class="prod-heading-in-table st-fs-19 st-text-color st-fw-600 text-end">$187.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box -->
                                                    <div class="page-border-box mb-4">
                                                        <div class="pbb-inner position-relative">
                                                            <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Additional Information</p>
                                                            <p class="frac mb-2">
                                                                <span class="st-fw-600 me-1 text-capitalize">IP Address:</span>
                                                                112.196.70.74
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- rt sec -->
                                            <div class="rt-sec">
                                                <div class="inner">
                                                    <div class="page-border-box">
                                                        <div class="pbb-inner border-bottom">
                                                            <div class="frac">
                                                                <div class="header-container d-flex mb-3">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Customer Email</p>
                                                                        <a href="mailto:asd@as.com" class="useremail hover-underline-link st-fs-15">asd@as.com</a>
                                                                    </div>
                                                                    <div class="in ms-auto">
                                                                        <a class="st-round-btn st-btn-primary d-flex align-items-center justify-content-center" title="User" href="/" style="pointer-events: none;">
                                                                            <i class="feather-mail icon position-relative"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="header-container d-flex">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Shipping address</p>
                                                                        <p>No address added</p>
                                                                    </div>
                                                                    <div class="in ms-auto">
                                                                        <a class="st-round-btn st-btn-transparent d-flex align-items-center justify-content-center" title="User" href="/" style="visibility: hidden; pointer-events: none;">
                                                                            <i class="feather-truck icon"></i>
                                                                        </a>
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

            <!-- modals -->
            <div class="modal fade st-info-modal" id="sendRecoveryEmailModal" tabindex="-1" aria-labelledby="sendRecoveryEmailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body st-modal">
                            <div class="app-modal-content modal_add-tracking-number position-relative pt-0">
                                <!-- close btn -->
                                <button class="close-icon position-absolute st-round-btn st-btn-sm st-btn-white d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close" style="top: 0px; right: 0px;">
                                    <i class="feather-x icon position-relative"></i>
                                </button>

                                <!-- modal title -->
                                <div class="app-modal-title-wrapper">
                                    <p class="app-modal-title">Send Recovery Email</p>
                                </div>

                                <!-- form -->
                                <div class="form add-tracking-number-form">
                                    <form>
                                        <!-- form item -->
                                        <div class="st-form">
                                            <label>
                                                To
                                                <span class="required ms-1 st-fs-12">(required)</span>
                                            </label>
                                            <input type="text" class="form-control" placeholder="To" name="to" disabled="" value="rupinder@vezire.com">
                                        </div>

                                        <!-- form item -->
                                        <div class="st-form">
                                            <label>
                                                Subject
                                                <span class="required ms-1 st-fs-12">(required)</span>
                                            </label>
                                            <input type="text" class="form-control" placeholder="Subject" name="subject" value="You left items in your cart">
                                        </div>

                                        <!-- form item -->
                                        <div class="st-form mb-0">
                                            <label>
                                                Custom message for this customer:
                                                <!-- <span class="required ms-1 st-fs-12">(required)</span> -->
                                            </label>
                                            <textarea type="text" class="form-control" rows="3" placeholder="Custom message for this customer:" name="message" spellcheck="false">It looks like you left some items in your shopping cart. Don’t worry, we saved your cart so you can pick up where you left off. But don’t wait too long. Get your items before they’re gone.</textarea>
                                        </div>
                                        <!-- add info -->
                                        <div class="add-info mt-1 st-text-color2">
                                            Add a discount coupon to your email and mention your offer in the subject to increase the chances of succesfull sale.
                                        </div>

                                        <!-- product view -->
                                        <div class="product-view pt-3 pt-lg-4">
                                            <p class="head st-fw-600 st-text-color2 st-fs-16 mb-3">Order items: <span>1</span></p>
                                            <div class="inner table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="item-inner d-flex flex-wrap position-relative">
                                                                    <!-- img sec -->
                                                                    <div class="img-sec position-relative" style="width: 45px; top: 3px;">
                                                                        <img src="https://www.commercey.com/stores/ruhstaging/products/8/6a/7183/small/7183-acacia-cutting-board499526873944.jpg" alt="" class="img-fluid img-fluid-height">
                                                                    </div>

                                                                    <!-- text sec -->
                                                                    <div class="text-sec media-body st-line-height-normal position-relative ps-2">
                                                                        <p class="mb-0 st-fw-600">Castella Plate</p>
                                                                        <p class="mb-0">Size: 13"x 4", Color: Gold</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">1x</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 st-fw-600">$120.00</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- btns -->
                                        <div class="btns mt-3 mt-lg-4" style="width: 200px;">
                                            <button type="submit" class="st-btn st-btn-primary text-capitalize w-100 ">
                                                <span>Send Email</span>
                                            </button>
                                        </div>


                                    </form>
                                </div>


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