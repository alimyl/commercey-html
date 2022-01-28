<div class="main-content" data-id="#variations_tab" style="display: none;">
    <nav class="px-2">
        <div class="st-tabs-bootstrap nav nav-tabs" role="tablist">
            <!-- nav item -->
            <button class="nav-link nav-item active" id="nav-options-tab" data-bs-toggle="tab"
                data-bs-target="#nav-options" type="button" role="tab" aria-controls="nav-options" aria-selected="true">
                Options
            </button>

            <!-- nav item -->
            <button class="nav-link nav-item" id="nav-variations-tab" data-bs-toggle="tab"
                data-bs-target="#nav-variations" type="button" role="tab" aria-controls="nav-variations"
                aria-selected="true">
                Variations
            </button>
        </div>
    </nav>
    <div class="tab-content">
        <!-- tab -->
        <div class="tab-pane fade show active" id="nav-options" role="tabpanel" aria-labelledby="nav-options-tab">
            <!-- border box -->
            <div class="page-border-box2">
                <div class="pbb2-inner variation-options-view">
                    <!-- btns -->
                    <div class="btns mb-3 d-flex flex-wrap">
                        <a href="http://localhost/commercey-html/products/variations.php"
                            class="st-btn st-btn-white-gray-outlined st-btn-sm d-flex align-items-center text-capitalize">
                            <span
                                class="round-feather-icon-outlined d-inline-flex align-items-center justify-content-center me-2">
                                <i class="feather-plus icon cursor-pointer"></i>
                            </span>
                            <span>new option</span>
                        </a>
                    </div>

                    <!-- frac -->
                    <div class="frac d-flex">
                        <!-- left links -->
                        <div class="vov-links-container">
                            <!-- link data goes here -->
                        </div>

                        <!-- right contet -->
                        <div class="content-sec media-body">
                            <!-- content goes here -->
                        </div>
                    </div>

                    <!-- frac -->
                    <div class="frac">
                        <p class="box-heading st-fs-15 st-fw-600 st-text-color mb-2">Try Product Variations</p>
                        <p class="st-fs-13 st-text-color2 mb-3">Looking to add stock control, images, SKUs and prices to
                            product options? Product variations let you specify these details for each combination of
                            products options manually.</p>
                        <button class="st-btn st-btn-primary st-btn-sm text-capitalize st-fw-400 st-fs-13">Manage
                            Product Variations</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- tab -->
        <div class="tab-pane fade" id="nav-variations" role="tabpanel" aria-labelledby="nav-variations-tab">
            <div class="page-border-box2">
                <div class="pbb2-inner">
                    <!-- btns -->
                    <div class="btns d-flex align-items-center mb-3">
                        <p class="st-fw-600 st-text-color">Variants<span class="st-text-primary"> (0 combinations)</span></p>
                    </div>

                    <div class="products-variants-table">
                        <div class="pvt-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="50">Enable</th>
                                        <th width="60">Image</th>
                                        <th>Variant</th>
                                        <th width="120">SKU</th>
                                        <th width="80">Weight</th>
                                        <th width="80">Cost</th>
                                        <th width="80">Price</th>
                                        <th width="80">Stock</th>
                                        <th width="45"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>

                        <!-- when no data found : border box -->
                        <div class="page-border-box2 d-none">
                            <div class="pbb2-inner text-center bg-white">
                                <p>no variant has been added yet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modals -->
<div class="modal fade st-info-modal" id="editVariationDetailsModal" tabindex="-1"
    aria-labelledby="editVariationDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body st-modal">
                <div class="app-modal-content modal_edit-variation-number position-relative pt-0">
                    <!-- close btn -->
                    <button
                        class="close-icon position-absolute st-round-btn st-btn-sm st-btn-white d-flex align-items-center justify-content-center"
                        data-bs-dismiss="modal" aria-label="Close" style="top: 0px; right: 0px;">
                        <i class="feather-x icon position-relative"></i>
                    </button>

                    <!-- modal title -->
                    <div class="app-modal-title-wrapper">
                        <p class="app-modal-title">Edit Details</p>
                    </div>

                    <div class="form">
                        <form action="">
                            <!-- form item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                                <label style="width: 100px;">Length</label>
                                <div class="media-body st-form-input-container pe-0">
                                    <input type="text" class="form-control" placeholder="Length" name="length">
                                </div>
                            </div>

                            <!-- form item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                                <label style="width: 100px;">Width</label>
                                <div class="media-body st-form-input-container pe-0">
                                    <input type="text" class="form-control" placeholder="Width" name="width">
                                </div>
                            </div>

                            <!-- form item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                                <label style="width: 100px;">Height</label>
                                <div class="media-body st-form-input-container pe-0">
                                    <input type="text" class="form-control" placeholder="Height" name="height">
                                </div>
                            </div>

                            <!-- form item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                                <label style="width: 100px;">UPC</label>
                                <div class="media-body st-form-input-container pe-0">
                                    <input type="text" class="form-control" placeholder="UPC" name="upc">
                                </div>
                            </div>

                            <!-- form item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                                <label style="width: 100px;">Description</label>
                                <div class="media-body st-form-input-container pe-0">
                                    <textarea rows="5" class="form-control" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="btns d-flex justify-content-end pt-3">
                                <button type="button" class="st-btn st-btn-primary no-min-width">Close</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>