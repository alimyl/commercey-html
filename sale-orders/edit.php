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
                        <section id="app-salesOrders__edit-details" class="st-def-mar-TB">
                            <div class="container-fluid st-container">
                                <div class="app-salesOrders__edit-details">
                                    <!-- back btn -->
                                    <div class="back-button-wrapper mb-3">
                                        <a 
                                            class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                            href="http://localhost/commercey-html/sale-orders">
                                            <i class="feather feather-arrow-left icon me-1"></i>
                                            <span>Back to Sales Order</span>
                                        </a>
                                    </div>


                                    <!-- content -->
                                    <div class="edit-sales-content">
                                        <div class="esc-inner d-flex flex-wrap position-relative">
                                            <!-- center -->
                                            <div class="ct w-100 mb-3">
                                                <div class="inner">
                                                    <p class="order-id st-text-color"><span class="d-block">Order #100246</span></p>
                                                    <div class="d-flex">
                                                        <a href="/" class="st-text-primary text-decoration-none st-fs-14 st-fw-400">
                                                            <i class="feather-printer icon"></i>
                                                            <span class="ms-2 position-relative" style="top: 1px;">Print Order</span>
                                                        </a>
                                                        <div class="sales-order-dropdown position-relative ms-2 app-dropdown-container">
                                                            <a href="/" class="head d-flex text-decoration-none align-items-center text-decoration-none dropdown-link">
                                                                <span class="me-2">Update</span>
                                                                <i class="feather-chevron-down icon me-1"></i>
                                                            </a>

                                                            <!-- dropdown content -->
                                                            <div class="dropdown-content position-absolute" style="width: 160">
                                                                <div class="inner">
                                                                    <a
                                                                        href="/"
                                                                        class="link text-decoration-none d-flex p-3">
                                                                        Print Order
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- left -->
                                            <div class="lt-sec media-body pe-4">
                                                <div class="inner">
                                                    <!-- border box -->
                                                    <div class="page-border-box mb-3">
                                                        <div class="pbb-inner">
                                                            <!-- frac -->
                                                            <div class="frac border-bottom d-flex align-items-center pb-3 mb-3">
                                                                <!-- lt -->
                                                                <div class="lt media-body pe-2">
                                                                    <p class="product-date">
                                                                        $1,969.95
                                                                        <span class="seprator"></span>
                                                                        Jan 05, 2022 08:36 AM
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <!-- frac -->
                                                            <div class="frac d-flex align-items-center">
                                                                <!-- lt -->
                                                                <div class="lt col-6 col-lg-3">
                                                                    <p class="head st-text-color2">Payment Status</p>
                                                                    <div class="sales-order-dropdown position-relative app-dropdown-container">
                                                                        <p class="desc st-fs-17 st-text-color st-fw-600 d-inline-flex align-items-center cursor-pointer dropdown-link">
                                                                            <span class="me-2">Paid</span>
                                                                            <i class="feather-chevron-down icon me-1"></i>
                                                                        </p>

                                                                        <div class="dropdown-content position-absolute">
                                                                            <div class="inner">
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Awaiting Payment</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Cancelled</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Incomplete</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Paid</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Partially Refunded</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Refunded</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- rt -->
                                                                <div class="rt col-6 col-lg-3">
                                                                    <p class="head st-text-color2">Fulfillment Status</p>
                                                                    <div class="sales-order-dropdown position-relative app-dropdown-container">
                                                                        <p class="desc st-fs-17 st-text-color st-fw-600 d-inline-flex align-items-center cursor-pointer dropdown-link">
                                                                            <span class="me-2">Awaiting Processing</span>
                                                                            <i class="feather-chevron-down icon me-1"></i>
                                                                        </p>

                                                                        <div class="dropdown-content position-absolute">
                                                                            <div class="inner">
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Awaiting Payment</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Processing</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Shipped</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Delivered</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Will Not Deliver</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Returned</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Ready for Pickup</a>
                                                                                <a href="/" class="link text-decoration-none d-flex text-capitalize">Out for Delivery</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box -->
                                                    <div class="page-border-box mb-3">
                                                        <div class="pbb-inner">
                                                            <p class="head st-fw-600 st-text-color2 st-fs-16 mb-3">
                                                                Order items: <span>1</span>
                                                            </p>
                                                            <!-- view -->
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
                                                                                        <a target="_blank" rel="noreferrer" class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-decoration-none d-inline-block" href="/">Hacienda Basket</a>
                                                                                        <p class="prod-details-in-table st-text-color2">
                                                                                            <span class="me-2">Size: 10"/12"/13.5" - Set of 3, Color: Natural</span>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td width="100">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">63690.00</p>
                                                                                    </td>
                                                                                    <td width="150">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">$133.00</p>
                                                                                    </td>
                                                                                    <td width="130">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">1</p>
                                                                                    </td>
                                                                                    <td width="130">
                                                                                        <p class="prod-heading-in-table st-fs-18 mb-2 st-text-color st-fw-600 text-end">$133.00</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>

                                                                            <tfoot>
                                                                                <tr>
                                                                                    <td colspan="5" class="border-top">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color text-end">Items:</p>
                                                                                    </td>
                                                                                    <td class="border-top">
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color st-fw-600 text-end">$1,713.00</p>
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
                                                                                        <p class="prod-heading-in-table st-fs-17 st-text-color st-fw-600 text-end">$256.95</p>
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
                                                                                        <p class="prod-heading-in-table st-fs-19 st-text-color st-fw-600 text-end">$1,969.95</p>
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
                                                    <div class="page-border-box mb-3">
                                                        <div class="pbb-inner position-relative">
                                                            <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">All Notes</p>

                                                            <!-- all notes if exists -->
                                                            <div class="existing-notes-container pb-1 d-none"> <!-- remove d-none later to make it visible -->
                                                                <!-- note item -->
                                                                <div class="note-item mb-2">
                                                                    <div class="inner d-flex">
                                                                       <p class="st-text-color pe-2">
                                                                           <span class="st-fw-600 st-fs-15 st-text-color">test</span>
                                                                           <span class="d-block text-black-50">01/14/2022 11:49:12 PM</span>
                                                                        </p>

                                                                        <!-- btn -->
                                                                       <div class="delete d-flex ms-auto">
                                                                          <span class="st-round-btn st-btn-xs st-btn-white d-flex align-items-center justify-content-center" title="Delete Note">
                                                                             <i class="feather-trash icon position-relative"></i>
                                                                          </span>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                            </div>

                                                            <!-- when no notes found -->
                                                            <p class="mb-3 text-black-50">No note(s) added yet</p>

                                                            <a href="/" class="d-flex align-items-center st-text-primary text-decoration-none sales-order-add-note-btn">
                                                                <i class="feather-plus icon me-1"></i>
                                                                <span>Add Note</span>
                                                            </a>

                                                            <!-- add form -->
                                                            <div class="form-container" style="display: none;">
                                                                <form>
                                                                    <!-- form item -->
                                                                    <div class="st-form mb-0">
                                                                        <label>Note for staff</label>
                                                                        <textarea type="text" class="form-control" rows="2" placeholder="Note for staff" name="note"></textarea>
                                                                    </div>

                                                                    <!-- desc -->
                                                                    <p class="desc d-flex align-items-center st-fs-13 mt-1 mb-3">
                                                                        <i class="feather-lock icon me-2"></i>
                                                                        <span>Notes are not visible to customers.</span>
                                                                    </p>

                                                                    <!-- btns -->
                                                                    <div class="btns">
                                                                        <button class="st-btn st-btn st-btn-primary me-3">
                                                                            <span>Submit</span>
                                                                        </button>
                                                                        <button class="st-btn sales-order-cancel-note-btn">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- border box -->
                                                    <div class="page-border-box mb-4">
                                                        <div class="pbb-inner position-relative">
                                                            <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Additional Information</p>
                                                            <p class="frac mb-2"><span class="st-fw-600 me-1 text-capitalize">IP Address:</span>172.68.79.152</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- right -->
                                            <div class="rt-sec">
                                                <div class="inner">
                                                    <!-- border box -->
                                                    <div class="page-border-box">
                                                        <div class="pbb-inner border-bottom">
                                                            <!-- frac -->
                                                            <div class="frac border-bottom pb-3 mb-3">
                                                                <!-- header container -->
                                                                <div class="header-container d-flex">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Customer</p>
                                                                        <p class="username st-fw-600 st-fs-15 mb-0">Myl Testing</p>
                                                                        <a href="/" class="useremail hover-underline-link st-fs-15">jasbir@myl.co.in</a>
                                                                    </div>
                                                                    <div class="in ms-auto">
                                                                        <a class="st-round-btn st-btn-primary d-flex align-items-center justify-content-center" title="User" href="/" style="pointer-events: none;">
                                                                            MT
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- frac -->
                                                            <div class="frac border-bottom pb-3 mb-3">
                                                                <!-- header container -->
                                                                <div class="header-container d-flex mb-3">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Shipping Details</p>
                                                                        <p class="mb-1 st-fs-15">Customer‘s choice: Flat Rate</p>
                                                                        <p class="mb-1 st-fs-15">Weight: 142</p>
                                                                        <a href="/" class="st-text-primary hover-underline-link st-fs-15" data-bs-toggle="modal" data-bs-target="#addTrackingNumberModal">Add tracking number</a>
                                                                    </div>
                                                                    <div class="in ms-auto">
                                                                        <a class="st-round-btn st-btn-transparent d-flex align-items-center justify-content-center" title="User" href="/" style="pointer-events: none;">
                                                                            <i class="feather-truck icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <!-- header container -->
                                                                <div class="header-container d-flex">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Shipping address</p>
                                                                        <p class="mb-1 st-fs-15">
                                                                            <span>Myl  Testing</span> <br>
                                                                            <span>123</span> <br>
                                                                            <span>San Pablo, California 12345</span> <br>
                                                                            <span>United States</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="in ms-auto">
                                                                        <a class="st-round-btn st-btn-transparent d-flex align-items-center justify-content-center" title="User" href="/" style="visibility: hidden; pointer-events: none;">
                                                                            <i class="feather-truck icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            
                                                            <!-- frac -->
                                                            <div class="frac">
                                                                <div class="header-container d-flex mb-3">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Payment details</p>
                                                                        <p class="st-fs-15 mb-1 st-fw-500">
                                                                            <span class="me-2">Visa</span>
                                                                            <span class="">
                                                                                <span class="me-1">****</span>
                                                                                <span>4242</span>
                                                                            </span>
                                                                        </p>
                                                                        <p class="st-fs-15 mb-1">
                                                                            <span class="text-capitalize">transaction ID:</span>
                                                                            <span class="ms-2">ch_3KEUgfJ2zUACMAKB1eHGh52j</span>
                                                                        </p>
                                                                        <p class="st-fs-15 mb-1"><span>Payment Status: </span>PAID</p>
                                                                        <p class="st-fs-15 mb-1"><span>Payment Date: </span>Jan 05, 2022 08:36 AM</p>
                                                                        <a target="_blank" rel="noreferrer" class="st-text-primary hover-underline-link st-fs-15" href="https://dashboard.stripe.com/payments/ch_3KEUgfJ2zUACMAKB1eHGh52j">Transaction Details</a>
                                                                    </div>
                                                                    <div class="in ms-auto">
                                                                        <a class="st-round-btn st-btn-transparent d-flex align-items-center justify-content-center" title="User" href="/" style="pointer-events: none;">
                                                                            <i class="feather-credit-card icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- frac -->
                                                            <div class="frac border-bottom pb-3 mb-3">
                                                                <div class="header-container d-flex">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Buyer Credit Verification</p>
                                                                        <p class="st-fs-15"><span class="text-capitalize">CVV:</span><span class="ms-2">pass</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- frac -->
                                                            <div class="frac">
                                                                <div class="header-container d-flex">
                                                                    <div class="in media-body">
                                                                        <p class="head st-fw-600 st-text-color2 st-fs-16 mb-2">Billing address</p>
                                                                        <p class="mb-1 st-fs-15">
                                                                            <span>Myl  Testing</span> <br>
                                                                            <span>123</span> <br>
                                                                            <span>San Pablo, California 12345</span> <br>
                                                                            <span>United States</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="in ms-auto" style="pointer-events: none; visibility: hidden;">
                                                                        <a class="st-round-btn st-btn-transparent d-flex align-items-center justify-content-center" title="User" href="/" style="pointer-events: none;">
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
            <div class="modal fade st-info-modal" id="addTrackingNumberModal" tabindex="-1" aria-labelledby="addTrackingNumberModalLabel" aria-hidden="true">
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
                                    <p class="app-modal-title">Mark order #100246 as shipped</p>
                                </div>

                                <!-- form -->
                                <div class="form add-tracking-number-form">
                                    <form>
                                        <!-- label -->
                                        <label class="st-custom-radio d-inline-flex mb-3">
                                            <input type="radio" class="d-none" name="trackingNumber" id="withoutTracking" value="1" checked="">
                                            <span class="round mt-0 position-relative" style="top: 3px;">
                                                <span class="inner"></span>
                                            </span>
                                            <span class="text media-body st-text-dark">
                                                <span class="head d-block st-fw-600 st-fs-17 mb-1 st-text-color">Shipped without tracking number</span>
                                                <span class="head d-block st-text-color2 st-fs-15">Customer will receive status update via email notification.</span>
                                            </span>
                                        </label>

                                        <!-- label -->
                                        <label class="st-custom-radio d-inline-flex mb-3">
                                            <input type="radio" class="d-none" name="trackingNumber" id="withTracking" value="0">
                                            <span class="round mt-0 position-relative" style="top: 3px;">
                                                <span class="inner"></span>
                                            </span>
                                            <span class="text media-body st-text-dark">
                                                <span class="head d-block st-fw-600 st-fs-17 mb-1 st-text-color">Shipped with tracking number (enter tracking number below)</span>
                                                <span class="head d-block st-text-color2 st-fs-15">Customer will receive status update and tracking number via email notification.</span>
                                            </span>
                                        </label>

                                        <!-- hidden form items -->
                                        <div class="tracking-input-container" style="padding-left: 32px; display: none;">
                                            <div class="st-form form-sm mb-0 has-msg msg-error ">
                                                <label>
                                                    Tracking Number
                                                    <span class="required ms-1 st-fs-12">(required)</span>
                                                </label>
                                                <input type="text" class="form-control" placeholder="Tracking Number" name="trackingNumber" value="">
                                            </div>
                                        </div>

                                        <!-- btns -->
                                        <div class="btns mt-3 mt-lg-4" style="width: 200px;">
                                            <button type="submit" class="st-btn st-btn-primary text-capitalize w-100">Mark as shipped</button>
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